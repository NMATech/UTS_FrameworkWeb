<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UTS Framework Web</title>

    {{-- Connect to bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="nav bg-dark text-white p-2">
        <h3>Rexus Store</h3>
    </nav>

    @yield('main')

    <footer class="footer bg-dark text-white mt-5">
        <div class="container p-4 text-center">
            <h3>RexusStore.com</h3>
            
            <nav class="link-light">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a href="#" class="nav-link link-light">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link link-light">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link link-light">Contact</a>
                    </li>
                </ul>
            </nav>

            <p class="text-secondary">Copyright &copy;2023 All rights reserved | made by <a href="instagram.com/itsnadin_ra" class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Nadindra Maulana Aziz</a></p>
        </div>
    </footer>

    {{-- Connect to bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>