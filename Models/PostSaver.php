<?php

declare(strict_types=1);

class PostSaver{

    private Post $post;

    public function __construct(string $title, string $content, string $authorName){

        $this->post = new Post($title, $content, $authorName);

    }

public function savePost(){
    $postInfo = [];
    $postInfo["title"] = $this->post->getTitle();
    $postInfo["date"] = $this->post->getDate();
    $postInfo["content"] = $this->post->getContent();
    $postInfo["author"] = $this->post->getAuthorName();

    $encodedInfo = json_encode($postInfo);
    
    file_put_contents("savedPosts.txt", $encodedInfo, FILE_APPEND);

}
    
}