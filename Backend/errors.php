<?php 
$errors = array();
if (count($errors) > 0): ?>
    <center>
        <div style='border: 0px solid red; border-radius: 0px; max-width: 80%; margin: 1em'>
            <center>
                <?php foreach ($errors as $error): ?>
                    <p style='color: red'>*<?php echo $error; ?></p>
                <?php endforeach ?>
            </center>
        </div>
    </center>
<?php endif ?>
