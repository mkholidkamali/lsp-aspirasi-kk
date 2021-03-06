<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Aspirasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/sidebars.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sidebars/">
</head>

<body style="overflow: hidden">

    <div class="row">
        <nav class="d-block col-md-2 bg-dark">
            <div class="d-flex flex-column flex-shrink-0 p-3 text-white " style="height: 100vh">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-4">Kelola Aspirasi</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link active" aria-current="page">
                            Aspirasi
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">
                            Galeri
                        </a>
                    </li>
                </ul>
                <hr>
                <div class="d-grip gap-2">
                <a href="#" class="text-white text-decoration-none btn btn-danger btn-fluid">
                    <strong class="text-center">Logout</strong>
                </a>
                <a href="/" class="text-white text-decoration-none btn btn-danger btn-fluid">
                    <strong class="text-center">Logout</strong>
                </a>
                </div>
            </div>
        </nav>

        <main class="col-md-10 bg-light">
            <div class="container">
                @yield('container')
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="/js/sidebars.js"></script>
</body>
</html>
