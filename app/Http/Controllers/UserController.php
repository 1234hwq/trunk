<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // 用户列表页
    public function index()
    {
        // 获取用户数据
        $user = User::get();
        // 返回用户列表
        return view('user.list', compact('user'));
//        return view('user.list', ['users' => $users]);
//        return view('user.list.')->with('users', $users);
    }

    /**
     * 用户添加页面
     * $param null
     * @return 返回添加页面
     */
    public function add()
    {
        return view('user.add');
    }

    /**
     * 执行用户添加操作
     * $param 用户表单提交的数据
     * @return 返回添加是否成功
     */
    public function store(Request $request)
    {
        // 获取客户端提交的表单数据
        $input = $request->except('_token');
        $input['password'] = md5($input['password']);
        // 表单验证
        // 添加操作
        $res = User::create($input);
        if ($res) {
            return redirect('user/index');
        } else {
            return back();
        }
    }

    //修改页面
    public function edit($id)
    {
        // 获取用户数据
        $user = User::find($id);
        // 返回用户列表
        return view('user.edit', compact('user'));
    }

    // 执行修改
    public function update(Request $request)
    {
        $input = $request->all();
        $user = User::find($input['id']);
        // 将提交过来的用户名替换掉原来的用户名
        $res = $user->update(['username' => $input['username']]);
        // 验证是否成功
        if ($res) {
            return redirect('user/index');
        } else {
            return back();
        }
    }

    // 执行删除
    public function delete($id)
    {
        // 获取用户数据
        $user = User::find($id);
        // 返回用户列表
        $res = $user->delete();
        if ($res) {
            $data = [
                'status' => 0,
                'message' => '删除成功',
            ];
        } else {
            $data = [
                'status' => 1,
                'message' => '删除失败',
            ];
        }
        dd($data);
        return $data;
    }
}
