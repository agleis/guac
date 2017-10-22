@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm-1">
        &nbsp;
      </div>
      <div class="col-sm-10">
        <form method="post" action="{{route('edit_author_post', ['id' => $author->id])}}" id="content-form" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" id="name" class="form-control input-lg" value="{{$author->name}}"/>
          </div>
          <div class="form-group">
            <label for="bio">Bio</label>
            <input type="text" name="bio" id="bio" class="form-control" value="{{$author->bio}}"/>
          </div>
          <div class="form-group">
              <image-upload image-src="{{asset($author->image)}}" image="{{asset($author->image)}}"></image-upload>
          </div>
          <div class="form-group">
            <select name="countries[]" id="countries" class="chosen-select" multiple>
              @foreach($countries as $country)
                <option 
                  value="{{$country->id}}"
                  @if(in_array($country->id, $ids)) selected @endif>
                    <span class="flag-icon flag-icon-{{strtolower($country->code)}}"></span>{{$country->name}}
                  </option>
              @endforeach
            </select>
          </div>
          <input type="submit" value="submit" />
        </form>
      </div>
      <div class="col-sm-1">
        &nbsp;
      </div>
    </div>
  </div>
@endsection