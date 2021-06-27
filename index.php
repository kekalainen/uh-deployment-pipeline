<!DOCTYPE html>
<html>
<head>
    <title>Deployment pipeline</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin-left: 10vw;
            margin-top: 5vh;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <p>Hostname: <?= gethostname() ?></p>
    <p>Client IP address: <?= $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'] ?></p>
</body>
</html>
