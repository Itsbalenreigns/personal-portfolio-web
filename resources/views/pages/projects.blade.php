@extends('layout')

@section('title', 'Projects | ROMAM Balen')

@section('content')


<section class="py-5 bg-light bg-opacity-75 fade-section">
    <div class="container py-3">

        <!-- Title -->
        <div class="text-center mb-4">
            <h3 class="fw-bold">Projects</h3>

            <!-- Divider -->
            <div class="divider-rows mx-auto my-3">
                <div class="divider long"></div>
                <div class="divider medium"></div>
                <div class="divider short"></div>
            </div>

            <p class="text-muted mx-auto" style="max-width: 600px;">
                A selection of projects that demonstrate my experience in web
                development, UI/UX design, and problem-solving.
            </p>
        </div>

        <!-- Projects Grid -->
        <div class="row g-4">
            @foreach($projects as $project)
            <!-- Project -->
            <div class="col-lg-4 col-md-6">
                <div class="project-card h-100 text-center shadow">
                    <div class="project-icon mb-3">
                        @if($project->image)
                            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="img-fluid rounded" style="width: 60px; height: 60px; object-fit: cover;">
                        @else
                            <i class="bi bi-code-slash"></i>
                        @endif
                    </div>
                    <h6 class="fw-bold">{{ $project->title }}</h6>
                    <p class="text-muted small">
                        {{ $project->description }}
                    </p>
                    @if($project->link)
                        <a href="{{ $project->link }}" target="_blank" class="btn btn-primary btn-sm mt-2">View Project</a>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>




<!-- ABOUT SECTION END -->

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

    .project-icon {
        width: 60px;
        height: 60px;
        background: #f8f9fa;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
    }

    .project-icon i {
        font-size: 26px;
        color: #0d6efd;
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