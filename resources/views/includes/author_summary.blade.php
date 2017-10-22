<div class="row">
    <div class="col-md-3 flex-centered">
        <img src="{{asset($author->image)}}" height="120" width="120" />
    </div>
    <div class="col-md-9">
        <h1>{{$author->name}}</h1>
    <p>
    @foreach($author->countries as $country)
        <span class="flag-icon flag-icon-{{strtolower($country->code)}}"></span>
        {{$country->name}}
        @unless($loop->last)
            &nbsp;-&nbsp;
        @endunless
    @endforeach
    </p>
    </div>
</div>