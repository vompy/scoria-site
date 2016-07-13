<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container">

    <header class="header">
        @include('includes.header')
    </header>

    <div id="main" class="row">
        <!-- main content -->
        <div id="content">
            @yield('content')
        </div>

    </div>

    <footer class="footer-2 {{ Request::is('fieldbook*') ? 'footer__fieldbook' : '' }}" role="contentinfo">
        @include('includes.footer')
    </footer>

</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main.js?v=2"></script>
</body>
</html>