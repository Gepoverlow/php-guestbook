<?php

declare(strict_types=1);

class PostSaver{

    private Post $post;

    public function __construct(string $title, string $content, string $authorName){

        $this->post = new Post($title, $content, $authorName);

    }

public function savePost(){

    $savedPosts = file_get_contents("savedPosts.txt");
    
    $decodedPosts = json_decode($savedPosts, true);
    $decodedPosts[] = $this->post;
    
    $encodedPosts = json_encode($decodedPosts, JSON_PRETTY_PRINT);
    
    file_put_contents("savedPosts.txt",$encodedPosts);

}
    
}