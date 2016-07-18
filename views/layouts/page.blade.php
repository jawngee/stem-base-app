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

        {!! $context->ui->header() !!}

        @yield('header')
        <style>
            @if ($theme->border_color)
            body {
                background-color: {{$theme->border_color}};
            }
            @endif

            @if ($theme->text_color)
            body {
                color: {{$theme->text_color}};
            }
            @endif


            @if ($theme->background_color)
            body > header, body > footer, .content {
                background-color: {{$theme->background_color}};
            }
            @endif

            @if ($theme->header_color)
            h1, h2, h3, h4, h5, h6 {
                color: {{$theme->header_color}};
            }
            @endif

            @if ($theme->link_color)
            a, a:hover {
                color: {{$theme->link_color}};
            }
            @endif
        </style>
    </head>
    <body>
        <header>
            <div class="site-branding">
                @if ( is_front_page() && is_home() )
                <h1 class="site-title"><a href="{{home_url( '/' )}}" rel="home">{{bloginfo( 'name' )}}</a></h1>
                @else
                <p class="site-title"><a href="{{home_url( '/' )}}" rel="home">{{ bloginfo( 'name' ) }}</a></p>
                @endif

                @if ( get_bloginfo( 'description', 'display' ) || is_customize_preview() )
                <p class="site-description">{{ get_bloginfo( 'description', 'display' ) }}</p>
                @endif
            </div>

            <nav>
                {!! $context->ui->menu('primary',false,false,'nav-gap')  !!}
            </nav>
        </header>

        <div class="content">
            <div class="main">
                @yield('main')
            </div>
            @section('secondary')
                <aside class="secondary sidebar widget-area" role="complementary">
                    {!! dynamic_sidebar( 'sidebar-1' )  !!}
                </aside>
            @show
        </div>


        {!! $context->ui->footer() !!}

        @yield('scripts')

        <footer>
            <nav>
                {!! $context->ui->menu('footer',false,false,'nav-gap') !!}
            </nav>
        </footer>
    </body>
</html>
