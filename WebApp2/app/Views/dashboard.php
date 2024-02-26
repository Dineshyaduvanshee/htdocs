<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 60px; /* Adjust the top padding according to your navigation bar height */
        }

        .animated-section {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease-in-out, transform 0.8s ease-in-out;
        }

        .animated-section.active {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">IndiCosmic Capital Pvt Ltd.</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"> Logout</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-6 animated-section">
            <h2>Revolutionizing Insurtech and Automotive Industry with Technological Excellence</h2>
            <p>From strategy to execution, your journey to excellence in digital technology & transformation starts here.</p>
        </div>
        <!-- <div class="col-md-6 animated-section">
        <p>Welcome User  | <a href="">Logout</a></p>
        </div> -->
        <div class="col-md-6 animated-section">
            <h2>India’s leading technology solution provider for the global insurance and
            automobile industry.</h2>
            <p>Connect with our experts to leverage your business & unlock its true potential.</p>
        </div>
    </div>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    // Add animation when the element enters the viewport
    function addAnimation() {
        const animatedSections = document.querySelectorAll('.animated-section');

        animatedSections.forEach(section => {
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        observer.unobserve(entry.target);
                    }
                });
            });

            observer.observe(section);
        });
    }

    // Call the function when the document is ready
    document.addEventListener('DOMContentLoaded', addAnimation);
</script>
</body>
</html>
