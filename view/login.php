<div class="box">
    <div class="container">
        <!-- TITOLO -->
        <div>
            <?php if (isLogged()) { ?>
                <h3>Utente Loggato</h3>
            <?php } else { ?>
                <h3>Riprova, qualcosa è andato storto..</h3>
            <?php } ?>
        </div>
    </div>