<!-- 提交成功 -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["name"]) && isset($_POST["email"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        echo "<script>alert('提交成功');location.href='../index.php'</script>";
        exit();
    }
}
echo "<script>alert('失败');location.href='../index.php'</script>";
exit();
?>