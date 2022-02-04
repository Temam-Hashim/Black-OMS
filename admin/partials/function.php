<?php

require_once "db.php";

// department
    function GetDepartment(){
        global $connect;

            $sql = "SELECT * FROM `departments`";
            $result = $connect->query($sql);

            return $result;

    }

    function AddDepartment($dp_name){
        global $connect;
        $sql = "INSERT INTO `departments`( `dpt_name`) VALUES ('$dp_name')";
        $result = $connect->query($sql);
        if($result){
            $message = "<div class='alert alert-info text-center'>department added successfully</div>";
            header("Location:department_manage.php?message=$message");
        }else{
            $message = "<div class='alert alert-danger text-center'>Failed to add department. please try again!</div>";
            // echo mysqli_error($connect);
            header("Location:department_add.php?message=$message");
        }

    }

    function UpdateDepartment($dp_name,$dp_id){
        global $connect;
        $sql = "UPDATE `departments` set `dpt_name`='$dp_name' Where `dpt_id`='$dp_id'";
        $result = $connect->query($sql);
        if($result){
            $message = "<div class='alert alert-info text-center'>department Updated successfully</div>";
            header("Location:department_manage.php?message=$message");
        }else{
            $message = "<div class='alert alert-danger text-center'>Failed to update department. please try again!</div>";
            header("Location:department_manage.php?message=$message");
            // echo mysqli_error($connect);
        }
    }

    // staff

    function GetStaff(){
        global $connect;
        $sql = "SELECT * FROM `staff`";
        return $connect->query($sql);
    }

    function AddStaff($name,$pic,$mobile,$email,$gender,$dob,$address,$martial_status,$join_date,$dept,$salary,$contract,$position,$bank_name,$acount_no,$status,$qualification){
        global $connect;
        $sql = "INSERT INTO `staff`(`st_name`, `st_pic`, `st_mobile`, `st_email`, `st_gender`, `st_dob`, `address`,
                `martial_status`, `date_of_joining`, `dept`, `salary`, `contract`, `position`, `bank_name`, `acount_no`,
                `status`,`qualification`)
                 VALUES ('$name','$pic','$mobile','$email','$gender','$dob','$address','$martial_status',
                 '$join_date','$dept','$salary','$contract','$position','$bank_name','$acount_no','$status',
                 '$qualification')";

                $result = $connect->query($sql);
                if($result){
                    $message = "<div class='alert alert-info text-center'>Staff added successfully</div>";
                    header("Location:staff_manage.php?message=$message");
                }else{
                    $message = "<div class='alert alert-danger text-center'>Failed to add Staff. please try again!</div>";
                    // echo mysqli_error($connect);
                    header("Location:staff_add.php?message=$message");
                }
    }

    function UpdateStaff($id,$name,$pic,$mobile,$email,$gender,$dob,$address,$martial_status,$join_date,$dept,$salary,$contract,$position,$bank_name,$acount_no,$status,$qualification){
        global $connect;
        $sql = "UPDATE `staff`
                SET `st_name`='$name',
                    `st_pic`='$pic',
                    `st_mobile`='$mobile',
                    `st_email`='$email',
                    `st_gender`='$gender',
                    `st_dob`='$dob',
                    `address`='$address',
                    `martial_status`='$martial_status',
                    `date_of_joining`='$join_date',
                    `dept`='$dept',
                    `salary`='$salary',
                    `contract`='$contract',
                    `position`='$position',
                    `bank_name`='$bank_name',
                    `acount_no`='$acount_no',
                    `qualification`='$qualification',
                    `status`='$status' WHERE `st_id`='$id' ";

        $result = $connect->query($sql);

        if($result){
            $message = "<div class='alert alert-info text-center'>Staff Updated successfully</div>";
            header("Location:staff_manage.php?message=$message");
        }else{
            // $message = "<div class='alert alert-danger text-center'>Failed to update Staff. please try again!</div>";
            // header("Location:staff_manage.php?message=$message");
            echo mysqli_error($connect);
        }
    }

    // users
    function GetUsers(){
        global $connect;

            $sql = "SELECT * FROM `users`";
            $result = $connect->query($sql);

            return $result;

    }

    function AddUser($username,$email,$password,$user_role){
        global $connect;
   
        $sql = "INSERT INTO `users`(`username`,`email`, `password`, `role`)
                VALUES('$username','$email','$password','$user_role')";
        $result = $connect->query($sql);
        
        // $user_password = password_hash($user_password, PASSWORD_BCRYPT, array('cost' => 10));

        if($result){
            $message = "<div class='alert alert-info text-center'>User Added successfully</div>";
            header("Location:user_view.php?message=$message");
        }else{
            $message = "<div class='alert alert-danger text-center'>Failed to Add User. please try again!</div>";
            // echo mysqli_error($connect);
        }

    }
    function UpdateUser($u_id,$username,$email,$password,$role){
        global $connect;
        $sql = "UPDATE `users` set 
             `username`='$username',
             `email` = '$email',
             `password` = '$password',
             `role` = '$role'
              Where `id`='$u_id' ";
        $result = $connect->query($sql);
        if($result){
            $message = "<div class='alert alert-info text-center'>User Updated successfully</div>";
            header("Location:user_view.php?message=$message");
        }else{
            $message = "<div class='alert alert-danger text-center'>Failed to update user. please try again!</div>";
            header("Location:user_view.php?message=$message");
            // echo mysqli_error($connect);
        }
    }

