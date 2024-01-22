<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login – Laptop-Store22</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: url('/assets/img/walpaper.jpg') center center fixed;
            background-size: cover;
        }

        h2 {
            color: #ffffff;
            /* Warna hijau */
            font-family: 'Arial', sans-serif;
        }

        .btn-primary {
            background-color: #ff2222;
            /* Warna oranye */
            border-color: #ff2222;
        }

        .btn-primary:hover {
            background-color: #3819e6;
            /* Warna oranye yang lebih gelap saat dihover */
            border-color: #3819e6;
        }
    </style>
</head>

<body>
    <div class="container"><br>
        <div class="col-md-4 col-md-offset-4">
            <h2 class="text-center"><b>Laptop-Store22</b><br>Laptop Berkualitas</h2>
            <hr>
            @if (session('error'))
                <div class="alert alert-danger"><b>Oops!</b>{{ session('error') }}</div>
            @endif

            <form action="{{ route('actionlogin') }}" method="post">
                @csrf
                <div class="form-group">
                    <label><i class="glyphicon glyphicon-envelope" style="color: #ffffff"></i> Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <label><i class="glyphicon glyphicon-lock" style="color: #ffffff"></i> Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Log In</button>
                <hr>
                <p class="text-center" style="color: #ffffff">Belum punya akun? <a href="/register">Register</a>
                    sekarang!</p>
            </form>
        </div>
    </div>
</body>

</html>
