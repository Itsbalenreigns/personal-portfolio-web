@extends('layout')
@section('title', 'Home')
@section('content')

<!-- HOME SECTION START -->

<section class="home d-flex align-items-center fade-section" style="min-height: 100vh;">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Image -->
            <div class="col-lg-5 col-md-6 text-center text-lg-start mb-4 mb-md-0">
                <img src="{{ asset('assets/images/profile.jpg') }}"
                    alt="Profile Image"
                    class="img-fluid rounded shadow hero-img">
            </div>

            <!-- Right Text -->
            <div class="col-lg-7 col-md-6 text-center text-md-start">
                <h1 class="mb-3 hero-title">Welcome to, <br><span class="text-primary"> my personal portfolio website.</span> </h1>
                <h2 class="mb-2 hero-name">Hello, I'm <span class="text-primary">ROMAM Balen</span></h2>
                <h3 class="mb-3 hero-role">I am a <span id="typing" class="text-gradient"></span></h3>
                <p class="hero-desc">I am a student passionate about learning and developing skills in technology and web development. This website showcases my profile, skills, education, and projects.</p>

                <!-- Buttons -->
                <div class="mt-4 hero-buttons">
                    <a href="#contact" class="btn btn-primary btn-lg me-3">Hire Me</a>
                    <a href="#portfolio" class="btn btn-outline-primary btn-lg">View Portfolio</a>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- HOME SECTION END -->




@endsection