@extends('common.layout')

@section('title', 'Contact Us')

@section('content')
    <div class="container">
        <h2 class="text-success mt-5 mb-4">Contact Us</h2>

        <p>If you have any questions, feedback, or partnership inquiries, feel free to reach out to us using the information below or send us a message through the contact form.</p>

        <div class="row mt-4">
            <!-- Contact Info -->
            <div class="col-md-6">
                <h5><i class="fas fa-map-marker-alt me-2"></i>Our Office</h5>
                <p>9-10, Chittaranjan Avenue, Dhaka 1100, Bangladesh</p>

                <h5><i class="fas fa-phone me-2"></i>Phone</h5>
                <p>+88 015-215 46883</p>

                <h5><i class="fas fa-envelope me-2"></i>Email</h5>
                <p>info@mylaravel.com</p>
            </div>

            <!-- Contact Form -->
            <div class="col-md-6">
                <form action="{{ url('/contact/submit') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Your Message</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-success">Send Message</button>
                </form>
            </div>
        </div>
    </div>
@endsection
