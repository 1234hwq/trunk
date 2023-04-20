<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>用户添加</title>
</head>
<body>
  <table>
      <form action="{{url('user/store')}}" method="post">
          <tr>
              {{csrf_field()}}
              <td>用户名</td>
              <td><input type="text" name="username"></td>
          </tr>
          <tr>
              <td>密码</td>
              <td><input type="password" name="password"></td>
          </tr>
          <tr>
              <td></td>
              <td><input type="submit" value="提交"></td>
          </tr>
      </form>
  </table>
</body>
</html>
