<!DOCTYPE html>
<html>
<head>
    <title>Form Handling</title>
    <script>
        function validateForm() {
            const name = document.getElementById("name").value;
            const email = document.getElementById("email").value;

            if (!name || !email) {
                alert("All fields are required!");
                return false;
            }

            if (!email.includes("@")) {
                alert("Invalid email format!");
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
    <h2>Form Submission</h2>
    <form method="POST" onsubmit="return validateForm()">
        Name: <input type="text" id="name" name="name"><br><br>
        Email: <input type="email" id="email" name="email"><br><br>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        echo "<h3>Form Submitted Successfully!</h3>";
        echo "Name: $name<br>";
        echo "Email: $email<br>";
    }
    ?>
</body>
</html>
