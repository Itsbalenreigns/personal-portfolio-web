<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Personal-Portfolio')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Montserrat:wght@600;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


</head>
<style>
    /* Fonts */
    body {
        scroll-behavior: smooth;
        padding-top: 20px;
        font-family: 'Roboto', sans-serif;
    }

    /* Fade + slide animation */
    .fade-section {
        opacity: 0;
        transform: translateY(25px);
        transition: opacity 0.8s ease, transform 0.8s ease;
    }

    .fade-section.show {
        opacity: 1;
        transform: translateY(0);
    }

    .hero-title {
        font-family: 'Montserrat', sans-serif;
        font-weight: 700;
        font-size: 2.5rem;
        color: #333;
    }

    .hero-name {
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
        font-size: 2rem;
    }

    .hero-role {
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
        font-size: 1.5rem;
        min-height: 1.5em;
        /* prevents jump during typing */
    }

    /* Gradient text for typing */
    .text-gradient {
        background: linear-gradient(90deg, #007bff, #00c6ff);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    /* Paragraph */
    .hero-desc {
        font-size: 1.1rem;
        color: #555;
    }

    /* Hero Image */
    .hero-img {
        max-width: 320px;
        border-radius: 20px;
    }

    /* Buttons */
    .hero-buttons .btn {
        padding: 0.75rem 1.8rem;
        font-size: 1rem;
        border-radius: 50px;
        transition: all 0.3s ease;
    }

    .hero-buttons .btn-primary {
        background: linear-gradient(90deg, #007bff, #00c6ff);
        border: none;
    }

    .hero-buttons .btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0, 198, 255, 0.4);
    }

    .hero-buttons .btn-outline-primary {
        border-color: #007bff;
        color: #007bff;
    }

    .hero-buttons .btn-outline-primary:hover {
        background: #007bff;
        color: #fff;
        transform: translateY(-3px);
    }

    /* Responsive */
    @media (max-width: 992px) {
        .hero-title {
            font-size: 2rem;
        }

        .hero-name {
            font-size: 1.6rem;
        }

        .hero-role {
            font-size: 1.3rem;
        }
    }

    @media (max-width: 576px) {
        body {
            padding-top: 55px;
        }

        .home {
            text-align: center;
            flex-direction: column;
        }

        .hero-title {
            font-size: 1.6rem;
        }

        .hero-name {
            font-size: 1.3rem;
        }

        .hero-role {
            font-size: 1.1rem;
        }

        .hero-buttons .btn {
            width: 100%;
            margin-bottom: 10px;
        }
    }
</style>

<body>

    <!-- HEADER START -->
    @include('components.header')
    <!-- HEADER END -->


    <!-- BODY START -->
    <div class="container-fluid mt-4">
        @yield('content')
    </div>
    <!-- BODY END -->


    <!-- FOOTER START -->
    @include('components.footer')
    <!-- FOOTER END -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>


    <script>
    document.addEventListener("DOMContentLoaded", () => {
        const sections = document.querySelectorAll(".fade-section");

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("show");
                }
            });
        }, {
            threshold: 0.15
        });

        sections.forEach(section => observer.observe(section));

        const words = ["Web Developer", "Frontend Developer", "Full Stack Developer"];
        let i = 0;
        let j = 0;
        let currentWord = '';
        let isDeleting = false;
        const typingElement = document.getElementById('typing');

        function type() {
            if (i >= words.length) i = 0;

            currentWord = words[i];

            if (!isDeleting) {
                typingElement.textContent = currentWord.substring(0, j + 1);
                j++;
                if (j === currentWord.length) {
                    isDeleting = true;
                    setTimeout(type, 1000); // wait before deleting
                    return;
                }
            } else {
                typingElement.textContent = currentWord.substring(0, j - 1);
                j--;
                if (j === 0) {
                    isDeleting = false;
                    i++;
                }
            }

            setTimeout(type, isDeleting ? 100 : 200);
        }

        type();
    });
</script>

</body>

</html>