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
        <!--<img src="{{asset('images/guac_walk.png')}}" class="about-image" /> -->
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
            <p class="zeyu-quote">"Travel, of course, is not just for international students. We live in a globalized age. Every individual is strongly connected to their fellow inhabitants of this planet, as space and time seem to converge at an alarming rate. But oftentimes, this notion of interconnectedness is lost due to political, social or economic externalities, that instead generate a disconnect between cultures.</p>

            <p class="zeyu-quote">Guac aims to abolish this sense of disconnect.</p>

            <p class="zeyu-quote">Through this magazine, we aspire to bring the diverse beauty of our world to the palms of our readers. We aim to connect and inspire people to go out and immerse themselves in different cultures and places, truly embracing what this wonderful world has to offer."</p>

            <p class="zeyu-quote-right">&mdash; Zeyu Hu, Editor-In-Chief</p>
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
        <img src="{{asset('public/images/Selected/guacshoot-2.jpg')}}" height="600" width="100%"/>
        <div class="row content-row" id="team">
          <!--<div class="col-md-4 col-sm-6 col-xs-6"> -->
            <h3 class="section">Editorial</h3>
            <p class="zeyu-quote">We direct the operations of each team, ensuring that each one is headed in the direction we believe is best for Guac. We represent and promote the core ideas of Guac, managing its overall growth and development as a travel magazine!</p>
            <br> 
          <table>  
          <tr>
            <td>
            <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
              <div class="hoverbox">
                <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Zeyu_Hu.jpg')}}')"></div>
                <p class="member-name">Zeyu Hu</p>
                <p>Editor-In-Chief</p>
                <p class="small-text">Beijing, China / Bangkok, Thailand</p>
              </div>
              <p>Zeyu Hu</p>
            </div>
            </td>
            <td>
            <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
              <div class="hoverbox">
                <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Fanny.jpg')}}')"></div>
                <p class="member-name">Fanny Chen</p>
                <p>Business Editor</p>
                <p>China, Canada</p>
              </div>
              <p>Fanny Chen</p>
            </div>
            </td>
              <!-- div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Mind.jpg')}}')"></div>
                  <p class="member-name">Mind Apivessa</p>
                  <p>Creative Director</p>
                  <p>Bangkok, Thailand</p>
                </div>
                <p>Mind Apivessa</p>
              </div> -->
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Ami.jpg')}}')"></div>
                  <p class="member-name">Ami Kurosaki</p>
                  <p>Creative Director</p>
                  <p>Tokyo, Japan</p>
                </div>
                <p>Ami Kurosaki</p>
              </div>
              </td>
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Cathy.jpg')}}')"></div>
                  <p class="member-name">Cathy Zhang</p>
                  <p>Marketing Director</p>
                  <p class="small-text">Nanjing, China / Vancouver, Canada</p>
                </div>
                <p>Cathy Zhang</p>
              </div> 
              </td>
             </tr> 
             <tr>
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Eric.jpg')}}')"></div>
                  <p class="member-name">Eric Lee</p>
                  <p>Head Illustrator</p>
                  <p>Daegu, South Korea</p>
                </div>
                <p>Eric Lee</p>
              </div>
              </td>
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Adam_Gleisner.jpg')}}')"></div>
                  <p class="member-name">Adam Gleisner</p>
                  <p>Web Director</p>
                  <p>Chicago, USA</p>
                </div>
                <p>Adam Gleisner</p>
              </div>
              </td>
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Tony_Li.jpg')}}')"></div>
                  <p class="member-name">Tony Li</p>
                  <p>Creative Director (Web)</p>
                  <p>China, Canada</p>
                </div>
                <p>Tony Li</p>
              </div>
              </td>
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/avocado.png')}}')"></div>
                  <p class="member-name">Akhil Mithal</p>
                  <p>Finance Director</p>
                  <p>India, USA</p>
                </div>
                <p>Akhil Mithal</p>
              </div>
              </td>
              </tr>
              <tr>
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Ethan_Kahm.jpg')}}')"></div>
                  <p class="member-name">Ethan Kahm</p>
                  <p>Internal Operations Director</p>
                  <p>Hong Kong</p>
                </div>
                <p>Ethan Kahm</p>
              </div>
              </td>
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Yi_Hsin_Wei.jpg')}}')"></div>
                  <p class="member-name">Yi Hsin Wei</p>
                  <p>Managing Editor</p>
                  <p>Taiwan, Hong Kong</p>
                </div>
                <p>Yi Hsin Wei</p>
              </div> 
              </td>
              </tr>
            </table>    
            <br>
            <!--<div class="col-md-4 col-sm-6 col-xs-6"> -->
              <h3 class="section">Design</h3>
              <p class="zeyu-quote">We give Guac characters. The Design team is responsible for Print and Web Design. We work with the Content team to curate the reader's' experiences and the Marketing team to produce graphic materials. We ensure the consistent look and feel of Guac brand through setting the brand direction and crafting pixel-perfect output.</p>
              <br>
              <table>
              <tr>
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Lynette_Huang.jpg')}}')"></div>
                  <p class="member-name">Lynette Huang</p>
                  <p>Designer</p>
                  <p>USA</p>
                </div>
                <p>Lynette Huang</p>
              </div>
              </td>
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/avocado.png')}}')"></div>
                  <p class="member-name">Daisy Dai</p>
                  <p>Designer</p>
                  <p>Canada, China</p>
                </div>
                <p>Daisy Dai</p>
              </div>
              </td>
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Yiwen_Sun.jpg')}}')"></div>
                  <p class="member-name">Yiwen Sun</p>
                  <p>Designer</p>
                  <p>China</p>
                </div>
                <p>Yiwen Sun</p>
              </div>
              </td>
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Judy_Lang_Dong.jpg')}}')"></div>
                  <p class="member-name">Judy Lang Dong</p>
                  <p>Designer</p>
                  <p>China</p>
                </div>
                <p>Judy Lang Dong</p>
              </div>
              </td>
              </tr>
               <!-- <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Yanis.jpg')}}')"></div>
                  <p class="member-name">Yanis Park</p>
                  <p>Print Designer</p>
                  <p>Seoul, South Korea</p>
                </div>
                <p>Yanis Park</p>
              </div>-->
            <!--</div>--> 
            </table> 
          
            <br>
            <!--<div class="col-md-4 col-sm-6 col-xs-6"> -->
              <h3 class="section">Marketing</h3>
              <p class="zeyu-quote">We are Guac's storytellers. The Marketing team engages our audience with what we do. We bring inspirations to our audience and are responsible for communicating our values through events and social media. Examples of our projects include strategizing social media engagement and organizing the launch and magazine distribution events.</p>
              <br>
            <table>
            <tr>
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Ilayda.jpg')}}')"></div>
                  <p class="member-name">Ilayda Samilgil</p>
                  <p>Marketing Analyst</p>
                  <p>Istanbul, Turkey</p>
                </div>
                <p>Ilayda Samilgil</p>
              </div>
              </td>
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Duoer_Jia.jpg')}}')"></div>
                  <p class="member-name">Duoer Jia</p>
                  <p>Marketing Analyst</p>
                  <p>China</p>
                </div>
                <p>Duoer Jia</p>
              </div>
              </td>
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Xiaoxiang_Ma.jpg')}}')"></div>
                  <p class="member-name">Xiaoxiang Ma</p>
                  <p>Marketing Analyst</p>
                  <p>Beijing, China</p>
                </div>
                <p>Xiaoxiang Ma</p>
              </div>
              </td>
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/avocado.png')}}')"></div>
                  <p class="member-name">Lolia Briggs</p>
                  <p>Marketing Analyst</p>
                </div>
                <p>Lolia Briggs</p>
              </div>
              </td>
            </tr>
            <tr>
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Marertu_Girma.jpg')}}')"></div>
                  <p class="member-name">Marertu Girma</p>
                  <p>Marketing Analyst</p>
                </div>
                <p>Marertu Girma</p>
              </div>
              </td>
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/avocado.png')}}')"></div>
                  <p class="member-name">Teresa Liang</p>
                  <p>Marketing Analyst</p>
                  <p>USA, China</p>
                </div>
                <p>Teresa Liang</p>
              </div>
              </td>
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/avocado.png')}}')"></div>
                  <p class="member-name">Xiaotong Chen</p>
                  <p>Marketing Analyst</p>
                  <p>USA, China</p>
                </div>
                <p>Xiaotong Chen</p>
              </div>
              </td>
            </tr>
            </table>
           <!--</div>-->
              <br>  
            <!--<div class="col-md-4 col-sm-6 col-xs-6"> -->
              <h3 class="section">Technical Operations</h3>
              <p class="zeyu-quote">We sustain Guac's digital platforms. We develop and maintain the digital platforms to make sure they run smoothly. We use data to strategize ways to use lines of codes to innovate new and exciting avenues to engage our readers.</p>
              <br>
            <table>
            <tr>
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Zaeem_Rana.jpg')}}')"></div>
                  <p class="member-name">Zaeem Rana</p>
                  <p>Web Developer</p>
                  <p>USA, Pakistan</p>
                </div>
                <p>Zaeem Rana</p>
              </div>
              </td>
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Gabriella_Alvarez.jpg')}}')"></div>
                  <p class="member-name">Gabriella Alvarez</p>
                  <p>Web Developer</p>
                  <p>Rochester, USA</p>
                </div>
                <p>Gabriella Alvarez</p>
              </div>
              </td>
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Amanda_Chen.jpg')}}')"></div>
                  <p class="member-name">Amanda Chen</p>
                  <p>Web Developer</p>
                  <p>USA, China</p>
                </div>
                <p>Amanda Chen</p>
              </div>
              </td>
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Natalie_Fung.jpg')}}')"></div>
                  <p class="member-name">Natalie Fung</p>
                  <p>Web Developer</p>
                  <p>USA, Taiwan</p>
                </div>
                <p>Natalie Fung</p>
              </div>
              </td>
            </tr>
            </table>
            <!--</div>-->  
            <br> 
            <!--<div class="col-md-4 col-sm-6 col-xs-6"> -->
              <h3 class="section">Finance and Operations</h3>
              <p class="zeyu-quote">We not only maintain Guac's financials, but also make sure operations are running soomthly. We search for funding opportunities from various sources and make sure that each department is staying within budget. We are the backbone of Guac's Magazine!</p>
              <br> 
            <!--</div>-->  

             <br>
            <!--<div class="col-md-4 col-sm-6 col-xs-6"> -->
              <h3 class="section">Content</h3>
              <p class="zeyu-quote">We deliver Guac's stories. The Content team is responsible for gathering, creating and polishing stories. We walk our readers through the experiences of people from around the world and bring them joy in expanding their perspectives about what's out there.</p>
              <br>
            <table>
            <tr> 
              <td> 
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Lauren.jpg')}}')"></div>
                  <p class="member-name">Lauren McBrearty</p>
                  <p>Editor</p>
                  <p>New York, USA</p>
                </div>
                <p>Lauren McBrearty</p>
              </div>
              </td>
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Brandon.jpg')}}')"></div>
                  <p class="member-name">Brandon Smith</p>
                  <p>Editor</p>
                  <p>New York, USA</p>
                </div>
                <p>Brandon Smith</p>
              </div>
              </td>
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Arianne_Seenauth.jpg')}}')"></div>
                  <p class="member-name">Arianne Seenauth</p>
                  <p>Editor</p>
                  <p>USA</p>
                </div>
                <p>Arianne Seenauth</p>
              </div>
              </td>
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/avocado.png')}}')"></div>
                  <p class="member-name">Ami Mehta</p>
                  <p>Editor</p>
                </div>
                <p>Ami Mehta</p>
              </div>
              </td>
            </tr>
            <tr>
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Zoe_Hauser.jpg')}}')"></div>
                  <p class="member-name">Zoe Hauser</p>
                  <p>Editor</p>
                  <p>USA</p>
                </div>
                <p>Zoe Hauser</p>
              </div>
              </td>
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Ching.jpg')}}')"></div>
                  <p class="member-name">Ching Pang</p>
                  <p>Writer</p>
                  <p>Hong Kong, China</p>
                </div>
                <p>Ching Pang</p>
              </div>
              </td>
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Katie.jpg')}}')"></div>
                  <p class="member-name">Katie Lee</p>
                  <p>Writer</p>
                  <p>Singapore / Taiwan</p>
                </div>
                <p>Katie Lee</p>
              </div>
              </td>
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Jose_Covarrubias.jpg')}}')"></div>
                  <p class="member-name">Jose Covarrubias</p>
                  <p>Writer</p>
                  <p>Mexico</p>
                </div>
                <p>Jose Covarrubias</p>
              </div> 
              </td>
            </tr>
            <tr>
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Natalie_Monticello.jpg')}}')"></div>
                  <p class="member-name">Natalie Monticello</p>
                  <p>Writer</p>
                  <p>USA</p>
                </div>
                <p>Natalie Monticello</p>
              </div> 
              </td>
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/avocado.png')}}')"></div>
                  <p class="member-name">Sonya Xu</p>
                  <p>Writer</p>
                  <p>USA</p>
                </div>
                <p>Sonya Xu</p>
              </div> 
              </td>
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/avocado.png')}}')"></div>
                  <p class="member-name">Andrew Jhu</p>
                  <p>Writer</p>
                  <p>USA, Korea</p>
                </div>
                <p>Andrew Jhu</p>
              </div>
              </td>
              <td> 
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Mariana_Seibold.jpg')}}')"></div>
                  <p class="member-name">Mariana Seibold</p>
                  <p>Writer</p>
                  <p>USA</p>
                </div>
                <p>Mariana Seibold</p>
              </div>
              </td>
            </tr>
            <tr> 
              <td> 
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/avocado.png')}}')"></div>
                  <p class="member-name">Qingyi Gong</p>
                  <p>Writer</p>
                </div>
                <p>Qingyi Gong</p>
              </div> 
              </td>
              <td> 
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/avocado.png')}}')"></div>
                  <p class="member-name">TJ Ball</p>
                  <p>Writer</p>
                  <p>USA</p>
                </div>
                <p>TJ Ball</p>
              </div>
              </td>
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Marshall_Guan.jpg')}}')"></div>
                  <p class="member-name">Marshall Guan</p>
                  <p>Writer</p>
                  <p>China</p>
                </div>
                <p>Marshall Guan</p>
              </div>
              </td>
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/avocado.png')}}')"></div>
                  <p class="member-name">Ashley Shen</p>
                  <p>Writer</p>
                </div>
                <p>Ashley Shen</p>
              </div>
              </td>
            </tr>
            <tr> 
              <td> 
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Julia_Schwartz.jpg')}}')"></div>
                  <p class="member-name">Julia Schwartz</p>
                  <p>Writer</p>
                  <p>Argentina</p>
                </div>
                <p>Julia Schwartz</p>
              </div>
              </td>
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Marisabel_Cabrera .jpg')}}')"></div>
                  <p class="member-name">Marisabel Cabrera</p>
                  <p>Writer</p>
                  <p>San Juan, Puerto Rico</p>
                </div>
                <p>Marisabel Cabrera</p>
              </div>
              </td>
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/avocado.png')}}')"></div>
                  <p class="member-name">Gabriela Olivera</p>
                  <p>Writer</p>
                </div>
                <p>Gabriela Olivera</p>
              </div>
              </td>
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/avocado.png')}}')"></div>
                  <p class="member-name">Marielisa Cabrera</p>
                  <p>Writer</p>
                </div>
                <p>Marielisa Cabrera</p>
              </div>
              </td>
            </tr>
            <tr>  
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Pedro_Suau.jpg')}}')"></div>
                  <p class="member-name">Pedro Suau</p>
                  <p>Writer</p>
                </div>
                <p>Pedro Suau</p>
              </div>
              </td>
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/avocado.png')}}')"></div>
                  <p class="member-name">Alejandro Sanchez</p>
                  <p>Writer</p>
                </div>
                <p>Alejandro Sanchez</p>
              </div>
              </td>
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/avocado.png')}}')"></div>
                  <p class="member-name">Andrea Cordero Rivera</p>
                  <p>Writer</p>
                </div>
                <p>Andrea Cordero Rivera</p>
              </div>
              </td>
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/avocado.png')}}')"></div>
                  <p class="member-name">Javier Pareja</p>
                  <p>Writer</p>
                  <p>San Juan, Puerto Rico</p>
                </div>
                <p>Javier Pareja</p>
              </div>
              </td>
            </tr>
            <tr>  
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/avocado.png')}}')"></div>
                  <p class="member-name">Natalia Gulick</p>
                  <p>Writer</p>
                  <p>New York, Puerto Rico</p>
                </div>
                <p>Natalia Gulick</p>
              </div>
              </td>
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/avocado.png')}}')"></div>
                  <p class="member-name">Santos Rivera Cardona</p>
                  <p>Writer</p>
                  <p>Cabro Rojo, Puerto Rico</p>
                </div>
                <p>Santos Rivera Cardona</p>
              </div>
              </td>
            </tr>
            </table>

              <br>
              <h3 class="section">Past Contributors</h3>
            <table>
              <tr>
              <td>
               <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Pia.jpg')}}')"></div>
                  <p class="member-name">Pia Bocanegra</p>
                  <p>Past Writer</p>
                  <p>Manila, Philipines</p>
                </div>
                <p>Pia Bocanegra</p>
              </div> 
              </td>
              <td>
               <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Madison.jpg')}}')"></div>
                  <p class="member-name">Madison Holden</p>
                  <p>Past Writer</p>
                  <p>Florida, USA</p>
                </div>
                <p>Madison Holden</p>
              </div>
              </td>
              <td>
               <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/avocado.png')}}')"></div>
                  <p class="member-name">Christine Relander</p>
                  <p>Past Writer</p>
                  <p>Espoo, Finland</p>
                </div>
                <p>Christine Relander</p>
              </div>
              </td>
              <td>
               <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Chiara.jpg')}}')"></div>
                  <p class="member-name">Chiara Benitez</p>
                  <p>Past Editor</p>
                  <p>Manila, Philippines</p>
                </div>
                <p>Chiara Benitez</p>
              </div>
              </td>
            </tr>
            <tr>
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/avocado.png')}}')"></div>
                  <p class="member-name">Danyal Motiwalla</p>
                  <p>Former Finance Director</p>
                  <p>Singapore</p>
                </div>
                <p>Danyal Motiwalla</p>
              </div> 
              </td>
              <td>
               <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Chelsea.jpg')}}')"></div>
                  <p class="member-name">Chelsea Chan</p>
                  <p>Past Web Developer</p>
                  <p>Kuala Lumpur, Malaysia</p>
                </div>
                <p>Chelsea Chan</p>
              </div>
              </td>
              <td>
              <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Akanksha.jpg')}}')"></div>
                  <p class="member-name">Akanksha Jain</p>
                  <p>Past Marketing Analyst</p>
                  <p>Singapore</p>
                </div>
                <p>Akanksha Jain</p>
              </div>
              </td>
              <td>
               <div class="hoverthis" onmouseover="showBio(this)" onmouseout="hideBio(this)">
                <div class="hoverbox">
                  <div class="image member-photo" style="background-image: url('{{asset('public/images/Selected/Audrey.jpg')}}')"></div>
                  <p class="member-name">Audrey Tirtohadiguno</p>
                  <p>Past Print Designer</p>
                  <p>Jakarta, Indonesia</p>
                </div>
                <p>Audrey Tirtohadiguno</p>
              </div>
              </td>
             </tr>
            </table>  
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
