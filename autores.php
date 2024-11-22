<?php
  include 'db/conexion.php' ;
  $libreria = new DBGestionLibreria();
$autores = $libreria->getAutores();
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
     
    <title>Autores - Libreria</title>
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
  <style>
  /* Fondo personalizado para la barra de navegación */
  .navbar {
    background-color: #3498db; /* Cambia el fondo a #3498db */
  }

  /* Estilo de los enlaces en la barra de navegación */
  .navbar-nav .nav-link {
    color: #ffffff; /* Color blanco para los enlaces */
    text-transform: uppercase; /* Texto en mayúsculas */
    font-weight: bold; /* Texto en negrita */
  }

  /* Estilo para los enlaces al pasar el mouse */
  .navbar-nav .nav-link:hover {
    color: #5d5dfc; /* Color de enlace al pasar el mouse */
    text-decoration: underline; /* Subrayado en el hover */
  }

  /* Estilo del logo */
  .navbar-brand {
    font-size: 1.5rem; /* Tamaño de fuente más grande */
    color: #ffffff; /* Color blanco para el logo */
    font-weight: bold; /* Negrita */
  }

  /* Cambiar el color de la barra de navegación en dispositivos móviles */
  .navbar-toggler-icon {
    background-color: #ffffff; /* Cambia el color del ícono de menú */
  }
</style>



  <body class="d-flex flex-column h-100">
  <main class="flex-shrink-0">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light py-3">
      <div class="container px-5">
        <a class="navbar-brand" href="index.php">
          <span class="fw-bolder text-white">El Rincón del Lector</span>
        </a>
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



    <style>
  /* Gradiente personalizado en el texto */
  .text-gradient {
    background: linear-gradient(to right, #3498db, #5d5dfc);
    -webkit-background-clip: text;
    color: transparent;
  }
</style>


      <!-- Page Content-->
      <div class="container px-5 my-5">
        <div class="text-center mb-5">
          <h1 class="display-5 fw-bolder mb-0">
            <span class="text-gradient d-inline">Autores</span>
          </h1>
        </div>
        <body>



        <style>
  .autor-container {
    display: flex;
    flex-wrap: wrap; /* Permite que las tarjetas salten de línea si no caben */
    gap: 16px; /* Espacio entre tarjetas */
    justify-content: flex-start; /* Alinea las tarjetas al inicio */
  }
  .card {
    flex: 1 1 calc(30% - 16px); /* Cada tarjeta ocupa 30% del ancho del contenedor menos el espacio del gap */
    max-width: calc(30% - 16px); /* Máximo ancho de 30% menos el espacio del gap */
    min-width: 250px; /* Asegura que las tarjetas no sean demasiado pequeñas */
    box-sizing: border-box; /* Incluye padding y borde en los cálculos de ancho */
    background-color: #f8f9fa; /* Fondo de color claro */
    border: 2px solid #3498db; /* Borde de color azul */
    border-radius: 8px; /* Bordes redondeados */
    padding: 16px; /* Espaciado interno */
  }
  .card-header {
    background-color: #3498db; /* Fondo azul para el encabezado */
    color: white; /* Texto blanco */
    padding: 8px;
    border-radius: 4px 4px 0 0; /* Bordes redondeados solo en la parte superior */
    font-weight: bold;
  }
</style>

        <div class="autor-container">    
    <?php foreach ($autores as $autor): ?>
        <div class="card">
            <div class="card-header">
                <?php echo htmlspecialchars($autor['nombre'].$autor['apellido']); ?>
            </div>
            <div class="card-body">
                <p><strong>Ciudad:</strong> <?php echo htmlspecialchars($autor['ciudad']); ?></p>
                <p><strong>Direccion:</strong>  <?php echo htmlspecialchars($autor['direccion']); ?></p>
                <p><strong>Estado:</strong>  <?php echo htmlspecialchars($autor['estado']); ?></p>
                <p><strong>Pais:</strong>  <?php echo htmlspecialchars($autor['pais']); ?></p>
                <p><strong>Código Postal:</strong>  <?php echo htmlspecialchars($autor['cod_postal']); ?></p>
            </div>
            <div class="card-footer">
                Telefono: <?php echo htmlspecialchars($autor['telefono']); ?></p>
            </div>
        </div>
    <?php endforeach; ?>
    <div class="autor-container">



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
            <div class="small m-0">Copyright &copy; Cristal Onedys Hernandez de la Rosa 2024</div>
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
