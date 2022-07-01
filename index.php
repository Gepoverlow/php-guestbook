<?php

declare(strict_types=1);

//require Models
require './Models/Post.php';
require './Models/PostLoader.php';

//require Controllers
require './Controllers/GuestBookController.php';
require './Controllers/HomeController.php';

$controller = new HomeController();

if (isset($_GET['page']) && $_GET['page'] === 'guestbook-view') {
    $controller = new GuestBookController();
}

$controller->render();



