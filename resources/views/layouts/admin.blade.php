<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>@yield('title','Movie Admin')</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
</head>
<body>
<div class="d-flex min-vh-100">
@include('admin.partials.sidebar')
<div class="main flex-grow-1">
@include('admin.partials.header')
<div class="p-4">@yield('content')</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body></html>