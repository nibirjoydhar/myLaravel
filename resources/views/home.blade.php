@extends('common.layout')

@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="text-center mt-5 mb-4">
            <h1 class="display-5 fw-bold">Welcome to My Laravel App</h1>
            <p class="lead text-muted">Your gateway to smarter job searching and recruitment.</p>
        </div>

        <div class="row text-center mb-5">
            <div class="col-md-4">
                <i class="fas fa-briefcase fa-2x text-primary mb-2"></i>
                <h5>Find Jobs</h5>
                <p>Browse the latest job listings tailored to your skills and preferences.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-user-check fa-2x text-success mb-2"></i>
                <h5>Apply Easily</h5>
                <p>One-click apply and real-time updates make job hunting effortless.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-building fa-2x text-warning mb-2"></i>
                <h5>Post Jobs</h5>
                <p>Employers can post vacancies and manage applications from their dashboard.</p>
            </div>
        </div>

        <div class="text-center">
            <a href="{{ url('/jobs') }}" class="btn btn-success btn-lg">Explore Jobs</a>
        </div>
    </div>
@endsection
