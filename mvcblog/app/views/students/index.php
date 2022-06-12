<?php
   require APPROOT . '/views/includes/head.php';
?>

<div class="navbar dark">
    <?php
       require APPROOT . '/views/includes/navigation.php';
    ?>
</div>

<div class="container">
    <?php if(isLoggedIn()): ?>
        <a class="btn green" href="<?php echo URLROOT; ?>/students/create">
            Create
        </a>
    <?php endif; ?>

    <?php foreach($data['students'] as $student): ?>
        <div class="container-item">
            <?php //if(isset($_SESSION['user_id']) && $_SESSION['user_id'] == $student->user_id):
                if(isLoggedIn()):
                ?>
                <a
                    class="btn orange"
                    href="<?php echo URLROOT . "/students/update/" . $student->CNE ?>">
                    Update
                </a>
                <form action="<?php echo URLROOT . "/students/delete/" . $student->CNE ?>" method="POST">
                    <input type="submit" name="delete" value="Delete" class="btn red">
                </form>
            <?php endif; ?>
            <p style="font-weight: bold">
                <?php echo 'CNE:'.$student->CNE; ?>
            </p>

            <p style="font-weight: bold">
                <?php echo 'Nom:'.$student->Nom; ?>
            </p>

            <p style="font-weight: bold">
                <?php echo 'Prenom:'.$student->Prenom; ?>
            </p>

            <p style="font-weight: bold">
                <?php echo 'Adresse:'.$student->Adresse; ?>
            </p>

            <p style="font-weight: bold">
                <?php echo 'Ville:'.$student->Ville; ?>
            </p>

            <p style="font-weight: bold">
                <?php echo 'Email:'.$student->Email; ?>
            </p>
         </div>
    <?php endforeach; ?>
</div>