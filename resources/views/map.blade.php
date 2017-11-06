@extends('layouts.app')

@section('content')
    <div id="map-wrapper">
        <svg id="map" height="700" width="100%">
            <svg id="map-holder" height="700" width="100%"></svg>
                <defs>
                    <svg id="pin" width="52px" height="64px" viewBox="0 0 52 64" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <!-- Generator: Sketch 47 (45396) - http://www.bohemiancoding.com/sketch -->
                        <title>Shape</title>
                        <desc>Created with Sketch.</desc>
                        <g id="Style-Guide" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Iconography" transform="translate(-53.000000, -45.000000)" fill-rule="nonzero" fill="#A2D074">
                                <g id="noun_1146595" transform="translate(53.000000, 45.000000)">
                                    <path d="M46.6,11 C41.9,4.1 34.4,0.2 26,0.2 C17.6,0.2 10.1,4.1 5.4,11 C0.7,17.8 -0.4,26.4 2.5,34 C3.3,36 4.5,38.1 6.1,40 L26,63.3 L45.8,40 C47.4,38.1 48.7,36.1 49.4,34 C52.4,26.4 51.3,17.8 46.6,11 Z M26,33.2 C20.4,33.2 15.8,28.7 15.8,23.2 C15.8,17.7 20.4,13.2 26,13.2 C31.6,13.2 36.2,17.7 36.2,23.2 C36.2,28.7 31.6,33.2 26,33.2 Z" id="Shape"></path>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <svg id="textbox" width="250" height="150">
                        <defs>
                            <filter id="dropShadow">
                                <feGaussianBlur in="SourceAlpha" stdDeviation="2" />
                                <feOffset dx="2" dy="2" />
                                <feMerge>
                                    <feMergeNode />
                                    <feMergeNode in="SourceGraphic" />
                                </feMerge>
                            </filter>
                        </defs>
                        <rect x="0" y="0" rx="5" ry="5" width="200" height="110" style="fill:#fff;stroke:#efefef;stroke-width:1;opacity:0.9" filter="url(#dropShadow)"/>
                    </svg>
                </defs>

            <g id="usePins">
                <!-- Use pin objects here. -->
            </g>
            <g id="useRects">
                <!-- Use rect objects here. -->
            </g>
                
        </svg>
        <div id="scroll-test"></div>
    </div>
    
    <div class="content featured container-fluid">
        <div class="row content-row" id="content-holder">

        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{asset('js/map.js')}}"></script>
@endpush
