<?php
echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Demo Website</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }
        body {
            background: linear-gradient(135deg, #1d3557, #457b9d);
            color: #f1faee;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }
        header {
            width: 100%;
            text-align: center;
            margin-bottom: 30px;
        }
        h1 {
            font-size: 3rem;
            color: #f1faee;
            text-shadow: 2px 2px #000;
        }
        .content {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            max-width: 800px;
            text-align: center;
        }
        .content p {
            font-size: 1.2rem;
            line-height: 1.6;
            color: #e9ecef;
        }
        footer {
            margin-top: auto;
            padding: 15px;
            color: #a8dadc;
            font-size: 0.9rem;
        }
        a {
            color: #ffdd57;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Blog</h1>
    </header>
    <div class="content">
        <p>This is the original page, safe and sound.</p>
        <p>Explore more about PHP and Web Development here.</p>
        <p><a href="https://www.php.net" target="_blank">Visit PHP Official Site</a></p>
        <p>This page is created by @CodingChatRoom for DRFACE Attack Test.</p>
    </div>
    <footer>
        &copy; ' . date("Y") . ' My Blog. All rights reserved.
    </footer>
</body>
</html>
';
?>