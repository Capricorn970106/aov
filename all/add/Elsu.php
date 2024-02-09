<!-- 蘇 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>蘇</title>
</head>
<body>
    <h1>魔龍路強度(強) 蘇</h1>
<?php
    $imagePath = 'https://scontent.ftpe8-2.fna.fbcdn.net/v/t1.15752-9/423541634_373805715390004_4154831314592034293_n.png?_nc_cat=103&ccb=1-7&_nc_sid=8cd0a2&_nc_ohc=qj9DRkcm87sAX-fHh2o&_nc_ht=scontent.ftpe8-2.fna&oh=03_AdTLR8sfGbTkUuZX-ikyf3zFsXh-TV6dNN5nXpAm5tT26Q&oe=65ED695A';
    $width =1000;
    $height =560;
?>
<h1>
    <img src="<?php echo $imagePath; ?>"width="<?php echo $width; ?>" height="<?php echo $height; ?>">
    
    我是國歌<iframe width="560" height="315" src="https://www.youtube.com/embed/kLxj8WZKSks?si=pB5emFICKWIVuX2X" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe><iframe width="560" height="315" src="https://www.youtube.com/embed/HWulR-S_zSc?si=WXObr2JONJQqbZjh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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