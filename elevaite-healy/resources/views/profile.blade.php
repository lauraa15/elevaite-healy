@extends('layouts.app')

@section('content')
    <div class="container-fluid py-4" style="padding-bottom: 100px;">
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="section-title mb-0">Profile</h1>
            <button class="settings-icon-btn">
                <i class="fas fa-cog"></i>
            </button>
        </div>

        <!-- Profile Header Card -->
        <div class="profile-header fade-in">
            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=150&h=150&fit=crop&crop=face"
                alt="Profile Picture" class="profile-avatar">

            <h2 class="profile-name">Alex Johnson</h2>
            <p class="profile-details">32 • Male</p>

            <div class="stats-container">
                <div class="stats-row">
                    <div class="stat-item">
                        <span class="stat-value">73</span>
                        <span class="stat-label">kg</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-value">178</span>
                        <span class="stat-label">cm</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-value">23</span>
                        <span class="stat-label">BMI</span>
                    </div>
                </div>
            </div>

            <button class="edit-btn">Edit Profile</button>
        </div>

        <!-- Health Goals Section -->
        <div class="goals-card fade-in" style="animation-delay: 0.2s;">
            <h3 class="section-title">Health Goals</h3>

            <div class="goal-item">
                <div class="goal-icon">
                    <i class="fas fa-walking"></i>
                </div>
                <div class="goal-content">
                    <div class="goal-label">Daily Steps</div>
                    <div class="goal-value">10,000</div>
                    <div class="progress-bar-container">
                        <div class="progress-bar-fill progress-animation" style="width: 85%;"></div>
                    </div>
                </div>
            </div>

            <div class="goal-item">
                <div class="goal-icon">
                    <i class="fas fa-bed"></i>
                </div>
                <div class="goal-content">
                    <div class="goal-label">Sleep Duration</div>
                    <div class="goal-value">8 hours</div>
                    <div class="progress-bar-container">
                        <div class="progress-bar-fill progress-animation" style="width: 90%; animation-delay: 0.3s;">
                        </div>
                    </div>
                </div>
            </div>

            <div class="goal-item">
                <div class="goal-icon">
                    <i class="fas fa-weight"></i>
                </div>
                <div class="goal-content">
                    <div class="goal-label">Weight Goal</div>
                    <div class="goal-value">70 kg</div>
                    <div class="progress-bar-container">
                        <div class="progress-bar-fill progress-animation" style="width: 60%; animation-delay: 0.6s;">
                        </div>
                    </div>
                </div>
            </div>

            <button class="update-goals-btn mt-3">Update Goals</button>
        </div>

        <!-- Settings Section -->
        <div class="fade-in" style="animation-delay: 0.4s;">
            <h3 class="section-title">Settings</h3>

            <a href="#" class="settings-item">
                <div class="settings-icon account-icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="settings-content">
                    <h6 class="settings-title">Account Settings</h6>
                </div>
                <i class="fas fa-chevron-right settings-chevron"></i>
            </a>

            <a href="#" class="settings-item">
                <div class="settings-icon privacy-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <div class="settings-content">
                    <h6 class="settings-title">Privacy & Security</h6>
                </div>
                <i class="fas fa-chevron-right settings-chevron"></i>
            </a>

            <a href="#" class="settings-item">
                <div class="settings-icon notification-icon">
                    <i class="fas fa-bell"></i>
                </div>
                <div class="settings-content">
                    <h6 class="settings-title">Notifications</h6>
                </div>
                <i class="fas fa-chevron-right settings-chevron"></i>
            </a>

            <a href="#" class="settings-item">
                <div class="settings-icon logout-icon">
                    <i class="fas fa-sign-out-alt"></i>
                </div>
                <div class="settings-content">
                    <h6 class="settings-title">Log Out</h6>
                </div>
                <i class="fas fa-chevron-right settings-chevron"></i>
            </a>
        </div>
    </div>

@endsection


@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>

        // Settings gear rotation animation
        document.querySelector('.settings-icon-btn').addEventListener('click', function () {
            this.style.transform = 'rotate(180deg)';
            setTimeout(() => {
                this.style.transform = 'rotate(0deg)';
            }, 300);
        });

        // Edit Profile button interaction
        document.querySelector('.edit-btn').addEventListener('click', function () {
            this.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Loading...';
            setTimeout(() => {
                this.innerHTML = 'Edit Profile';
            }, 1500);
        });

        // Update Goals button interaction
        document.querySelector('.update-goals-btn').addEventListener('click', function () {
            this.innerHTML = '<i class="fas fa-check me-2"></i>Goals Updated!';
            this.style.background = '#4caf50';
            this.style.color = 'white';

            setTimeout(() => {
                this.innerHTML = 'Update Goals';
                this.style.background = 'var(--light-blue)';
                this.style.color = 'var(--primary-blue)';
            }, 2000);
        });

        // Settings items interaction
        document.querySelectorAll('.settings-item').forEach(item => {
            item.addEventListener('click', function (e) {
                e.preventDefault();

                // Add loading state
                const chevron = this.querySelector('.settings-chevron');
                chevron.style.transform = 'rotate(90deg)';

                setTimeout(() => {
                    chevron.style.transform = 'rotate(0deg)';
                }, 200);
            });
        });

        // Animate progress bars on scroll
        const observerOptions = {
            threshold: 0.5,
            rootMargin: '0px'
        };

        const progressObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const progressBars = entry.target.querySelectorAll('.progress-bar-fill');
                    progressBars.forEach((bar, index) => {
                        setTimeout(() => {
                            bar.style.animation = 'progressFill 1.5s ease-out forwards';
                        }, index * 200);
                    });
                }
            });
        }, observerOptions);

        // Observe the goals card
        const goalsCard = document.querySelector('.goals-card');
        if (goalsCard) {
            progressObserver.observe(goalsCard);
        }

        // Smooth scroll and fade in animations
        document.addEventListener('DOMContentLoaded', function () {
            const fadeElements = document.querySelectorAll('.fade-in');
            fadeElements.forEach((element, index) => {
                setTimeout(() => {
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0)';
                }, index * 150);
            });
        });

        // Add ripple effect to buttons
        function createRipple(event) {
            const button = event.currentTarget;
            const circle = document.createElement('span');
            const diameter = Math.max(button.clientWidth, button.clientHeight);
            const radius = diameter / 2;

            circle.style.width = circle.style.height = `${diameter}px`;
            circle.style.left = `${event.clientX - button.offsetLeft - radius}px`;
            circle.style.top = `${event.clientY - button.offsetTop - radius}px`;
            circle.classList.add('ripple');

            const ripple = button.getElementsByClassName('ripple')[0];
            if (ripple) {
                ripple.remove();
            }

            button.appendChild(circle);
        }

        // Add ripple effect styles
        const rippleStyle = document.createElement('style');
        rippleStyle.textContent = `
            .ripple {
                position: absolute;
                border-radius: 50%;
                background-color: rgba(255, 255, 255, 0.6);
                transform: scale(0);
                animation: ripple-animation 0.6s linear;
                pointer-events: none;
            }

            @keyframes ripple-animation {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(rippleStyle);

        // Apply ripple effect to buttons
        document.querySelectorAll('.edit-btn, .update-goals-btn').forEach(button => {
            button.addEventListener('click', createRipple);
            button.style.position = 'relative';
            button.style.overflow = 'hidden';
        });
    </script>
@endpush
