<?php
require_once 'view/modules/header.php';
require_once 'core/post-repository.php';
require_once 'view/post.php';


if (isset($_POST['title'])) {

    if ($_POST['title'] && $_POST['content'] && $_POST['tag']) {

        $tagNoSpace = str_replace(' ', '', $_POST['tag']);
        $tag = explode(',', $tagNoSpace);

        writePostToFile($_POST['title'], $_POST['content'], $tag);
        header("location: index.php");
    }
}
