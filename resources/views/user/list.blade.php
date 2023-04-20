<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="../../js/layui/src/layui.js"></script>
</head>

<body>
    <table>
        <tr>
            <td>ID</td>
            <td>用户名</td>
            <td>密码</td>
            <td>操作</td>
        </tr>
        @foreach($user as $v)
        <tr>
            <td>{{$v->id}}</td>
            <td>{{$v->username}}</td>
            <td>{{$v->password}}</td>
            <td><a href="/user/edit/{{$v->id}}">修改</a> | <a href="/user/delete/{{$v->id}}">删除</a></td>
        </tr>
            @endforeach
    </table>
</body>
<style>
    table{
        width: 100%;
        border: 1px solid #000;
    }
    td{
        border: 1px solid #000;
    }
</style>
{{--<script>--}}
{{--    function del(id) {--}}
{{--        layui.use('layer', function(){--}}
{{--            var layer = layui.layer;--}}
{{--            layer.confirm('确认删除吗？', {--}}
{{--                btn: ['确认','取消'] //按钮--}}
{{--            }, function(){--}}
{{--                $.ajax({--}}
{{--                    url: '/user/delete/'+id,--}}
{{--                    type: 'get',--}}
{{--                    dataType: 'json',--}}
{{--                    success: function (res) {--}}
{{--                        if (res.code == 200) {--}}
{{--                            layer.msg(res.msg, {icon: 1});--}}
{{--                            setTimeout(function () {--}}
{{--                                location.reload();--}}
{{--                            }, 1000);--}}
{{--                        } else {--}}
{{--                            layer.msg(res.msg, {icon: 2});--}}
{{--                        }--}}
{{--                    }--}}
{{--                });--}}
{{--            }, function(){--}}
{{--                layer.msg('取消删除', {icon: 2});--}}
{{--            });--}}
{{--        });--}}
{{--    }--}}
{{--</script>--}}
</html>
