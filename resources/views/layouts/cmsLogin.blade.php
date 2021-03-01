<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <!-- Add Material font (Roboto) and Material icon as needed -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i|Roboto+Mono:300,400,700|Roboto+Slab:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">

    <!-- Add Material CSS, replace Bootstrap CSS -->
    <link href="{{ asset('css/material.min.css') }}" rel="stylesheet" type="text/css" media="all">
    <style type="text/css">
        body{
            background-image: url("../img/leather.png");
        }
        a{
            color: #6C5E55 !important;
        }
        a:hover{
            text-decoration: none !important;
            color: #493a31 !important;
        }
        .custom-select:focus, .form-control-file:focus, .form-control:focus {
            border-color: #000;
            box-shadow: inset 0 -2px 0 -1px #000;
        }
    </style>
</head>
<body>
@yield('content')

</body>
</html>