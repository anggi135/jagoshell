@php
    $controller = DzHelper::controller();
    $page = $action = DzHelper::action();
    $action = $controller.'_'.$action;
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- PAGE TITLE HERE -->
	<title>{{ config('dz.name') }} | @yield('title', $page_title ?? '')</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="keywords" content="job portal, admin dashboard, Bootstrap HTML template, job listings, applicants, user-friendly interface, powerful functionalities">
	<meta name="description" content="@yield('page_description', $page_description ?? '')"/>
	<meta property="og:title" content="Qerza - Job Portal Admin Dashboard | Bootstrap 5 & Laravel Template">
	<meta property="og:description" content="{{ config('dz.name') }} | @yield('title', $page_title ?? '')" />
	<meta property="og:image" content="https://qerza.dexignzone.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">

	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon icon -->
	<link rel="icon" type="image/png" href="{{ asset('images/favicon.png')}}">
    
	@if(!empty(config('dz.public.pagelevel.css.'.$action))) 
        @foreach(config('dz.public.pagelevel.css.'.$action) as $style)
            <link href="{{ asset($style) }}" rel="stylesheet" type="text/css"/>
        @endforeach
    @endif

    {{-- Global Theme Styles (used by all pages) --}}
    @if(!empty(config('dz.public.global.css'))) 
        @foreach(config('dz.public.global.css') as $style)
            <link href="{{ asset($style) }}" rel="stylesheet" type="text/css"/>
        @endforeach
    @endif

