<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  //Wy9Cls1lOnQ
  //Wy9Cls1lOnQ
  include 'db/conexion.php' ;
  $libreria = new DBGestionLibreria();
$libros = $libreria->getLibros();
?>  

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
     
    <title>Nuestros libros - Libreria</title>
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
    <style>
      body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
}

h1 {
    text-align: center;
    color: #4b2cc5;
    margin: 20px 0;
    font-size: 2.5rem;
}

.card-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
    padding: 20px;
    max-width: 1200px;
    margin: 0 auto;
}

.card {
    background: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    padding: 20px;
    margin:20px;
    transition: transform 0.2s, box-shadow 0.2s;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
}

.card h2 {
    font-size: 1.5rem;
    margin-bottom: 10px;
    color: #333;
}

.card p {
    margin: 5px 0;
    font-size: 0.9rem;
    color: #555;
}

.card .price {
    margin-top: 10px;
    font-weight: bold;
    color: #4b2cc5;
}

    </style>
  </head>
  <body class="d-flex flex-column h-100 bg-light">
    <main class="flex-shrink-0">
      <!-- Navigation-->
      <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
        <div class="container px-5">
          <a class="navbar-brand" href="index.php"
            ><span class="fw-bolder text-primary">Libreria</span></a
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
      <!-- Page Content-->
      <div class="container px-5 my-5">
        <div class="text-center mb-5">
          <h1 class="display-5 fw-bolder mb-0">
            <span class="text-gradient d-inline">Nuestros libros</span>
          </h1>
        </div>
        <body>
    <?php foreach ($libros as $libro): ?>
        <div class="card">
            <div class="card-header">
                <?php echo htmlspecialchars($libro['titulo']); ?>
            </div>
            <div class="card-body">
                <p><strong>Fecha de Publicación:</strong> <?php echo htmlspecialchars($libro['fecha_pub']); ?></p>
                <p><strong>Notas:</strong> <?php echo htmlspecialchars($libro['notas']); ?></p>
            </div>
            <div class="card-footer">
                Precio: <span class="price">$<?php echo htmlspecialchars($libro['precio']); ?></span>
            </div>
        </div>
    <?php endforeach; ?>
</body>
      </div>
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
          <!-- <div class="col-auto">
            <a class="small" href="#!">Privacy</a>
            <span class="mx-1">&middot;</span>
            <a class="small" href="#!">Terms</a>
            <span class="mx-1">&middot;</span>
            <a class="small" href="#!">Contact</a>
          </div> -->
        </div>
      </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
  </body>
</html>
