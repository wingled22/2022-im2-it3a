<?php
    require_once "dbconnect.php";
?>

 <table>
    <tr>
        <td>Category name</td>
        <td>Category Status</td>
    </tr>

    <?php
        $sqlQuery = "SELECT * from category";
        $res = $conn->query($sqlQuery);
        while($row =mysqli_fetch_object($res)){
            ?>
                <tr>
                    <td><?php echo $row->name?></td>
                    <td><?php echo $row->status?></td>
                </tr>
        <?php
            }   
        ?>
</table>

