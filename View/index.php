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
            PrintCards(json_decode(GetAllSections()));
            ?>
        </div>
        <?php include 'includes/footer.php'; ?>
    </div>
</body>

</html>