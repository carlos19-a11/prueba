<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Facturas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #333;
        }
        header {
            background-color: #007bff;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            margin-top: 0;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        footer {
            text-align: center;
            padding: 10px 0;
            background-color: #007bff;
            color: #fff;
            position: fixed;    
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Consulta de Facturas</h1>
    </header>

    <div class="container">
        <form action="#" method="post">
            <label for="numero_factura">Número de Factura:</label>
            <input type="text" id="numero_factura" name="numero_factura" placeholder="Ingrese el número de factura" required>
            <input type="submit" value="Consultar">
        </form>

        <div id="resultado_factura">
            <!-- Aquí se mostrará el resultado de la consulta -->
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Empresa ABC - Todos los derechos reservados</p>
    </footer>
</body>
</html>
