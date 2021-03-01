<h3>{{ $partner->name }}</h3>
<p ><span class="text-red"><b>websites:</b> </span> {!!  $partner->websites()  !!}</p>
<hr>
<p class="abt-text-mini">
    {!! $partner->details !!}
</p>

<img src="{{ $partner->brand() }}" alt="logo" class="partner-img">