<?php
if ($manv = $_REQUEST["manv"]){
  if ($manv=="") {
  header("location:xemnhanvien.php");
} else {
  $link = mysql_connect("localhost","root","") or die("Không thể kết nối cơ sở dữ liệu");
  mysql_select_db("dulieu1");
  $sql ="select * from nhanvien where IDNV='$manv'";
  $result = mysql_query($sql,$link);
  if(!$result){
  header("location:xemnhanvien.php");
} else{

  $row = mysql_fetch_array($result);
}
}
}



?>
<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="css1.css">
   <?php header("Content-type: text/html; charset=utf-8");
?>
  <title></title>
</head>
<body>
  <div class="timkiem">

  <form name="form1" action="xulychinhsuanv.php">
  <table>
    <caption>Chỉnh sửa nhân viên</caption>

    <tbody>

      <tr>
        <td>IDNV : </td>
        <td><input type="text" name="idnv" value="<?php  echo $row[0];?>"</td>
        <td>Họ tên nhân viên : </td>
        <td><input type="text" name="hoten" value="<?php  echo $row[1];?>"</td>
      </tr>
      <tr>
        <td>IPPB : </td>
        <td><input type="text" name="ippb" value="<?php  echo $row[2];?>"></td>
      </tr>
      <tr>
        <td>Địa chỉ nhân viên : </td>
        <td><input type="text" name="diachi" value="<?php  echo $row[3];?>"></td>
      </tr>
      <tr>
        <td> <input type="submit" name="chinhsua" value="Xác nhận "></td>
        <td> <input type="button" name="exit" value="Exit"></td>
      </tr>
    </tbody>
  </table>
  </form>
</div>
</body>
</html>
