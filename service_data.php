<?php
    include 'db.php';
    
    if($_REQUEST['req'] !=''){
        
        if($_REQUEST['req']=='add'){
            if($_REQUEST['st_name'] !=''){
                $name = "'".$_REQUEST['st_name']."'";
            }else $name = 'NULL';
            
            if($_REQUEST['st_price'] !=''){
                $price = "'".$_REQUEST['st_price']."'";
            }else $price = 'NULL';
            
            if($_REQUEST['st_groupid'] !=''){
                $groupid = "'".$_REQUEST['st_groupid']."'";
            }else $groupid = "'1'";
            
            
            $ins ="INSERT INTO Service (Service_name,Service_price,Service_group) VALUES ($name,$price,$groupid) ";
            //echo $ins;
            $ins_run = mysqli_query($conn,$ins);
        }else if($_REQUEST['req']=='del'){
            $id = $_REQUEST['id'];
            $del = "DELETE FROM Service WHERE Service_id='$id'";
            //echo $del;
            $del_run = mysqli_query($conn,$del);
        }
        
    }


    $sel ="SELECT * FROM Service";
    $sel_run =mysqli_query($conn,$sel);
    
    while($row = mysqli_fetch_assoc($sel_run)){
?>
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
                       

                       
                       
