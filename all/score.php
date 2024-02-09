<!-- 評分 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>評分</title>
</head>
<body>
    <h1>
        感謝您的評分
    </h1>
    <h1>
    <form action="process_form.php" method="post">
        <label for="name">姓名：</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">電子郵件：</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="message">留言：</label><br>
        <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>

        <input type="submit" value="提交">

        <input type ="button" onclick="history.back()" value="回到上一頁"></input>
        <a href="../index.php">回主頁</a>
        <a href="./connect.php">客服中心</a>
    </h1>
</body>
</html>
