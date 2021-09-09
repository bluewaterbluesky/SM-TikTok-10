<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="<?= base_url('dist/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('custom/css/styles.css') ?>">
    <link rel="shortcut icon" href="<?= base_url('favicon.ico.png') ?>" type="image/x-icon">

</head>
<body>

    <?php echo view($content) ?>

    <script> var base_url = '<?= base_url('') ?>'; </script>
    <script src="<?= base_url('dist/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url($js) ?>"></script>
    
</body>
</html>