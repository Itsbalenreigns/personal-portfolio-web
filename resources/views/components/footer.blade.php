<!-- FOOTER START -->
<footer class="bg-dark text-light pt-5">
    <div class="container">

        <div class="row gy-3">

            <!-- Brand / About -->
            <div class="col-lg-4 col-md-6">
                <h5 class="fw-bold mb-3">PU JPc</h5>
                <p class="text-secondary small">
                    A passionate IT student focused on web development,
                    software engineering, and modern technologies.
                </p>
            </div>


            <!-- Quick Links -->
            <div class="col-lg-4 col-md-6">
                <h6 class="fw-semibold mb-3">Quick Links</h6>
                <div class="row">
                    <!-- First Column of Links -->
                    <div class="col-6">
                        <ul class="list-unstyled small">
                            <li class="nav-item">
                                <!--  -->
                                <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                                    aria-current="page" href="{{ route('home') }}">
                                    Home
                                </a>
                            </li>

                            <li class="mb-2">
                                <a href="{{ route('pages.about') }}" class="nav-link {{ request()->routeIs('pages.about') ? 'active' : '' }} text-secondary text-decoration-none">About</a>
                            </li>
                            <li class="mb-2">
                                <a href="{{ route('pages.education') }}" class="nav-link {{ request()->routeIs('pages.education') ? 'active' : '' }} text-secondary text-decoration-none">Education</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Second Column of Links -->
                    <div class="col-6">
                        <ul class="list-unstyled small">
                            <li class="mb-2"><a href="{{ route('pages.skills') }}" class="nav-link {{ request()->routeIs('pages.skills') ? 'active' : '' }} text-secondary text-decoration-none">Skills</a></li>
                            <li class="mb-2"><a href="{{ route('pages.projects') }}" class="nav-link {{ request()->routeIs('pages.projects') ? 'active' : '' }} text-secondary text-decoration-none">Projects</a></li>
                            <li><a href="{{ route('pages.contact') }}" class="nav-link {{ request()->routeIs('pages.contact') ? 'active' : '' }} text-secondary text-decoration-none">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Newsletter -->
            <div class="col-lg-4 col-md-6">
                <h6 class="fw-semibold mb-3">Subscribe</h6>
                <p class="text-secondary small">
                    Get updates about my latest projects and work.
                </p>
                <form class="d-flex gap-2">
                    <input type="email" class="form-control form-control-sm bg-secondary bg-opacity-10 border-0 text-light"
                        placeholder="Your email">
                    <button class="btn btn-primary btn-sm px-3">Subscribe</button>
                </form>
            </div>

        </div>

        <hr class="border-secondary my-4">

        <!-- Bottom -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center pb-3">
            <p class="mb-2 mb-md-0 small text-secondary">
                © 2026 PU | JPc. All rights reserved.
            </p>

            <!-- Social Icons -->
            <div class="d-flex gap-3">
                <a href="#" class="text-secondary fs-5"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-secondary fs-5"><i class="bi bi-github"></i></a>
                <a href="#" class="text-secondary fs-5"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>

    </div>
</footer>
<!-- FOOTER END -->