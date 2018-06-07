<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>留言</title>
   <style type="text/css">
     .message{
         margin-top:0px;
     }
     h1{
         margin-top:100px;
     }
    </style>
</head>
<body>
   <h1 align="center">留言板</h1>
   <div class="message">
       <form  method="post" action="message_handle.php">
           <table type="text" align="center" border="1">
               <input type="hidden" id="id" name="id" />
            <tr>
               <td>标题</td>
               <td><input type="text" name="title" id="title"/></td>
            </tr>
            <tr>
                <td>作者</td>
                <td><input type="text" name="author" id="author"/> </td>
            </tr>
            <tr>
                <td>内容</td>
                <td><textarea name="message" id="message" cols="60" role="15"></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" name="sumbit"/></td>
                <td><input type="reset" name="reset"/></td>
            </tr>
           </table>
       </form>
   </div>

</body>
</html>