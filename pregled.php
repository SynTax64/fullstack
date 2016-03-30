<!doctype html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <title>PHP Challenge</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <?php
    include("header.php");
    include('connect.php');
    ?>

</head>
<body>
<div class="container">
    <div class="jumbotron">
        <div class="row">
            <div class="col-md-6 col-md-offset-1 result-table">

                <table>
                    <td>ID zaposlenega</td>
                    <td>Prodano(izdelkov)</td>
                    <td>Mesec</td>
                    <?php
                    loadSaleStatistics();
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="js/script.js"></script>
</body>
</html>