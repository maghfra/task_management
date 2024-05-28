<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        html, body {
          background-color: #fcfcee;
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        .btn-bordered {
            background-color: transparent;
            color: #d7c3c3;
            border: 2px solid #d7c3c3;
            padding: 0.5rem 1rem;
            border-radius: 10px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .btn-bordered:hover {
            background-color: #e7d0d0;
            color: white;
        }
        main {
            flex: 1;
        }
        footer {
            background-color: #e7d0d0;
            color: #fff;
            width: 100%;
        }
    </style>
</head>
<body>
    <nav class="py-3 navbar navbar-expand-lg" style="background-color: #e7d0d0;">
        <div class="container-fluid">
            <div class="mx-5">
                <i class="mx-2 fa-solid fa-list-check" style="font-size: 20px; color: #fff;"></i>
                <a class="navbar-brand" style="font-size: 18px; color: #fff;" href="{{ route('tasks.index') }}">Task Management</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="margin-left: 700px;">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="{{ route('tasks.index') }}" style="color: #fff;">Tasks</a>
                    <a class="nav-link" href="{{ route('statistics.index') }}" style="color: #fff;">Statistics</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>

    <footer class="text-center py-4">
        <div class="container">
            <p>&copy; 2024 Maghfera, Task Management. All rights reserved.</p>
            <div>
                <a href="#" class="text-white mx-2"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-white mx-2"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-white mx-2"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </footer>
</body>
</html>
