<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="phpStylish.css">
</head>
<body>
    <h1>แม่สูตรคูณ</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="number">เลือกเลข:</label>
    <select name="number" id="number">
        <?php
        // Generate options
        for ($i = 1; $i <= 12; $i++) {
            echo "<option value=\"$i\">$i</option>";
        }
        ?>
    </select>
    <button type="submit">แสดงแม่สูตรคูณ</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $selectedNumber = $_POST["number"];
        echo "<h3>สูตรคูณแม่ $selectedNumber</h3>";
        echo "<table>";
        for ($i = 1; $i <= 24; $i++) {
        $result = $selectedNumber * $i;
        echo "<tr><td>$selectedNumber x $i</td><td>=</td><td>$result</td></tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>