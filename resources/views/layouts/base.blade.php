
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
        <title>{{ $title ?? '' }} - Tblog</title>        
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        {{-- my styles --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!--Import materialize.css-->
        <link rel="stylesheet" href="{{ asset('libs/materialize/css/materialize.min.css') }}"  media="screen,projection"/>


        <!-- font awesome -->
        <link rel="stylesheet" href="{{ asset('sass/font_awesome/css/font-awesome.min.css') }}">
        
    </head>
    <body>  

        @include('layouts.partials.topbar')
            
         <div class="container">
             
             @yield('content')

         </div>   

         @include('layouts.partials.footer')
        <!--Import jQuery before materialize.js-->
        <script src="{{ asset('libs/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('libs/materialize/js/materialize.min.js') }}"></script>
    </body>
</html>
      