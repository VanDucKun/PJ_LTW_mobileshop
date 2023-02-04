<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>


    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- Styles -->
    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/index_home.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/fontnav_style.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/profile_style.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/footer.css') }}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    {{-- Font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        a {
            text-decoration: none !important;
        }
    </style>

</head>

<body>

@include('layouts.inc.frontnavbar')
<div class="content">
    @yield('content')
</div>

<div class="whatapp-chat">
    <a href="https://wa.me/xxx?text=I'm%20interested%20in%20your%20car%20for%20sale" target="_blank">
        <img src="{{ asset('assets/images/test.png') }}" alt="whatapp-logo" heigth="60px" width="60px">
    </a>
</div>



<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/xxx';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>

<script src="{{ asset('frontend/js/custom.js')}}"></script>

<!--End of Tawk.to Script-->

<script>
    var availableTags = [];
    $.ajax({
        method: "GET",
        url: "/product-list",
        success: function(response) {
            console.log(response);
            startAutoComplete(response);
        }
    });

    function startAutoComplete(availableTags) {
        $("#search_product").autocomplete({
            source: availableTags
        });
    }
</script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if(session('status'))
    <script>
        swal("{{ session('status') }}");
    </script>
@endif
<script src="https://kit.fontawesome.com/f1f646c5e0.js" crossorigin="anonymous"></script>
@yield('scripts')
@include('layouts.inc.footer')
</body>

</html>