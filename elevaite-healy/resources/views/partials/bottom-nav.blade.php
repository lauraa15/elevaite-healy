<div class="fixed-bottom">
    <nav class="bottom-nav">
        <div class="row g-0">
            <div class="col">
                <a href="{{ route('dashboard') }}" class="nav-item d-block active">
                    <i class="fas fa-chart-bar d-block"></i>
                    <small>Metrics</small>
                </a>
            </div>
            <div class="col">
                <a href="{{ route('insights') }}" class="nav-item d-block">
                    <i class="fas fa-running d-block"></i>
                    <small>Activities</small>
                </a>
            </div>
            <div class="col">
                <a href="{{ route('insights') }}" class="nav-item d-block">
                    <i class="fas fa-lightbulb d-block"></i>
                    <small>Insights</small>
                </a>
            </div>
            <div class="col">
                <a href="{{ route('profile') }}" class="nav-item d-block">
                    <i class="fas fa-user d-block"></i>
                    <small>Profile</small>
                </a>
            </div>
        </div>
    </nav>
</div>
