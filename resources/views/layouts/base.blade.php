<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        @include('components.meta')
        @include('components.favicon')
        @include('components.styles')
        <script src="/js/modernizr.custom.js"></script>
    </head>
    <body class="page">
        <div class="lm-animated-bg"></div>
        <div class="page-scroll">
            <div id="page_container" class="page-container">
                @include('components.header')
                <div id="main" class="site-main">
                    @yield('content')
                </div>
                @include('components.footer')
            </div>
        </div>
    @include('components.scripts')
    </body>
</html>
