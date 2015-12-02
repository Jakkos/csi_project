<?php
echo 'slt';
$connect = odbc_connect('Corail','User1_11','User1_11');
echo $connect;
$rqt = "SELECT * FROM ACCOMPAGNATEUR";
$res = odbc_exec($connect,$rqt);
echo $res;
$fin = odbc_fetch_row($res);
echo $fin;
odbc_close($connect);

?>