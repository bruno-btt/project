<?php

$postlist = __DIR__ . DIRECTORY_SEPARATOR . 'post.json';


function getAllPosts()
{
    $postlist = __DIR__ . DIRECTORY_SEPARATOR . 'post.json';
    $rawData = file_get_contents($postlist);
    $posts = json_decode($rawData, true);
    return $posts;
};

function writePostToFile($title, $content, $tag)
{
    $posts = getAllPosts();
    $posts[] = [
        "title" => $title,
        "content" => $content,
        "tag" => $tag
    ];

    $posts = json_encode($posts, JSON_PRETTY_PRINT);
    $postlist = __DIR__ . DIRECTORY_SEPARATOR . 'post.json';
    file_put_contents($postlist, $posts,);
};

function getAllPostsByTag($tag)
{
    $posts = getAllPosts();
    foreach ($posts as $post) {
        foreach ($post['tag'] as $single_tag) {
            if ($single_tag == $tag) {
                $tempPosts[] = $post;
            }
        }
    }
    $posts = $tempPosts;
    return $posts;
};

$rawData = file_get_contents($postlist);
$posts = json_decode($rawData, true);
