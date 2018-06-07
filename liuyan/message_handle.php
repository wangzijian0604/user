<?php
header("content-type:text/html;charset=utf-8");
$con = mysql_connect("127.0.0.1","root","root");
mysql_select_db("message", $con);

$sql="INSERT INTO names (title, author,message)
VALUES
('$_POST[title]','$_POST[author]','$_POST[message]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "<script>alert('留言成功');parent.location.href='show_message.php'</script>";
   < tr >
                < td >作者</ td >
                < td > < input  type = “ text ”  name = “ author ”  id = “ author ” /> </ td >
            </ tr >

mysql_close($con)
?>
