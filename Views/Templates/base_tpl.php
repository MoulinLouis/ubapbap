<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="<?php App\Core\View::getFaviconUrl()?>"/>
    <title><?= App\Core\View::getActualPageTitle() ?></title>
    <script src="<?php App\Core\View::getAssets("libraries/sweetalert2.js")?>"></script>
</head>

<body>
    <?php $this->addAlert("sweet"); ?>

    <nav>
        <!-- TODO -->
    </nav>

    <?php include $this->view ?>
</body>

</html>
