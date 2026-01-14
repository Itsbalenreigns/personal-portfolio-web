@extends('layout')

@section('title', $about->title ?? 'About Me | ROMAM Balen')

@section('content')

<!-- ABOUT SECTION START -->
<section class="about py-5 bg-light fade-section" style="min-height: 100vh;">
    <div class="container py-5">

        <!-- Top About Me Row -->
        <div class="row align-items-center mb-5">
            <!-- Text Column -->
            <div class="col-lg-6 mb-4 mb-lg-0 text-center text-lg-start">
                <h3 class="text-primary fw-bold mb-3">{{ $about->title ?? 'About Me' }}</h3>
                <!-- Divider rows -->
                <div class="divider-rows mx-auto my-3">
                    <div class="divider long"></div>
                    <div class="divider medium"></div>
                    <div class="divider short"></div>
                </div>
                <p class="text-muted fs-6 mb-4">
                    {{ $about->description ?? 'I am a passionate web developer with experience in building modern, responsive, and user-friendly applications. I enjoy turning ideas into real-world projects and continuously improving my skills in frontend and backend technologies.' }}
                </p>
                <a href="{{ route('pages.contact') }}" class="btn btn-primary btn-lg">Contact Me</a>
            </div>
            <!-- Image Column -->
            <div class="col-lg-6 text-center">
                <img src="{{ $about->image ? asset('storage/' . $about->image) : asset('assets/background1.jpg') }}"
                    alt="About Me Image"
                    class="img-fluid rounded shadow-lg"
                    style="max-height: 400px;">
            </div>
        </div>

        <!-- About Overview -->
        <div class="row text-center mb-5">
            <div class="col-12 mt-5">
                <h4 class="text-primary fw-bold mb-3">Overview</h4>
                <p class="text-muted fs-6">
                    Here’s a quick overview of my personal background, career objectives, interests, hobbies, and professional journey.
                </p>
            </div>
        </div>

        <!-- Cards Row -->
        <div class="row text-center g-4">
            <!-- Personal Background -->
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow h-100 p-3 about-card ">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="bi bi-person fs-1 text-primary"></i>
                        </div>
                        <h5 class="card-title fw-bold">Personal Background</h5>
                        <p class="card-text">
                            I am a passionate student with a strong interest in technology and web development, continuously improving my technical skills.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Career Objective -->
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow h-100 p-3 about-card ">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="bi bi-briefcase fs-1 text-primary"></i>
                        </div>
                        <h5 class="card-title fw-bold">Career Objective</h5>
                        <p class="card-text">
                            I aspire to become a skilled web developer and contribute to impactful projects by mastering modern web technologies.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Interests & Hobbies -->
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow h-100 p-3 about-card ">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="bi bi-code-slash fs-1 text-primary"></i>
                        </div>
                        <h5 class="card-title fw-bold">Interests & Hobbies</h5>
                        <p class="card-text">
                            I enjoy exploring software design, UI/UX, and building personal projects while staying up-to-date with tech trends.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Short Biography -->
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow h-100 p-3 about-card ">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="bi bi-journal-text fs-1 text-primary"></i>
                        </div>
                        <h5 class="card-title fw-bold">Short Biography</h5>
                        <p class="card-text">
                            A dedicated learner with a passion for problem-solving, aiming to make a meaningful impact in web development.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- ABOUT SECTION END -->


<!-- Custom CSS for hover effect -->
<style>
    .about-card {
        border-radius: 1.5rem;
        /* Rounded corners */
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .about-card:hover {
        transform: translateY(-10px) scale(1.03);
        box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.2);
    }

    .divider-rows {
        display: flex;
        flex-direction: column;
        align-items: center;
        /* corrected */
        gap: 6px;
    }

    /* Left align on large screens */
    @media (min-width: 992px) {
        .divider-rows {
            align-items: flex-start;
        }
    }

    .divider {
        height: 3px;
        background-color: #0d6efd;
        /* Bootstrap primary color */
        border-radius: 10px;
    }

    /* Different widths */
    .divider.long {
        width: 120px;
    }

    .divider.medium {
        width: 70px;
    }

    .divider.short {
        width: 40px;
    }

    /* Make dividers smaller on mobile */
    @media (max-width: 575px) {
        .divider.long {
            width: 80px;
        }

        .divider.medium {
            width: 50px;
        }

        .divider.short {
            width: 25px;
        }
    }
</style>

@endsection