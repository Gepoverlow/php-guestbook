<?php

declare(strict_types=1);

class GuestBookController{

public function render(){

$postLoader = new PostLoader();
$postsArray = $postLoader->getPosts();

if(isset($_POST["write-post"])){
    require './Views/message-form.php';
}

require './Views/guestbook.php';
        
}

}