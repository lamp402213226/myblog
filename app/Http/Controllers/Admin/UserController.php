<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\User;
use Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // 获取用户信息
        $data = User::orderBy('id','asc')->paginate(10);
        //加载模版
        return view('admin.user.index',['title'=>'用户列表','data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //加载模版
        return view('admin.user.create',['title'=>'用户添加']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //验证数据的合法性
        $validator = Validator::make($request->all(), [
            'email' => 'required|unique:users|email',
            'password' => 'required|regex:/^[\w]{6,18}$/',
            'repassword' => 'required|same:password',
        ],[
            'email.required' => '邮箱必填',
            'email.unique' => '邮箱已存在',
            'email.email' => '邮箱格式不正确',
            'password.required' => '密码必填',
            'password.regex' => '格式不正确',
            'repassword.required' => '确认密码必填',
            'repassword.same' => '俩次密码不一致',
        ])->validate();

        // 将数据插入到数据库
        $user = new User;
        $user -> email = $request -> input('email');
        $user -> password = Hash::make($request -> input('password','123456'));
        $user -> token = str_random(50);    
        if($user -> save()){
            return redirect('admin/user')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = User::find($id);
       if($user -> delete()){
            return redirect('admin/user')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }


    /**
     * 回收站
     */
    public function info()
    {
        // 获取被删除的用户
        $data = User::onlyTrashed()->orderBy('id','asc')->paginate(10);
        //加载模版
        return view('admin.user.info',['title'=>'删除用户列表','data'=>$data]);
    }

    /**
     * 恢复数据
     */
    public function recover($id)
    {
        $res = User::withTrashed() ->where('id', $id) ->restore();
        if($res){
            return redirect('admin/user')->with('success','恢复成功');
        }else{
            return back()->with('error','恢复失败');
        }
    }
}
