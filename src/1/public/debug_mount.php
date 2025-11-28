<?php
echo "Checking /app2/public/test.php: ";
if (file_exists('/app2/public/test.php')) {
    echo "EXISTS";
    echo "<br>Content: " . file_get_contents('/app2/public/test.php');
} else {
    echo "NOT FOUND";
    echo "<br>Scandir /app2: ";
    if (is_dir('/app2')) {
        print_r(scandir('/app2'));
    } else {
        echo "/app2 is not a directory";
    }
}
?>
