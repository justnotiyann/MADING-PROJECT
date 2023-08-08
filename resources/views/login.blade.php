@extends('index')


@section('master')

<form action="" method="post">
    <div class="container">
        <img src="/img/logo.jpg" alt="Animated Image" class="animated-image">
        <div class="form-container">
            <form id="login-form" class="form">
                <h2>Login</h2>
                <p>Hey,Enter your details to get sign in to your account</p>
                <input class="username" type="username" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <input class="btn popular" type="submit" name="submit" value="Login">
                <p>Belum Punya akun? <a href="">Daftar</a></p>
            </form>
        </div>
    </div>
</form>

@endsection
