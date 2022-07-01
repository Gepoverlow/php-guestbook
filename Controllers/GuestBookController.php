<?php

declare(strict_types=1);

class GuestBookController{

public function render(){

    
    if(isset($_POST["write-post"])){
        
        require './Views/message-form.php';
        
    } elseif(isset($_POST["submit-post"])){
        //create post and add it to the local file
        $postTitle = $_POST["title"];
        $postContent = $_POST["content"];
        $postAuthorName = $_POST["author"];

        $postSaver = new PostSaver($postTitle, $postContent, $postAuthorName);
        $postSaver->savePost();
      
    }
    $postLoader = new PostLoader();
    $postsArray = $postLoader->getPosts();

require './Views/guestbook.php';
        
}

}