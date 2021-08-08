<!DOCTYPE html>
<html>

<head>
    <title><?= App::getInstance()->title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=devidev-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="../public/css/bootstrap/font-awesome-4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../public/css//bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../public/css//bootstrap/css/style.css">
</head>
<style type="text/css">
</style>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top" style="box-shadow:0 0 30px grey">
        <a href="#" class="navbar-brand">BLOG</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav ml-auto p-2">
                <li class="nav-item ">
                    <a href="index.php" class="nav-link">Accueil</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container spacer2">
        <?= $content ?>
    </div>









    <script src=" ../../public/css//bootstrap/js/popper.min.js">
    </script>
    <script src="../../public/css//bootstrap/js/jquery-3.4.1.min.js"></script>
    <script src="../../public/css//bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
            $('.admin').on('click', function() {
                $('#admin').modal('show');

            });
            $('[data-toggle="tooltip"]').tooltip();

        });
    </script>
</body>

</html>