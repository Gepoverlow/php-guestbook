<?php

declare(strict_types=1);

//require Models
require './Models/Post.php';
require './Models/PostSaver.php';
require './Models/PostLoader.php';

//require Controllers
require './Controllers/GuestBookController.php';
require './Controllers/HomeController.php';

$controller = new HomeController();

if (isset($_GET['page']) && $_GET['page'] === 'guestbook-view') {
    $controller = new GuestBookController();
}

$postSaver = new PostSaver();
$postSaver->savePost(new Post("a title", "some content", "an author"));
// $postSaver->getStoredPosts();

$controller->render();



