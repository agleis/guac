@extends('layouts.app')

@push('styles')
    <link href="{{ asset('css/about.css') }}" rel="stylesheet">
@endpush

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-1">
        &nbsp;
      </div>
      <div class="col-md-10">
        <div class="container-fluid">
          <img src="{{asset('images/bariloche1.jpg')}}" class="about-image" />
          <h2 class="section">Guac</h2>
          <ul class="row content-row row-5">
            <li class="col ingredients">
              <h3 class="cilantro">Cilantro</h3>
              <h4 class="meaning">Meaning</h4>
            </li>
            <li class="col ingredients">
              <h3 class="jalapeno">Jalapeno</h3>
              <h4 class="meaning">Meaning</h4>
            </li>
            <li class="col ingredients">
              <h3 class="tomato">Tomato</h3>
              <h4 class="meaning">Meaning</h4>
            </li>
            <li class="col ingredients">
              <h3 class="onion">Onion</h3>
              <h4 class="meaning">Meaning</h4>
            </li>
            <li class="col ingredients">
              <h3 class="avocado">Avocado</h3>
              <h4 class="meaning">Meaning</h4>
            </li>
          </ul>
          <div class="row content-row">
            <div class="col-md-12">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
              when an unknown printer took a galley of type and scrambled it to make a type 
              specimen book. It has survived not only five centuries, but also the leap 
              into electronic typesetting, remaining essentially unchanged.</p>
            </div>
          </div>
          <h2 class="section">Our Mission</h2>
          <div class="row content-row">
            <div class="col-md-12">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
              when an unknown printer took a galley of type and scrambled it to make a type 
              specimen book. It has survived not only five centuries, but also the leap 
              into electronic typesetting, remaining essentially unchanged.</p>
            </div>
          </div>
          <h2 class="section">Our Vision</h2>
          <div class="row content-row">
            <div class="col-md-12">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
              when an unknown printer took a galley of type and scrambled it to make a type 
              specimen book. It has survived not only five centuries, but also the leap 
              into electronic typesetting, remaining essentially unchanged.</p>
            </div>
          </div>
          <h2 class="section">Our Team</h2>
          {{--  <script type="text/javascript">
            var width = 900;
            var height = 600;

            var projection = d3.geo.mercator();
            
            var svg = d3.select("body").append("svg")
                .attr("width", width)
                .attr("height", height);
            var path = d3.geo.path()
                .projection(projection);
            var g = svg.append("g");
            
            d3.json("{{asset('js/world110.json')}}", function(error, topology) {
                g.selectAll("path")
                  .data(topojson.object(topology, topology.objects.countries)
                      .geometries)
                .enter()
                  .append("path")
                  .attr("d", path)
            });
          </script>  --}}
          <div class="row content-row">
            <div class="col-md-12">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
              when an unknown printer took a galley of type and scrambled it to make a type 
              specimen book. It has survived not only five centuries, but also the leap 
              into electronic typesetting, remaining essentially unchanged.</p>
            </div>
          </div>
          <div class="row content-row">
            <div class="col-md-4">
              <h3 class="section">Editorial Board</h3>
              <br />
              <p>Zeyu Hu</p>
              <p>Fanny Chen</p>
              <p>Tony Li</p>
              <p>Mind Apivessa</p>
              <p>Adam Gleisner</p>
              <p>Ami Kurosaki</p>
              <p>Cathy Zhang</p>
            </div>
            <div class="col-md-4">
              <h3 class="section">Content</h3>
              <br />
              <p>Zeyu Hu</p>
              <p>Fanny Chen</p>
              <p>Tony Li</p>
              <p>Mind Apivessa</p>
              <p>Adam Gleisner</p>
              <p>Ami Kurosaki</p>
              <p>Cathy Zhang</p>
            </div>
            <div class="col-md-4">
              <h3 class="section">Creative</h3>
              <br />
              <p>Eric Lee</p>
              <p>Ami Kurosaki</p>
              <p>Tony Li</p>
              <p>Yanis Park</p>
              <p>Audrey Tirtohadiguno</p>
              <p>Mind Apivessa</p>
              <p>Cathy Zhang</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-1">
        &nbsp;
      </div>
    </div>
  </div>
  
@endsection
