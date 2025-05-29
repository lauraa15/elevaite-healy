@extends('layouts.app')

@section('title', 'Health Metrics')

@push('styles')
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
@endpush

@section('content')
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

    <!-- Tambahkan konten lainnya di sini -->
@endsection

@push('scripts')
    <script>
        // Tambahkan JavaScript khusus di sini
    </script>
@endpush
