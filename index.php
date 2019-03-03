<?php

/**
 * Created by PhpStorm.
 * User: liesbaudoin
 * Date: 2019-03-02
 * Time: 15:44
 */
class Post
{
    public $title;
    public $published;

    public function __construct($title, $published)
    {
        $this->title = $title;
        $this->published = $published;
    }

}

$posts = [
    new Post('my first post', true),
    new Post('my second post', true),
    new Post('my third post', true),
    new Post('my fourth post', false)

];


//$unfinishedPosts = array_filter($posts, function ($post) {
//    return ! $post->published;
//});
//
//
//var_dump($unfinishedPosts);

//$posts = array_map(function ($post) {
//    return (array)$post;
//},
//    $posts);
//var_dump($posts);

$modified = array_map(function ($post) {
    $post->published = true;
    return $post;
}, $posts);

var_dump($modified);

//$titles = array_column($posts, 'title');
//var_dump($titles);