<!DOCTYPE html>
<html>
<head>
    <title>Addition Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Dynamic Addition Table</h2>
    <table>
        <tr>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<td>";
                for ($j = 1; $j <= 5; $j++) {
                    $result = $i + $j;
                    echo "$i + $j = $result<br>";
                }
                echo "</td>";
            }
            ?>
        </tr>
    </table>
</body>
</html>
