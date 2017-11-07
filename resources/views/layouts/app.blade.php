<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Guac Magazine') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/extras.css') }}" rel="stylesheet">
    <link href="{{ asset('css/checkbox/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flags/css/flag-icon.css') }}" rel="stylesheet">
    <link href="{{ asset('js/chosen/chosen.min.css') }}" rel="stylesheet">
    @stack('styles')
    <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('js/ckfinder/ckfinder.js') }}"></script>
    <script src="{{asset('js/split.js')}}"></script>
    <script src="https://use.fontawesome.com/ed7ec46525.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/styles/default.min.css">
    <script src="https://d3js.org/d3.v4.min.js"></script>
    <script src="http://d3js.org/topojson.v2.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/highlight.min.js"></script>
</head>
<body>
    @if(Auth::check() or request()->is('login'))
    <div id="app">
<!--       @if(request()->is('/'))
      <div id="header-svg"><img src="{{asset('images/header.svg')}}"></div>
      @endif -->
        <nav class="navbar navbar-fixed-top navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{asset('images/Logo.png')}}" height="30" />
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                      @guest
                        <li @if(request()->is('/')) class="current" @endif>
                          <a href="{{route('index')}}">Home</a>
                        </li>
                        <li @if(request()->is('stories') || request()->is('stories/*')) class="current" @endif>
                          <a href="{{route('articles')}}">Stories</a>
                        </li>
<!--                         <li @if(request()->is('guides') || request()->is('guides/*')) class="current" @endif>
                          <a href="{{route('guides')}}">City Guides</a>
                        </li> -->
                      @endguest
                        <li @if(request()->is('map')) class="current" @endif>
                          <a href="{{route('map')}}">Map</a>
                        </li>
                        <li @if(request()->is('about')) class="current" @endif>
                          <a href="{{route('about')}}">About</a>
                        </li>
                        <li @if(request()->is('contribute')) class="current" @endif>
                          <a class="gray" href="{{route('contribute')}}">Contribute</a>
                        </li>
                        <li @if(request()->is('contact')) class="current" @endif>
                          <a class="gray" href="{{route('contact')}}">Contact</a>
                        </li>
                        @auth
                          <li>
                            <a href="{{route('upload_article')}}">New Story</a>
                          </li>
                          <li>
                            <a href="{{route('upload_guide')}}">New Guide</a>
                          </li>
                          {{--  <li>
                            <a href="{{route('author', ['id' => Auth::id()])}}">Edit User</a>
                          </li>  --}}
                        @endauth
                    </ul>
                    <form class="search-form" action="{{route('search')}}">
                      <input type="text" name="search" id="search" value="{{old('search')}}" />
                      <button type="submit" class="submit"><i class="fa fa-lg fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
        </nav>
        <div class='nav-placeholder'>&nbsp;</div>
        @yield('content')
        <div class="footer">
          <ul class="footer-nav">
            <li>
              <a href="{{route('about')}}">About Us</a>
            </li>
            <li>
              <a href="{{route('index')}}">Contribute</a>
            </li>
            <li>
              <a href="{{route('index')}}">Say Hello</a>
            </li>
            <li>
              <a href="{{route('index')}}">Join Us</a>
            </li>
          </ul>
          <ul class="footer-social">
            <li>
              <a class="fa fa-facebook-official white fa-lg" href="http://facebook.com"></a>
            </li>
            <li>
              <a class="fa fa-instagram white fa-lg" href="http://instagram.com"></a>
            </li>
          </ul>
          <br />
          <div class="copyright">
            <small>&copy; 2017 Guac Magazine</small>
          </div>
        </div>
    </div>
    @else
      <style>
        body {
            text-align: center;
            font-size: 200%;
        }
      </style>
      <img src="{{asset('../Logo.png')}}" />
      <p>Coming soon.</p>
    @endif

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{asset('js/chosen/chosen.jquery.min.js')}}"></script>
    <script src="{{asset('js/chosen.js')}}"></script>
    @stack('scripts')
</body>
</html>
