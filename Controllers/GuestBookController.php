<?php

declare(strict_types=1);

class GuestBookController{

    private bool $isFormRequested = false;

public function render(){

    
    if(isset($_POST["write-post"])){
        
        $this->setIsFormRequested(true);
        
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
    $formWasRequested = $this->getIsFormRequested();

require './Views/guestbook.php';
        
}

public function getIsFormRequested(){

    return $this->isFormRequested;

}

public function setIsFormRequested(bool $bool){

    $this->isFormRequested = $bool;

}

}