<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer; //user model cần kiểm tra
use Auth; //use thư viện auth

class UserController extends Controller
{
    public function getLogin()
    {
        //return ra trang login để đăng nhập
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $arr = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if ($request->remember == trans('remember.Remember Me')) {
            $remember = true;
        } else {
            $remember = false;
        }
        //kiểm tra trường remember có được chọn hay không

        if (Auth::guard('customer')->attempt($arr)) {

            dd('đăng nhập thành công');
            //..code tùy chọn
            //đăng nhập thành công thì hiển thị thông báo đăng nhập thành công
        } else {

            dd('tài khoản và mật khẩu chưa chính xác');
            //...code tùy chọn
            //đăng nhập thất bại hiển thị đăng nhập thất bại
        }
    }
}
