<!doctype html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<style>

</style>

<body>
    <?php include 'includes/navigation.php'; ?>
    <div class="container">
            <?php
            if (!isset($_GET['type'])) {
                PrintCards(json_decode(GetAllDataSheetTypes()));
            }else if(1){

            }
            ?>
        <?php include 'includes/footer.php'; ?>
    </div>
</body>

</html>