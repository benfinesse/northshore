<?php

namespace App\Http\Controllers\Dev;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class DevController extends Controller
{
    public function migration(Request $request){
        //run-migration?sponsor=super_admin&key=migrate&action=refresh
        if($request->input('sponsor')==='super_admin'){

            $config = App::make('config');

            $artisan = $request->input('key');
            $action = $request->input('action');

            // Will contain the array of connections that appear in our database config file.
            $connections = $config->get('database.connections');

            // This line pulls out the default connection by key (by default it's `mysql`)
            $defaultConnection = $connections[$config->get('database.default')];

            // Now we simply copy the default connection information to our new connection.
            $newConnection = $defaultConnection;
            // Override the database name.
            $dbname = env('DB_DATABASE', '');
            $newConnection['database'] = $dbname;

            // This will add our new connection to the run-time configuration for the duration of the request.
            App::make('config')->set('database.connections.'.$dbname, $newConnection); // removed $newConnection


            Artisan::call("$artisan:$action",[
                '--path' => 'database/migrations',
                '--force' => true,
                '--database' => $newConnection['database']
            ]);

            return response()->json([
                'message'=>'Database Rebuilt ',
                'status'=>true
            ]);

        }else{
            return response()->json(['response'=>'invalid request']);
        }
    }

    public function seed(Request $request){
        if($request->input('sponsor')==='super_admin'){
            try{
                $data = [
                    'who'=> 4,
                    'unid'=> uniqid('Admin',false),
                    'name'=> "Super Admin",
                    'username'=> 'admin',
                    'email'=> "admin@squaredge.com",
                    'phone'=> "08000000000",
                    'address'=> "abuja",
                    'password'=> bcrypt('password'),
                ];

                DB::beginTransaction();
                User::create($data);
                DB::commit();

                return ["message"=>"user created"];
            }catch (\Exception $e){
                return ["message"=>$e->getMessage()];
            }



        }
    }
}
