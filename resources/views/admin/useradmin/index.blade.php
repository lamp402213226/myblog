@extends('admin.layout.index')

@section('title','Master')

@section('content')

<div class="mws-panel grid_8">
<div class="mws-panel-header">
	<span><i class="icon-table"></i> {{ $title }}</span>
</div>
<div class="mws-panel-body no-padding">
    <table class="mws-table">
        <thead>
            <tr>
                <tr>
                    <th>ID</th>
                    <th>用户名</th>
                    <th>邮箱</th>
                    <th>用户类型</th>
                    <th>状态</th>
                    <th>操作</th>
                </tr>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $k=>$v)
                <tr style="text-align: center;">
                    <td>{{ $v->id }}</td>
                    <td>{{ $v->username }}</td>
                    <td>{{ $v->email }}</td>
                    <td>{{ $v->type==1 ? '普通管理员' : '超级管理员'}}</td>
                    <td>{{ $v->status==1 ? '未激活' : '激活' }}</td>
                    <td>
                    	<a href="" class="btn btn-warning">修改</a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
</div>
</div>
<div id="page_page">
	{{$data->render()}}
</div>
@endsection