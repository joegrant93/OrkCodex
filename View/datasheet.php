<!doctype html>
<html lang="en">
<?php include 'includes/head.php'; ?>

<body>
    <?php include 'includes/navigation.php'; ?>
    <div class="container">
        <?php
        if (isset($_GET['type'])) {
            echo $_GET['type'] . " are displaying.<br>";
            echo preg_replace('/(?<!\ )[A-Z]/', ' $0', ucwords($_GET['type']));
        }
        ?>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>

</html>