@extends('index')


@section('master')

<form action="/login" method="post">
    <div class="container">
        <img src="/img/logo.jpg" alt="Animated Image" class="animated-image">
        <div class="form-container">
            @csrf

            @if (session('fail'))
            <div class="alert alert-danger">
                {{ session('fail') }}
            </div>
            @endif


            <h2>Login</h2>
            <p>Hey,Enter your details to get sign in to your account</p>
            <input class="email" type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button class="btn btn-primary">Login</button>
            <p>Belum Punya akun? <a href="">Daftar</a></p>
        </div>
    </div>
</form>

@endsection