</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{ url('index')}}" class="brand-logo">
				<svg class="logo-abbr" width="64px" height="64px">
					<path class="svg-logo-path" fill-rule="evenodd"  fill="rgb(135, 67, 223)"
					d="M21.000,-0.000 L42.999,-0.000 C54.598,-0.000 64.000,9.402 64.000,21.000 L64.000,43.000 C64.000,54.598 54.598,64.000 42.999,64.000 L21.000,64.000 C9.402,64.000 -0.000,54.598 -0.000,43.000 L-0.000,21.000 C-0.000,9.402 9.402,-0.000 21.000,-0.000 Z"/>
					<path class="svg-logo-path-text" fill-rule="evenodd"  fill="rgb(255, 255, 255)"
					d="M39.090,43.394 L44.818,52.000 L34.684,52.000 L31.405,46.279 C30.182,46.471 28.908,46.567 27.587,46.567 C18.775,46.567 12.999,40.798 12.999,32.385 C12.999,20.413 21.419,12.000 33.314,12.000 C42.272,12.000 47.999,17.673 47.999,26.038 C47.999,33.635 44.622,39.885 39.090,43.394 ZM32.237,19.548 C25.531,19.548 21.370,25.077 21.370,31.519 C21.370,36.087 24.013,38.971 28.860,38.971 C35.517,38.971 39.678,33.346 39.678,26.952 C39.678,22.385 36.985,19.548 32.237,19.548 Z"/>
				</svg>
				<svg class="brand-title"  width="101" height="47" fill-rule="evenodd" fill="#272727">
					<path class="svg-logo-text-path" d="M95.253 22.25l-.635-3.875H86.3l-2.033 3.875h-5.683L90.586.312h6.286L101 22.25h-5.747zM92.682 6.187l-4.256 8.125h5.557l-1.301-8.125zm-24.82 11.688h9.589l-.794 4.375H60.91l.729-4.063 11.938-13.5h-9.524l.793-4.375h15.748l-.73 4.063-12.002 13.5zm-13.218-4.313l3.587 8.688h-6.127l-3.143-8.281h-1.302l-1.493 8.281h-5.429L44.674.312h9.112c5.461 0 7.652 3.094 6.954 6.907-.476 2.75-2.476 5.343-6.096 6.343zm-1.969-8.875H49.31l-.984 5.5h3.365c2.032 0 3.175-1.031 3.493-2.75.317-1.656-.477-2.75-2.509-2.75zm-20.352-.156l-.793 4.563h7.27l-.73 4.031h-7.271l-.888 4.906h8.223l-.762 4.219H23.719L27.656.312h13.653l-.762 4.219h-8.224zM20.637 26h-6.573l-2.126-3.719c-.795.125-1.619.188-2.477.188C3.746 22.469 0 18.719 0 13.25 0 5.469 5.461 0 13.176 0c5.81 0 9.524 3.687 9.524 9.125 0 4.937-2.19 9-5.778 11.281L20.637 26zM17.303 9.719c0-2.969-1.746-4.813-4.826-4.813-4.35 0-7.048 3.594-7.048 7.781 0 2.969 1.714 4.844 4.857 4.844 4.318 0 7.017-3.656 7.017-7.812zM73.255 44.49c-1.056 0-1.806-.54-2.165-1.1V47h-.96v-8.08h.96v1.01c.349-.58 1.109-1.1 2.165-1.1 1.552 0 2.744 1.1 2.744 2.81 0 1.7-1.192 2.85-2.744 2.85zm-.201-4.87c-1.046 0-1.964.76-1.964 2.03 0 1.29.918 2.04 1.964 2.04 1.067 0 1.964-.76 1.964-2.05s-.897-2.02-1.964-2.02zm-6.934 4.87c-1.056 0-1.805-.54-2.164-1.1V47h-.961v-8.08h.961v1.01c.348-.58 1.108-1.1 2.164-1.1 1.552 0 2.744 1.1 2.744 2.81 0 1.7-1.192 2.85-2.744 2.85zm-.201-4.87c-1.045 0-1.963.76-1.963 2.03 0 1.29.918 2.04 1.963 2.04 1.067 0 1.964-.76 1.964-2.05s-.897-2.02-1.964-2.02zm-5.689 3.23h-3.209l-.592 1.55h-1.013l2.66-6.93h1.109l2.65 6.93h-1.013l-.592-1.55zm-1.604-4.26l-1.331 3.52h2.661l-1.33-3.52zM50.467 37h.961v7.4h-.961V37zm-2.594 6.38c-.349.59-1.098 1.11-2.165 1.11-1.541 0-2.734-1.15-2.734-2.85 0-1.71 1.193-2.81 2.745-2.81 1.077 0 1.816.52 2.154 1.09v-1h.971v5.48h-.971v-1.02zm-1.964-3.76c-1.056 0-1.954.73-1.954 2.02s.898 2.05 1.954 2.05 1.964-.75 1.964-2.04c0-1.27-.908-2.03-1.964-2.03zm-6.211 3.28v-3.23h-.749v-.75h.749v-1.38h.961v1.38h1.51v.75h-1.51v3.23c0 .54.211.73.803.73h.707v.77h-.866c-1.024 0-1.605-.4-1.605-1.5zm-3.189-1.48v2.98h-.96v-5.48h.96v.89c.327-.61.951-.99 1.869-.99v.94h-.254c-.918 0-1.615.39-1.615 1.66zm-5.191 3.07c-1.636 0-2.882-1.1-2.882-2.84 0-1.73 1.288-2.82 2.925-2.82 1.647 0 2.925 1.09 2.925 2.82 0 1.74-1.321 2.84-2.968 2.84zm.032-4.87c-1.014 0-1.932.65-1.932 2.03 0 1.39.898 2.04 1.9 2.04s1.985-.65 1.985-2.04c0-1.38-.961-2.03-1.953-2.03zm-6.293 1.87h-1.416v2.91h-.96v-6.97h2.376c1.731 0 2.544.9 2.544 2.04 0 1.06-.718 2.02-2.544 2.02zm0-3.31h-1.416v2.56h1.416c1.097 0 1.562-.49 1.562-1.27 0-.81-.465-1.29-1.562-1.29zm-9.2 6.31c-1.056 0-1.806-.5-2.165-1.1v1.01h-.961V37h.961v2.94c.37-.61 1.14-1.11 2.165-1.11 1.562 0 2.745 1.1 2.745 2.81 0 1.7-1.193 2.85-2.745 2.85zm-.201-4.87c-1.045 0-1.964.76-1.964 2.03 0 1.29.919 2.04 1.964 2.04 1.066 0 1.963-.76 1.963-2.05s-.897-2.02-1.963-2.02zm-7.154 4.87c-1.637 0-2.882-1.1-2.882-2.84 0-1.73 1.287-2.82 2.924-2.82 1.646 0 2.924 1.09 2.924 2.82 0 1.74-1.319 2.84-2.966 2.84zm.031-4.87c-1.013 0-1.932.65-1.932 2.03 0 1.39.897 2.04 1.901 2.04s1.985-.65 1.985-2.04c0-1.38-.961-2.03-1.954-2.03zm-6.485 4.85C.823 44.47 0 43.73 0 42.51h.96c.011.64.328 1.15 1.088 1.15s1.066-.5 1.066-1.08v-5.15h.971v5.15c0 1.16-.823 1.89-2.037 1.89z"/>
				</svg>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Chat box start
        ***********************************-->
		@include('elements.header')
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('elements.sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->
		@php
            $body_class = ''; 
            if($page == 'ui_button'){ $body_class = 'btn-page';} 
            if($page == 'ui_badge'){ $body_class = 'badge-demo';} 
        @endphp
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body {{$body_class}}">
            <!-- row -->
			@yield('content')
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        @stack('models')
        
        <!--**********************************
            Footer start
        ***********************************-->
		@include ('elements.footer')
        <!--**********************************
            Footer end
        ***********************************-->
        
		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
	@if(!empty(config('dz.public.global.js.top')))
        @foreach(config('dz.public.global.js.top') as $script)
            <script src="{{ asset($script) }}" type="text/javascript"></script>
        @endforeach
    @endif
    @if(!empty(config('dz.public.pagelevel.js.'.$action)))
        @foreach(config('dz.public.pagelevel.js.'.$action) as $script)
            <script src="{{ asset($script) }}" type="text/javascript"></script>
        @endforeach
    @endif
    @if(!empty(config('dz.public.global.js.bottom')))
        @foreach(config('dz.public.global.js.bottom') as $script)
            <script src="{{ asset($script) }}" type="text/javascript"></script>
        @endforeach
    @endif

    @stack('scripts')
</body>
</html>