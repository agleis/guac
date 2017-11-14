@extends('layouts.app')

@section('content')
  <div class="content featured container-fluid">
    <h2 class="content-section">Stories</h2>
    <div class="content-section">
<!--       <select id="category-select">
        <option value="0" selected>All</option>
        @foreach($categories as $category)
          <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
      </select> -->
      <select id="region-select">
        <option value="0" selected><h2>FILTER BY REGION</h2></option>
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
          <div class="col-md-6 col-sm-12 col-xs-12 featured-col r-{{$article->region->id}} c-{{$article->category->id}}">
            @include("includes/summary2")
          </div>
        {{--  3-row  --}}
        @else
          <div class="col-md-4 col-sm-12 col-xs-12 featured-col r-{{$article->region->id}} c-{{$article->category->id}}">
            @include("includes/summary3")
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