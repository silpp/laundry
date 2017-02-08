<?php
    include 'db.php';
    
    if($_REQUEST['req'] !=''){
        
        if($_REQUEST['req']=='add'){
            if($_REQUEST['st_firstname'] !=''){
                $firstname = "'".$_REQUEST['st_firstname']."'";
            }else $firstname = 'NULL';
            
            if($_REQUEST['st_lastname'] !=''){
                $lastname = "'".$_REQUEST['st_lastname']."'";
            }else $lastname = 'NULL';
            
            if($_REQUEST['st_gender'] !=''){
                $gender = "'".$_REQUEST['st_gender']."'";
            }else $gender = 'NULL';
            
            if($_REQUEST['st_birthdate'] !=''){
                $birthdate = "'".$_REQUEST['st_birthdate']."'";
            }else $birthdate ='NULL';
            
            if($_REQUEST['st_occupation'] != ''){
                $occupation = "'".$_REQUEST['st_occupation']."'";
            }else $occupation ='NULL';
            
            if($_REQUEST['st_telephone'] !=''){
                $telephone = "'".$_REQUEST['st_telephone']."'";
            }else $telephone = 'NULL';
            
            if($_REQUEST['st_address'] !=''){
                $address = "'".$_REQUEST['st_address']."'";
            } else $address ='NULL';
            
            if($_REQUEST['st_email'] !=''){
                $email = "'".$_REQUEST['st_email']."'";
            }else $email = 'NULL';
            
            $ins ="INSERT INTO Customer (Customer_firstname,Customer_lastname,Customer_gender,Customer_birthdate,Customer_occupation,Customer_telephone,Customer_address,Customer_email) VALUES ($firstname,$lastname,$gender,$birthdate,$occupation,$telephone,$address,$email) ";
            //echo $ins;
            $ins_run = mysqli_query($conn,$ins);
        }else if($_REQUEST['req']=='del'){
            $id = $_REQUEST['id'];
            $del = "DELETE FROM Customer WHERE Customer_id='$id'";
            //echo $del;
            $del_run = mysqli_query($conn,$del);
        }
        
    }


    $sel ="SELECT * FROM Customer";
    $sel_run =mysqli_query($conn,$sel);
    
    while($row = mysqli_fetch_assoc($sel_run)){
?>
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
                       

                       
                       
