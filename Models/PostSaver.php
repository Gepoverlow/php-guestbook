<?php

declare(strict_types=1);

class PostSaver{

private array $posts;

public function savePost(Post $post){

    $posts[] = $this->getStoredPosts();
    array_push($posts, $post);

    foreach ($posts as $post) {
        $serializedPost = serialize($post);
        file_put_contents('savedPosts.txt',$serializedPost);
    }

    var_dump($posts);

}

public function getStoredPosts(){

    $storedPosts = file_get_contents('savedPosts.txt');
    $unserializedPosts = unserialize($storedPosts);
    return $unserializedPosts;

}
    
}