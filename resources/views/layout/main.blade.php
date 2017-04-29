<html>
<head>
	<meta charset="utf-8">
	<title>留言板</title>
	<link rel="stylesheet" href="{{URL::asset('css/blog/blog.css')}}">
	<link rel="stylesheet" href="{{URL::asset('css/blog/pagination.css')}}">
	
</head>

<body>
	@yield('message')
</body>

<footer>
	@yield('pages')
</footer>

</html>