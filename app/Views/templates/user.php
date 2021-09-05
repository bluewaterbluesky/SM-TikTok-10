<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <link rel="stylesheet" href="<?= base_url('dist/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('custom/css/styles.css') ?>">
    <link rel="shortcut icon" href="<?= base_url('favicon.ico.png') ?>" type="image/x-icon">

</head>
<body>

    <!-- header -->
    <?php echo view('fragments/dashboard/user/header') ?>

    <!-- Content -->
    <?php echo view($content) ?>

    <script src="<?= base_url('dist/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url($js) ?>"></script>
    
</body>
</html>