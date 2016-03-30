<?php

include("queries.php");

function loadDataEmployee()
{
    global $employeeResult;
    while ($row = mysql_fetch_row($employeeResult)) {
        echo "<tr>";
        for ($counterCell = 0; $counterCell < count($row); $counterCell++) {
            echo "<td>";
            echo $row[$counterCell];
            echo "</td>";
        }
        echo "</tr>";

    }
}

function loadDataDepot()
{
    global $depoResult;
    while ($row = mysql_fetch_row($depoResult)) {
        echo "<tr>";
        for ($counterCell = 0; $counterCell < count($row); $counterCell++) {
            echo "<td>";
            echo $row[$counterCell];
            echo "</td>";
        }
        echo "</tr>";

    }
}

function loadDataInvoices()
{
    global $invoicesResult;
    while ($row = mysql_fetch_row($invoicesResult)) {
        echo "<tr>";
        for ($counterCell = 0; $counterCell < count($row) - 1; $counterCell++) {
            echo "<td>";
            echo $row[$counterCell];
            echo "</td>";
        }
        echo "</tr>";

    }
}

function loadSaleStatistics()
{
    global $saleStatistics;
    while ($row = mysql_fetch_row($saleStatistics)) {
        echo "<tr>";
        for ($counterCell = 0; $counterCell < count($row); $counterCell++) {
            echo "<td>";
            echo $row[$counterCell];
            echo "</td>";
        }
        echo "</tr>";
    }
}

?>