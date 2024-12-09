<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies and Sessions in PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
            line-height: 1.6;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        .section {
            margin-bottom: 20px;
            padding: 15px;
            background: #e8f8f5;
            border: 1px solid #b2ebeb;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Understanding Cookies and Session Variables</h1>
        <div class="section">
            <h2>What are Cookies?</h2>
            <p>
                Cookies are small files stored on the client's computer by the browser. They are used to remember
                user information across multiple pages or visits. Cookies are sent back and forth between the browser
                and the server.
            </p>
        </div>
        <div class="section">
            <h2>What are Session Variables?</h2>
            <p>
                Session variables are stored on the server and are used to maintain user data during their visit to
                the website. Sessions are more secure than cookies because the data is not exposed to the client.
            </p>
        </div>
        <div class="section">
            <h2>PHP Example Code</h2>
            <p>The following PHP code demonstrates how to use cookies and session variables:</p>
            <pre>
<code>
&lt;?php
// Start a session
session_start();

// Set a cookie that expires in 1 hour
setcookie("user", "JohnDoe", time() + 3600, "/");

// Set a session variable
$_SESSION["user"] = "JohnDoe";

// Accessing cookie and session variables
if(isset($_COOKIE["user"])) {
    echo "Cookie Value: " . $_COOKIE["user"] . "&lt;br&gt;";
}

if(isset($_SESSION["user"])) {
    echo "Session Value: " . $_SESSION["user"];
}
?&gt;
</code>
            </pre>
        </div>
        <div class="section">
            <h2>Output</h2>
            <?php
            // Start a session
            session_start();

            // Set a cookie that expires in 1 hour
            setcookie("user", "JohnDoe", time() + 3600, "/");

            // Set a session variable
            $_SESSION["user"] = "JohnDoe";

            // Accessing cookie and session variables
            if(isset($_COOKIE["user"])) {
                echo "<p>Cookie Value: " . $_COOKIE["user"] . "</p>";
            }

            if(isset($_SESSION["user"])) {
                echo "<p>Session Value: " . $_SESSION["user"] . "</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>
