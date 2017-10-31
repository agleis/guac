@extends('layouts.app')

@section('content')
  <div class="content featured container-fluid">
    <h2 class="content-section">Stories</h2>
    <div class="content-section">
      <select id="category-select">
        <option value="0" selected>All</option>
        @foreach($categories as $category)
          <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
      </select>
      <select id="region-select">
        <option value="0" selected>Filter By Region</option>
        @foreach($regions as $region)
          <option value="{{$region->id}}">{{$region->name}}</option>
        @endforeach
      </select>
    </div>
    {{--  First row  --}}
    <div class="row content-row">
      @foreach($articles as $article)
        {{--  2-row  --}}
        @if($loop->index % 5 < 2)
          <div class="col-md-6 featured-col r-{{$article->region->id}} c-{{$article->category->id}}">
              <div class="featured-article featured-2">
                <a href="{{route('article', ['name' => $article->name])}}">
                  <div class="image" style="background-image: url('{{asset($article->image)}}')"></div>
                  <p class="issue">Issue 1 <span class="fa fa-circle blue circle"></span> Arts and Culture</p>
                  <h3>{{$article->title}}</h3>
                  <h5>By {{$article->user->name}}</h5>
                </a>
              </div>
            </div>
        {{--  3-row  --}}
        @else
          <div class="col-md-4 featured-col r-{{$article->region->id}} c-{{$article->category->id}}">
            <div class="featured-article featured-3">
              <a href="{{route('article', ['name' => $article->name])}}">
                <div class="image" style="background-image: url('{{asset($article->image)}}')"></div>
                <p class="issue">Issue 1 <span class="fa fa-circle blue circle"></span> Arts and Culture</p>
                <h3>{{$article->title}}</h3>
                <h5>By {{$article->user->name}}</h5>
              </a>
            </div>
          </div>
        @endif
      @endforeach
    </div>
  </div>
@endsection

@push('scripts')
    <script>
      $("#category-select").change(function() {
        var cat_id = this.value;
        if(cat_id == 0) {
          $(".featured-col").show();
        }
        else {
          $(".featured-col").hide();
          $(".c-"+cat_id).show();
        }
      });
      $("#region-select").change(function() {
        var region_id = this.value;
        if(region_id == 0) {
          $(".featured-col").show();
        }
        else {
          $(".featured-col").hide();
          $(".r-"+region_id).show();
        }
      })
    </script>
@endpush