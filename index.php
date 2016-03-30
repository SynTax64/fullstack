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
    include('modals/insertEmployees.php');
    ?>
</head>
<body>
<div class="container">
    <div class="jumbotron">
        <div class="row">
            <div class="col-md-6 col-md-offset-1 result-table">
                <h3>Šifrant zaposlenih</h3>
                <button class="btn btn-default" id="insertEmployee"
                        data-toggle="modal"
                        data-target=".insert-Employee-Modal">Dodaj zaposlenega
                </button>
                <table>
                    <tr>
                        <td>Šifra</td>
                        <td>Ime</td>
                        <td>Priimek</td>
                        <td>Registriran</td>
                    </tr>
                    <?php
                    loadDataEmployee();
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="js/script.js"></script>
</body>
</html>