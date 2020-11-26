<?php
/**
 * 1.建立表單
 * 2.建立處理檔案程式
 * 3.搬移檔案
 * 4.顯示檔案列表
 */

ate_default_timezone_set("Asia/Taipei");

if(!empty($_FILES['img']['tmp_name'])){
    echo "檔案原始名稱:".$_FILES['img']['name'];
    echo "<br>檔案上傳成功";
    echo "原始上傳路徑:".$_FILES['img']['tmp_name'];

    $subname="." . array_pop(explode('.',$_FILES['img']['name']));
    echo $subname=array_pop($subname);

    switch($_FILES['img']['type']){
        case "image/jpeg":
            $subname=".jpg";
        break;

        case "image/png":
            $subname=".png";
        break;

        case "image/gif":
            $subname=".gif";
        break;
    }

    $filename=date("Ymhis").".".$subname;

// move_uploaded_file($_FILES['img']['tmp_name'],"./img/".$_FILES['img']['name']);
move_uploaded_file($_FILES['img']['tmp_name'],"./img/".$filename);

// move_uploaded_file  上傳完檔案之後將它移動至某資料夾
// "./"：代表目前所在的目錄。
// "../"：代表上一層目錄。
// 以"/"開頭：代表根目錄。

}else{

}
// ['tmp_name'] 是固定的php的用法值
// $_FILES 專門處理上船的檔案 和$_POST $_GET 的路徑不一樣
// $_FILES['field_name']['name'] => 上傳檔案的原始名稱
// $_FILES['field_name']['type'] => 上傳檔案的檔案類型
// $_FILES['field_name']['size'] => 上傳的檔案原始大小
// $_FILES['field_name']['tmp_name'] => 上傳檔案後的暫存資料夾位置
// $_FILES['field_name']['error'] => 顯示錯誤代碼

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>檔案上傳</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 <h1 class="header">檔案上傳練習</h1>
 <!----建立你的表單及設定編碼----->

<form action="?" method="post" enctype="multipart/form-data">
<!-- post 能接收較大的上傳內容 -->
    <input type="file" name="img">
    <input type="submit" value="上傳">
</form>



<!----建立一個連結來查看上傳後的圖檔---->  


</body>
</html>