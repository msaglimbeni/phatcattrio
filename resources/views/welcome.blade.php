<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- FONTS -->
        <!-- Raleway -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!--- CSS --->
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}" />

        <!-- App -->
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />

        <!--- JAVASCRIPT --->
        <!-- Jquery 3.2.1 -->
        <script type="text/javascript" src="{{ URL::asset('js/vendors/jquery-3.2.1.min.js') }}"></script>
        <!-- Bootstrap 3.3.7 -->
        <script type="text/javascript" src="{{ URL::asset('js/vendors/bootstrap.min.js') }}"></script>
        <!-- Custom -->
        <script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>
    </head>

    <body>
        <header>
            <div class="container">
                <div class="row-fluid">

                </div>
            </div>
        </header>

        <section>
            <div class="banner-container">
                <div class="overlay"></div>
                <div class="banner-image"></div>
            </div>

            <div class="container">
                <div class="row-fluid">

                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <div class="row-fluid">

                </div>
            </div>
        </footer>
    </body>
</html>
