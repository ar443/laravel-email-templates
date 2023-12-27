<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Email Template</title>
    <link rel="stylesheet" href="{{ asset('LaravelEmailTemplate/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('LaravelEmailTemplate/css/style.css') }}">
</head>

<body>
    <div class="editor">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script src={{ asset('LaravelEmailTemplate/js/bootstrap.bundle.min.js') }}></script>
    <script src={{ asset('LaravelEmailTemplate/js/ckeditor.js') }}></script>
    <script>
        CKEDITOR.replace('body');
    </script>
</body>

</html>
