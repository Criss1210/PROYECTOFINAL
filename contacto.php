<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0"
    />
    <meta name="description" content="Formulario de contacto para la librería" />
    <meta name="author" content="John Kerlin Silvestre" />
    <title>Contacto - Librería</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Custom Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      rel="stylesheet"
    />
    <!-- Bootstrap icons-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
  </head>
  <body class="d-flex flex-column">
    <main class="flex-shrink-0">
      <!-- Navigation-->
      <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
        <div class="container px-5">
          <a class="navbar-brand" href="index.php"
            ><span class="fw-bolder text-primary">Librería</span></a
          >
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Libros.php">Libros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="autores.php">Autores</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contacto.php">Contacto</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Page content-->
      <section class="py-5">
        <div class="container px-5">
          <!-- Contact form-->
          <div class="bg-light rounded-4 py-5 px-4 px-md-5">
            <div class="text-center mb-5">
              <div
                class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"
              >
                <i class="bi bi-envelope"></i>
              </div>
              <h1 class="fw-bolder">Contacto</h1>
              <p class="lead fw-normal text-muted mb-0">Completa la información</p>
            </div>
            <div class="row gx-5 justify-content-center">
              <div class="col-lg-8 col-xl-6">
                <!-- Formulario de contacto -->
                <form action="procesar_contacto.php" method="POST">
                  <!-- Nombre input -->
                  <div class="form-floating mb-3">
                    <input
                      class="form-control"
                      id="nombre"
                      name="nombre"
                      type="text"
                      placeholder="Ingrese su nombre..."
                      required
                    />
                    <label for="nombre">Nombre</label>
                  </div>

                  <!-- Correo input -->
                  <div class="form-floating mb-3">
                    <input
                      class="form-control"
                      id="correo"
                      name="correo"
                      type="email"
                      placeholder="nombre@ejemplo.com"
                      required
                    />
                    <label for="correo">Correo</label>
                  </div>

                  <!-- Asunto input -->
                  <div class="form-floating mb-3">
                    <input
                      class="form-control"
                      id="asunto"
                      name="asunto"
                      type="text"
                      placeholder="Ingrese el asunto..."
                      required
                    />
                    <label for="asunto">Asunto</label>
                  </div>

                  <!-- Fecha input -->
                  <div class="form-floating mb-3">
                    <input
                      class="form-control"
                      id="fecha"
                      name="fecha"
                      type="date"
                      placeholder="Seleccione la fecha"
                      required
                    />
                    <label for="fecha">Fecha</label>
                  </div>

                  <!-- Comentario input -->
                  <div class="form-floating mb-3">
                    <textarea
                      class="form-control"
                      id="comentario"
                      name="comentario"
                      placeholder="Ingrese su comentario..."
                      style="height: 10rem"
                      required
                    ></textarea>
                    <label for="comentario">Comentario</label>
                  </div>

                  <!-- Botón de envío -->
                  <div class="d-grid">
                    <button class="btn btn-primary btn-lg" type="submit">Enviar info</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- Footer-->
    <footer class="bg-white py-4 mt-auto">
      <div class="container px-5">
        <div
          class="row align-items-center justify-content-between flex-column flex-sm-row"
        >
          <div class="col-auto">
            <div class="small m-0">Copyright &copy; John Kerlin Silvestre</div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
  </body>
</html>
