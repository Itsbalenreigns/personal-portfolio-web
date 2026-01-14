@extends('layout')

@section('title', 'Contact Me | ROMAM Balen')

@section('content')

<section class="py-5 bg-light bg-opacity-75 fade-section">
    <div class="container py-3">

        <!-- Title -->
        <div class="text-center mb-4">
            <h3 class="fw-bold">Get in Touch</h3>

            <!-- Divider -->
            <div class="divider-rows mx-auto my-3">
                <div class="divider long"></div>
                <div class="divider medium"></div>
                <div class="divider short"></div>
            </div>

            <p class="text-muted mx-auto" style="max-width: 600px;">
                Fill out the form below and we'll get back to you as soon as possible.
            </p>

            <!-- Social Media Links -->
            <div class="text-center mb-4">
                <a href="https://www.linkedin.com/in/balen-romam-2018b9342?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank" class="text-primary fs-4 mx-2">
                    <i class="bi bi-linkedin"></i>
                </a>
                <a href="https://github.com/Itsbalenreigns" target="_blank" class="text-dark fs-4 mx-2">
                    <i class="bi bi-github"></i>
                </a>
                <a href="https://www.facebook.com/share/1DaBBbcg4Q/" target="_blank" class="text-primary fs-4 mx-2">
                    <i class="bi bi-facebook"></i>
                </a>
            </div>
        </div>

        <!-- Contact Form Card -->

        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="project-card shadow">

                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                    @endif

                    @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                    @endif


                    <form method="POST" action="{{ route('contact.store') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Username">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold">Email</label>
                            <input
                                type="email"
                                class="form-control"
                                name="email"
                                id="email"
                                placeholder="Enter Email Address"
                                required>
                        </div>


                        <div class="mb-3">
                            <label for="subject" class="form-label fw-bold">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label fw-bold">Message</label>
                            <textarea class="form-control" name="message" id="message" rows="4" placeholder="Your message" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Send Message</button>
                    </form>
                </div>
            </div>
        </div>





    </div>
</section>

<style>
    .project-card {
        background: #fff;
        padding: 30px 25px;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }

    .project-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
    }

    /* Divider rows */
    .divider-rows {
        width: 120px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 6px;
    }

    .divider {
        height: 3px;
        background-color: #0d6efd;
        border-radius: 10px;
    }

    .divider.long {
        width: 120px;
    }

    .divider.medium {
        width: 70px;
    }

    .divider.short {
        width: 40px;
    }
</style>

@endsection