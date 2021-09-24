<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/style.css')}}">

    <title>WashPets</title>
</head>
<body>

    
    <div class="main">
    @include('site.layouts._partials.menu')
       <header>
           <div id="logo"></div>
       </header>

       <section>
            @yield('content')
       </section>


       <footer>&copy; Nilson José</footer>

    </div>

    <script src="{{asset('scripts/main.js')}}"></script>
</body>
</html>