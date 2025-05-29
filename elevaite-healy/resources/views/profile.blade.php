@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3">
            <div class="card mb-4 shadow-sm">
                <div class="card-body text-center">
                    <img src="#" class="rounded-circle mb-2" width="100" height="100" alt="Profile Photo">
                    <h5 class="card-title"></h5>
                    <p class="card-text text-muted">Chin@gmail.com</p>
                    <a href="" class="btn btn-outline-primary btn-sm">Edit Profile</a>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-md-9">
            <!-- AI Notifications / Insights Section -->
            <div class="card mb-4 shadow-sm">
                <div class="card-header bg-info text-white d-flex justify-content-between align-items-center">
                    <span><i class="fas fa-brain me-2"></i>AI Insights</span>
                    <span class="badge bg-light text-dark">{{ now()->format('M d, Y') }}</span>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-bolt text-warning me-3"></i>
                            <div>
                                <strong>Productivity Boost:</strong> You completed 3 tasks faster than usual this week!
                            </div>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-chart-line text-success me-3"></i>
                            <div>
                                <strong>Growth Trend:</strong> Your project engagement increased by 12% compared to last month.
                            </div>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-lightbulb text-primary me-3"></i>
                            <div>
                                <strong>New Recommendation:</strong> Try exploring the new time-blocking feature for better task management.
                            </div>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-fire text-danger me-3"></i>
                            <div>
                                <strong>Hot Topic:</strong> Your “Q2 Strategy” document was viewed 15 times this week.
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Other Content Goes Here -->
            <div class="card shadow-sm">
                <div class="card-header">
                    <i class="fas fa-user-cog me-2"></i>Account Settings
                </div>
                <div class="card-body">
                    <p>More profile-related content can go here...</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
