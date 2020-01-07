<?php
require_once 'core/login-handler.php';
require_once 'core/bootstrap.php';
?>

<nav class="navbar navbar-dark fixed-top navbar-expand-lg bg-dark ">

    <!-- Navbar content -->
    <a class="navbar-brand" href="#">MyBlog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Blog <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
        </ul>


            <!-- Button trigger modal -->
            <?php if (isLogged()) { ?>

                <button type="button" class="btn btn-primary mx-2" data-toggle="modal" data-target=".bd-example-modal-lg">Post</button>
                <a class="btn btn-danger mx-2" href="logout.php" role="button">Logout</a>

            <?php } else { ?>

                <button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">Login</button>

            <?php } ?>
        
    </div>
</nav>



<!-- Modal-Login -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form name="form_login" method="post" action="login.php">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email:</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required placeholder="example@email.com">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password:</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary" name="login">Accedi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- LargeModal-Post -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalPost">Aggiungi Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form name="form_post" method="post" action="post.php">
                    <div class="form-group">
                        <label for="inputTitle">Titolo:</label>
                        <input type="text" name="title" class="form-control" id="inputTitle" required>
                        <div class="form-group">
                            <label for="inputContent">Contenuto:</label>
                            <textarea class="form-control" name="content" id="inputContent" rows="8"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputTags">Tags:</label>
                            <input type="text" name="tag" class="form-control" id="inputTag" placeholder="tag1, tag2, tag3..">
                        </div>
                        <button type="submit" class="btn btn-primary" name="add-post">Inserisci</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>