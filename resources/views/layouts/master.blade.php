<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body style="overflow-y:visible !important;margin-right: -15px;overflow-x:hidden;">
	<!-- loadpage -->
		
@include('layouts.header') 

@yield('content')
</body>
@include('layouts.footer')