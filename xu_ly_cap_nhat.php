<?php 

        $idpb = $_POST['edt_idpb'];
        $mo_ta = $_POST['edt_mo_ta'];
        $ten_pb = $_POST['edt_ten_pb'];
  
    $db_link = mysql_connect("localhost", "root", "") or die ("Khong the ket noi den CSDL");
    mysql_select_db("du_lieu", $db_link);
   
    $qr_select_all = 'update phong_ban set mo_ta = "'.$mo_ta.'" ten_phong_ban = "'.$ten_pb.'" where idpb = "'.$idpb.'"';   

    $results = mysql_query($qr_select_all, $db_link);
    echo '<script lang="JavaScript">'.
        'alert("'.mysql_affected_rows().' row affected");'.
    '</script>';

    header('location: cap_nhat.php');
?>