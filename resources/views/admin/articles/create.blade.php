@extends('admin.layout.index')

@section('title','Master')
@section('css')

@endsection
@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span>{{ $title }}</span>
    </div>
    <div class="mws-panel-body no-padding">
    	<form class="mws-form" action="{{ url('admin/articles') }}" method="post" enctype="multipart/form-data">
    		{{ csrf_field() }}
    		<div class="mws-form-inline">
    			
    			<div class="mws-form-row">
    				<label class="mws-form-label">所属标签</label>
                    <div class="mws-form-item">
                        <!-- 标签 -->
                        @foreach($common_labels_data as $k=>$v)
                        <div class="b-btn" style="background: {{ $v->tcolor }}" cid="{{ $v->cid }}" id="{{ $v->id }}">{{ $v->tname }}</div>
                        @endforeach
    				</div>
    			</div>
    			<div class="mws-form-row">
    				<label class="mws-form-label">所属类别</label>
    			     <div class="mws-form-item">
                        <select class="small" name="cid">
                            <option value="0">--请选择--</option>
                            @foreach($common_cates_data as $k=>$v)
                            <option value="{{$v->id}}">{{$v->cname}}</option>
                            @endforeach
                        </select>
                    </div>
    			</div>
                <div class="mws-form-row">
                    <label class="mws-form-label">文章标题</label>
                    <div class="mws-form-item">
                        <input type="text" name="title" class="small">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">作者</label>
                    <div class="mws-form-item">
                       <input type="text" name="auth" value="Masterss_大师" class="small">
                    </div>
                </div>
                <div class="mws-form-row" style="width:725px;">
                    <label class="mws-form-label">文章缩略图</label>
                    <div class="mws-form-item">
                       <input type="file" name="thumb" style="">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">文章内容</label>
                    <div id="atype" style="position: relative;left:20px;margin-bottom: 10px;">
                        <b>Markdown  格式 </b><input type="radio" name="atype" value="1">　　　
                        <b>InnerHTML 格式 </b><input type="radio" name="atype" value="2">
                    </div>
                    <div class="mws-form-item" style="position: relative;left: -100px;">
                        <div class="ar_con">
                            <!-- 编辑器 -->
                        </div>
                    </div>
                </div>
                <!-- markdown编辑器 -->
    			<div id="test-editormd">
                    <textarea name="content" style="display:none;"></textarea>
                </div>
    		</div>
    		<div class="mws-button-row">
    			<input type="submit" value="Submit" class="btn btn-danger">
    			<input type="reset" value="Reset" class="btn ">
    		</div>
    	</form>
    </div>    	
</div>


<!-- markdown 编辑器 -->
@include('markdown::encode',['editors'=>['test-editormd']])

 <!-- 配置文件 -->
<script type="text/javascript" src="/utf8-php/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="/utf8-php/ueditor.all.js"></script>
<!-- 实例化编辑器 -->
<script type="text/javascript">
    // var ue = UE.getEditor('container');
</script>

@endsection