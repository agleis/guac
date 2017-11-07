@extends('layouts.app')

@push('styles')
    <link href="{{ asset('css/about.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{asset('js/about-hover.js')}}"></script>
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
              <h4 class="meaning">The Connector</h4>
            </li>
            <li class="col ingredients">
              <h3 class="jalapeno">Jalapeno</h3>
              <h4 class="meaning">The Kick</h4>
            </li>
            <li class="col ingredients">
              <h3 class="tomato">Tomato</h3>
              <h4 class="meaning">The Facts</h4>
            </li>
            <li class="col ingredients">
              <h3 class="onion">Onion</h3>
              <h4 class="meaning">The Layers</h4>
            </li>
            <li class="col ingredients">
              <h3 class="avocado">Avocado</h3>
              <h4 class="meaning">The Base</h4>
            </li>
          </ul>
    
          <h2 class="section">Our Mission</h2>
          <div class="row content-row">
            <div class="col-md-12">
              <p>Delivering the diverse knowledge, experiences, and stories of different cultures to the palms of our readers.</p>
            </div>
          </div>
          <h2 class="section">Our Vision</h2>
          <div class="row content-row">
            <div class="col-md-12">
              <p>To SPREAD love, appreciation, and meaningful exchanges across people of all cultures &amp; backgrounds.</p>
            </div>
          </div>
          <h2 class="section">Our Team</h2>
          <div class="row content-row">
            <div class="col-md-4">
              <h3 class="section">Editorial</h3>
              
          
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <img class="member-photo" src="#">
                  <p class="member-name">Zeyu Hu</p>
                  <p>Editor-In-Chief</p>
                  <p class="small-text">Beijing, China / Bangkok, Thailand</p>
                </div>
                <p>Zeyu Hu</p>
              </div>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <img class="member-photo" src="#">
                  <p class="member-name">Fanny Chen</p>
                  <p>Managing Editor</p>
                  <p>Toronto, Canada</p>
                </div>
                <p>Fanny Chen</p>
              </div>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <img class="member-photo" src="#">
                  <p class="member-name">Mind Apivessa</p>
                  <p>Creative Director</p>
                  <p>Bangkok, Thailand</p>
                </div>
                <p>Mind Apivessa</p>
              </div>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <img class="member-photo" src="#">
                  <p class="member-name">Ami Kurosaki</p>
                  <p>Creative Director</p>
                  <p>Tokyo, Japan</p>
                </div>
                <p>Ami Kurosaki</p>
              </div>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <img class="member-photo" src="#">
                  <p class="member-name">Cathy Zhang</p>
                  <p>Marketing Director</p>
                  <p class="small-text">Nanjing, China / Vancouver, Canada</p>
                </div>
                <p>Cathy Zhang</p>
              </div>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <img class="member-photo" src="#">
                  <p class="member-name">Eric Lee</p>
                  <p>Head Illustrator</p>
                  <p>Daegu, South Korea</p>
                </div>
                <p>Eric Lee</p>
              </div>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <img class="member-photo" src="#">
                  <p class="member-name">Adam Gleisner</p>
                  <p>Web Director</p>
                  <p>Chicago, USA</p>
                </div>
                <p>Adam Gleisner</p>
              </div>
            </div>

            <div class="col-md-4">
              <h3 class="section">Creative</h3>
              

              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <img class="member-photo" src="#">
                  <p class="member-name">Chelsea Chan</p>
                  <p>Web Developer</p>
                  <p>Kuala Lumpur, Malaysia</p>
                </div>
                <p>Chelsea Chan</p>
              </div>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <img class="member-photo" src="#">
                  <p class="member-name">Audrey Tirtohadiguno</p>
                  <p>Print Designer</p>
                  <p>Jakarta, Indonesia</p>
                </div>
                <p>Audrey Tirtohadiguno</p>
              </div>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <img class="member-photo" src="#">
                  <p class="member-name">Yanis Park</p>
                  <p>Print Designer</p>
                  <p>Seoul, South Korea</p>
                </div>
                <p>Yanis Park</p>
              </div>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <img class="member-photo" src="#">
                  <p class="member-name">Ilayda Samilgil</p>
                  <p>Marketing Analyst</p>
                  <p>Istanbul, Turkey</p>
                </div>
                <p>Ilayda Samilgil</p>
              </div>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <img class="member-photo" src="#">
                  <p class="member-name">Duoer Jia</p>
                  <p>Marketing Analyst</p>
                  <p>China</p>
                </div>
                <p>Duoer Jia</p>
              </div>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <img class="member-photo" src="#">
                  <p class="member-name">Akanksha Jain</p>
                  <p>Marketing Analyst</p>
                  <p>Singapore</p>
                </div>
                <p>Akanksha Jain</p>
              </div>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <img class="member-photo" src="#">
                  <p class="member-name">Xiaoxiang Ma</p>
                  <p>Marketing Analyst</p>
                  <p>Beijing, China</p>
                </div>
                <p>Xiaoxiang Ma</p>
              </div>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <img class="member-photo" src="#">
                  <p class="member-name">Tony Li</p>
                  <p>Creative Consultant</p>
                  <p>Vancouver, Canada</p>
                </div>
                <p>Tony Li</p>
              </div>
            </div>

            <div class="col-md-4">
              <h3 class="section">Content</h3>
              
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <img class="member-photo" src="#">
                  <p class="member-name">Chiara Benitez</p>
                  <p>Editor</p>
                  <p>Manila, Philippines</p>
                </div>
                <p>Chiara Benitez</p>
              </div>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <img class="member-photo" src="#">
                  <p class="member-name">Lauren McBrearty</p>
                  <p>Editor</p>
                  <p>New York, USA</p>
                </div>
                <p>Lauren McBrearty</p>
              </div>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <img class="member-photo" src="#">
                  <p class="member-name">Brandon Smith</p>
                  <p>Editor</p>
                  <p>New York, USA</p>
                </div>
                <p>Brandon Smith</p>
              </div>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <img class="member-photo" src="#">
                  <p class="member-name">Ching Pang</p>
                  <p>Writer</p>
                  <p>Hong Kong, China</p>
                </div>
                <p>Ching Pang</p>
              </div>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <img class="member-photo" src="#">
                  <p class="member-name">Katie Lee</p>
                  <p>Writer</p>
                  <p>Singapore / Taiwan</p>
                </div>
                <p>Katie Lee</p>
              </div>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <img class="member-photo" src="#">
                  <p class="member-name">Christine Relander</p>
                  <p>Writer</p>
                  <p>Espoo, Finland</p>
                </div>
                <p>Christine Relander</p>
              </div>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <img class="member-photo" src="#">
                  <p class="member-name">Madison Holden</p>
                  <p>Writer</p>
                  <p>Florida, USA</p>
                </div>
                <p>Madison Holden</p>
              </div>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <img class="member-photo" src="#">
                  <p class="member-name">Pia Bocanegra</p>
                  <p>Writer</p>
                  <p>Manila, Philipines</p>
                </div>
                <p>Pia Bocanegra</p>
              </div> 
            </div>

          </div>
        </div>
      </div>

      <div class="col-md-1">
        &nbsp;
      </div>
    </div>
  </div>
  <div id="about-space"></div>
@endsection
