<?php
// Bagian 16: Memulai session di pintu gerbang utama aplikasi
session_start();

// Memuat file-file Controller yang dibutuhkan
require_once __DIR__ . '/../app/controllers/HomeController.php';
require_once __DIR__ . '/../app/controllers/ProductController.php';
require_once __DIR__ . '/../app/controllers/AuthController.php';

// Mengambil URL yang diakses di browser
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Routing Sederhana
switch ($uri) {
    case '/':
        $controller = new HomeController();
        $controller->index();
        break;

    case '/products':
        $controller = new ProductController();
        $controller->index();
        break;

    case '/login':
        $controller = new AuthController();
        $controller->login();
        break;
    
    case '/logout':
        session_destroy();
        header('Location: /login');
        exit;
        break;

    default:
        http_response_code(404);
        echo "404 Halaman tidak ditemukan";
        break;
}