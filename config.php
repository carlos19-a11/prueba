<?php
// Protocolo (http o https)
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';

// Host
$host = $_SERVER['HTTP_HOST'];

// Ruta base del sitio web
define('BASE_URL', $protocol . '://' . $host . '/distriserviciosp/');
define('BASE_ROOT', 'C:/xampp/htdocs/distriserviciosp/');

?>