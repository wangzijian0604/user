<?php
header("content-type:text/html;charset=utf-8");
$con = mysql_connect("127.0.0.1","root","root");
mysql_select_db("message", $con);

$result = mysql_query("SELECT * FROM names");

echo "<table border='1' align='center'>
    <tr>
    <th>标题</th>
    <th>作者</th>
    <th>内容</th>
    </tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['title'] . "</td>";
  echo "<td>" . $row['author'] . "</td>";
  echo "<td>" . $row['message'] . "</td>";
  echo "</tr>";
  }
echo "<a href='message.php'>返回</a>";
echo "</table>";

mysql_close($con);
?>