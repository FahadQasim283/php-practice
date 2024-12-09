<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <script>
        function validateForm() {
            const username = document.getElementById("username").value;
            const password = document.getElementById("password").value;

            if (username === "admin" && password === "12345") {
                alert("Login Successful!");
            } else {
                alert("Invalid Username or Password!");
            }
        }
    </script>
</head>
<body>
    <h2>Login Form</h2>
    <form>
        Username: <input type="text" id="username"><br><br>
        Password: <input type="password" id="password"><br><br>
        <button type="button" onclick="validateForm()">Login</button>
    </form>
</body>
</html>
