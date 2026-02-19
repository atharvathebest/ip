<!DOCTYPE html>
<html>
<head>
    <title>Your IP Address</title>
    <style>
        body { font-family: sans-serif; text-align: center; padding-top: 50px; }
        h1 { font-size: 2em; }
        .ip-box { font-size: 3em; font-weight: bold; color: #007BFF; }
    </style>
</head>
<body>
    <h1>Your IP Address is:</h1>
    <div class="ip-box" id="ip">Loading...</div>

    <script>
        fetch("https://api.ipify.org?format=json")
            .then(response => response.json())
            .then(data => {
                document.getElementById("ip").textContent = data.ip;
            })
            .catch(() => {
                document.getElementById("ip").textContent = "Unable to fetch IP";
            });
    </script>
</body>
</html>
