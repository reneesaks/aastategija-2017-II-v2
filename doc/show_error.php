<?php if (isset($errors)): ?>


    <?php foreach ($errors as $error): ?>

        <div class="alert alert-danger"><?= $error ?></div>

    <?php endforeach; ?>


<?php else: ?>


    Tundmatu viga!


<?php endif; ?>