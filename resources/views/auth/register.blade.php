<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="{{ asset('login.css') }}">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</head>

<body>
<div class="container">
    <div class="screen">
        <div class="screen__content">
            <form class="login" method="POST" action="{{ route('user.register.post') }}">
                @csrf
                <div class="login__field">
                    <i class="login__icon fas fa-user"></i>
                    <input type="email" class="login__input" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                </div>
                <div class="login__field">
                    <i class="login__icon fas fa-lock"></i>
                    <input type="password" class="login__input" name="password" placeholder="Password" required>
                </div>
                <!-- Display validation errors here -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <button type="submit" class="button login__submit">
                    <span class="button__text">Register Now</span>
                    <i class="button__icon fas fa-chevron-right"></i>
                </button>
            </form>
        </div>
        <div class="screen__background">
            <span class="screen__background__shape screen__background__shape4"></span>
            <span class="screen__background__shape screen__background__shape3"></span>
            <span class="screen__background__shape screen__background__shape2"></span>
            <span class="screen__background__shape screen__background__shape1"></span>
        </div>
    </div>
</div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>





</body>
</html>
