<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/interface.css') }}" rel="stylesheet">
</head>
<body>
    <?php
        $selectedNumber = $number;
        echo "<h3>สูตรคูณแม่ $selectedNumber</h3>";
        echo "<table>";
        for ($i = 1; $i <= 24; $i++) {
        $result = $selectedNumber * $i;
        echo "<tr><td>$selectedNumber x $i</td><td>=</td><td>$result</td></tr>";
        }
        echo "</table>";
    ?>
    <form method="POST" action="/multification">
        @csrf
        <label for="number">ใส่เลข:</label>
        <input type="number" name = "number">
        <button type="submit">แสดงแม่สูตรคูณ</button>
        </form>
</body>
</html>
