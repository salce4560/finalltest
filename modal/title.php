<h3>新增標題圖片</h3>
<hr>
<form action="api/title.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>標題區圖片</td>
            <td><input type="file" name="img"></td>
        </tr>
        <tr>
            <td>替代文字</td>
            <td><input type="text" name="text"></td>
        </tr>
    </table>
    <div><input type="submit" value="新增"><input type="submit" value="重製"></div>
</form>
