<?php
require_once 'view/modules/header.php';
require_once 'core/post-repository.php';
require_once 'view/index.php';

if (!empty($_GET['tag'])) {
    $posts = getAllPostsByTag($_GET['tag']);
}



require_once 'view/modules/footer.php';


