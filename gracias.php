<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Exitoso</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: #fff;
            font-family: 'Plus Jakarta Sans', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            background: rgba(255, 255, 255, 0.1);
            border: none;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px rgba(31, 38, 135, 0.37);
            padding: 30px;
        }
        .card-title {
            font-size: 2rem;
            font-weight: 700;
        }
        .btn-primary {
            background-color: #2575fc;
            border: none;
            transition: background-color 0.3s ease-in-out;
        }
        .btn-primary:hover {
            background-color: #6a11cb;
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <div class="card">
            <div class="card-body">
                <i class="bi bi-check-circle-fill text-success display-1"></i>
                <h1 class="card-title mt-4">¡Registro Exitoso!</h1>
                <p class="mt-3">Gracias por contactarnos. Hemos recibido tu información y nos pondremos en contacto contigo lo antes posible.</p>
                <a href="index.php" class="btn btn-primary btn-lg mt-4">Volver al inicio</a>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
