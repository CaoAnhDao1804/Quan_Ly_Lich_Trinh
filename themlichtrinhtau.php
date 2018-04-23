<?php
include 'connectdb.php';

if (isset($_POST['themLTT'])){

    $malichtau    =$_POST["malichtau"];
    $madautau     =$_POST["madautau"];
    $tgden        =$_POST["tgden"];
    $tgdi         =$_POST["tgdi"];
    $matrambd     =$_POST["matrambd"];
    $matramkt     =$_POST["matramkt"];

    $insert= mysql_query("INSERT INTO lich_tau values('$malichtau','$madautau','$tgden','$tgdi','$matrambd','$matramkt')") or die("Khong the duoc");
    if ($insert){
        echo "Bạn đã thêm thành công!";
    }
    else {
        echo "Việc thêm đã thất bại , vui lòng kiểm tra lại!";
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
  <div class="formdl">

  <form name="form1" action="">
  <table>
    <caption>Thêm Lịch trình tàu </caption>

    <tbody>
      <tr>
        <td>Mã Lịch Tàu : </td>
        <td><input type="text" name="malichtau  " value=""</td>
      </tr>
      <tr>
        <td>Mã Đầu Tàu : </td>
        <td>
       <select name="madautau" >
        <?php
          $sql ="select * from dau_tau";
          $result =mysql_query($sql);
          while ($row = mysql_fetch_array($result)) {
              echo '<option value='.$row[0].'>'.$row[1].'</option>';
          }
        ?>
        </select>
        </td>
      </tr>
      <tr>
        <td>Thời gian đến : </td>
        <td><input type="time" name="tgden" value=""></td>
        <td><input type="date" name="" value=""></td>
      </tr>
      <tr>
        <td>Thời gian đi : </td>
        <td><input type="time" name="tgdi" value=""></td>
       <td><input type="date" name="" value=""></td>

      </tr>
      <tr>
        <td>Mã trạm bắt đầu : </td>
        <td>
       <select name="matrambd" >
        <?php
          $sql ="select * from tram_tau";
          $result =mysql_query($sql);
          while ($row = mysql_fetch_array($result)) {
              echo '<option value='.$row[0].'>'.$row[1].'</option>';
          }
        ?>
        </select>
        </td>
      </tr>
      <tr>
        <td>Mã trạm kết thúc : </td>
        <td>
       <select name="matramkt" >
        <?php
          $sql ="select * from tram_tau";
          $result =mysql_query($sql);
          while ($row = mysql_fetch_array($result)) {
              echo '<option value='.$row[0].'>'.$row[1].'</option>';
          }
        ?>
        </select>
        </td>
      </tr>
      <tr>
        <td>Các trạm dừng chân : </td>
        <td>

       <check name="matramdc" >
        <?php
          $sql ="select * from tram_tau";
          $result =mysql_query($sql);
          while ($row = mysql_fetch_array($result)) {
              echo '<input type="checkbox" name="tramdc[]" value='.$row[0].'>'.$row[1].'</input>';
          }
        ?>
        </select>
        </td>
        <td> <input type="submit" name="themLTT" value="Thêm Lịch trình tàu "></td>
        <td> <input type="button" name="exit" value="Exit"></td>
      </tr>
    </tbody>
  </table>
  </form>
</div>
</body>
</html>
