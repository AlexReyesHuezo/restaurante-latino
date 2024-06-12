<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <title>Restaurante latino</title>

  <!-- Bootstrap CSS and Boostrap Icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand fw-bolder" href="#"><i class="bi bi-shop fs-2 me-4"></i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="home">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#menu">Menú</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#events">Eventos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#chefs">Chefs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#testimonials">Opiniones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="overflow-x-hidden">
    <section class="container-fluid p-0" id="banner">
      <div class="row align-items-center" style="background: radial-gradient(circle at 50% 0%,#F8D5C6, #2E537C)">
        <div class="col-md-4 text-center text-md-start p-4 text-break">
            <h1 class="display-3 fw-bolder" style="overflow-wrap: break-word; hyphens: auto;">Restaurante latino</h1>
          <p class="lead text-break fw-bold">El mejor lugar para disfrutar de la comida latinoamericana en San Salvador, El Salvador.</p>
        </div>
        <div class="col-md-8">
          <img
            src="./image/banner.jpg"
            class="img-fluid"
            alt="Restaurante latino" />
        </div>
      </div>
    </section>
  </header>

  <main class="">

    <section id="chefs" class="container-fluid py-4 bg-dark text-white">
      <h2 class="text-center fw-bolder">Nuestros Chefs</h2>
      <div class="row justify-content-center m-auto p-2">

        <div class="col-lg-4 col-md-10 col-sm-12 sm-mt-2 mb-4">
          <div class="card border-dark bg-primary-subtle h-100">
            <img src="./image/chefs/chef-antonio.jpg" class="card-img-top" alt="Chef 1" />
            <div class="card-body">
              <h5 class="card-title">Chef Antonio</h5>
              <p class="card-text">
                Antonio se especializa en condimentos y especias. Posee vasta experiencia en la cocina andina y amazonica. En Restaurante latino, es el encargado de preparar los platos y de seleccionar de los ingredientes. En su tiempo libre, le gusta compartir sus conocimientos con otros chefs.
              </p>
              <p>
              <span class="align-middle">Siguelo como <span class="fst-italic">@chefantonio</span></span>
              <button type="button" class="btn btn-outline-secondary">
                <i class="bi bi-facebook text-primary"></i>
                <span class="visually-hidden">Button</span>
              </button>
              <button type="button" class="btn btn-outline-secondary">
                <i class="bi bi-instagram text-warning-emphasis"></i>
                <span class="visually-hidden">Button</span>
              </button>
              <button type="button" class="btn btn-outline-secondary">
                <i class="bi bi-pinterest text-danger"></i>
                <span class="visually-hidden">Button</span>
              </button>
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-10 col-sm-12 mb-4">
          <div class="card border-dark bg-primary-subtle h-100">
            <img src="./image/chefs/chef-rocio.jpg" class="card-img-top" alt="Chef 2" />
            <div class="card-body">
              <h5 class="card-title
                ">Chef Rocío</h5>
              <p class="card-text">
              Rocio es experta en cocina latinoamericana. En Restaurante latino, es la encargada de crear los menús y supervisar la preparación de los platos. En su tiempo libre, le gusta viajar y descubrir nuevas recetas de cocina.
              </p>
              <p>
              <span class="align-middle">Siguela como <span class="fst-italic">@chefrocioo</span></span>
              <button type="button" class="btn btn-outline-secondary">
                <i class="bi bi-facebook text-primary"></i>
                <span class="visually-hidden">Button</span>
              </button>
              <button type="button" class="btn btn-outline-secondary">
                <i class="bi bi-instagram text-warning-emphasis"></i>
                <span class="visually-hidden">Button</span>
              </button>
              <button type="button" class="btn btn-outline-secondary">
                <i class="bi bi-pinterest text-danger"></i>
                <span class="visually-hidden">Button</span>
              </button>
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-10 col-sm-12 mb-4">
          <div class="card border-dark bg-primary-subtle h-100">
            <img src="./image/chefs/chef-hugo.jpg" class="card-img-top" alt="Chef 3" />
            <div class="card-body">
              <h5 class="card-title
                ">Chef Hugo</h5>
              <p class="card-text">
                Hugo se especializa en cocina caribeña y centroamericana. En Restaurante latino, Hugo es el encargado de preparar los aderezos, salsas, bebidas y guarniciones. En su tiempo libre, le gusta practicar deportes y leer libros de cocina.
              </p>
              <p>
              <span class="align-middle">Siguelo como <span class="fst-italic">@chefjiugo</span></span>
              <button type="button" class="btn btn-outline-secondary">
                <i class="bi bi-facebook text-primary"></i>
                <span class="visually-hidden">Button</span>
              </button>
              <button type="button" class="btn btn-outline-secondary">
                <i class="bi bi-instagram text-warning-emphasis"></i>
                <span class="visually-hidden">Button</span>
              </button>
              <button type="button" class="btn btn-outline-secondary">
                <i class="bi bi-pinterest text-danger"></i>
                <span class="visually-hidden">Button</span>
              </button>
              </p>
            </div>
          </div>
        </div>

      </div>
    </section>

  </main>

  <footer class="bg-dark text-light py-3">
    <div class="container d-flex justify-content-between align-items-center">
      <div class="p-2 me-4">
        <p class="m-0">Restaurante latino</p>
        <p class="m-0">Calle 123, San Salvador, El Salvador</p>
        <p class="m-0">Teléfono: +503 456 789</p>
        <br>
        <p>©️ 2024 Restaurante latino, Inc | <span class="fw-mediu text-white-50">Este es un sitio web de ejemplo
            y
            no es
            real</span></p>
      </div>
      <div class="d-sm-d-flex justify-content-center align-items-center">
        <a class="text-light me-4" href="#"><i class="bi bi-twitter-x"></i></a>
        <a class="text-light me-4" href="#"><i class="bi bi-instagram"></i></a>
        <a class="text-light" href="#"><i class="bi bi-youtube"></i></a>
      </div>
    </div>
  </footer>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
  </script>
</body>

</html>