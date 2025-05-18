<?php
echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload File</title>
    <style>
        body {
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            color: #f1f1f1;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
        }
        .upload-container {
            background: rgba(255, 255, 255, 0.05);
            padding: 30px 40px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }
        h2 {
            margin-bottom: 20px;
            color: #ffffff;
        }
        input[type="file"] {
            margin: 15px 0;
            color: #ffffff;
        }
        input[type="submit"] {
            background: #1abc9c;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            color: white;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        input[type="submit"]:hover {
            background: #16a085;
        }
        .message {
            margin-top: 20px;
            color: #ffdd57;
        }
        a {
            color: #00d1ff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="upload-container">
    <h2>Upload a File</h2>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="file" required><br>
        <input type="submit" value="Upload File">
    </form>
';

if (isset($_FILES['file'])) {
    // Save directly in current folder (e.g., demo_site/)
    $upload_dir = "./";
    $upload_file = $upload_dir . basename($_FILES['file']['name']);

    echo '<div class="message">';
    if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
        echo "✅ File uploaded successfully: <br><a href='" . htmlspecialchars(basename($upload_file)) . "' target='_blank'>" . htmlspecialchars($_FILES['file']['name']) . "</a>";
    } else {
        echo "❌ File upload failed.";
    }
    echo '</div>';
}

echo '
</div>
</body>
</html>
';
?>