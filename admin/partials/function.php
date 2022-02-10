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

    function AddStaff($name,$pic,$mobile,$email,$gender,$dob,$address,$martial_status,$join_date,$dept,$salary,$contract,$position,$bank_name,$account_no,$status,$qualification){
        global $connect;
        $sql = "INSERT INTO `staff`(`st_name`, `st_pic`, `st_mobile`, `st_email`, `st_gender`, `st_dob`, `address`,
                `martial_status`, `date_of_joining`, `dept`, `salary`, `contract`, `position`, `bank_name`, `acount_no`,
                `status`,`qualification`)
                 VALUES ('$name','$pic','$mobile','$email','$gender','$dob','$address','$martial_status',
                 '$join_date','$dept','$salary','$contract','$position','$bank_name','$account_no','$status',
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

    function UpdateStaff($id,$name,$pic,$mobile,$email,$gender,$dob,$address,$martial_status,$join_date,$dept,$salary,$contract,$position,$bank_name,$account_no,$status,$qualification){
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
                    `acount_no`='$account_no',
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

    function  AddSalary($st_name,$st_email,$st_dept,$st_pic,$basic,$allowance,$tax,$st_mobile,$st_address,$total_date){
        global $connect;
        $sql = "INSERT INTO `salary`(`name`, `email`,`department`,`pic`,`basic_salary`,`allowance`,`tax`,`mobile`,`address`,`total_date`) 
                VALUES ('$st_name','$st_email','$st_dept','$st_pic','$basic','$allowance','$tax','$st_mobile','$st_address','$total_date')";
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
    function  UpdateSalary($id,$basic,$allowance,$tax,$total_date){
        global $connect;
        $sql = "UPDATE `salary` SET `basic_salary`='$basic',`allowance`='$allowance',
                        `total_date`='$total_date',`tax`='$tax' WHERE `sl_id`='$id'";
        $result = $connect->query($sql);
        if($result){
            $message = "<div class='alert alert-info text-center'>Salary Updated successfully</div>";
            header("Location:salary_manage.php?message=$message");
        }else{
            $message = "<div class='alert alert-danger text-center'>Failed to Update Salary. please try again!</div>";
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
            $message = "<div class='alert alert-success text-center'>Attendance Submitted successfully </div>";
            header("Location:attendance_add.php?message=$message");
        }else{
            $message = "<div class='alert alert-danger text-center'>Failed to submit attendance. Please try again!</div>";
            header("Location:attendance_add.php?message=$message");
            echo mysqli_error($connect);
        }

    }

    function UpdateAttendance($at_id,$status){
        global $connect;
        $sql = "UPDATE `attendance` set `status`='$status' where `st_id`='$at_id' ";
        $result = $connect->query($sql);
        if($result){
            $message = "<div class='alert alert-info text-center'>Attendance Updated successfully ";
            header("Location:attendance_add.php?edit_id=$at_id&message=$message");
        }else{
            $message = "<div class='alert alert-danger text-center'>Failed to update attendance. please try again!</div>";
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
    function AddNewCustomer($fname,$mname,$lname,$email,$mobile,$gender,$dob,$age,$birth_place,$martial_status,$occupation,$nationality,$current_address,$permanent_address,$emergency_contact,$education_background,$education_level,$salary_range,$exp_level, $exp_year,$employment_type){
        global $connect;
        $sql = "INSERT INTO `registration`(`f_name`, `m_name`, `l_name`, `c_email`, `c_mobile`, 
                `gender`, `dob`, `age`, `birth_place`, `martial_status`, `occupation`, `nationality`, 
                `current_address`, `permanent_address`, `emergency_contact`, `education_background`, 
                `salary_range`, `exprience_level`, `exprience_year`,`education_level`, `employment_type`)

                 VALUES ('$fname','$mname','$lname','$email','$mobile','$gender','$dob','$age',
                 '$birth_place','$martial_status','$occupation','$nationality','$current_address',
                 '$permanent_address','$emergency_contact','$education_background','$salary_range',
                 '$exp_level','$exp_year','$education_level','$employment_type')";

       $res = $connect->query($sql);

        if($res){
            $message = "<div class='alert alert-success text-center'>$fname $mname $lname has Been Registered as $exp_level and has been forwarded to staff.</div>";
            header("Location:customer_add.php?message=$message");
        }else{
            $message = "<div class='alert alert-danger text-center'>Failed to register this customer. Please try again!</div>";
            header("Location:leave_request.php?message=$message");
            // echo mysqli_error($connect);
        }

    }


    function UpdateCustomer($id,$fname,$mname,$lname,$email,$mobile,$gender,$dob,$age,$birth_place,$martial_status,$occupation,$nationality,$current_address,$permanent_address,$emergency_contact,$education_background,$education_level,$salary_range,$exp_level, $exp_year,$employment_type){
        global $connect;
        $sql = "UPDATE `registration` SET `f_name`='$fname',`m_name`='$mname',
            `l_name`='$lname',`c_email`='$email',`c_mobile`='$mobile',`gender`='$gender',
            `dob`='$dob',`age`='$age',`birth_place`='$birth_place',`martial_status`='$martial_status',
            `occupation`='$occupation',`employment_type`='$employment_type',`nationality`='$nationality',
            `current_address`='$current_address',`permanent_address`='$permanent_address',
            `education_background`='$education_background',`education_level`='$education_level',
            `salary_range`='$salary_range',`exprience_level`='$exp_level',
            `exprience_year`='$exp_year',`emergency_contact`='$emergency_contact'
            WHERE `c_id`='$id'";   

        $res = $connect->query($sql);
        if($res){
            $message = "<div class='alert alert-success text-center'>Customer with name $fname $mname $lname is successfully Updated.";
            header("Location:customer_edit.php?edit_id=$id&message=$message");
        }else{
            $message = "<div class='alert alert-danger text-center'>Failed to Update customer named $fname $mname $lname. Please try again!</div>";
            header("Location:customer_edit.php?edit_id=$id&message=$message");
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

    // payment gateway
    function GetPayment(){
        global $connect;

        $sql = "SELECT * from `payment`";
        $res = $connect->query($sql);
        return $res;
    }
    function AddPayment($c_name,$c_email,$c_mobile,$c_address,$payment_reason,$total_payment){
        global $connect;
        $sql = "INSERT INTO `payment`(`customer_name`, `customer_email`, `customer_mobile`, `customer_address`, `payment_reason`, `total_payment`) 
                VALUES ('$c_name','$c_email','$c_mobile','$c_address','$payment_reason','$total_payment')";
        $result =  $connect->query($sql);
        if($result){
            $message = "<div class='alert alert-info text-center'>Payment Added successfully</div>";
            header("Location:payment_manage.php?message=$message");
        }else{
            $message = "<div class='alert alert-danger text-center'>Payment not added. Please try again!</div>";
            header("Location:payment_add.php?message=$message");
            // echo mysqli_error($connect);
        }
    }
    function UpdatePayment($id,$c_name,$c_email,$c_mobile,$c_address,$payment_reason,$total_payment){
        global $connect;
        $sql = "UPDATE `payment` SET `customer_name`='$c_name',`customer_email`='$c_email',`customer_mobile`='$c_mobile',
              `customer_address`='$c_address',`payment_reason`='$payment_reason',`total_payment`='$total_payment'
               WHERE `py_id`='$id'";

        $result = $connect->query($sql);
        if($result){
            $message = "<div class='alert alert-info text-center'>Payment Updated successfully</div>";
            header("Location:payment_manage.php?message=$message");
        }else{
            $message = "<div class='alert alert-danger text-center'>Failed to Update Payment. Please try again!</div>";
            header("Location:payment_update.php?message=$message");
            // echo mysqli_error($connect);
        }
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