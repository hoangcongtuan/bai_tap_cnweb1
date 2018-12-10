<?php 
    $userName = $_REQUEST['edt_user_name'];
    $passWord = $_REQUEST['edt_password'];
    echo"User Name = ".$userName.'<br>';
    echo "Password = ".$passWord;

    $db_link = mysql_connect("localhost", "root", "") or die ("Khong the ket noi den CSDL");
    mysql_select_db("du_lieu", $db_link);

    $chk_qr = 'select * from admin where username = "'.$userName.'" and password = "'.$passWord.'";';

    $results = mysql_query($chk_qr, $db_link);
    $num_row = mysql_num_rows($results);
    
    if ($num_row == 0)
        //turn back lgoin
        header('location: login_page.html');
    else 
        header('location: cap_nhat.php');

?>