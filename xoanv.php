<?php
if ($manv = $_REQUEST["manv"]){
  if ($manv=="") {
  header("location:xemnhanvien.php");
} else {
  $link = mysql_connect("localhost","root","") or die("Không thể kết nối cơ sở dữ liệu");
  mysql_select_db("dulieu1");
  $sql ="Delete  from nhanvien where IDNV='$manv'";
  $result = mysql_query($sql,$link);
  if(!$result){
  header("location:xemnhanvien.php");
} else{
  echo "Xoa thanh cong!";
}
}
}



?>
