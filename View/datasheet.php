<!doctype html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<style>

</style>

<body>
    <?php include 'includes/navigation.php'; ?>
    <div class="container">
        <div class="wrapper">
            <?php
            if (!isset($_GET['type'])) {
                PrintCards(json_decode(GetAllDataSheetTypes()));
            }
            ?>
        </div>
        <?php include 'includes/footer.php'; ?>
    </div>
</body>

</html>