@extends('admin.layout.index')

@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-table"></i> {{$title}}</span>
    </div>
    <div class="mws-panel-body no-padding">
        <table class="mws-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>分类名称</th>
                    <th>父级ID</th>
                    <th>分类路径</th>
                    <th>状态</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
            	@foreach($data as $k=>$v)
                <tr>
                    <td>{{$v->id}}</td>
                    <td>{{$v->cname}}</td>
                    <td>{{$v->pid}}</td>
                    <td>{{$v->path}}</td>
                    <td>{{$v->status == 0 ? '启用' : '未启用' }}</td>
                    <td>
                    	<a href="" class="btn btn-danger">删除</a>　
                    	<a href="/admin/cates/{{$v->id}}/edit" class="btn btn-warning">修改</a>　
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection