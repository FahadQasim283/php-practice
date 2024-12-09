<?php
$countries = ["USA", "Canada", "UK", "Australia", "India"];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dynamic Dropdown</title>
</head>
<body>
    <h2>Select Your Country</h2>
    <form>
        <select name="country">
            <?php
            foreach ($countries as $country) {
                echo "<option value='$country'>$country</option>";
            }
            ?>
        </select>
    </form>
</body>
</html>
