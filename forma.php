<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forma</title>
</head>

<body>
    <!-- --------------------------------------------------------- -->
    <h1>js form</h1>
    <form onsubmit="return sprawdzForm()">

        <label for="imie"></label>

        <input type="text" id="imie">

        <button type="submit">wyslij</button>
    </form>

    <p id="blad"></p>

    <script>
        const sprawdzForm = () => {

            const input = document.getElementById('imie').value

            if (input === "") {
                document.getElementById('blad').innerHTML = "nic ne ma"
                return false
            }
            return true
        }
    </script>
    <!-- ---------------------------------------------------------------------- -->

    <h2>php form</h2>
    <form method="POST">
        <label for="imie"></label>

        <input type="text" id="imie" name="imie">

        <button type="submit">wyslij</button>
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $imie = $_POST["imie"];
        if (empty($imie)) {
            echo "<p>tu ne mozna byc puste</p>";
        } else {
            echo "<p> hi, $imie !</p>";
        }
    }
    ?>


</body>

</html>