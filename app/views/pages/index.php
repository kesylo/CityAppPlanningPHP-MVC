<!--add header-->
<?php require APPROOT . '/views/includes/header.php'; ?>

<h1>
    <!--receive data array and display-->
    <?php
        echo $data['title'];
    ?>
</h1>

<ul>
    <?php foreach ($data['plannings'] as $planning): ?>
        <li><?php echo $planning->id_user; ?></li>
    <?php endforeach; ?>
</ul>

<!--add footer-->
<?php require APPROOT . '/views/includes/footer.php'; ?>