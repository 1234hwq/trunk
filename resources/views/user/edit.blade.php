<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>用户修改</title>
</head>
<body>
  <table>
      <form action="{{url('user/update')}}" method="post">
          <tr>
              {{csrf_field()}}
              <input type="hidden" name="id" value="{{$user->id}}">
              <td>用户名</td>
              <td><input type="text" name="username" value="{{$user->username}}"></td>
          </tr>
          <tr>
              <td>密码</td>
              <td><input type="password" name="password" value="{{$user->password}}"></td>
          </tr>
          <tr>
              <td></td>
              <td><input type="submit" value="修改"></td>
          </tr>
      </form>
  </table>
</body>
</html>