// salary
    function GetSalary(){
        global $connect;

            $sql = "SELECT * FROM `salary`";
            $result = $connect->query($sql);

            return $result;

    }

    function  AddSalary($st_name,$st_email,$st_dept,$st_pic,$basic,$allowance,$tax,$st_mobile,$st_address){
        global $connect;
        $sql = "INSERT INTO `salary`(`name`, `email`,`department`,`pic`,`basic_salary`,`allowance`,`tax`,`mobile`,`address`) 
                VALUES ('$st_name','$st_email','$st_dept','$st_pic','$basic','$allowance','$tax','$st_mobile','$st_address')";
        $result = $connect->query($sql);
        if($result){
            $message = "<div class='alert alert-info text-center'>Salary Added successfully</div>";
            header("Location:salary_manage.php?message=$message");
        }else{
            $message = "<div class='alert alert-danger text-center'>Failed to Add Salary. please try again!</div>";
            // header("Location:salary_manage.php?message=$message");
            echo mysqli_error($connect);
        }
    
    }

    // leave section
    function AddLeaveRequest($name,$dept,$position,$reason,$leave_from,$leave_to, $description){
        global $connect;
        $sql = "INSERT INTO `leave_request`(`name`, `dept`, `position`, `reason`, `leave_from`, `leave_to`, `description`)
                VALUES ('$name','$dept','$position','$reason','$leave_from','$leave_to','$description')";
        $res = $connect->query($sql);

        if($res){
            $message = "<div class='alert alert-success text-center'>Request Message sent successfully</div>";
            header("Location:leave_request.php?message=$message");
        }else{
            $message = "<div class='alert alert-danger text-center'>Request message declined. Please try again!</div>";
            header("Location:leave_request.php?message=$message");
            // echo mysqli_error($connect);
        }

    }
    
    // attendance
    function GetAttendance(){
        global $connect;

        $sql = "SELECT * from `attendance`";
        $res = $connect->query($sql);
        return $res;
    }
    function AddAttendance($st_name,$st_date,$st_status){
        global $connect;
        $sql = "INSERT INTO `attendance`(`st_name`, `at_date`, `status`) 
                VALUES ('$st_name','$st_date','$st_status')";  
        $res = $connect->query($sql);

        if($res){
            $message = "<div class='alert alert-success text-center'>Attendaance Submitted successfully <a class='btn btn-primary' href='attendance_manage.php'>Manage Attendance</a></div>";
            header("Location:attendance_add.php?message=$message");
        }else{
            $message = "<div class='alert alert-danger text-center'>Failed to submit attendnace. Please try again!</div>";
            header("Location:attendance_add.php?message=$message");
            echo mysqli_error($connect);
        }

    }

    function UpdateAttendance($at_id,$status){
        global $connect;
        $sql = "UPDATE `attendance` set `status`='$status' where `st_id`='$at_id' ";
        $result = $connect->query($sql);
        if($result){
            $message = "<div class='alert alert-info text-center'>Attendnace Updated successfully <a href='attendance_manage.php' class='btn btn-primary'>View Attendnace</a></div>";
            header("Location:attendance_add.php?edit_id=$at_id&message=$message");
        }else{
            $message = "<div class='alert alert-danger text-center'>Failed to update attendnace. please try again!</div>";
            header("Location:attendance_add.php?edit_id=$at_id&message=$message");
            // echo mysqli_error($connect);
        }
    }


    // add customer from receptions
    function GetCustomer(){
        global $connect;

        $sql = "SELECT * from `registration`";
        $res = $connect->query($sql);
        return $res;
    }
    function AddNewCustomer($name,$email,$mobile,$gender,$age,$exp_level, $exp_year,$address){
        global $connect;
        $sql = "INSERT INTO `registration`(`c_name`, `c_email`, `c_mobile`, `gender`, `age`, `exprience_level`, `exprience_year`, `address`) 
                VALUES ('$name','$email','$mobile','$gender','$age','$exp_level','$exp_year','$address')";
        $res = $connect->query($sql);

        if($res){
            $message = "<div class='alert alert-success text-center'>$name has Been Registered as $exp_level has been forwarded to staff.</div>";
            header("Location:customer_add.php?message=$message");
        }else{
            $message = "<div class='alert alert-danger text-center'>Failed to register this customer. Please try again!</div>";
            header("Location:leave_request.php?message=$message");
            // echo mysqli_error($connect);
        }

    }
    function UpdateCustomer($id,$name,$email,$mobile,$gender,$age,$exp_level, $exp_year,$address){
        global $connect;
        $sql = "UPDATE `registration` SET `c_name`='$name',
                                          `c_email`='$email',`c_mobile`='$mobile',
                                          `gender`='$gender',`age`='$age',
                                          `exprience_level`='$exp_level',
                                          `exprience_year`='$exp_year',
                                          `address`='$address'
                                           WHERE `c_id`='$id'";
         $res = $connect->query($sql);
        if($res){
            $message = "<div class='alert alert-success text-center'>Customer with name $name is successfully Updated. <a href='customer_manage.php' class='btn btn-primary'>View Customer</a></div>";
            header("Location:customer_edit.php?edit_id=$id&message=$message");
        }else{
            $message = "<div class='alert alert-danger text-center'>Failed to Update customer named $name. Please try again!</div>";
            header("Location:customer_manage.php?message=$message");
            echo mysqli_error($connect);
        }
    }
    // role
    function GetRole(){
        global $connect;
        $sql = "SELECT * from `role`";
        $res = $connect->query($sql);
        return $res;
    }
    // delete fo all
    function Delete($db,$param,$id,$location){
        global $connect;
        $sql = "DELETE from `$db` WHERE `$param`='$id'";
        $result = $connect->query($sql);
        if($result){
            $message = "<div class='alert alert-danger text-center'>Data Deleted successfully</div>";
            header("Location:$location?message=$message");
        }else{
            $message = "<div class='alert alert-danger text-center'>Data is not Deleted. Please try again!</div>";
            header("Location:$location?message=$message");
            // echo mysqli_error($connect);
        }
    }


    // get data by id
    function GetDataById($db, $param, $id){
        global $connect;
        $sql = "SELECT * FROM `$db` WHERE `$param`='$id' ";
        return $connect->query($sql);
    }


    function InputValue($input){

     return isset($_POST[$input])? htmlspecialchars($_POST[$input]):"";

    }

    




?>