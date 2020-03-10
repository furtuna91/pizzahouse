<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Compiled and minified CSS -->

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        @yield('content')
        <div class="fixed-action-btn">
            <a class="btn-floating btn-large red">
                <i class="large material-icons">mode_edit</i>
            </a>
            <ul>
                {{-- <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li> --}}
                <li><a href="{{ url('/') }}" class="btn-floating yellow darken-1"><i class="material-icons">home</i></a></li>
                <li><a href="{{ route('pizza.index') }}" class="btn-floating blue"><i class="material-icons">format_list_bulleted</i></a></li>
                <li><a href="{{ route('pizza.create') }}" class="btn-floating green"><i class="material-icons">add</i></a></li>
            </ul>
        </div>

        <footer class="page-footer">
            {{-- <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Footer Content</h5>
                        <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Links</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                        </ul>
                    </div>
                </div>
            </div> --}}
            <div class="footer-copyright">
                <div class="container center-align">
                    © 2020 Copyright Pizza House
                    {{-- <a class="grey-text text-lighten-4 right" href="#!">More Links</a> --}}
                </div>
            </div>
        </footer>

        <!-- Compiled and minified JavaScript -->
        <script
			  src="https://code.jquery.com/jquery-2.2.4.js"
			  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
			  crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="{{ asset('js/javascript.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
