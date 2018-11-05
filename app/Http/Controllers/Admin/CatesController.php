<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cates;
use DB;
class CatesController extends Controller
{
    // 处理前台的分类
    public static function getPidCates($pid = 0)
    {
        $data = Cates::where('pid',$pid)->get();
        $arr = [];
        foreach ($data as $key => $value) {
            $value['sub'] = self::getPidCates($value->id);
            $arr[] = $value;
        }
        return $arr;
    }
    // 处理分类
    public static function getCates()
    {
        $data = DB::table('cates')->select(DB::raw("*,concat(path,',',id) as paths"))->orderBy('paths')->get();
        foreach ($data as $key => $value) {
            // 统计一个字符串在另一个字符串出现次数
            $len = substr_count($value->path,',');
            // $data[$key]['name']
            // |----男装
            // 重复的使用一个字符串
           $data[$key]->cname = str_repeat('|----',$len).$value->cname;
        }
        return $data;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //显示分类
        return view('admin.cates.index',['title'=>'分类列表','data'=>self::getCates()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //添加分类的模版
        return view('admin.cates.create',['title'=>'添加分类','data'=>self::getCates()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $temp = $request -> except('_token');
        $pid = $temp['pid'];

        if($pid == 0){
            // 顶级分类
            $temp['path'] = 0;
        }else{
            // 不是顶级分类
            $parentData =   Cates::find($pid);
            $temp['path'] =  $parentData['path'].','.$parentData['id'];
        }
        //将数据插入到数据库
        $res =Cates::insert($temp);
        if($res){
            return redirect('/admin/cates')->with('success','添加成功');
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
        //获取要修改的数据
        $res = Cates::find($id);
        return view('admin.cates.edit',['title'=>'修改分类','data'=>self::getCates(),'res'=>$res]);
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
        // 查询 当前分类下面是否有子类
        $res = DB::table('cates')->where('pid',$id)->first();
        if($res){
            return back()->with('error','当前类别有子类，不允许修改');
        }
        // 获取数据
        $temp = $request -> except('_token','_method');
        
        $pid = $temp['pid'];

        if($pid == 0){
            // 顶级分类
            $temp['path'] = 0;
        }else{
            // 不是顶级分类
            $parentData =   Cates::find($pid);
            $temp['path'] =  $parentData['path'].','.$parentData['id'];
        }
        //将数据插入到数据库
        $res =Cates::where('id',$id)->update($temp);
        if($res){
            return redirect('/admin/cates')->with('success','修改成功');
        }else{
            return back()->with('error','修改失败');
        }
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
    }
}
