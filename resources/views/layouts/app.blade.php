<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>


<div class="container">

    <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-12 col-md-9">

            @include('includes.nav')

            <div class="container">

                @yield('content')

            </div><!--/span-->


        </div><!--/row-->

        <footer class="row">
            @include('includes.footer')
        </footer>
    </div><!--/.container-->
</body>
</html>


