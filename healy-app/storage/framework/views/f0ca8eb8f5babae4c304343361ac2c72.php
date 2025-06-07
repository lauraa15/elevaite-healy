<?php $__env->startSection('title', 'Health Metrics'); ?>

<?php $__env->startPush('styles'); ?>
    <style>
        :root {
            --heart-rate-color: #dc5545;
            --sleep-color: #5ba3d4;
            --blood-oxygen-color: #4a90c2;
            --steps-color: #5a9b8a;
            --calories-color: #d4a354;
            --water-color: #87ceeb;
            --stress-color: #c85450;
            --bg-light: #f8f9fa;
        }

        body {
            background-color: var(--bg-light);
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }

        .metric-card {
            border: none;
            border-radius: 16px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease;
        }

        .metric-card:hover {
            transform: translateY(-2px);
        }

        .heart-rate-card {
            background: linear-gradient(135deg, var(--heart-rate-color), #e67465);
            color: white;
        }

        .sleep-card {
            background: linear-gradient(135deg, var(--sleep-color), #6bb3e4);
            color: white;
        }

        .blood-oxygen-card {
            background: linear-gradient(135deg, var(--blood-oxygen-color), #5aa0d2);
            color: white;
        }

        .steps-card {
            background: linear-gradient(135deg, var(--steps-color), #6aab9a);
            color: white;
        }

        .calories-card {
            background: linear-gradient(135deg, var(--calories-color), #e4b364);
            color: white;
        }

        .water-card {
            background: linear-gradient(135deg, var(--water-color), #97deff);
            color: white;
        }

        .stress-card {
            background: linear-gradient(135deg, var(--stress-color), #d86460);
            color: white;
        }

        .metric-value {
            font-size: 2.5rem;
            font-weight: 700;
            margin: 0;
        }

        .metric-unit {
            font-size: 1rem;
            opacity: 0.9;
            margin-left: 0.25rem;
        }

        .metric-label {
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .metric-sublabel {
            font-size: 0.85rem;
            opacity: 0.8;
        }

        .time-selector {
            background: white;
            border-radius: 25px;
            padding: 0.25rem;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        .time-btn {
            border: none;
            background: transparent;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .time-btn.active {
            background: #5ba3d4;
            color: white;
        }

        .chart-container {
            background: white;
            border-radius: 16px;
            padding: 1.5rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            margin-top: 2rem;
        }

        .chart-bar {
            background: linear-gradient(to top, #dc5545, #ff8a80);
            border-radius: 4px 4px 0 0;
            position: relative;
            margin: 0 2px;
        }

        .chart-line {
            stroke: #dc5545;
            stroke-width: 2;
            fill: none;
        }

        .chart-dot {
            fill: #dc5545;
            r: 4;
        }

        .summary-card {
            background: white;
            border-radius: 12px;
            border: 1px solid #e9ecef;
            transition: transform 0.2s ease;
        }

        .summary-card:hover {
            transform: translateY(-1px);
        }

        .bottom-nav {
            background: white;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 20px 20px 0 0;
        }

        .nav-item {
            text-align: center;
            padding: 1rem 0.5rem;
            color: #6c757d;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .nav-item.active {
            color: #5ba3d4;
        }

        .nav-item i {
            font-size: 1.2rem;
            margin-bottom: 0.25rem;
        }

        .progress-circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: conic-gradient(from 0deg, var(--steps-color) 0deg 275deg, #e9ecef 275deg 360deg);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .progress-circle::before {
            content: '';
            width: 28px;
            height: 28px;
            background: white;
            border-radius: 50%;
            position: absolute;
        }

        .progress-text {
            position: relative;
            z-index: 1;
            font-size: 0.7rem;
            font-weight: 600;
        }

        @media (max-width: 768px) {
            .metric-value {
                font-size: 2rem;
            }

            .container-fluid {
                padding: 1rem;
            }
        }
    </style>
        <!-- Tambahkan konten lainnya di sini -->
    <style>
        :root {
            --primary-color: #4a90e2;
            --success-color: #28a745;
            --warning-color: #ffc107;
            --danger-color: #dc3545;
            --light-gray: #f8f9fa;
            --border-color: #e9ecef;
        }

        body {
            background-color: var(--light-gray);
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }

        .main-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 20px;
        }

        .header-section {
            background: white;
            border-radius: 12px;
            padding: 24px;
            margin-bottom: 24px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        .greeting-text {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 4px;
        }

        .date-text {
            color: #6c757d;
            font-size: 14px;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
        }

        .metrics-card {
            background: white;
            border-radius: 12px;
            padding: 24px;
            margin-bottom: 24px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        .section-title {
            font-size: 18px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 8px;
        }

        .section-subtitle {
            color: #6c757d;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .metric-item {
            display: flex;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px solid #f0f0f0;
        }

        .metric-item:last-child {
            border-bottom: none;
        }

        .metric-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
            color: white;
            font-size: 18px;
        }

        .metric-heart { background-color: var(--danger-color); }
        .metric-sleep { background-color: var(--primary-color); }
        .metric-stress { background-color: var(--warning-color); }
        .metric-mood { background-color: var(--primary-color); }

        .metric-content {
            flex: 1;
        }

        .metric-label {
            font-size: 14px;
            color: #6c757d;
            margin-bottom: 2px;
        }

        .metric-value {
            font-size: 18px;
            font-weight: 600;
            color: #2c3e50;
        }

        .metric-unit {
            font-size: 14px;
            color: #6c757d;
            margin-left: 4px;
        }

        .metric-change {
            font-size: 12px;
            color: #6c757d;
        }

        .trends-chart {
            height: 200px;
            background: linear-gradient(135deg, #ffeaa7 0%, #fab1a0 100%);
            border-radius: 8px;
            margin-bottom: 16px;
            position: relative;
            overflow: hidden;
        }

        .chart-bars {
            display: flex;
            align-items: end;
            height: 100%;
            padding: 20px;
            gap: 8px;
        }

        .chart-bar {
            flex: 1;
            background: rgba(255, 255, 255, 0.6);
            border-radius: 4px;
            min-height: 20px;
            position: relative;
        }

        .chart-bar:nth-child(1) { height: 60%; }
        .chart-bar:nth-child(2) { height: 80%; }
        .chart-bar:nth-child(3) { height: 70%; }
        .chart-bar:nth-child(4) { height: 90%; }
        .chart-bar:nth-child(5) { height: 85%; }
        .chart-bar:nth-child(6) { height: 75%; }
        .chart-bar:nth-child(7) { height: 95%; }

        .chart-info {
            display: flex;
            gap: 16px;
            font-size: 12px;
            color: #6c757d;
        }

        .chart-info-item {
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .chart-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background-color: var(--danger-color);
        }

        .insights-section {
            background: white;
            border-radius: 12px;
            padding: 24px;
            margin-bottom: 24px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        .insight-item {
            display: flex;
            align-items: flex-start;
            padding: 16px 0;
            border-bottom: 1px solid #f0f0f0;
        }

        .insight-item:last-child {
            border-bottom: none;
        }

        .insight-icon {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
            color: white;
            font-size: 14px;
        }

        .insight-positive { background-color: var(--success-color); }
        .insight-warning { background-color: var(--warning-color); }

        .insight-content {
            flex: 1;
        }

        .insight-title {
            font-size: 16px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 4px;
        }

        .insight-description {
            font-size: 14px;
            color: #6c757d;
            margin-bottom: 8px;
        }

        .insight-recommendation {
            font-size: 13px;
            color: #6c757d;
            font-style: italic;
        }

        .activity-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 12px;
            padding: 24px;
            color: white;
            margin-bottom: 24px;
        }

        .activity-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 4px;
        }

        .activity-meta {
            font-size: 14px;
            opacity: 0.9;
            margin-bottom: 16px;
        }

        .activity-description {
            font-size: 14px;
            opacity: 0.9;
            margin-bottom: 16px;
        }

        .activity-benefits {
            list-style: none;
            padding: 0;
            margin-bottom: 20px;
        }

        .activity-benefits li {
            font-size: 13px;
            opacity: 0.9;
            margin-bottom: 4px;
        }

        .activity-benefits li:before {
            content: "• ";
            margin-right: 8px;
        }

        .btn-start-activity {
            background-color: #28a745;
            border: none;
            padding: 12px 24px;
            border-radius: 8px;
            color: white;
            font-weight: 600;
            width: 100%;
            transition: background-color 0.2s;
        }

        .btn-start-activity:hover {
            background-color: #218838;
            color: white;
        }

        @media (max-width: 768px) {
            .main-container {
                padding: 12px;
            }

            .header-section,
            .metrics-card,
            .insights-section,
            .activity-card {
                padding: 16px;
                margin-bottom: 16px;
            }
        }
    </style>
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
                        <div class="progress-bar-fill progress-animation" style="width: 90%; animation-delay: 0.3s;"></div>
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
                        <div class="progress-bar-fill progress-animation" style="width: 60%; animation-delay: 0.6s;"></div>
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

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Add any custom JavaScript here
        document.addEventListener('DOMContentLoaded', function() {
            // Animate chart bars on load
            const chartBars = document.querySelectorAll('.chart-bar');
            chartBars.forEach((bar, index) => {
                setTimeout(() => {
                    bar.style.opacity = '1';
                    bar.style.transform = 'translateY(0)';
                }, index * 100);
            });

            // Add click handler for start activity button
            const startButton = document.querySelector('.btn-start-activity');
            if (startButton) {
                startButton.addEventListener('click', function() {
                    // Add your Laravel route here
                    alert('Starting activity... (Replace with Laravel route)');
                });
            }
        });

        // Function to update metrics (can be called from Laravel)
        function updateMetrics(data) {
            // Update DOM elements with new data
            console.log('Updating metrics:', data);
        }
    </script>

    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        // Tambahkan JavaScript khusus di sini
    </script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\laragon\www\elevaite-healy\healy-app\resources\views/health.blade.php ENDPATH**/ ?>