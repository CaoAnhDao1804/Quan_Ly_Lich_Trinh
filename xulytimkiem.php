<?php
$manv = $_REQUEST['manv'];
$hoten = $_REQUEST['hoten'];
$diachi =$_REQUEST['diachi'];
if ($manv=="" && $hoten==""&& $diachi=="") {
  header("location:timkiemNV.php");
} else {
  $link = mysql_connect("localhost","root","") or die("Không thể kết nối cơ sở dữ liệu");
  mysql_select_db("dulieu1");
  $sql ="select * from nhanvien where IDNV='$manv' or Hoten='$hoten' or Diachi='$diachi' ";
  $result = mysql_query($sql,$link);
  if(!$result) {
  echo "Could not run query: " .mysql_error();
  } else {
    echo'<table border="1" width="100%>"';
    echo '<caption> Du lieu Tim kiem nhan vien tuong ung</caption>';
    echo '<tr><th>IDNV</th><th>Hoten</th><th>IDPB</th><th>Diachi</th></tr>';
    while ($row = mysql_fetch_array($result)) {
      echo '<br>';
      echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td></tr>';
    }
  }
}


?>
