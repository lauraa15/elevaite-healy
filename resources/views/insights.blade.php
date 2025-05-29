@extends('layouts.app')

@section('content')
    <div class="container-fluid py-4" style="padding-bottom: 100px;">
        <!-- Header -->
        <div class="header-section">
            <h1 class="page-title">AI Insights</h1>
            <p class="page-subtitle">Your personalized health intelligence</p>
            <div class="progress-divider"></div>
        </div>

        <!-- Insights Cards -->
        <div id="insights" class="insights-container">
            <!-- Sleep Quality Declining -->
            <div class="insight-card sleep-insight fade-in" style="animation-delay: 0.1s;">
                <div class="card-body p-4">
                    <div class="insight-header">
                        <div class="insight-icon sleep-icon">
                            <i class="fas fa-moon"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h3 class="insight-title">Sleep Quality Declining</h3>
                            <p class="insight-time">08:07 AM</p>
                        </div>
                    </div>

                    <p class="insight-description">
                        Your deep sleep has decreased by 20% over the past week, which may affect your recovery and cognitive function.
                    </p>

                    <div class="recommendation-section">
                        <div class="recommendation-label">Recommendation:</div>
                        <p class="recommendation-text">
                            Try to maintain a consistent sleep schedule and avoid screens 1 hour before bedtime.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Activity Pattern Change -->
            <div class="insight-card activity-insight fade-in" style="animation-delay: 0.2s;">
                <div class="card-body p-4">
                    <div class="insight-header">
                        <div class="insight-icon activity-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h3 class="insight-title">Activity Pattern Change</h3>
                            <p class="insight-time">07:07 AM</p>
                        </div>
                    </div>

                    <p class="insight-description">
                        You've been less active on weekdays compared to your previous month's average.
                    </p>

                    <div class="recommendation-section">
                        <div class="recommendation-label">Recommendation:</div>
                        <p class="recommendation-text">
                            Consider scheduling short walks during your work breaks to increase daily activity.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Hydration Improvement -->
            <div class="insight-card hydration-insight fade-in" style="animation-delay: 0.3s;">
                <div class="card-body p-4">
                    <div class="insight-header">
                        <div class="insight-icon hydration-icon">
                            <i class="fas fa-tint"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h3 class="insight-title">Hydration Improvement</h3>
                            <p class="insight-time">06:07 AM</p>
                        </div>
                    </div>

                    <p class="insight-description">
                        Your hydration consistency has improved by 25% this week.
                    </p>

                    <div class="recommendation-section">
                        <div class="recommendation-label">Recommendation:</div>
                        <p class="recommendation-text">
                            Keep using timed water reminders to maintain this positive habit.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Elevated Stress Levels -->
            <div class="insight-card stress-insight fade-in" style="animation-delay: 0.4s;">
                <div class="card-body p-4">
                    <div class="insight-header">
                        <div class="insight-icon stress-icon">
                            <i class="fas fa-brain"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h3 class="insight-title">Elevated Stress Levels</h3>
                            <p class="insight-time">10:07 AM</p>
                        </div>
                    </div>

                    <p class="insight-description">
                        Your stress levels have been consistently higher than normal for the past 3 days.
                    </p>

                    <div class="recommendation-section">
                        <div class="recommendation-label">Recommendation:</div>
                        <p class="recommendation-text">
                            Try the guided breathing exercises in the app for 5 minutes, 3 times daily.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Weekly Health Summary -->
        <div class="summary-card fade-in" style="animation-delay: 0.5s;">
            <h2 class="summary-title">Your Weekly Health Summary</h2>
            <p class="summary-description">
                Based on your data from this week, your overall health indicators are showing positive trends.
                Your sleep quality has improved by 15%, and your heart rate variability indicates good recovery.
                Keep maintaining your evening meditation routine and consistent sleep schedule.
            </p>

            <div class="metric-row">
                <div class="metric-item">
                    <div class="metric-value metric-positive">+15%</div>
                    <div class="metric-label">Sleep Quality</div>
                </div>
                <div class="metric-item">
                    <div class="metric-value metric-negative">-8%</div>
                    <div class="metric-label">Stress Level</div>
                </div>
                <div class="metric-item">
                    <div class="metric-value metric-positive">+12%</div>
                    <div class="metric-label">Activity</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')

@endpush

@push('scripts')
<script>
    // You can add dynamic interactivity here later
</script>
@endpush
