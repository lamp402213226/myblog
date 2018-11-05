@extends('admin.layout.index')
@section('css')
<link rel="stylesheet" href="/admin/layui-v2.4.5/layui/css/layui.css">
@endsection
@section('content')
<script src="/admin/layui-v2.4.5/layui/layui.all.js"></script>
<script>
//由于模块都一次性加载，因此不用执行 layui.use() 来加载对应模块，直接使用即可：
;!function(){
  var layer = layui.layer
  ,form = layui.form;
}();
</script>
<div class="mws-panel grid_8">
    	<div class="mws-panel-header">
        	<span><i class="icon-table"></i> {{ $title or '' }}</span>
        </div>
        <div class="mws-panel-body no-padding">
            <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
			 <form action="/admin/articles" method="get">
			 	  <input type="hidden" name="c_a" value="4">
				  <div id="DataTables_Table_1_length" class="dataTables_length">
				    <label>显示
				      <select size="1" name="showCount" aria-controls="DataTables_Table_1">
				        <option value="5" @if((isset($request['showCount']) && !empty($request['showCount'])) && $request['showCount'] == 5) selected @endif>5</option>
				        <option value="10" @if((isset($request['showCount']) && !empty($request['showCount'])) && $request['showCount'] == 10) selected @endif>10</option>
				        <option value="20" @if((isset($request['showCount']) && !empty($request['showCount'])) && $request['showCount'] == 20) selected @endif>20</option>
				        <option value="30" @if((isset($request['showCount']) && !empty($request['showCount'])) && $request['showCount'] == 30) selected @endif>30</option>
				    </select>条</label>
				  </div>
				  <div class="dataTables_filter" id="DataTables_Table_1_filter">
				    <label>关键字:
				      <input type="text" name="search" value="{{ $request['search'] or ''}}" aria-controls="DataTables_Table_1"></label>
				  	<input type="submit" value="提交" class="btn btn-info">
				  </div>
			   </form>

            <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
			  <tr>
			  	<th>ID</th>
			  	<th>所属分类pid</th>
			  	<th>标题</th>
			  	<th>作者</th>
			  	<th>缩略图</th>
			  	<th>创建时间</th>
			  	<th>状态</th>
			  	<th>操作</th>
			  </tr>
			  @foreach($articles as $k=>$v)
			  <tr align="center">
				  <td>{{ $v->id }}</td>
				  <td>{{ $v->articlescates->cname }}</td>
				  <td>{{ $v->title }}</td>
				  <td>{{ $v->auth }}</td>
				  <td>
				  	<img src="/uploads/{{ $v->thumb }}" style="width: 80px;height: 40px;border-radius: 5px;">
				  </td>
				  <td>{{ $v->created_at }}</td>
				  <td>{{ $v->status == 1 ? '激活' : '未激活' }}</td>
				  <td>
				  	<a href="">删除</a>
				  	<a href="">修改</a>
				  	<a href="javascript:;" class="btn btn-info" id="{{ $v->id }}" onclick="ar_show(this)">查看详情</a>
				  </td>
			   </tr>
			   @endforeach
			</table>
			<div class="dataTables_info" id="DataTables_Table_1_info">Showing 1 to 10 of 57 entries</div>
			<div id="page_page">
				{!! $articles->appends($request)->render() !!}	
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	// 查看文章
	function ar_show(obj)
	{
		// 获取文章id
		var id = $(obj).attr('id');
		layer.open({
		  title:'文章详情',
		  type: 2,
		  area: ['700px', '450px'],
		  fixed: false, //不固定
		  maxmin: true,
		  content: '/admin/articles/'+id
		});
	}

</script>
<script type="text/javascript">
	$('table tr').mouseover(function(){
		$(this).css('background','#C7E4D6');
	}).mouseout(function(){
		$(this).css('background','');
	})
</script>
@endsection