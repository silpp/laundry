<?php
include "db.php";
//echo $_REQUEST['name'];
$sel = "SELECT * FROM Customer WHERE Customer_firstname LIKE '%$_REQUEST[name]%'";
//echo $sel;
$sel_run = mysqli_query($conn,$sel);
while($row = mysqli_fetch_assoc($sel_run)){ ?>
        <tr>
            <td><?php echo $row['Customer_id']; ?></td>
            <td><?php echo $row['Customer_firstname']; ?></td>
            <td><?php echo $row['Customer_lastname']; ?></td>
            <td><?php echo $row['Customer_gender']; ?></td>
            <td><?php echo $row['Customer_birthdate']; ?></td>
            <td><?php echo $row['Customer_occupation']; ?></td>
            <td><?php echo $row['Customer_telephone']; ?></td>
            <td><?php echo $row['Customer_address']; ?></td>
            <td><?php echo $row['Customer_email']; ?></td>
            <td>
                <a class="btn btn-success btn-xs" onclick="edit_ajax('upd_req',<?php echo $row['Customer_id']; ?>);">Edit</a>
                <a class="btn btn-danger btn-xs" onclick="ajax('del',<?php echo $row['Customer_id']; ?>)">Delete</a>
            </td>
        </tr>
    
    
<?php    
    
}

?>

