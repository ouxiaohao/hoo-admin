<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>hoo-admin</title>
    <link href="{{ mix('css/admin.css') }}" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        @include('admin.partials.sidebar')

        @include('admin.partials.header')

        @section('main')
        @show

        @include('admin.partials.footer')
    </div>
</div>

<script src="{{ mix('js/admin.js') }}"></script>

</body>
</html>
