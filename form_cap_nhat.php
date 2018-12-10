<?php 
    $idpb = $_REQUEST['idpb'];
    $db_link = mysql_connect("localhost", "root", "") or die ("Khong the ket noi den CSDL");
    mysql_select_db("du_lieu", $db_link);
   
    $qr_select_all = 'select * from phong_ban where idpb = "'.$idpb.'";';   
    $results = mysql_query($qr_select_all, $db_link);

    $row = mysql_fetch_assoc($results)
?>

<html> 
<form method="POST" action="xu_ly_cap_nhat.php" name="form_cap_nhat">
    <p align = center>Cập nhật phòng ban</p>
    <p align = center>
        <table>
            <tr>
                <td>Mã phòng ban</td> <td><input type="text" name="edt_idpb" value = "<?php echo $row['idpb'] ?>"</td>
            </tr>

            <tr>
                <td>Tên phòng ban</td> <td><input type="text" name="edt_ten_pb" value = "<?php echo $row['ten_phong_ban'] ?>"></td>
            </tr>

            <tr>
                <td>Mô tả</td> <td><input type="text" name="edt_mo_ta" value = "<?php echo $row['mo_ta'] ?>"></td>
            </tr>
        </table>
    </p>          
    <p align = center><input type="submit" value="apply" name="btn_apply">
        <input type="reset" value="reset" name="btn_reset">
    </p>   
</form>
</html>