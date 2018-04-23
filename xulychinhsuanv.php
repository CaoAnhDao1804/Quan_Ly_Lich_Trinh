<?php
$link = mysql_connect("localhost","root","") or die("Không thể kết nối cơ sở dữ liệu");
  mysql_select_db("dulieu1");
    $manv =$_REQUEST['idnv'];
    $hoten= $_REQUEST['hoten'];
    $ippb=$_REQUEST['ippb'];
    $diachi=$_REQUEST['diachi'];
    $update= mysql_query("Update nhanvien  set Hoten='$hoten', IDPB='$ippb', Diachi='$diachi' where IDNV='$manv'");
    echo $manv;
    echo $hoten;

        echo $ippb;

        echo $diachi;

    if ($update){
        header("location:xemnhanvien.php");
    }
    else {
        header("location:chinhsuanv.php");
    }
?>
