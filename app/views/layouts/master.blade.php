<html>
  <head>
   <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width,user-scalable=no">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>-->
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCvBTWd3tg74-bwI16Xft8899gi_UovYtM">
    </script>
    <!-- Styles -->
    {{ HTML::style('bower/bootstrap/dist/css/bootstrap.min.css'); }}
    {{ HTML::style('css/main.css') }}
    <!-- Scripts -->
    <!--{{ HTML::script('bower/requirejs/require.js'); }}-->
    {{ HTML::script('bower/underscore/underscore-min.js'); }}
    {{ HTML::script('bower/es6-shim/es6-shim.min.js'); }}
    {{ HTML::script('bower/jquery-ui-map/ui/min/jquery.ui.map.full.min.js'); }}
    {{ HTML::script('bower/backbone/backbone.js'); }}
    {{ HTML::script('bower/react/react.js'); }}
    <!-- {{ HTML::script('bower/react/react.min.js'); }} -->
    {{ HTML::script('bower/react-bootstrap/react-bootstrap.min.js'); }}
    {{ HTML::script('bower/react/JSXTransformer.js'); }}
    {{ HTML::script('js/globals.js'); }}
    <!-- Models -->
    <script type="text/jsx" src="js/models/User.js"></script>
    <script type="text/jsx" src="js/models/Marker.js"></script>
    <!-- Mixins -->
    <script type="text/jsx" src="js/mixins/ControlButtonMixin.js"></script>
    <!-- Components -->
    <script type="text/jsx" src="js/components/NavMenu.js"></script>
    <script type="text/jsx" src="js/components/Map.js"></script>
    <script type="text/jsx" src="js/components/ShareButton.js"></script>
    <script type="text/jsx" src="js/components/Controls.js"></script>
    <script type="text/jsx" src="js/components/PresentationControls.js"></script>
    <script type="text/jsx" src="js/components/CreateControls.js"></script>
    <script type="text/jsx" src="js/components/SequenceControls.js"></script>
    <script type="text/jsx" src="js/components/InfoWindow.js"></script>
    <!-- Buttons -->
    <script type="text/jsx" src="js/components/AddMarkerButton.js"></script>
    <script type="text/jsx" src="js/components/DrawLinesButton.js"></script>
    <script type="text/jsx" src="js/components/ManifestButton.js"></script>
    <script type="text/jsx" src="js/components/MapSettingsButton.js"></script>
    <script type="text/jsx" src="js/components/SearchButton.js"></script>
    <script type="text/jsx" src="js/components/MyLocationButton.js"></script>
    <script type="text/jsx" src="js/components/FullscreenButton.js"></script>
    <script type="text/jsx" src="js/components/SaveButton.js"></script>
    <script type="text/jsx" src="js/components/TrashButton.js"></script>
    <script type="text/jsx" src="js/components/InformationWindow.js"></script>
    <!-- Filled in up to here -->
    <!-- Created up to here -->

    <!-- Pages -->
    <!--<script type="text/jsx" src="js/components/CreatePage.js"></script>-->
    @yield('styles')

    <title>Terra Charts Map Chat</title>
  </head>
  <body>
    <div class="app-content container">
      <!-- {{ $content }} -->
      @yield('content')
    </div>
    @yield('scripts')
  </body>
</html>