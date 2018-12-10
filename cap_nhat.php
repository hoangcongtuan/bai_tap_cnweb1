<?php 
    $db_link = mysql_connect("localhost", "root", "") or die ("Khong the ket noi den CSDL");
    mysql_select_db("du_lieu", $db_link);
  
    $qr_select_all = "select * from phong_ban";
  
    $results = mysql_query($qr_select_all, $db_link);

    echo '<table border=1 width = 50%> <tr> <th>Ma So</th> <th>Ten phong ban</th> <th>Mo ta</th> <th>Thoi gian</th> <th>Thay doi</th> </tr>';
    while($row = mysql_fetch_assoc($results)) {
        echo '<tr>'.
            '<td>'.$row['idpb'].'</td>'.
            '<td>'.$row['ten_phong_ban'].'</td>'.
            '<td>'.$row['mo_ta'].'</td>'.
            '<td>'.$row['thoi_gian'].'</td>'.
            '<td align="center"><a href="form_cap_nhat.php?idpb='.$row['idpb'].'">...</a></td>'.
            '</tr>';
    }
    echo '</table>'
?>