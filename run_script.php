<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Path to your bash script
    $scriptPath = '/var/www/html/classroom/chester/script.sh';
    $branch = $_POST['branch'];

    // Make sure the script is executable
    if (is_executable($scriptPath)) {
        // Execute the script
        //$output = shell_exec($scriptPath);
	
        $command = escapeshellcmd("$scriptPath $branch");
        $output = shell_exec($command);
        echo "<pre>$output</pre>";
    } else {
        echo "Script is not executable.";
    }
} else {
    echo "Invalid request method.";
}
?>
