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

  <form name="form1" action="xulytimkiem.php">
  <table>
    <caption>Tìm kiếm nhân viên</caption>

    <tbody>
      <tr>
        <td>Mã nhân viên: </td>
        <td><input type="text" name="manv"></td>
      </tr>
      <tr>
        <td>Họ tên nhân viên : </td>
        <td><input type="text" name="hoten"></td>
      </tr>
      <tr>
        <td>Địa chỉ nhân viên : </td>
        <td><input type="text" name="diachi"></td>
      </tr>
      <tr>
        <td> <input type="submit" name="timkiem" value="Tìm kiếm " onclick="kiemtra()"></td>
        <td> <input type="button" name="exit" value="Exit"></td>
      </tr>
    </tbody>
  </table>
  </form>
</div>
</body>
</html>
