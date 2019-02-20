<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserSignUpRequest;
use App\User;


class UsersController extends Controller
{
    public function store(UserSignUpRequest $request){
        //1.拿到表单数据2.验证数据3.保存数据到数据库4.发送邮件
        $data = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password'=>bcrypt($request->get('password')),
        ];

        User::register($data);

        return redirect('/success');
    }
}
