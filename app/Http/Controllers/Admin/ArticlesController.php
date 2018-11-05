<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Articles;
class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $showCount = $request->input('showCount',5);
        $search = $request->input('search','');
        if($search){    
            $where = $search;
        }else{
            $where = '';
        }
        $articles = Articles::where('title','like','%'.$where.'%')->paginate($showCount);
      

        // 添加模版
        return view('admin.articles.index',['articles'=>$articles,'request'=>$request->all(),'title'=>'文章列表']);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 添加模版
        return view('admin.articles.create',['title'=>'文章添加']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = '';
        // 执行文件上传
        if ($request->hasFile('thumb')) {
            // 创建文件上传对象
            $thumb = $request->file('thumb');
            // 执行上传
            $path = $thumb->store(date('Ymd'));
        }
        // 赋值添加
        $articles = new Articles;
        $articles->cid = $request->input('cid','');
        $articles->title = $request->input('title','');
        $articles->auth = $request->input('auth','');
        $articles->thumb = $path;
        $articles->content = $request->input('content','');
        if($articles->save()){
            return redirect('admin/articles/?c_a=4')->with('success','添加成功');
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
        // 获取数据
        $articles = Articles::select('content')->find($id);
        return view('admin.articles.show',['articles'=>$articles]);
        
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
    }
}
