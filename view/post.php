<div class="box">
    <div class="container">

        <div class="card">
            <h5 class="card-header">Aggiungi un nuovo articolo</h5>
            <div class="card-body">

                <form name="form_post" method="post" action="post.php">
                    <div class="form-group">
                        <label class="card-title" for="inputTitle">Titolo:</label>
                        <input type="text" name="title" class="form-control" id="inputTitle" required>
                        <div class="form-group">
                            <label class="card-title" for="inputContent">Contenuto:</label>
                            <textarea class="form-control" name="content" id="inputContent" rows="8"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="card-title" for="inputTags">Tags:</label>
                            <input type="text" name="tag" class="form-control" id="inputTag" placeholder="tag1, tag2, tag3..">
                        </div>
                        <button type="submit" class="btn btn-primary" name="add-post">Inserisci</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>