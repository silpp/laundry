<?php
include 'db.php';
if ($_REQUEST['req'] =='upd_req'){
    $sel = "SELECT * FROM Service WHERE Service_id = '$_REQUEST[id]'";
    //echo $sel;
    $sel_run = mysqli_query($conn,$sel);
    while($row = mysqli_fetch_assoc($sel_run)){ ?>
               
                <div class ="from-group">
                    <label class="label-control col-md-2" for="name">ลักษณะบริการ</label>
                    <div class = "col-md-10">
                        <input type="text" id="upd_name" class = "form-control" value="<?php echo $row['Service_name']; ?>">
                    </div>
                </div>
                <div class ="from-group">
                    <label class="label-control col-md-2" for="price">ราคาต่อรายการ(บาท)</label>
                    <div class = "col-md-10">
                        <input type="text" id="upd_price" class = "form-control" value="<?php echo $row['Service_price']; ?>">
                    </div>
                </div>
                <div class ="from-group">
                    <label class="label-control col-md-2" for="groupid">รหัสกลุ่มบริการ</label>
                    <div class = "col-md-10">
                        <input type="text" id="upd_groupid" class = "form-control" value="<?php echo $row['Service_group']; ?>">
                    </div>
                </div>
                
                <div class = "form-group">
                    <div class ="col-md-10 col-md-offset-2">
                        <button class ="btn btn-success btn-block" onclick="edit_ajax('upd_btn',<?php echo $row['Service_id'];  ?>);">แก้ไขข้อมูล</button>
                    </div>
                </div>


<?php        
}
}
elseif($_REQUEST['req']=='upd_btn'){
            if($_REQUEST['u_name'] !=''){
            $name = "'".$_REQUEST['u_name']."'";
            }else $name = 'NULL';
            
            if($_REQUEST['u_price'] !=''){
                $price = "'".$_REQUEST['u_price']."'";
            }else $price = 'NULL';
            
            if($_REQUEST['u_groupid'] !=''){
                $groupid = "'".$_REQUEST['u_groupid']."'";
            }else $groupid = 'NULL';
            
    
    $upd = "UPDATE Service SET Service_name=$name, Service_price=$price, Service_group=$groupid WHERE Service_id= '$_REQUEST[id]' ";
    //echo $upd;
    $upd_run = mysqli_query($conn,$upd);
    
}
?>
                   

                   
