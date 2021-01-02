<!DOCTYPE html>
<html>
    <head>
        <title>Comment Box</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="" method="POST">
            <table>
                <tr><td>Name:</td><td><input type="text" name="name"></td></tr>
                <tr><td colspan="2">Comment:</td></tr>
                <tr><td colspan="2"><textarea name="comment"></textarea></td></tr>
                <tr><td colspan="2"><input type="submit" name="submit" value="Comment"></td></tr>
            </table>
        </form>
    </body>
</html>

<?php
if(isset($_POST["submit"]))
{
 
 //Including dbconfig file.
include 'db.php';
 
$name = $_POST["name"];
$comment = $_POST["comment"];


mysql_query("INSERT INTO comments (name,comment) VALUES ('$name','$comment')");
header("location:success.php");

echo '<center> Comment Successfully Submitted </center>';

}
$getquery=mysql_query("SELECT * FROM comments ORDER BY id DESC");
        while ($rows=  mysql_fetch_assoc($getquery)){
            $id=$rows['id'];
            $name=$rows['name'];
            $comment=$rows['comment'];
            $dellink="<a href=\" delete.php?id=" . $id . " \" >Delete</a>";
            echo  $name . '<br />' . '<br />' . $comment . '<br />' .$dellink .'<br />' . '<hr style=width:400px; />' ; 
        ;}
        

 ?>
