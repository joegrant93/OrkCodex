<!doctype html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<style>

</style>

<body>
    <?php include 'includes/navigation.php'; ?>
    <div class="container">
        <?php
        PrintCards(json_decode(GetAllSections()));
        ?>
        <?php include 'includes/footer.php'; ?>
    </div>
</body>

</html>