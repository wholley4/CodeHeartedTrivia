<?php
header('Access-Control-Allow-Origin: *');

$host="trivia.cxqgmpxfjk2m.us-east-1.rds.amazonaws.com"; // Host name 
$username="admin"; // Mysql username 
$password="corncakes"; // Mysql password 
$db_name="trivia"; // Database name 
$tbl_name="playerdata"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
?>

<table>
            <tr>
                <td>P1</td>
                <td>P2</td>
                <td>P3</td>
                <td>P4</td>
                <td>P5</td>
            </tr>

            <?php
            $sql="SELECT username,score FROM playerdata ORDER BY score DESC LIMIT 10";
            $result=mysql_query($sql);

               while ($row = mysql_fetch_array($result)) {
                   echo "<tr>";
                   echo "<td>".$row['P1']."</td>";
                   echo "<td>".$row['P2']."</td>";
                   echo "<td>".$row['P3']."</td>";
                   echo "<td>".$row['P4']."</td>";
                   echo "<td>".$row['P5']."</td>";
                   echo "</tr>";
               }
               mysql_close();

            ?>
        </table>