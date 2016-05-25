<!DOCTYPE html>
<html {{ language_attributes() }} lang="en">
<head>
    <meta charset="{{ bloginfo( 'charset' ) }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="distribution" content="global" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    {!! $context->header() !!}

    @yield('header')
</head>
<body>
<header>
    <nav>
        {!! $context->menu('primary',false,false,'nav-gap')  !!}
    </nav>
</header>

@yield('main')

{!! $context->footer() !!}

@yield('scripts')

<footer>
    <nav>
        {!! $context->menu('footer',false,false,'nav-gap') !!}
    </nav>
</footer>
</body>
</html>
