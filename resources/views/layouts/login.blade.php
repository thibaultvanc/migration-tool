





<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta id="token" name="csrf-token" content="{{ csrf_token() }}" />
  <meta name="_token" content="{{ csrf_token() }}" />

  {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
  <link href="/css/app.css" rel="stylesheet">
  {!! \Html::style('https://fonts.googleapis.com/icon?family=Material+Icons') !!}
  <style>
  section.is-fullheight, body {
    /*color:black;*/
    background:url('https://www.playologie.com/img/home/playologie_background_02.jpg');
    background-size:     cover;                      /* <------ */
    background-repeat:   no-repeat;
    background-position: center center;
  }
  </style>

  <title>@yield('title')</title>

</head>

<body>

  <div id="app">

    @yield('content')





  </div>




  <script type="text/javascript">
  // public/js/config.js
  $(function () {
    $.ajaxSetup({
      headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
    });
  });
  </script>

  {{-- @yield('js-localization.head') --}}
  <script src="/js/app.js"></script>


</body>

</html>
