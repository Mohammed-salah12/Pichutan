<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CodePen - A Pen by Mohithpoojary</title>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'>
    <link rel="stylesheet" href="{{ asset('login.css') }}">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        .swal-modal.success-flash {
            border-color: #28a745 !important;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="screen">
        <div class="screen__content">
            <form method="POST" action="{{ route('user.login.post') }}" class="login">
                @csrf
                <div class="login__field">
                    <i class="login__icon fas fa-user"></i>
                    <input type="text" name="email" class="login__input" placeholder="User name / Email" required>
                </div>
                <div class="login__field">
                    <i class="login__icon fas fa-lock"></i>
                    <input type="password" name="password" class="login__input" placeholder="Password" required>
                </div>
                <button type="submit" class="button login__submit">
                    <span class="button__text">Log In Now</span>
                    <i class="button__icon fas fa-chevron-right"></i>
                </button>
            </form>
            <p class="par">Don't you have an account? <a href="{{ route('user.register') }}">Register here</a></p>
        </div>
        <div class="screen__background">
            <span class="screen__background__shape screen__background__shape4"></span>
            <span class="screen__background__shape screen__background__shape3"></span>
            <span class="screen__background__shape screen__background__shape2"></span>
            <span class="screen__background__shape screen__background__shape1"></span>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        @if(session()->has('flash_message'))
        let flashMessage = @json(session('flash_message'));
        if (flashMessage.type === 'success') {
            swal({
                title: "Success",
                text: flashMessage.message,
                icon: "success",
                button: "OK",
                className: "success-flash"
            });
        } else if (flashMessage.type === 'error') {
            swal({
                title: "Error",
                text: flashMessage.message,
                icon: "error",
                button: "OK",
                className: "error-flash"
            });
        }
        @endif
    });
</script>
</body>
</html>

