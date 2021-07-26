<?php include('./header.php') ?>
<h1>Ajouter un joueur</h1>
<div class="container">
    <div class="row">
        <div class="col-md-6 my-5">
            <?php if (!empty($message)) : ?>
                <div class="alert alert-success" role="alert">
                    <?= $message; ?>
                
                </div>
            <?php endif; ?>

            <form method="post">
                <div class="form-group">
                    <label>Nom</label>
                    <input type="text" name="nom" class="form-control">
                </div>
                <div class="form-group">
                    <label>Numéro</label>
                    <input type="number" name="numero" class="form-control">
                </div>
                <div class="form-group">
                    <label>Position</label>
                    <input type="text" name="position" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>




<?php include('./footer.php') ?>