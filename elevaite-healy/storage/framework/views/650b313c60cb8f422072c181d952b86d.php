<?php $__env->startSection('title', 'Health Metrics'); ?>

<?php $__env->startPush('styles'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Header -->
    <div class="row mb-4">
        <div class="col">
            <h1 class="h2 fw-bold text-dark mb-1">Health Metrics</h1>
            <p class="text-muted mb-3">Track your body's vital signs</p>

            <!-- Time Selector -->
            <div class="time-selector d-inline-flex">
                <button class="time-btn active">Daily</button>
                <button class="time-btn">Weekly</button>
                <button class="time-btn">Monthly</button>
            </div>
        </div>
    </div>

    <div id="dashboard">

        <!-- Heart Rate Card (Large) -->
        <div class="row mb-3">
            <div class="col-12">
                <div class="card metric-card heart-rate-card">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h5 class="metric-label">Heart Rate</h5>
                                <p class="metric-sublabel mb-3">Current</p>
                                <div class="d-flex align-items-end">
                                    <span class="metric-value">72</span>
                                    <span class="metric-unit">BPM</span>
                                </div>
                            </div>
                            <i class="fas fa-heart fa-2x opacity-75"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sleep & Blood Oxygen Row -->
        <div class="row mb-3">
            <div class="col-6">
                <div class="card metric-card sleep-card">
                    <div class="card-body p-3">
                        <div class="d-flex align-items-center mb-2">
                            <h6 class="metric-label mb-0">Sleep</h6>
                            <i class="fas fa-moon ms-auto"></i>
                        </div>
                        <div class="d-flex align-items-end">
                            <span class="metric-value">7.2</span>
                            <span class="metric-unit">hrs</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card metric-card blood-oxygen-card">
                    <div class="card-body p-3">
                        <div class="d-flex align-items-center mb-2">
                            <h6 class="metric-label mb-0">Blood O₂</h6>
                            <i class="fas fa-lungs ms-auto"></i>
                        </div>
                        <div class="d-flex align-items-end">
                            <span class="metric-value">98</span>
                            <span class="metric-unit">%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Steps & Calories Row -->
        <div class="row mb-3">
            <div class="col-6">
                <div class="card metric-card steps-card">
                    <div class="card-body p-3">
                        <div class="d-flex align-items-center mb-1">
                            <h6 class="metric-label mb-0">Steps</h6>
                            <i class="fas fa-walking ms-auto"></i>
                        </div>
                        <p class="metric-sublabel mb-2">78.6% of goal</p>
                        <div class="d-flex align-items-center">
                            <span class="metric-value fs-4">7,865</span>
                            <div class="progress-circle ms-auto">
                                <span class="progress-text">79%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card metric-card calories-card">
                    <div class="card-body p-3">
                        <div class="d-flex align-items-center mb-1">
                            <h6 class="metric-label mb-0">Calories</h6>
                            <i class="fas fa-fire ms-auto"></i>
                        </div>
                        <p class="metric-sublabel mb-2">74% of goal</p>
                        <span class="metric-value fs-4">1,850</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Water & Stress Row -->
        <div class="row mb-4">
            <div class="col-6">
                <div class="card metric-card water-card">
                    <div class="card-body p-3">
                        <div class="d-flex align-items-center mb-2">
                            <h6 class="metric-label mb-0">Water</h6>
                            <i class="fas fa-tint ms-auto"></i>
                        </div>
                        <div class="d-flex align-items-end">
                            <span class="metric-value">1.8</span>
                            <span class="metric-unit">L</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card metric-card stress-card">
                    <div class="card-body p-3">
                        <div class="d-flex align-items-center mb-1">
                            <h6 class="metric-label mb-0">Stress</h6>
                            <i class="fas fa-brain ms-auto"></i>
                        </div>
                        <p class="metric-sublabel mb-1">moderate</p>
                        <span class="metric-value fs-4">65</span>
                    </div>
                </div>
            </div>
        </div>


        <!-- Chart Section -->
        <div class="chart-container">
            <h5 class="fw-bold text-dark mb-1">Daily Trends</h5>
            <p class="text-muted mb-4">Your heartRate data over time</p>

            <!-- Chart -->
            <div class="position-relative" style="height: 200px;">
                <svg width="100%" height="100%" viewBox="0 0 400 150">
                    <!-- Chart bars -->
                    <rect x="30" y="50" width="40" height="100" class="chart-bar" opacity="0.7"></rect>
                    <rect x="90" y="30" width="40" height="120" class="chart-bar"></rect>
                    <rect x="150" y="60" width="40" height="90" class="chart-bar" opacity="0.7"></rect>
                    <rect x="210" y="40" width="40" height="110" class="chart-bar"></rect>
                    <rect x="270" y="50" width="40" height="100" class="chart-bar" opacity="0.7"></rect>
                    <rect x="330" y="35" width="40" height="115" class="chart-bar"></rect>

                    <!-- Trend line -->
                    <polyline class="chart-line" points="50,75 110,55 170,85 230,65 290,75 350,60"></polyline>

                    <!-- Data points -->
                    <circle class="chart-dot" cx="50" cy="75"></circle>
                    <circle class="chart-dot" cx="110" cy="55"></circle>
                    <circle class="chart-dot" cx="170" cy="85"></circle>
                    <circle class="chart-dot" cx="230" cy="65"></circle>
                    <circle class="chart-dot" cx="290" cy="75"></circle>
                    <circle class="chart-dot" cx="350" cy="60"></circle>
                </svg>
            </div>
        </div>

        <!-- Summary Cards -->
        <div class="row mt-4 mb-5">
            <div class="col-3">
                <div class="card summary-card">
                    <div class="card-body p-3 text-center">
                        <div class="text-muted small mb-1">Heart Rate</div>
                        <div class="fw-bold text-danger">72 BPM</div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card summary-card">
                    <div class="card-body p-3 text-center">;
                        <div class="text-muted small mb-1">Steps</div>
                        <div class="fw-bold">72</div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card summary-card">
                    <div class="card-body p-3 text-center">
                        <div class="text-muted small mb-1">Calories</div>
                        <div class="fw-bold">72</div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card summary-card">
                    <div class="card-body p-3 text-center">
                        <div class="text-muted small mb-1">Sleep</div>
                        <div class="fw-bold">7.1</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- More Information Section -->
        <div class="row mb-5">
            <div class="col-12">
                <h5 class="fw-bold text-dark mb-3">More Information</h5>
                <div class="card"
                    style="height: 80px; background: linear-gradient(135deg, #e3f2fd, #bbdefb); border: none; border-radius: 16px;">
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <i class="fas fa-chart-line fa-2x text-primary opacity-50"></i>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>




    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Time selector functionality
        document.querySelectorAll('.time-btn').forEach(btn => {
            btn.addEventListener('click', function () {
                document.querySelectorAll('.time-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
            });
        });



        // Add smooth animations
        document.addEventListener('DOMContentLoaded', function () {
            const cards = document.querySelectorAll('.metric-card');
            cards.forEach((card, index) => {
                card.style.animationDelay = `${index * 100}ms`;
                card.style.animation = 'fadeInUp 0.6s ease forwards';
            });
        });

        // CSS animations
        const style = document.createElement('style');
        style.textContent = `
            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        `;
        document.head.appendChild(style);
    </script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\elevaite-healy\elevaite-healy\resources\views/health.blade.php ENDPATH**/ ?>