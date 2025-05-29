<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Login - Health Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #4a90e2;
            --success-color: #28a745;
            --warning-color: #ffc107;
            --danger-color: #dc3545;
            --light-gray: #f8f9fa;
            --border-color: #e9ecef;
            --gradient-primary: linear-gradient(135deg, #6AC9BB 0%, #0D6E88 100%);
            --gradient-accent: linear-gradient(135deg, #ffeaa7 0%,rgb(162, 241, 167) 100%);
        }

        body {
            background: var(--gradient-primary);
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .login-container {
            max-width: 450px;
            width: 100%;
        }

        .login-card {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
            position: relative;
            overflow: hidden;
        }

        .login-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient-accent);
        }

        .brand-section {
            text-align: center;
            margin-bottom: 40px;
        }

        .brand-logo {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: var(--gradient-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: white;
            font-size: 32px;
            box-shadow: 0 8px 32px rgba(102, 126, 234, 0.4);
        }

        .brand-title {
            font-size: 28px;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 8px;
        }

        .brand-subtitle {
            color: #6c757d;
            font-size: 16px;
            font-weight: 400;
        }

        .form-group {
            margin-bottom: 24px;
        }

        .form-label {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .form-control {
            border: 2px solid #e9ecef;
            border-radius: 12px;
            padding: 16px 20px;
            font-size: 16px;
            transition: all 0.3s ease;
            background-color: #f8f9fa;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 4px rgba(74, 144, 226, 0.1);
            background-color: white;
        }

        .input-group {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
            font-size: 16px;
            z-index: 2;
        }

        .form-control.with-icon {
            padding-left: 50px;
        }

        .password-toggle {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #6c757d;
            cursor: pointer;
            padding: 0;
            z-index: 2;
        }

        .password-toggle:hover {
            color: var(--primary-color);
        }

        .form-check {
            margin-bottom: 24px;
        }

        .form-check-input {
            border-radius: 6px;
            border: 2px solid #e9ecef;
            width: 18px;
            height: 18px;
        }

        .form-check-input:checked {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .form-check-label {
            font-size: 14px;
            color: #6c757d;
            margin-left: 8px;
        }

        .btn-login {
            background: var(--gradient-primary);
            border: none;
            border-radius: 12px;
            padding: 16px;
            font-size: 16px;
            font-weight: 600;
            color: white;
            width: 100%;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 32px rgba(102, 126, 234, 0.4);
            color: white;
        }

        .btn-login:active {
            transform: translateY(0);
        }

        .btn-login.loading {
            pointer-events: none;
        }

        .btn-login .spinner-border {
            width: 20px;
            height: 20px;
            margin-right: 8px;
        }

        .forgot-password {
            text-align: center;
            margin-top: 24px;
        }

        .forgot-password a {
            color: var(--primary-color);
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s ease;
        }

        .forgot-password a:hover {
            color: #357abd;
            text-decoration: underline;
        }

        .divider {
            text-align: center;
            margin: 32px 0;
            position: relative;
        }

        .divider::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background: #e9ecef;
        }

        .divider span {
            background: white;
            padding: 0 16px;
            color: #6c757d;
            font-size: 14px;
        }

        .social-login {
            display: flex;
            gap: 12px;
            margin-bottom: 32px;
        }

        .btn-social {
            flex: 1;
            padding: 12px;
            border: 2px solid #e9ecef;
            border-radius: 12px;
            background: white;
            color: #6c757d;
            font-size: 16px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .btn-social:hover {
            border-color: var(--primary-color);
            color: var(--primary-color);
            transform: translateY(-2px);
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
        }

        .btn-google {
            color: #db4437;
        }

        .btn-google:hover {
            border-color: #db4437;
            color: #db4437;
        }

        .btn-facebook {
            color: #4267B2;
        }

        .btn-facebook:hover {
            border-color: #4267B2;
            color: #4267B2;
        }

        .signup-link {
            text-align: center;
            padding-top: 24px;
            border-top: 1px solid #e9ecef;
            color: #6c757d;
            font-size: 14px;
        }

        .signup-link a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
        }

        .signup-link a:hover {
            text-decoration: underline;
        }

        .alert {
            border-radius: 12px;
            border: none;
            padding: 16px 20px;
            margin-bottom: 24px;
            font-size: 14px;
        }

        .alert-danger {
            background-color: #fdf2f2;
            color: #dc3545;
        }

        .alert-success {
            background-color: #f0f9f4;
            color: #28a745;
        }

        .floating-shapes {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1;
            pointer-events: none;
        }

        .shape {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 20s infinite linear;
        }

        .shape:nth-child(1) {
            width: 80px;
            height: 80px;
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .shape:nth-child(2) {
            width: 120px;
            height: 120px;
            top: 60%;
            right: 10%;
            animation-delay: -7s;
        }

        .shape:nth-child(3) {
            width: 60px;
            height: 60px;
            bottom: 20%;
            left: 20%;
            animation-delay: -14s;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-20px) rotate(180deg);
            }
        }

        @media (max-width: 576px) {
            .login-card {
                padding: 24px;
                margin: 12px;
                border-radius: 16px;
            }

            .brand-logo {
                width: 60px;
                height: 60px;
                font-size: 24px;
            }

            .brand-title {
                font-size: 24px;
            }

            .form-control {
                padding: 14px 16px;
            }

            .form-control.with-icon {
                padding-left: 46px;
            }

            .btn-login {
                padding: 14px;
            }
        }
    </style>
</head>

<body>
    <div class="floating-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <div class="login-container">
        <div class="login-card">
            <!-- Brand Section -->
            <div class="brand-section">
                <div class="brand-logo">
                    <i class="fas fa-heartbeat"></i>
                </div>
                <h1 class="brand-title">Healy</h1>
                <p class="brand-subtitle">Welcome back to your wellness journey</p>
            </div>

            <!-- Error/Success Messages -->
            @if(session('error'))
            <div class="alert alert-danger">
                <i class="fas fa-exclamation-circle me-2"></i>
                {{ session('error') }}
            </div>
            @endif

            @if(session('success'))
            <div class="alert alert-success">
                <i class="fas fa-check-circle me-2"></i>
                {{ session('success') }}
            </div>
            @endif

            <!-- Login Form -->
            <form action="{{ route('login') }}" method="POST" id="loginForm">
                @csrf

                <div class="form-group">
                    <label for="email" class="form-label">Email Address</label>
                    <div class="input-group">
                        <i class="input-icon fas fa-envelope"></i>
                        <input type="email" class="form-control with-icon @error('email') is-invalid @enderror"
                            id="email" name="email" value="{{ old('email') }}" placeholder="Enter your email" required>
                    </div>
                    @error('email')
                    <div class="invalid-feedback d-block">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <i class="input-icon fas fa-lock"></i>
                        <input type="password" class="form-control with-icon @error('password') is-invalid @enderror"
                            id="password" name="password" placeholder="Enter your password" required>
                        <button type="button" class="password-toggle" onclick="togglePassword()">
                            <i class="fas fa-eye" id="passwordToggleIcon"></i>
                        </button>
                    </div>
                    @error('password')
                    <div class="invalid-feedback d-block">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember" name="remember" {{ old('remember')
                        ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        Keep me signed in
                    </label>
                </div>

                <button type="submit" class="btn btn-login" id="loginBtn">
                    <span class="btn-text">Sign In</span>
                </button>
            </form>

            <!-- Forgot Password -->
            <div class="forgot-password">
                <a href="">Forgot your password?</a>
            </div>

            <!-- Social Login Divider -->
            <div class="divider">
                <span>or continue with</span>
            </div>

            <!-- Social Login Buttons -->
            <div class="social-login">
                <button type="button" class="btn btn-social btn-google" onclick="socialLogin('google')">
                    <i class="fab fa-google"></i>
                    Google
                </button>
                <button type="button" class="btn btn-social btn-facebook" onclick="socialLogin('facebook')">
                    <i class="fab fa-facebook-f"></i>
                    Facebook
                </button>
            </div>

            <!-- Sign Up Link -->
            <div class="signup-link">
                Don't have an account?
                <a href="{{ route('register') }}">Create one here</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Password toggle functionality
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.getElementById('passwordToggleIcon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        }

        // Form submission with loading state
        document.getElementById('loginForm').addEventListener('submit', function (e) {
            const submitBtn = document.getElementById('loginBtn');
            const btnText = submitBtn.querySelector('.btn-text');

            submitBtn.classList.add('loading');
            submitBtn.disabled = true;
            btnText.innerHTML = '<span class="spinner-border spinner-border-sm" role="status"></span>Signing in...';
        });

        // Social login function
        function socialLogin(provider) {
            // Replace with your Laravel social login route
            window.location.href = `/auth/${provider}`;
        }

        // Input focus animations
        document.addEventListener('DOMContentLoaded', function () {
            const inputs = document.querySelectorAll('.form-control');

            inputs.forEach(input => {
                input.addEventListener('focus', function () {
                    this.parentElement.classList.add('focused');
                });

                input.addEventListener('blur', function () {
                    if (!this.value) {
                        this.parentElement.classList.remove('focused');
                    }
                });

                // Check if input has value on page load
                if (input.value) {
                    input.parentElement.classList.add('focused');
                }
            });
        });

        // Auto-hide alerts after 5 seconds
        setTimeout(function () {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                alert.style.transition = 'opacity 0.5s ease';
                alert.style.opacity = '0';
                setTimeout(() => alert.remove(), 500);
            });
        }, 5000);
    </script>

    @stack('scripts')
</body>

</html>
