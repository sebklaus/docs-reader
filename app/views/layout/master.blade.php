<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>
        {{ Config::get('docs.title', 'Documentation') }}
        @if(!empty($title))
            : {{ $title }}
        @endif
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link media="all" type="text/css" rel="stylesheet" href="{{ url('css/bootstrap.css') }}">
    <!--[if lt IE 9]>
      <script src="{{ url('js/html5.min.js') }}"></script>
      <link media="all" type="text/css" rel="stylesheet" href="{{ url('css/font-awesome-ie7.css') }}">
      <link media="all" type="text/css" rel="stylesheet" href="{{ url('css/ie678.css') }}">
    <![endif]-->
    <!--[if IE 9]>
      <link media="all" type="text/css" rel="stylesheet" href="{{ url('css/ie9.css') }}">
    <![endif]-->
    <script src="{{ url('js/vendor/modernizr-2.6.2.min.js') }}"></script>
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon" sizes="144x144" href="{{ url('ico/apple-touch-icon-144.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ url('ico/apple-touch-icon-114.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ url('ico/apple-touch-icon-72.png') }}">
    <link rel="apple-touch-icon" href="{{ url('ico/apple-touch-icon-57.png') }}">
    <link rel="shortcut icon" href="{{ url('ico/favicon.ico') }}">
  </head>
  <body>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="/"><i class="icon-puzzle-piece"></i> docs-reader</a>
        </div>
      </div>
    </div>
    <div class="container-fluid">
<!--      <div class="row-fluid">
         <div class="span12">
            <header>
                <h1>{{ Config::get('docs.title', 'Documentation') }}</h1>
            </header>
        </div>
    </div>
 -->     <div class="row-fluid">
        <div class="span3">
          <aside class="sidebar well well-small">
              @yield('sidebar')
          </aside>
        </div>
        <div class="span9">
            <section class="content">
                @yield('content')
                <nav>
                @if($prev)
                    <a href="{{ $prev['URI'] }}" title="Previous: {{ $prev['title'] }}">← {{ $prev['title'] }}</a> |
                @endif
                @if($next)
                    <a href="{{ $next['URI'] }}" title="Next: {{ $next['title'] }}">{{ $next['title'] }} →</a>
                @endif
                </nav>
            </section>
        </div>
    </div>
    <div class="row-fluid">
         <div class="span12">
            <footer>
              Document last updated: <strong>{{ $time }}</strong> | <a href="http://github.com/daylerees/docs-reader" title="Documentation reader by Dayle Rees.">Docs reader</a> by <a href="http://daylerees.com" title="Dayle Rees">Dayle Rees</a>.
            </footer>
        </div>
    </div>
    <script src="{{ url('js/vendor/jquery-1.9.1.min.js') }}"></script>
<!--
    <script src="{{ url('js/vendor/bootstrap-affix.min.js') }}"></script>
    <script src="{{ url('js/vendor/bootstrap-transition.min.js') }}"></script>
    <script src="{{ url('js/vendor/bootstrap-alert.min.js') }}"></script>
    <script src="{{ url('js/vendor/bootstrap-modal.min.js') }}"></script>
    <script src="{{ url('js/vendor/bootstrap-tab.min.js') }}"></script>
    <script src="{{ url('js/vendor/bootstrap-button.min.js') }}"></script>
    <script src="{{ url('js/vendor/bootstrap-carousel.min.js') }}"></script>
    <script src="{{ url('js/vendor/bootstrap-dropdown.min.js') }}"></script>
    <script src="{{ url('js/vendor/bootstrap-modal.min.js') }}"></script>
    <script src="{{ url('js/vendor/bootstrap-popover.min.js') }}"></script>
    <script src="{{ url('js/vendor/bootstrap-scrollspy.min.js') }}"></script>
    <script src="{{ url('js/vendor/bootstrap-tooltip.min.js') }}"></script>
    <script src="{{ url('js/vendor/bootstrap-typeahead.min.js') }}"></script>
    <script src="{{ url('js/vendor/bootstrap-collapse.min.js') }}"></script>
    <script src="{{ url('js/vendor/jquery.placeholder.min.js') }}"></script>
-->
    <script src="{{ url('js/vendor/prettify.js') }}"></script>
    <script src="{{ url('js/plugins.js') }}"></script>
    <script src="{{ url('js/main.js') }}"></script>
  </body>
</html>