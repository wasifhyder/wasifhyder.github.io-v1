<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        {{HTML::style('css/default.css');}}
        {{HTML::style('css/component.css');}}
        {{HTML::style('css/foundation.css');}}
        {{HTML::style('css/style.css');}}
        {{HTML::style('css/normalize.css');}}
        <!-- Adding support for IE 6-8 since the won't style unknown elements at all -->
        <!--[if lt IE 9]>
       {{HTML::style('http://html5shiv.googlecode.com/svn/trunk/html5.js')}}
        <![endif]-->
        <!-- Javascript Libraries -->
        {{HTML::script('js/jquery-2.1.1.min.js')}}
        {{HTML::script('js/modernizr.custom.js')}}
        {{HTML::script('js/imagelightbox.js')}}
        <script src="imagelightbox.js"></script>
        <script>
            $( function()
            {
                $( 'a' ).imageLightbox();
            });
        </script>

    </head>

    <body>
        <img src="img/{{Route::currentRouteName()}}bg.png" id="fullpage">
        <header>
            <!-- Logo -->
             <h1 id="logo">
                <a href="{{ URL::to('/') }}">WH</a>
            </h1>
            <nav>
                <ul class ="group">
                    <li><a href="{{ URL::to('/') }}">Home</a></li>
                    <li><a href="{{ URL::to('about') }}">About</a></li>
                    <li><a href="{{ URL::to('portfolio') }}">Portfolio</a></li>
                    <li><a href="{{ URL::to('blog') }}">Blog</a></li>
                    <li><a href="{{ URL::to('contact') }}">Contact</a></li>
                </ul>
            </nav>
        </header>
            <section class="content">
                @yield('content')
            </section>
        <footer>
            <ul>
                <li class="mail"><a href="">hello@wasifhyder.com</a></li>
                <li class="skype"><a href="">wasif_hyder</a></li>
            </ul>
        </footer>
    </body>
</html>