<?php 
require_once('../php/db-config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
</head>
<body>
    <button>EDIT</button>

    <br>
    <table>
        <tr>
            <th>
                USERCODE
            </th>
            <th>
                USERNAME
            </th>
            <th>
                P1
            </th>
            <th>
                P2
            </th>
            <th>
                P3
            </th>
            <th>
                P4
            </th>
        </tr>

        <?php 
        $tbl_users_query = "SELECT * FROM tblusers";
        $tbl_users_rec = mysqli_query($con, $tbl_users_query);
        while($tbl_users_row = mysqli_fetch_array($tbl_users_rec))
            {
                $tbl_users_row['PROCES1'];            
        ?>
        <?php 
        echo '<tr>';   
        ?>     
            <?php
            echo "<td>";
                echo $tbl_users_row['UserCODE'];
            echo "</td>";
            ?>
            <?php
            echo "<td>";
                echo $tbl_users_row['UserName'];
            echo "</td>";
            ?>
            <?php 
            echo "<td>";                
                $p1 = $tbl_users_row['PROCES1'];
                if($p1 > 0){
                    echo "<input type='checkbox' checked>";
                }
                else{
                    echo "<input type='checkbox'>";
                }                                
            echo "</td>";
            ?>
            <?php 
            echo "<td>";                
                $p2 = $tbl_users_row['PROCES2'];
                if($p2 > 0){
                    echo "<input type='checkbox' checked>";
                }
                else{
                    echo "<input type='checkbox'>";
                }                                
            echo "</td>";
            ?>
            <?php 
            echo "<td>";                
                $p3 = $tbl_users_row['PROCES3'];
                if($p3 > 0){
                    echo "<input type='checkbox' checked>";
                }
                else{
                    echo "<input type='checkbox'>";
                }                                
            echo "</td>";
            ?>
            <?php 
            echo "<td>";                
                $p4 = $tbl_users_row['PROCES4'];
                if($p4 > 0){
                    echo "<input type='checkbox' checked>";
                }
                else{
                    echo "<input type='checkbox'>";
                }                                
            echo "</td>";
            ?>
        </tr>
        
        
        <?php 
        }
        ?>
        
    </table>
    PROCESS P1: INVOICING <br>
    PROCESS P2: PROJECT MANAGER <br>
    PROCESS P3: POST COLLECTION <br>
    PROCESS P4: PROJECT MONITOR
</body>
</html>