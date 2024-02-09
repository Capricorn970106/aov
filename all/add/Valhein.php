<!-- 凡恩 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>凡恩</title>
</head>
<body>
    <h1>魔龍路強度(強) 凡恩</h1>
<?php
    $imagePath = 'https://scontent.ftpe8-4.fna.fbcdn.net/v/t1.15752-9/423686843_930832981450146_6055307759077614796_n.png?_nc_cat=104&ccb=1-7&_nc_sid=8cd0a2&_nc_ohc=b9-EWfEb6pYAX8azVMZ&_nc_ht=scontent.ftpe8-4.fna&oh=03_AdRZrnHLgVEKZLae3lvA1ACc8IJ6cHh_byeRc625xObADA&oe=65EB0ADB';
    $width =1000;
    $height =560;
?>
<h1>
    <img src="<?php echo $imagePath; ?>"width="<?php echo $width; ?>" height="<?php echo $height; ?>">
    我是國歌<iframe width="560" height="315" src="https://www.youtube.com/embed/B6sABRbOBP8?si=jSxqAmQExAJdCJtQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/hp2o8FdUZ2c?si=6tKCiJ6rOGyBMlvp" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </h1>
    <h2>
        <form action="../score.php" method="post">
            <label for="rating">你為這個網頁的評分打幾顆星（1-5）：</label>
            <select name="rating" id="rating">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <button type="submit">提交</button>
            <input type ="button" onclick="history.back()" value="回到上一頁"></input>
            <a href="../return.php">回主頁</a>
            <a href="../connect.php">客服中心</a>
</h2>
</body>
</html>