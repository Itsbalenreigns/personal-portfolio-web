@extends('layout')

@section('title', 'Skills | ROMAM Balen')

@section('content')


<section class="py-5 bg-light bg-opacity-75 fade-section" style="min-height: 100vh;">
    <div class="container py-3">

        <!-- Title -->
        <div class="text-center mb-5">
            <h3 class="fw-bold">My Skills</h3>

            <!-- Divider -->
            <div class="divider-rows mx-auto my-3">
                <div class="divider long"></div>
                <div class="divider medium"></div>
                <div class="divider short"></div>
            </div>

            <p class="text-muted mx-auto" style="max-width: 600px;">
                A collection of technical and design skills that I have developed
                through academic study and hands-on project experience.
            </p>
        </div>

        <div class="row g-5 mb-4">
            <div class="col-12">
                <h5 class="fw-bold mb-4">My Skills</h5>
                @foreach($skills as $skill)
                <div class="skill mb-4">
                    <div class="d-flex justify-content-between">
                        <span>{{ $skill->name }}</span>
                        <span>{{ $skill->level }}%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" style="width: {{ $skill->level }}%"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>



<!-- ABOUT SECTION END -->

<style>
    /* Skill progress */
    .skill span {
        font-size: 14px;
        font-weight: 500;
    }

    .progress {
        height: 6px;
        background-color: #dee2e6;
        border-radius: 10px;
        overflow: hidden;
    }

    .progress-bar {
        background-color: #0d6efd;
        /* red like image */
        border-radius: 10px;
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