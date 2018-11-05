<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="/vendor/markdown/js/jquery.min.js"></script>
	<script src="/vendor/markdown/js/editormd.min.js"></script>
	<link rel="stylesheet" href="/vendor/markdown/css/editormd.min.css" />
	<link href="https://cdn.bootcss.com/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div id="doc-content">
    <textarea style="display:none;">
{{ $articles->content }}
    </textarea>
</div>
@include('markdown::decode',['editors'=>['doc-content']])
</body>
</html>