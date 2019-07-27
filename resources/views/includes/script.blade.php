<script type="text/javascript">
    const jsPage = {};
</script>
@section('css_app')
<!-- Global stylesheets -->
    <link href="{{ asset('themes/global_assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" media="screen" />
    <link href="{{ asset('themes/global_assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="{{ asset('themes/global_assets/css/stylesheet.css') }}" rel="stylesheet">
    <link href="{{ asset('themes/global_assets/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('themes/global_assets/owl-carousel/owl.carousel.css') }}" type="text/css" rel="stylesheet" media="screen" />
    <link href="{{ asset('themes/global_assets/owl-carousel/owl.transitions.css') }}" type="text/css" rel="stylesheet" media="screen" />
    <script src="{{ asset('themes/global_assets/javascript/jquery-2.1.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('themes/global_assets/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('themes/global_assets/javascript/jstree.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('themes/global_assets/javascript/template.js') }}" type="text/javascript" ></script>
    <script src="{{ asset('themes/global_assets/javascript/common.js') }}" type="text/javascript"></script>
    <script src="{{ asset('themes/global_assets/javascript/global.js') }}" type="text/javascript"></script>
    <script src="{{ asset('themes/global_assets/owl-carousel/owl.carousel.min.js') }}" type="text/javascript"></script>
    
    <!-- Developer css -->
@endsection

@section('js_app')
    <!-- Core JS files -->

    <!-- Developer js -->
    <script src="{{ asset('themes/global_assets/js/main/jquery.min.js') }}"></script>

@endsection

@section('additional_js')
    <script src="{{ asset('themes/js/jquery.mask.js') }}"></script>
    <script src="{{ asset('themes/js/jquery-ui.js') }}"></script>
@endsection