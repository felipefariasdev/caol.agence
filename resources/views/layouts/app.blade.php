<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
    <div class="container">
        <div class="row row-offcanvas row-offcanvas-right">
            <div class="col-12 col-md-12">

                @include('includes.nav')

                <div class="container">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @include('includes.footer')
</body>
</html>


