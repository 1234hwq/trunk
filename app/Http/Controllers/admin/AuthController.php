<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mews\Captcha\Facades\Captcha;
Class AuthController extends Controller
{
    public function getCaptcha()
    {
        return response()->json([
            'code' => \captcha_src() //返回前端图像验证码
        ]);
    }
}
