<?php

declare(strict_types=1);

class PostLoader{

public function getPosts(){
    
    $posts = [];

    // $savedPosts = file_get_contents("savedPosts.txt");
    // $decodedPosts = $this->json_decode_multi($savedPosts);
    // var_dump($decodedPosts);

    return $posts;  

}

// public function json_decode_multi($s, $assoc = false, $depth = 512, $options = 0) {
//     if(substr($s, -1) == ',')
//     $s = substr($s, 0, -1);
//     return json_decode("[$s]", $assoc, $depth, $options);
// }
    
}