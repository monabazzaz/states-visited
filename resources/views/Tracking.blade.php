<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Armata|Arsenal|Coming+Soon|Glegoo|Julius+Sans+One|Nixie+One|Playfair+Display+SC|Poiret+One" rel="stylesheet">


        <title>50 States</title>
    </head>

    <body>
          <div id="app"></div>

          <script>
              window.Laravel = {!! json_encode([
              'csrfToken' => csrf_token(),
              ]) !!};
          </script>
          <link rel="stylesheet" href="{{ mix('css/app.css') }}">
          <script src="{{ mix('js/app.js') }}"></script>

    </body>
</html>
