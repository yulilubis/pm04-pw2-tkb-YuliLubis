<?php
class HomeController
{
    public function index()
    {
        $title = 'Home mY Store';
        ob_start();
        require __DIR__ . '/../../views/pages/home.php';
        $content = ob_get_clean();

        require __DIR__ . '/../../views/layouts/main.php';
    }
}