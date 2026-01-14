@extends('layout')

@section('title', 'Education | ROMAM Balen')

@section('content')

<!-- EDUCATION SECTION START -->
<section class="education py-5 fade-section" style="min-height: 100vh;">
    <div class="container py-3">

        <!-- Title -->
        <div class="text-center mb-3">
            <h3 class="fw-bold">Education</h3>
            <!-- Divider rows -->
            <div class="divider-rows mx-auto my-3">
                <div class="divider long"></div>
                <div class="divider medium"></div>
                <div class="divider short"></div>
            </div>
            <p class="text-muted mx-auto" style="max-width: 900px;">
                An overview of my academic journey, highlighting the institutions I attended,
                the knowledge I gained, and the foundation that shaped my skills in information
                technology and software development.
            </p>

        </div>

        <div class="row g-4 mb-4 timeline">
            @foreach($educations as $education)
            <div class="col-lg-6 col-md-12 d-flex justify-content-center">
                <div class="h-100 ps-lg-4">
                    <div class="card h-100 shadow education-card" style="width: 32rem;">
                        <div class="card-body">
                            <h5 class="fw-bold mb-2">{{ $education->degree }}</h5>
                            <small class="text-muted d-block mb-2">{{ $education->institution }} - {{ $education->year_start }} @if($education->year_end) - {{ $education->year_end }} @else - Present @endif</small>
                            <p class="text-muted mb-0">
                                {{ $education->description ?? 'No description available.' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- EDUCATION SECTION END -->

<!-- Custom CSS for hover effect -->
<style>
    /* Timeline center vertical line */
    .timeline {
        position: relative;
    }

    .timeline::before {
        content: "";
        position: absolute;
        top: 32px;
        bottom: 0;
        left: 50%;
        width: 3px;
        background-color: #dee2e6;
        transform: translateX(-50%);
    }

    /* Mobile fix */
    @media (max-width: 767px) {
        .timeline::before {
            left: 12px;
        }

        .education-card {
            width: 100% !important;
        }
    }

    .education-card {
        border-radius: 0.8rem;
        /* Rounded corners */
        padding: 20px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .education-card:hover {
        transform: translateY(-10px) scale(1.03);
        box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.2);
    }

    /* .divider-rows {
        display: flex;
        flex-direction: column;
        align-items: flex-center;
        gap: 6px;
    } */
    .divider-rows {
        width: 120px;
        /* width of the longest line */
        margin: 0 auto;
        /* center the group */
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        /* SAME START POINT */
        gap: 6px;
    }

    .divider {
        height: 3px;
        background-color: #0d6efd;
        /* Bootstrap primary */
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
</style>


@endsection