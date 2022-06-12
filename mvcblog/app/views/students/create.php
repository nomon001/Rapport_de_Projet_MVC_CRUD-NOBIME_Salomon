<?php
   require APPROOT . '/views/includes/head.php';
?>

<div class="navbar dark">
    <?php
       require APPROOT . '/views/includes/navigation.php';
    ?>
</div>

<div class="container center">
    <h1>
        Create new Student
    </h1>

    <form action="<?php echo URLROOT; ?>/students/create/" method="POST">
        <div class="form-item">
            <input type="text" name="CNE" placeholder="CNE...">

            <span class="invalidFeedback">
                <?php echo $data['CNEError']; ?>
            </span>
        </div>

        <div class="form-item">
            <input type="text" name="Nom" placeholder="Nom...">

            <span class="invalidFeedback">
                <?php echo $data['NomError']; ?>
            </span>
        </div>

        <div class="form-item">
            <input type="text" name="Prenom" placeholder="Prenom...">

            <span class="invalidFeedback">
                <?php echo $data['PrenomError']; ?>
            </span>
        </div>

        <div class="form-item">
            <input type="text" name="Adresse" placeholder="Adresse...">

            <span class="invalidFeedback">
                <?php echo $data['AdresseError']; ?>
            </span>
        </div>

        <div class="form-item">
            <input type="text" name="Ville" placeholder="Ville...">

            <span class="invalidFeedback">
                <?php echo $data['VilleError']; ?>
            </span>
        </div>

        <div class="form-item">
            <input type="text" name="Email" placeholder="Email...">

            <span class="invalidFeedback">
                <?php echo $data['EmailError']; ?>
            </span>
        </div>

        
        <button class="btn green" name="submit" type="submit">Submit</button>
    </form>
</div>
