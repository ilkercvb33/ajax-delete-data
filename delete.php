<?php 

require 'mysql.php';

if (isset($_POST)){
    $id = htmlspecialchars($_POST['id']);

    if(isset($id)){
        $sorgu = $db->prepare("delete from veriler where id=?");
        $sorgu->bindParam(1,$id,PDO::PARAM_INT);

        $calistir = $sorgu->execute();

        if ($calistir){
            echo 'sildim';
        }else {
            echo 'silemedim';
        }
        
    }
}else {
    echo 'İd Boş';
}