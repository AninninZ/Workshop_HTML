<h1>My Folder And My Page</h1>
<h1>
    <?php echo $val_a . ' ' . $val_b; ?>
</h1>
<form method="POST" action="/my-route">
    @csrf
    <input type="text" name="myinput">
    <button type = "submit">summit</button>
</form>
