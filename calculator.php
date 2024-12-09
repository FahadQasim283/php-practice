<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
    <script>
        function calculate() {
            const num1 = parseFloat(document.getElementById("num1").value);
            const num2 = parseFloat(document.getElementById("num2").value);
            const operation = document.getElementById("operation").value;

            let result;
            if (operation === "add") result = num1 + num2;
            else if (operation === "subtract") result = num1 - num2;
            else if (operation === "multiply") result = num1 * num2;
            else if (operation === "divide") result = num1 / num2;

            document.getElementById("result").innerHTML = "Result: " + result;
        }
    </script>
</head>
<body>
    <h2>Calculator</h2>
    <form>
        Number 1: <input type="number" id="num1"><br><br>
        Number 2: <input type="number" id="num2"><br><br>
        Operation:
        <select id="operation">
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
        </select><br><br>
        <button type="button" onclick="calculate()">Calculate</button>
    </form>
    <div id="result"></div>
</body>
</html>
