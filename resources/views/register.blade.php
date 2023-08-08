@extends('index')

@section('master')

<div class="container">
    <img src="/img/logo.jpg" alt="Animated Image" class="animated-image">
    <div class="form-container">
        <form action="/register" id="register-form" method="post" class="form">
            {{-- untuk token --}}
            @csrf

            {{-- munculkan error ketika validasi gagal --}}
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif



            <h2>Register</h2>

            <input type="name" name="name" id="name" placeholder="Name">
            <input type="email" name="email" id="email" placeholder="Email">
            <input type="username" name="username" id="username" placeholder="Username">
            <input type="password" name="password" id="password" placeholder="Password">

            <button type="submit" name="submit" class="text-white">Register</button>
            <p>Sudah Punya Akun? <a href="">Login</a></p>

        </form>

    </div>
</div>

@endsection
