<?php
include "db.php";
//echo $_REQUEST['name'];
$sel = "SELECT * FROM Service WHERE Service_name LIKE '%$_REQUEST[name]%'";
//echo $sel;
$sel_run = mysqli_query($conn,$sel);
while($row = mysqli_fetch_assoc($sel_run)){ ?>
        <tr>
            <td><?php echo $row['Service_id']; ?></td>
            <td><?php echo $row['Service_group']; ?></td>
            <td><?php echo $row['Service_name']; ?></td>
            <td><?php echo $row['Service_price']; ?></td>
            <td>
                <a class="btn btn-success btn-xs" onclick="edit_ajax('upd_req',<?php echo $row['Service_id']; ?>);">Edit</a>
                <a class="btn btn-danger btn-xs" onclick="ajax('del',<?php echo $row['Service_id']; ?>)">Delete</a>
            </td>
        </tr>
    
    
<?php    
    
}

?>

