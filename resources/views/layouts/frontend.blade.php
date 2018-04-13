

<!DOCTYPE html>
<html>

<head>
    <title>Matabilitas | Buka Mata Peduli Sesama</title>
    <!-- Icon Task Bar-->
    <link rel="icon" type="image/png" href="{{ asset('app-assets/images/nav.png') }}"/>

    <!--/tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Conceit Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--//tags -->
    <link href="{{ asset('app-assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('app-assets/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('app-assets/css/prettyPhoto.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('app-assets/css/font-awesome.css') }}" rel="stylesheet">
    <!-- //for bootstrap working -->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,300,300i,400,400i,500,500i,600,600i,700,800" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
</head>

<body>
@include('includes.div_header')

@yield('content')

<!-- footer -->
@include('includes.div_footer')

@include('includes.script')

</body>

</html>