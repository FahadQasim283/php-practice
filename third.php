<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
    <script>
        function showTable() {
            const num = document.getElementById("number").value;
            const result = document.getElementById("result");
            let table = "";

            for (let i = 1; i <= 10; i++) {
                table += `${num} x ${i} = ${num * i}<br>`;
            }
            result.innerHTML = table;
        }
    </script>
</head>
<body>
    <h2>Generate Multiplication Table</h2>
    <form>
        Enter a number: <input type="number" id="number">
        <button type="button" onclick="showTable()">Generate</button>
    </form>
    <div id="result"></div>
</body>
</html>
