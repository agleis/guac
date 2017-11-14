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
      <div class="col-md-10 col-sm-12 col-xs-12">
        <div class="container-fluid no-gutter">
          <div class="about-image-wrap"></div>
          <!-- <img src="{{asset('images/guac_walk.png')}}" class="about-image" /> -->
          <h2 class="section">About Guac</h2>
          <div class="col-xs-12 about-small">
            <ul class="row content-row row-5 ingredients-wrap">
              <li class="col ingredients">
                <h3 class="cilantro">Cilantro</h3>
                <h4 class="meaning">The Connector</h4>
                <p class="description">The quick connector that will help you travel the world more efficiently</p>
              </li>
              <li class="col ingredients">
                <h3 class="jalapeno">Jalapeno</h3>
                <h4 class="meaning">The Kick</h4>
                <p class="description">The spicy kick that adds an extra flavor of originality and cultural immersion to each story</p>
              </li>
              <li class="col ingredients">
                <h3 class="tomato">Tomato</h3>
                <h4 class="meaning">The Facts</h4>
                <p class="description">The detailed information that will guide you on your journey</p>
              </li>
              <li class="col ingredients">
                <h3 class="onion">Onion</h3>
                <h4 class="meaning">The Layers</h4>
                <p class="description">The various layers of stories written by individuals of all cultures and backgrounds</p>
              </li>
              <li class="col ingredients">
                <h3 class="avocado">Avocado</h3>
                <h4 class="meaning">The Base</h4>
                <p class="description">A travel magazine written for Cornellians by Cornellians</p>
              </li>
            </ul>
          </div>
          <div class="row content-row">
            <div class="col-md-12">
              <p class="zeyu-quote">"Travel, of course, is not just for international students. We live in a globalized age. Every individual is strongly connected to their fellow inhabitants of this planet, as space and time seem to converge at an alarming rate. But oftentimes, this notion of interconnectedness is lost due to political, social or economic externalities, that instead generate a disconnect between cultures."</p><p class="zeyu-quote-right">&mdash; Zeyu Hu, Editor-In-Chief</p>
            </div>
          </div>
    
          <h2 class="section">Our Mission</h2>
          <div class="row content-row">
            <div class="col-md-12">
              <p>Delivering the diverse knowledge, experiences, and stories of different cultures to the palms of our readers.</p>
            </div>
          </div>
          <h2 class="section">Our Vision</h2>
          <div class="row content-row">
            <div class="col-md-12">
              <p>To spread love, appreciation, and meaningful exchanges across people of all cultures &amp; backgrounds.</p>
            </div>
          </div>
          <h2 class="section">Our Team</h2>
          <div class="row content-row" id="team">
            <div class="col-md-4 col-sm-6 col-xs-6">
              <h3 class="section">Editorial</h3>
          
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Zeyu.jpg')}}')"></div>
                  <p class="member-name">Zeyu Hu</p>
                  <p>Editor-In-Chief</p>
                  <p class="small-text">Beijing, China / Bangkok, Thailand</p>
                </div>
                <p>Zeyu Hu</p>
              </div>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Fanny.jpg')}}')"></div>
                  <p class="member-name">Fanny Chen</p>
                  <p>Managing Editor</p>
                  <p>Toronto, Canada</p>
                </div>
                <p>Fanny Chen</p>
              </div>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Mind.jpg')}}')"></div>
                  <p class="member-name">Mind Apivessa</p>
                  <p>Creative Director</p>
                  <p>Bangkok, Thailand</p>
                </div>
                <p>Mind Apivessa</p>
              </div>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Ami.jpg')}}')"></div>
                  <p class="member-name">Ami Kurosaki</p>
                  <p>Creative Director</p>
                  <p>Tokyo, Japan</p>
                </div>
                <p>Ami Kurosaki</p>
              </div>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Cathy.jpg')}}')"></div>
                  <p class="member-name">Cathy Zhang</p>
                  <p>Marketing Director</p>
                  <p class="small-text">Nanjing, China / Vancouver, Canada</p>
                </div>
                <p>Cathy Zhang</p>
              </div>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Eric.jpg')}}')"></div>
                  <p class="member-name">Eric Lee</p>
                  <p>Head Illustrator</p>
                  <p>Daegu, South Korea</p>
                </div>
                <p>Eric Lee</p>
              </div>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Adam.jpg')}}')"></div>
                  <p class="member-name">Adam Gleisner</p>
                  <p>Web Director</p>
                  <p>Chicago, USA</p>
                </div>
                <p>Adam Gleisner</p>
              </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-6">
              <h3 class="section">Creative</h3>
        
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Chelsea.jpg')}}')"></div>
                  <p class="member-name">Chelsea Chan</p>
                  <p>Web Developer</p>
                  <p>Kuala Lumpur, Malaysia</p>
                </div>
                <p>Chelsea Chan</p>
              </div>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Audrey.jpg')}}')"></div>
                  <p class="member-name">Audrey Tirtohadiguno</p>
                  <p>Print Designer</p>
                  <p>Jakarta, Indonesia</p>
                </div>
                <p>Audrey Tirtohadiguno</p>
              </div>
              <!-- <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Yanis.jpg')}}')"></div>
                  <p class="member-name">Yanis Park</p>
                  <p>Print Designer</p>
                  <p>Seoul, South Korea</p>
                </div>
                <p>Yanis Park</p>
              </div> -->
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Ilayda.jpg')}}')"></div>
                  <p class="member-name">Ilayda Samilgil</p>
                  <p>Marketing Analyst</p>
                  <p>Istanbul, Turkey</p>
                </div>
                <p>Ilayda Samilgil</p>
              </div>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/DJ.jpg')}}')"></div>
                  <p class="member-name">Duoer Jia</p>
                  <p>Marketing Analyst</p>
                  <p>China</p>
                </div>
                <p>Duoer Jia</p>
              </div>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/avocado.png')}}')"></div>
                  <p class="member-name">Akanksha Jain</p>
                  <p>Marketing Analyst</p>
                  <p>Singapore</p>
                </div>
                <p>Akanksha Jain</p>
              </div>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Xiaoxiang.jpg')}}')"></div>
                  <p class="member-name">Xiaoxiang Ma</p>
                  <p>Marketing Analyst</p>
                  <p>Beijing, China</p>
                </div>
                <p>Xiaoxiang Ma</p>
              </div>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/avocado.png')}}')"></div>
                  <p class="member-name">Tony Li</p>
                  <p>Creative Consultant</p>
                  <p>Vancouver, Canada</p>
                </div>
                <p>Tony Li</p>
              </div>
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12">
              <h3 class="section">Content</h3>
              
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Chiara.jpg')}}')"></div>
                  <p class="member-name">Chiara Benitez</p>
                  <p>Editor</p>
                  <p>Manila, Philippines</p>
                </div>
                <p>Chiara Benitez</p>
              </div>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Lauren.jpg')}}')"></div>
                  <p class="member-name">Lauren McBrearty</p>
                  <p>Editor</p>
                  <p>New York, USA</p>
                </div>
                <p>Lauren McBrearty</p>
              </div>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Brandon.jpg')}}')"></div>
                  <p class="member-name">Brandon Smith</p>
                  <p>Editor</p>
                  <p>New York, USA</p>
                </div>
                <p>Brandon Smith</p>
              </div>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Ching.jpg')}}')"></div>
                  <p class="member-name">Ching Pang</p>
                  <p>Writer</p>
                  <p>Hong Kong, China</p>
                </div>
                <p>Ching Pang</p>
              </div>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Katie.jpg')}}')"></div>
                  <p class="member-name">Katie Lee</p>
                  <p>Writer</p>
                  <p>Singapore / Taiwan</p>
                </div>
                <p>Katie Lee</p>
              </div>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/avocado.png')}}')"></div>
                  <p class="member-name">Christine Relander</p>
                  <p>Writer</p>
                  <p>Espoo, Finland</p>
                </div>
                <p>Christine Relander</p>
              </div>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Madison.jpg')}}')"></div>
                  <p class="member-name">Madison Holden</p>
                  <p>Writer</p>
                  <p>Florida, USA</p>
                </div>
                <p>Madison Holden</p>
              </div>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Pia.jpg')}}')"></div>
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
