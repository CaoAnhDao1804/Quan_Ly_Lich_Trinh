<link rel="stylesheet" type="text/css" href="css1.css">
<?php
include 'connectdb.php';
header("Content-type: text/html; charset=utf-8");
$sql ="select * from lich_tau";
$result = mysql_query ($sql,$conn);
if(!$result) {
  echo "Could not run query: " .mysql_error();
} else {
  echo '<h1> Danh sách lịch trình tàu</h1>';
    echo'<table id = "table1" border="1"  width="100%>"';
    echo '<tr><th>Mã lịch tàu </th><th>Mã trạm tàu</th><th>Thời gian đến</th><th> Thời gian đi </th><th> Mã trạm bắt đầu</th><th> Mã trạm kết thúc </th><th> Người tạo </th><th> Trạng thái </th><th>Chức năng</th></tr>';
    while ($row = mysql_fetch_array($result)) {
      echo '<br>';
      echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td><td>'.$row[6].'</td><td>'.$row[5].'</td><td>'.$row[7].'</td><td><a  href="chinhsuanv.php?manv='.$row[0].'" width=50%> Chỉnh sửa</a><a href="xoanv.php?manv='.$row[0].'">Xóa</a></td></tr>';
    }
  }
?>
