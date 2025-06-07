<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Register - Health Dashboard'); ?></title>
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

        .register-container {
            max-width: 500px;
            width: 100%;
        }

        .register-card {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
            position: relative;
            overflow: hidden;
            min-height: 600px;
        }

        .register-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient-accent);
        }

        .progress-indicator {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 40px;
            gap: 20px;
        }

        .progress-step {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s ease;
            position: relative;
        }

        .progress-step.active {
            background: var(--gradient-primary);
            color: white;
            box-shadow: 0 4px 16px rgba(102, 126, 234, 0.4);
        }

        .progress-step.completed {
            background: var(--success-color);
            color: white;
        }

        .progress-step.inactive {
            background: #e9ecef;
            color: #6c757d;
        }

        .progress-line {
            width: 60px;
            height: 2px;
            background: #e9ecef;
            transition: all 0.3s ease;
        }

        .progress-line.completed {
            background: var(--success-color);
        }

        .step-label {
            text-align: center;
            margin-top: 8px;
            font-size: 12px;
            color: #6c757d;
        }

        .step-content {
            opacity: 0;
            transform: translateX(50px);
            transition: all 0.5s ease;
            position: absolute;
            top: 140px;
            left: 40px;
            right: 40px;
        }

        .step-content.active {
            opacity: 1;
            transform: translateX(0);
            position: relative;
            top: auto;
            left: auto;
            right: auto;
        }

        .brand-section {
            text-align: center;
            margin-bottom: 30px;
        }

        .brand-logo {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: var(--gradient-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 16px;
            color: white;
            font-size: 24px;
            box-shadow: 0 8px 32px rgba(102, 126, 234, 0.4);
        }

        .step-title {
            font-size: 24px;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 8px;
            text-align: center;
        }

        .step-subtitle {
            color: #6c757d;
            font-size: 14px;
            text-align: center;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .form-control, .form-select {
            border: 2px solid #e9ecef;
            border-radius: 12px;
            padding: 14px 18px;
            font-size: 15px;
            transition: all 0.3s ease;
            background-color: #f8f9fa;
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 4px rgba(74, 144, 226, 0.1);
            background-color: white;
        }

        .input-group {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
            font-size: 16px;
            z-index: 2;
        }

        .form-control.with-icon {
            padding-left: 48px;
        }

        .password-toggle {
            position: absolute;
            right: 18px;
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

        .gender-options {
            display: flex;
            gap: 12px;
            margin-top: 8px;
        }

        .gender-option {
            flex: 1;
            position: relative;
        }

        .gender-radio {
            display: none;
        }

        .gender-label {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 16px 12px;
            border: 2px solid #e9ecef;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            background: #f8f9fa;
        }

        .gender-label:hover {
            border-color: var(--primary-color);
            background: white;
        }

        .gender-radio:checked + .gender-label {
            border-color: var(--primary-color);
            background: rgba(74, 144, 226, 0.1);
        }

        .gender-icon {
            font-size: 24px;
            margin-bottom: 8px;
            color: #6c757d;
        }

        .gender-radio:checked + .gender-label .gender-icon {
            color: var(--primary-color);
        }

        .gender-text {
            font-size: 14px;
            font-weight: 600;
            color: #2c3e50;
        }

        .activity-level-options {
            display: grid;
            gap: 12px;
            margin-top: 8px;
        }

        .activity-option {
            position: relative;
        }

        .activity-radio {
            display: none;
        }

        .activity-label {
            display: flex;
            align-items: center;
            padding: 16px 18px;
            border: 2px solid #e9ecef;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            background: #f8f9fa;
        }

        .activity-label:hover {
            border-color: var(--primary-color);
            background: white;
        }

        .activity-radio:checked + .activity-label {
            border-color: var(--primary-color);
            background: rgba(74, 144, 226, 0.1);
        }

        .activity-content {
            flex: 1;
        }

        .activity-title {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 4px;
        }

        .activity-description {
            font-size: 13px;
            color: #6c757d;
        }

        .unit-toggle {
            display: flex;
            background: #e9ecef;
            border-radius: 8px;
            padding: 4px;
            margin-bottom: 16px;
        }

        .unit-option {
            flex: 1;
            padding: 8px 16px;
            border: none;
            background: none;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 600;
            color: #6c757d;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .unit-option.active {
            background: white;
            color: var(--primary-color);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .form-row {
            display: flex;
            gap: 16px;
        }

        .form-row .form-group {
            flex: 1;
        }

        .btn-next, .btn-register {
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
            margin-top: 20px;
        }

        .btn-next:hover, .btn-register:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 32px rgba(102, 126, 234, 0.4);
            color: white;
        }

        .btn-back {
            background: transparent;
            border: 2px solid #e9ecef;
            border-radius: 12px;
            padding: 14px;
            font-size: 16px;
            font-weight: 600;
            color: #6c757d;
            width: 100%;
            transition: all 0.3s ease;
            margin-bottom: 12px;
        }

        .btn-back:hover {
            border-color: var(--primary-color);
            color: var(--primary-color);
        }

        .login-link {
            text-align: center;
            margin-top: 24px;
            padding-top: 24px;
            border-top: 1px solid #e9ecef;
            color: #6c757d;
            font-size: 14px;
        }

        .login-link a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
        }

        .login-link a:hover {
            text-decoration: underline;
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
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }

        @media (max-width: 576px) {
            .register-card {
                padding: 24px;
                margin: 12px;
                border-radius: 16px;
                min-height: 500px;
            }

            .step-content {
                left: 24px;
                right: 24px;
            }

            .form-row {
                flex-direction: column;
                gap: 0;
            }

            .gender-options {
                flex-direction: column;
            }

            .progress-indicator {
                gap: 12px;
            }

            .progress-line {
                width: 40px;
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

    <div class="register-container">
        <div class="register-card">
            <!-- Progress Indicator -->
            <div class="progress-indicator">
                <div class="text-center">
                    <div class="progress-step active" id="step1-indicator">1</div>
                    <div class="step-label">Account</div>
                </div>
                <div class="progress-line" id="progress-line"></div>
                <div class="text-center">
                    <div class="progress-step inactive" id="step2-indicator">2</div>
                    <div class="step-label">Health Profile</div>
                </div>
            </div>

            <form action="<?php echo e(route('register')); ?>" method="POST" id="registerForm">
                <?php echo csrf_field(); ?>

                <!-- Step 1: Account Information -->
                <div class="step-content active" id="step1">
                    <div class="brand-section">
                        <div class="brand-logo">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                    </div>

                    <h2 class="step-title">Create Account</h2>
                    <p class="step-subtitle">Let's start your wellness journey</p>

                    <div class="form-group">
                        <label for="name" class="form-label">Full Name</label>
                        <div class="input-group">
                            <i class="input-icon fas fa-user"></i>
                            <input
                                type="text"
                                class="form-control with-icon <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                id="name"
                                name="name"
                                value="<?php echo e(old('name')); ?>"
                                placeholder="Enter your full name"
                                required
                            >
                        </div>
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <div class="input-group">
                            <i class="input-icon fas fa-envelope"></i>
                            <input
                                type="email"
                                class="form-control with-icon <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                id="email"
                                name="email"
                                value="<?php echo e(old('email')); ?>"
                                placeholder="Enter your email"
                                required
                            >
                        </div>
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <i class="input-icon fas fa-lock"></i>
                            <input
                                type="password"
                                class="form-control with-icon <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                id="password"
                                name="password"
                                placeholder="Create a strong password"
                                required
                            >
                            <button type="button" class="password-toggle" onclick="togglePassword('password')">
                                <i class="fas fa-eye" id="passwordToggleIcon"></i>
                            </button>
                        </div>
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <div class="input-group">
                            <i class="input-icon fas fa-lock"></i>
                            <input
                                type="password"
                                class="form-control with-icon"
                                id="password_confirmation"
                                name="password_confirmation"
                                placeholder="Confirm your password"
                                required
                            >
                            <button type="button" class="password-toggle" onclick="togglePassword('password_confirmation')">
                                <i class="fas fa-eye" id="passwordConfirmToggleIcon"></i>
                            </button>
                        </div>
                    </div>

                    <button type="button" class="btn btn-next" onclick="nextStep()">
                        Next Step <i class="fas fa-arrow-right ms-2"></i>
                    </button>
                </div>

                <!-- Step 2: Health Profile -->
                <div class="step-content" id="step2">
                    <h2 class="step-title">Health Profile</h2>
                    <p class="step-subtitle">Help us personalize your experience</p>

                    <div class="form-group">
                        <label class="form-label">Date of Birth</label>
                        <input
                            type="date"
                            class="form-control <?php $__errorArgs = ['date_of_birth'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            name="date_of_birth"
                            value="<?php echo e(old('date_of_birth')); ?>"
                            required
                        >
                        <?php $__errorArgs = ['date_of_birth'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Gender</label>
                        <div class="gender-options">
                            <div class="gender-option">
                                <input type="radio" class="gender-radio" id="male" name="gender" value="male" <?php echo e(old('gender') == 'male' ? 'checked' : ''); ?>>
                                <label for="male" class="gender-label">
                                    <i class="fas fa-mars gender-icon"></i>
                                    <span class="gender-text">Male</span>
                                </label>
                            </div>
                            <div class="gender-option">
                                <input type="radio" class="gender-radio" id="female" name="gender" value="female" <?php echo e(old('gender') == 'female' ? 'checked' : ''); ?>>
                                <label for="female" class="gender-label">
                                    <i class="fas fa-venus gender-icon"></i>
                                    <span class="gender-text">Female</span>
                                </label>
                            </div>
                            <div class="gender-option">
                                <input type="radio" class="gender-radio" id="other" name="gender" value="other" <?php echo e(old('gender') == 'other' ? 'checked' : ''); ?>>
                                <label for="other" class="gender-label">
                                    <i class="fas fa-genderless gender-icon"></i>
                                    <span class="gender-text">Other</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Units</label>
                        <div class="unit-toggle">
                            <button type="button" class="unit-option active" onclick="switchUnits('metric')">Metric</button>
                            <button type="button" class="unit-option" onclick="switchUnits('imperial')">Imperial</button>
                        </div>
                        <input type="hidden" name="unit_system" value="metric" id="unitSystem">
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="height" class="form-label">Height</label>
                            <div class="input-group">
                                <input
                                    type="number"
                                    class="form-control <?php $__errorArgs = ['height'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    id="height"
                                    name="height"
                                    value="<?php echo e(old('height')); ?>"
                                    placeholder="170"
                                    step="0.1"
                                    required
                                >
                                <span class="input-group-text" id="heightUnit">cm</span>
                            </div>
                            <?php $__errorArgs = ['height'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group">
                            <label for="weight" class="form-label">Weight</label>
                            <div class="input-group">
                                <input
                                    type="number"
                                    class="form-control <?php $__errorArgs = ['weight'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    id="weight"
                                    name="weight"
                                    value="<?php echo e(old('weight')); ?>"
                                    placeholder="70"
                                    step="0.1"
                                    required
                                >
                                <span class="input-group-text" id="weightUnit">kg</span>
                            </div>
                            <?php $__errorArgs = ['weight'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="location" class="form-label">Location</label>
                        <div class="input-group">
                            <i class="input-icon fas fa-map-marker-alt"></i>
                            <input
                                type="text"
                                class="form-control with-icon <?php $__errorArgs = ['location'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                id="location"
                                name="location"
                                value="<?php echo e(old('location')); ?>"
                                placeholder="City, Country"
                                required
                            >
                        </div>
                        <?php $__errorArgs = ['location'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Activity Level</label>
                        <div class="activity-level-options">
                            <div class="activity-option">
                                <input type="radio" class="activity-radio" id="sedentary" name="activity_level" value="sedentary" <?php echo e(old('activity_level') == 'sedentary' ? 'checked' : ''); ?>>
                                <label for="sedentary" class="activity-label">
                                    <div class="activity-content">
                                        <div class="activity-title">Sedentary</div>
                                        <div class="activity-description">Little to no exercise</div>
                                    </div>
                                </label>
                            </div>
                            <div class="activity-option">
                                <input type="radio" class="activity-radio" id="light" name="activity_level" value="light" <?php echo e(old('activity_level') == 'light' ? 'checked' : ''); ?>>
                                <label for="light" class="activity-label">
                                    <div class="activity-content">
                                        <div class="activity-title">Lightly Active</div>
                                        <div class="activity-description">Light exercise 1-3 days per week</div>
                                    </div>
                                </label>
                            </div>
                            <div class="activity-option">
                                <input type="radio" class="activity-radio" id="moderate" name="activity_level" value="moderate" <?php echo e(old('activity_level') == 'moderate' ? 'checked' : ''); ?>>
                                <label for="moderate" class="activity-label">
                                    <div class="activity-content">
                                        <div class="activity-title">Moderately Active</div>
                                        <div class="activity-description">Moderate exercise 3-5 days per week</div>
                                    </div>
                                </label>
                            </div>
                            <div class="activity-option">
                                <input type="radio" class="activity-radio" id="very_active" name="activity_level" value="very_active" <?php echo e(old('activity_level') == 'very_active' ? 'checked' : ''); ?>>
                                <label for="very_active" class="activity-label">
                                    <div class="activity-content">
                                        <div class="activity-title">Very Active</div>
                                        <div class="activity-description">Hard exercise 6-7 days per week</div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="health_goals" class="form-label">Primary Health Goal</label>
                        <select class="form-select <?php $__errorArgs = ['health_goals'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="health_goals" required>
                            <option value="">Select your primary goal</option>
                            <option value="weight_loss" <?php echo e(old('health_goals') == 'weight_loss' ? 'selected' : ''); ?>>Weight Loss</option>
                            <option value="weight_gain" <?php echo e(old('health_goals') == 'weight_gain' ? 'selected' : ''); ?>>Weight Gain</option>
                            <option value="maintain_weight" <?php echo e(old('health_goals') == 'maintain_weight' ? 'selected' : ''); ?>>Maintain Weight</option>
                            <option value="build_muscle" <?php echo e(old('health_goals') == 'build_muscle' ? 'selected' : ''); ?>>Build Muscle</option>
                            <option value="improve_fitness" <?php echo e(old('health_goals') == 'improve_fitness' ? 'selected' : ''); ?>>Improve Fitness</option>
                            <option value="better_sleep" <?php echo e(old('health_goals') == 'better_sleep' ? 'selected' : ''); ?>>Better Sleep</option>
                            <option value="stress_management" <?php echo e(old('health_goals') == 'stress_management' ? 'selected' : ''); ?>>Stress Management</option>
                        </select>
                        <?php $__errorArgs = ['health_goals'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <button type="button" class="btn btn-back" onclick="previousStep()">
                        <i class="fas fa-arrow-left me-2"></i> Back
                    </button>
                    <button type="submit" class="btn btn-register">
                        Create Account <i class="fas fa-check ms-2"></i>
                    </button>
                </div>
            </form>

            <!-- Login Link -->
            <div class="login-link">
                Already have an account?
                <a href="<?php echo e(route('login')); ?>">Sign in here</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        let currentStep = 1;

        function nextStep() {
            if (validateStep1()) {
                currentStep = 2;
                updateStepDisplay();
            }
        }

        function previousStep() {
            currentStep = 1;
            updateStepDisplay();
        }

        function updateStepDisplay() {
            const step1 = document.getElementById('step1');
            const step2 = document.getElementById('step2');
            const step1Indicator = document.getElementById('step1-indicator');
            const step2Indicator = document.getElementById('step2-indicator');
            const progressLine = document.getElementById('progress-line');

            if (currentStep === 1) {
                step1.classList.add('active');
                step2.classList.remove('active');
                step1Indicator.classList.add('active');
                step1Indicator.classList.remove('completed');
                step2Indicator.classList.remove('active');
                step2Indicator.classList.add('inactive');
                progressLine.classList.remove('completed');
            } else {
                step1.classList.remove('active');
                step2.classList.add('active');
                step1Indicator.classList.remove('active');
                step1Indicator.classList.add('completed');
                step1Indicator.innerHTML = '<i class="fas fa-check"></i>';
                step2Indicator.classList.add('active');
                step2Indicator.classList.remove('inactive');
                progressLine.classList.add('completed');
            }
        }

        function validateStep1() {
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const passwordConfirm = document.getElementById('password_confirmation').value;

            if (!name || !email || !password || !passwordConfirm) {
                alert('Please fill in all required fields');
                return false;
            }

            if (password !== passwordConfirm) {
                alert('Passwords do not match');
                return false;
            }

            if (password.length < 8) {
                alert('Password must be at least 8 characters long');
                return false;
            }

            return true;
        }
<?php /**PATH D:\laragon\www\elevaite-healy\elevaite-healy\resources\views/auth/register.blade.php ENDPATH**/ ?>