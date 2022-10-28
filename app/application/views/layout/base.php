<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="../../assets/dist/css/styles.css">
</head>

<body>
    <div id="section_main">
        <div id="content">
            <?php include_once  APPPATH . 'views/partials/_navbar.php'; ?>
            <?php echo $content; ?>
            <?php include_once APPPATH . 'views/partials/_footer.php'; ?>
        </div>
    </div>
    <script src="../../assets/dist/js/main.js"></script>
</body>

</html>