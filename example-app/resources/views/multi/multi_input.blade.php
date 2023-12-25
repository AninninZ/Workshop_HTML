<html>
<head>
    <meta charset="utf-8">
    <link href="{{ asset('/css/interface.css') }}" rel="stylesheet">
</head>
<body>
    <h1>แม่สูตรคูณ</h1>
    <form method="POST" action="/multification">
    @csrf
    <label for="number">ใส่เลข:</label>
    <input type="number" name = "number">
    <button type="submit">แสดงแม่สูตรคูณ</button>
    </form>

</body>
</html>
