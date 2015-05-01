<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Administration Dashboard</title>
        {{--HTML::style('css/style.css');--}}
        {{HTML::style('css/normalize.css');}}
        {{HTML::style('css/foundation.min.css');}}
        <!-- Adding support for IE 6-8 since the won't style unknown elements at all -->
        <!--[if lt IE 9]>
        {{HTML::style('http://html5shiv.googlecode.com/svn/trunk/html5.js')}}
        <![endif]-->

        <style>
            #container {width: 600px; margin-left:100px; margin-top: 40px;}
        </style>
        <!-- Javascript Libraries -->
        {{HTML::script('js/jquery-2.1.1.min.js')}}
        {{HTML::script('ckeditor/ckeditor.js')}};
    </head>

    <body>
        <div id = "container">
            {{--<img src="img/{{Route::currentRouteName()}}bg.png" id="fullpage">--}}
            <header>
                <!-- Logo -->
                <h1>
                    <a href="{{ action('AdminController@index') }}">Administration Panel</a>
                </h1>

            </header>
            <section class="content">
                @yield('content')
            </section>
            <footer>
                <small>Made by Syed Wasifuddin Hyder (014055)</small>
            </footer>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor' );
            </script>
        </div>
    </body>
</html>