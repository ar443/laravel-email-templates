<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Email Templates')</title>
        <script src="../../assets/ckeditor/ckeditor.js"></script>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <style>
        .input-container {
            display: inline-block;
            margin-bottom: 10px;
        }
        .input-container input[type="text"] {
            font-size: 24px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
            width: 300px;
        }
    </style>
</head>
<body>
    <div class="container mt-3">
        @yield('content')
    </div>
</body>
<script>
    CKEDITOR.replace('body');
</script>
</html>
