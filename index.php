<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloud Deployment</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #667eea, #764ba2);
            margin: 0;
        }
        .container {
            text-align: center;
            background: white;
            padding: 40px;
            box-shadow: 0px 4px 20px rgba(0,0,0,0.2);
            border-radius: 15px;
            max-width: 500px;
            width: 100%;
        }
        h1 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }
        p {
            font-size: 16px;
            color: #666;
        }
        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #667eea;
            color: white;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            transition: 0.3s;
        }
        .btn:hover {
            background-color: #764ba2;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1><?php echo "Hello, Cloud Deployment with Docker!"; ?></h1>
        <p>Welcome to your cloud-hosted application.</p>
        
    </div>
</body>
</html>