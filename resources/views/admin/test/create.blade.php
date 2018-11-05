<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>测试文件上传</h1>
	<form action="/admin/test" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
		头像： <input type="file" name="pic" value="">
		<input type="submit"  value="提交">
	</form>
	<h1>文件读取</h1>
	<img src="{{ url('/uploads/20180424/SjwHqDn3NGSvU7Z8w1Z2r4hpqZp8ml90hWfgErGA.jpeg') }}" width="300">
</body>
</html>