<!doctype html>
<html>
@include('layouts._header')
<body>
@yield('content')
<!-- JS 脚本 -->
@section('js')
    <!--_footer 作为公共模版分离出去-->
    <script type="text/javascript" src="{{asset('../../../public/admin/lib/jquery/1.9.1/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('../../../public/admin/lib/layer/2.4/layer.js')}}"></script>
    <script type="text/javascript" src="{{asset('../../../public/admin/static/h-ui/js/H-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('../../../public/admin/static/h-ui.admin/js/H-ui.admin.js')}}"></script> <!--/_footer 作为公共模版分离出去-->
@show
</body>
</html>
