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
        Update Student
    </h1>

    <form
    action="<?php echo URLROOT; ?>/students/update/<?php echo $data['student']->CNE ?>" method="POST">
        <div class="form-item">
            <input
                type="text"
                name="CNE"
                value="<?php echo $data['student']->CNE ?>">

            <span class="invalidFeedback">
                <?php echo $data['CNEError']; ?>
            </span>
        </div>

        <div class="form-item">
            <input
                type="text"
                name="Nom"
                value="<?php echo $data['student']->Nom ?>">

            <span class="invalidFeedback">
                <?php echo $data['NomError']; ?>
            </span>
        </div>

        <div class="form-item">
            <input
                type="text"
                name="Prenom"
                value="<?php echo $data['student']->Prenom ?>">

            <span class="invalidFeedback">
                <?php echo $data['PrenomError']; ?>
            </span>
        </div>

        <div class="form-item">
            <input
                type="text"
                name="Adresse"
                value="<?php echo $data['student']->Adresse ?>">

            <span class="invalidFeedback">
                <?php echo $data['AdresseError']; ?>
            </span>
        </div>

        <div class="form-item">
            <input
                type="text"
                name="Ville"
                value="<?php echo $data['student']->Ville ?>">

            <span class="invalidFeedback">
                <?php echo $data['VilleError']; ?>
            </span>
        </div>

        <div class="form-item">
            <input
                type="text"
                name="Email"
                value="<?php echo $data['student']->Email ?>">

            <span class="invalidFeedback">
                <?php echo $data['EmailError']; ?>
            </span>
        </div>

    

        <button class="btn green" name="submit" type="submit">Submit</button>
    </form>
</div>
