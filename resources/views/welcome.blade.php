<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>



<meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <!-- Fonts -->
  <link rel="dns-prefetch" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
       <!-- this class is for error IN FORM  -->
		<style>
          small {
	              color: red;
               	display: none;
                }
          .mx_form_inv .mx_empty_filed ~ small {
	               display: block;
                }
          .mx_form_inv .mx_recaptcha_failed small {
	              display: block;
              }

          .passwords{
              display:none
            }
</style>
    </head>
    <body>
    <!-- id="app"  take from  el: '#app', in app.js -->
    <div id="app">

        <index></index>
     </div>


       <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
<!-- Minify -->
<script src="https://www.google.com/recaptcha/api.js?onload=vueRecaptchaApiLoaded&render=explicit" async defer></script>
    </body>
</html>
