<?php

declare(strict_types=1);

class PostLoader{

public function getPosts(){
    
    $posts = [];

    $savedPosts = file_get_contents("savedPosts.txt");
    $decodedPosts = json_decode($savedPosts, true);

    if($decodedPosts){

        foreach($decodedPosts as $postArray){

            $object = (object)$postArray;
            $posts[] = $object;
    
        }

    }
    
    return $posts;  

}
    
}