<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <style>
            body {
                background-image: url('https://img.freepik.com/free-vector/white-abstract-background-design_23-2148825582.jpg?w=1380&t=st=1699942129~exp=1699942729~hmac=be93ff133f2a1a8884f1c8a9a25e7e5de9bec6d6625886f375254b98842f77ce');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center center;
                height: 100%;
            }
        </style>
    </head>
    <body class="antialiased bg-light">
        <div class="container relative sm:flex sm:justify-center sm:items-center ">
            <div class="alert alert-dark" role="alert">
                    <div class="max-w-7xl mx-auto p-6 lg:p-8">
                        <div class="text-center">
                            <h1 class="text-4xl font-bold text-gray-800 dark:text-white">Teste Laravel</h1>
                        </div>
                    </div>
                    <div class=" mt-16">
                        <div class="text-center">
                            <h1 class="text-4xl font-bold text-gray-800 dark:text-white">Envie o arquivo</h1>
                        </div>
                    </div>
                    <div class="mt-16 text-center">
                        <form method="POST" action="{{ route('upload') }}" enctype="multipart/form-data"
                            class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            @csrf
                            <div class="form-group text-center">
                                <label for="doc">Arquivo</label>
                                <input type="file" class="form-control-file text-center" id="doc" name="doc">
                            </div>
                            <button type="submit" class="btn btn-info">Enviar</button>
                            <br>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
