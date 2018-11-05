@extends('admin.layout.index')

@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span>{{$title}}</span>
    </div>
    <div class="mws-panel-body no-padding">
    	<form class="mws-form" action="/admin/cates/{{$res->id}}" method="post">
    		{{ csrf_field() }}
            {{ method_field('PUT') }}
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<label class="mws-form-label">分类名称</label>
    				<div class="mws-form-item">
    					<input type="text" class="small" name="cname" value="{{$res->cname}}">
    				</div>
    			</div>
    			<div class="mws-form-row">
    				<label class="mws-form-label">父类名称</label>
    				<div class="mws-form-item">
    					<select class="small" name="pid">
    						<option value="0">--请选择--</option>
    						@foreach($data as $k=>$v)
    						<option value="{{$v->id}}" {{$res->pid == $v->id ? 'selected' : ''}}>{{$v->cname}}</option>
    						@endforeach
    					</select>
    				</div>
    			</div>
    			
    			
    		</div>
    		<div class="mws-button-row">
    			<input type="submit" value="修改" class="btn btn-danger">
    			<input type="reset" value="重置" class="btn ">
    		</div>
    	</form>
    </div>    	
</div>
@endsection