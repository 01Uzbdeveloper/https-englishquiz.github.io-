<?php
$name=$_REQUEST('name');
$comments=$_REQUEST('comments');
$conn=new PDO("mysql:host=localhost; dbname=test",'root','root');
$conn->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
mysql_query("$conn,INSERT INTO comments(name,comments) VALUES('$name','$comments')");
$result=  mysql_query("$conn,SELECT * FROM comments  ORDER BY id ASC");
while ($row=mysql_fetch_array($result)){
    echo "<div class='comment-content'>";
    echo "<h4><a href='delete.php?id=" . $row['id'] . "'> X</a></h4>";
    echo "<h1>" . $row['name']."</h1>";
    echo "<h2>" . $row['data_publish'] . "</h2>";
    echo "<h3>" . $row['comment'] . "</h3>";
    echo "</div>";
}
?>
