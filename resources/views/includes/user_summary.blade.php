<div class="row">
    <div class="col-md-3 flex-centered">
        <img src="{{asset($user->image)}}" height="120" width="120" />
    </div>
    <div class="col-md-9">
        <h1>{{$user->name}}</h1>
    <p>
    @foreach($user->countries as $country)
        <span class="flag-icon flag-icon-{{strtolower($country->code)}}"></span>
        {{$country->name}}
        @unless($loop->last)
            &nbsp;-&nbsp;
        @endunless
    @endforeach
    </p>
    </div>
</div>