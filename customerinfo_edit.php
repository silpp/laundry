<?php
include 'db.php';
if ($_REQUEST['req'] =='upd_req'){
    $sel = "SELECT * FROM Customer WHERE Customer_id = '$_REQUEST[id]'";
    //echo $sel;
    $sel_run = mysqli_query($conn,$sel);
    while($row = mysqli_fetch_assoc($sel_run)){ ?>
               
                <div class ="from-group">
                    <label class="label-control col-md-2" for="firstname">Name</label>
                    <div class = "col-md-10">
                        <input type="text" id="upd_firstname" class = "form-control" value="<?php echo $row['Customer_firstname']; ?>">
                    </div>
                </div>
                <div class ="from-group">
                    <label class="label-control col-md-2" for="lastname">LastName</label>
                    <div class = "col-md-10">
                        <input type="text" id="upd_lastname" class = "form-control" value="<?php echo $row['Customer_lastname']; ?>">
                    </div>
                </div>
                <div class ="from-group">
                    <label class="label-control col-md-2" for="gender"> Gender</label>
                    <div class = "col-md-10">
                        <select id="upd_gender" class="form-control">
                            <option value =''<?php if($row['Customer_gender']==''){ echo 'selected';}?>>เพศ</option>
                            <option value ='ชาย'<?php if($row['Customer_gender']=='ชาย'){ echo 'selected';}?>>ชาย</option>
                            <option value ='หญิง'<?php if($row['Customer_gender']=='หญิง'){ echo 'selected';}?>>หญิง</option>
                        </select>
                    </div>
                </div>
                <div class ="from-group">
                    <label class="label-control col-md-2" for="birthdate">BirthDate</label>
                    <div class = "col-md-10">
                        <input type="date" id="upd_birthdate" class = "form-control" value="<?php echo $row['Customer_birthdate']; ?>">
                    </div>
                </div>
                <div class ="from-group">
                    <label class="label-control col-md-2" for="occupation">Occupation</label>
                    <div class = "col-md-10">
                        <input type="text" id="upd_occupation" class = "form-control" value="<?php echo $row['Customer_occupation']; ?>">
                    </div>
                </div>
                <div class ="from-group">
                    <label class="label-control col-md-2" for="telephone">Telephone</label>
                    <div class = "col-md-10">
                        <input type="number" id="upd_telephone" class = "form-control" value="<?php echo $row['Customer_telephone']; ?>">
                    </div>
                </div>
                <div class ="from-group">
                    <label class="label-control col-md-2" for="address">Address</label>
                    <div class = "col-md-10">
                        <input type="text" id="upd_address" class = "form-control" value="<?php echo $row['Customer_address']; ?>">
                    </div>
                </div>
                <div class ="from-group">
                    <label class="label-control col-md-2" for="email">E-mail</label>
                    <div class = "col-md-10">
                        <input type="text" id="upd_email" class = "form-control" value="<?php echo $row['Customer_email']; ?>">
                    </div>
                </div>
                <div class = "form-group">
                    <div class ="col-md-10 col-md-offset-2">
                        <button class ="btn btn-success btn-block" onclick="edit_ajax('upd_btn',<?php echo $row['Customer_id'];  ?>);">Update Record</button>
                    </div>
                </div>


<?php        
}
}
elseif($_REQUEST['req']=='upd_btn'){
    $upd = "UPDATE Customer SET Customer_firstname='$_REQUEST[u_firstname]', Customer_lastname='$_REQUEST[u_lastname]', Customer_gender='$_REQUEST[u_gender]', Customer_birthdate='$_REQUEST[u_birthdate]', Customer_occupation='$_REQUEST[u_occupation]', Customer_telephone='$_REQUEST[u_telephone]', Customer_address='$_REQUEST[u_address]', Customer_email= '$_REQUEST[u_email]' WHERE Customer_id= '$_REQUEST[id]' ";
    echo $upd;
    $upd_run = mysqli_query($conn,$upd);
    
}
?>
                   

                   
