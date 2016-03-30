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
    include('modals/insertInvoices.php');
    ?>

</head>
<body>
<div class="container">
    <div class="jumbotron">
        <div class="row">
            <div class="col-md-6 col-md-offset-1 result-table">
                <h3>Šifrant računov</h3>
                <button class="btn btn-default" id="insertInvoice"
                        data-toggle="modal"
                        data-target=".insert-invoice-Modal">Dodaj račun
                </button>
                <table>
                    <tr>
                        <td>ID računa</td>
                        <td>ID zaposlenega</td>
                        <td>ID artikla</td>
                        <td>Mesec</td>
                        <td>Količina</td>
                    </tr>
                    <?php
                    loadDataInvoices();
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="js/script.js"></script>
</body>
</html>