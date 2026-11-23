<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hihuy!</title>
    <!-- Bootstrap 5 CSS CDN -->
    <!-- Memuat Bootstrap & CSS custom yang dikelola Vite -->
    @vite(['resources/sass/app.scss'])
</head>
<body class="bg-purple-main text-white">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-purple px-3">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold d-flex align-items-center bg-dark rounded px-2 py-1 text-warning" href="#">
                Hihuy! <span class="badge bg-warning text-dark ms-1 fs-6">GO</span>
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-3">
                    <li class="nav-item"><a class="nav-link active bg-success rounded px-3 py-1 me-2 text-white" href="#">Discover</a></li>
                    <li class="nav-item"><a class="nav-link bg-dark rounded px-3 py-1 me-2 text-white" href="#">Study</a></li>
                    <li class="nav-item"><a class="nav-link bg-dark rounded px-3 py-1 me-2 text-white" href="#">Present</a></li>
                    <li class="nav-item"><a class="nav-link bg-danger rounded px-3 py-1 text-white" href="#">Make</a></li>
                </ul>
                <div class="d-flex align-items-center">
                    <a href="#" class="btn btn-primary rounded-pill px-4 fw-bold">Join</a>
                    <div class="ms-3 text-dark border border-dark rounded px-2 py-1 small bg-white d-flex align-items-center fw-bold">
                   <span class="me-1">🌐</span> EN
                   </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content / Hero Section -->
    <main class="container d-flex flex-column justify-content-center align-items-center" style="min-height: 80vh;">
        <!-- Logo / Brand Title -->
        <div class="text-center mb-4">
            <h1 class="display-3 fw-bold fst-italic tracking-wide">Hihuy!</h1>
        </div>

        <!-- PIN Card Box -->
        <div class="card shadow-lg p-4 rounded-4 border-0 text-dark" style="width: 100%; max-width: 400px;">
            <div class="card-body text-center">
                <h6 class="fw-bold text-muted mb-3" style="letter-spacing: 2px;">PIN</h6>
                <form>
                    <div class="mb-3">
                        <input type="text" class="form-control form-control-lg text-center fw-bold py-3 border-2" placeholder="Enter PIN" style="font-size: 1.1rem;">
                    </div>
                    <button type="submit" class="btn btn-dark btn-lg w-100 fw-bold py-3 rounded-3">Join</button>
                </form>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="text-center py-3 text-white-50 small">
        <p class="mb-1">Get started for FREE at <span class="text-white fw-bold">hihuy.com</span></p>
        <p class="mb-0"><a href="#" class="text-white-50 text-decoration-none">Terms</a> | <a href="#" class="text-white-50 text-decoration-none">Privacy</a> | <a href="#" class="text-white-50 text-decoration-none">Cookie notice</a></p>
    </footer>

    <!-- Memuat JS Bootstrap dengan Vite -->
    @vite('resources/js/app.js')
</body>
</html>
