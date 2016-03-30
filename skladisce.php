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
    include('modals/insertItems.php');
    ?>
</head>
<body>
<div class="container">
    <div class="jumbotron">
        <div class="row">
            <div class="col-md-6 col-md-offset-1 result-table">
                <h3>Zaloga materiala</h3>
                <button class="btn btn-default" id="insertItem"
                        data-toggle="modal"
                        data-target=".insert-item-Modal">Dodaj artikel
                </button>
                <table>
                    <tr>
                        <td>ID artikla</td>
                        <td>Ime artikla</td>
                        <td>Cena</td>
                        <td>Zaloga</td>
                    </tr>
                    <?php
                    loadDataDepot();
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="js/script.js"></script>
</body>
</html>