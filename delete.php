<?php 

require 'mysql.php'; // veritabanı bağlantı dosyamı dahil ettim

if (isset($_POST)){
    $id = htmlspecialchars($_POST['id']); // gelen id mi aldırdım

    if(isset($id)){
        $sorgu = $db->prepare("delete from veriler where id=?"); // veriler tablosundaki id ye =? yaptım
        $sorgu->bindParam(1,$id,PDO::PARAM_INT); // $id seçtirdim

        $calistir = $sorgu->execute();

        if ($calistir){  // hata ve olumlu mesajlarımı döndrüdüm
            echo 'sildim'; 
        }else {
            echo 'silemedim';
        }
        
    }
}else {
    echo 'İd Boş';
}
