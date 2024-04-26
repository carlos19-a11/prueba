<?php require_once('config.php'); ?>
<!DOCTYPE html>
<html lang="es">

<head>
	<title>Crud PHP</title>
	<meta charset="utf-8">

	<?php
	require_once('./layouts/stylos.php');
	?>
</head>

<body>
	<header>
		<?php
		require_once('./layouts/cabecera.php');
		?>

	</header>
    <br>
    <br>
    <br>

	<section>
   
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"], input[type="email"], select, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        textarea {
            height: 100px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>

    <div class="container">
        <h2>Formulario de PQR de Usuarios</h2>
        <form action="#" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>

            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono">

            <label for="identificacion">Número de Identificación:</label>
            <input type="text" id="identificacion" name="identificacion">

            <label for="ciudad">Ciudad:</label>
            <input type="text" id="ciudad" name="ciudad">

            <label for="departamento">Departamento:</label>
            <input type="text" id="departamento" name="departamento">

            <label for="tipo_queja">Tipo de Queja:</label>
            <select id="tipo_queja" name="tipo_queja" required>
                <option value="">Seleccione un tipo de queja</option>
                <option value="Producto Defectuoso">Producto Defectuoso</option>
                <option value="Servicio al Cliente">Servicio al Cliente</option>
                <option value="Envío Tardío">Envío Tardío</option>
                <option value="Otro">Otro</option>
            </select>

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" required></textarea>

            <input type="submit" value="Enviar Queja">
        </form>
    </div>

<footer id="site-footer" role="contentinfo">

		<div class="footer-bg">

			<div class="footer-inner container-xl">


				<div class="footer-bottom">

					<div class="footer-credits">

						<p class="footer-copyright">Copyright &copy;2024 Gola. All rights reserved.
						</p><!-- .footer-copyright -->

					</div><!-- .footer-credits -->

				</div><!-- .footer-bottom  -->

			</div><!-- .footer-inner -->

		</div>
</footer>
	
	</section>

	<?php
	require_once('./layouts/scripts.php');
	?>

</body>

</html>