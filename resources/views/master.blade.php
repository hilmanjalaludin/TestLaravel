<!DOCTYPE html>
<html lang="en">
<head>
	@include('includes.head')		
</head>
<body> 
	<header >
	@include('includes.navbar')
	</header>
		@yield('konten')
	@include('includes.footer')
