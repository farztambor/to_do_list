<?php
if(isset($_POST['title'])){
    require '../db_connect.php';

    $title = $_POST['title'];

    if(empty($title)){
        header("Location: ../index.php?message=error");
    }else{
        $stmt = $conn->prepare("INSERT INTO tods(title) VALUE(?)");
        $res = $stmt->execute([$title]);

            if($res){
                header("Location: ../index.php?message=success");
            }else{
                header("Location: ../index.php");
            }
            $conn == null;
            exit();
        }
}else{
    header("Location: ../index.php?message=error");
}
