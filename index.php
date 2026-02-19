<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your IP Address</title>
    <style>
        body { font-family: sans-serif; text-align: center; padding-top: 50px; }
        h1 { font-size: 2em; }
        .ip-box { font-size: 3em; font-weight: bold; color: #007BFF; }
    </style>
</head>
<body>
    <h1>Your IP Address is:</h1>
    <div class="ip-box">
        <?php
        // Get IP safely
        $ip = $_SERVER['REMOTE_ADDR'] ?? 'UNKNOWN';

        // Prepare log data
        $details = json_encode([
            'ip' => $ip,
            'time' => date('Y-m-d H:i:s')
        ]);

        // Save to file (make sure file is writable)
        file_put_contents(__DIR__ . '/visitors.log', $details . PHP_EOL, FILE_APPEND | LOCK_EX);

        // Output safely
        echo htmlspecialchars($ip, ENT_QUOTES, 'UTF-8');
        ?>
    </div>
</body>
</html>
