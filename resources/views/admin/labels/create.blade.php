@extends('admin.layout.index')

@section('title','Master')

@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span>{{ $title }}</span>
    </div>
    <div class="mws-panel-body no-padding">
    	<form class="mws-form" action="{{ url('admin/labels') }}" method="post">
    		{{ csrf_field() }}
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<label class="mws-form-label">名称</label>
    				<div class="mws-form-item">
    					<input type="text" name="tname" class="small">
    				</div>
    			</div>
    			<div class="mws-form-row">
    				<label class="mws-form-label">颜色</label>
    				<div class="mws-form-item">
    					<input type="color" name="tcolor">
    				</div>
    			</div>
    			<div class="mws-form-row">
    				<label class="mws-form-label">所属类别</label>
    			     <div class="mws-form-item">
                        <select class="small" name="pid">
                            <option value="0">--请选择--</option>
                            @foreach($common_cates_data as $k=>$v)
                            <option value="{{$v->id}}">{{$v->cname}}</option>
                            @endforeach
                        </select>
                    </div>
    			</div>
    			
    		</div>
    		<div class="mws-button-row">
    			<input type="submit" value="Submit" class="btn btn-danger">
    			<input type="reset" value="Reset" class="btn ">
    		</div>
    	</form>
    </div>    	
</div>
@endsection