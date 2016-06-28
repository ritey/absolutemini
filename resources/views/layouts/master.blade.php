<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>@yield('page_title','absolutemini.com')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="@yield('meta_description','')">
    <meta property="og:description" content="@yield('meta_description')" />

    <meta property="og:site_name" content="absolutemini.com"/>
    <meta property="og:title" content="@yield('page_title','absolutemini.com')"/>
    <meta property="twitter:title" content="@yield('page_title','absolutemini.com')"/>
    <meta property="twitter:description" content="@yield('meta_description','')" />

    <meta name="author" content="David Wright">

    <base href="{{ URL('/') }}">
    <link rel="stylesheet" href="{{ elixir("css/app.css") }}">
    <link rel="icon" type="image/png" href="images/absolutemini-128.png" sizes="128x128">
    <link rel="icon" type="image/png" href="images/absolutemini-64.png" sizes="64x64">
    <link rel="icon" type="image/png" href="images/absolutemini-32.png" sizes="32x32">

    @yield('head')

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-418381-1', 'auto');
      ga('send', 'pageview');

    </script>

</head>
<body>

    @include('partials.menu')

    <div class="@yield('container_class','container')">

        @yield('content')

        <footer class="footer">
            <p>
                <a href="{{ route('about') }}" title="About Absolutemini">About</a>
                <a href="{{ route('terms') }}" title="Absolutemini terms of using the site">Terms</a>
                <a href="{{ route('privacy') }}" title="Absolutemini privacy policy">Privacy</a>
                <a href="{{ route('advertise') }}" title="Advertise on Absolutemini">Advertise with us</a>
            </p>
        </footer>
    </div>

    <script src="{{ elixir("js/app.js") }}" type="text/javascript"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>

    @yield('footer')

</body>
</html>