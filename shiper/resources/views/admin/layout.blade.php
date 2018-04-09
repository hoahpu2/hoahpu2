<!DOCTYPE html>
<html>
<head>
	@include('admin.template.header')
</head>
<body class="{{ isset($body) ? $body : '' }}">
	@yield('content')
	@include('admin.template.footer')
</body>
</html>