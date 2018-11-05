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
                    <td>{{ $v->email }}</td>
                    <td>{{ $v->type==1 ? '普通用户' : 'VIP用户'}}</td>
                    <td>{{ $v->status==1 ? '未激活' : '激活' }}</td>
                    <td>
                    	<form style="display: inline;" action="/admin/user/{{$v->id}}" method="post">
                    		{{csrf_field()}}
                    		{{method_field('DELETE')}}
                    		<input type="submit" onclick="return confirm('确认要删除')" value="删除" class="btn btn-danger">
                    	</form>
                    	<a href="" class="btn btn-warning">修改</a>
                    	<a href="" class="btn btn-info">查看详情</a>
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