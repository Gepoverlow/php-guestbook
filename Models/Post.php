<?php

declare(strict_types=1);

class Post implements JsonSerializable{

private string $title;
private string $date;
private string $content;
private string $authorName;

public function __construct(string $title, string $content, string $authorName){

    $this->title = $title;
    $this->date = date("F j, Y, g:i a");
    $this->content = $content;
    $this->authorName = $authorName;

}

public function getTitle(){

    return $this->title;
    
}

public function getDate(){

    return $this->date;
    
}

public function getContent(){

    return $this->content;
    
}

public function getAuthorName(){

    return $this->authorName;
    
}

public function jsonSerialize():array{
    return [
        'title' => $this->getTitle(),
        'content'=> $this->getContent(),
        'author'=>$this->getAuthorName(),
        'date'=>$this->getDate()
    ];
}


}

