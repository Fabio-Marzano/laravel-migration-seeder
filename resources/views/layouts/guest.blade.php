<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <a href="{{ route('homepage') }}" class="btn btn-sm btn-primary">Home</a>
                    <a href="{{ route('trains') }}" class="btn btn-sm btn-primary">Trains</a>
                </div>
            </div>
        </div>
    </div>
    <main>
        @yield('content')
    </main>
</body>
</html>