<?php
    class Action{
        private $connect;
        private $teacher;
        private function change_active_status($id,$value){
            $this->connect->query("UPDATE assignments SET status = '$value' WHERE assignment_number = '$id'");
        }

        public function __construct($connect,$teacher = null){
            $this->connect = $connect;
            $this->teacher = $teacher;
        }

        public function login(){
            extract($_POST);
            $qry = $this->connect->query("SELECT * FROM users WHERE email = '$email' AND password = md5('$password')");

            if(mysqli_num_rows($qry) == 1){
                $user = mysqli_fetch_assoc($qry);
                $columns = ['name','email','contact','address'];
                foreach($columns as $col){
                    $_SESSION[$col] = $user[$col];
                    header('location:teacherdashboard.php');
                }
            }else{
                $_SESSION['error'] = 'Login credentials do not match our records';
                header('location:login.php');
            }
        }

        public function register(){
            extract($_POST);
            $_SESSION['name_error'] = [];
            $_SESSION['email_error'] = [];
            $_SESSION['address_error'] = [];
            $_SESSION['password_error'] = [];
            $_SESSION['contact_error'] = [];
            $qry = $this->connect->query("SELECT * FROM users WHERE email = '$email'");

            /**
                *validation
            **/

            //validating name
            if(empty($name)){
                $_SESSION['name_error'][] = 'Name field is required';
            }

            if((strlen($name) > 15) && !empty($name)){
                $_SESSION['name_error'][] = 'Name can not be longer than 15 characters';
            }

            //validating email
            if(empty($email)){
                $_SESSION['email_error'][] = 'Email field is required';
            }

            if(mysqli_num_rows($qry) > 0){
                $_SESSION['email_error'][] = 'Teacher with '.$email.' already exists';
            }

            //validating address
            if(empty($address)){
                $_SESSION['address_error'][] = 'Address field is required';
            }

            if((strlen($address) > 15) && !empty($address)){
                $_SESSION['address_error'][] = 'Address can not be longer than 15 characters';
            }

            //validating contact
            if(empty($contact)){
                $_SESSION['contact_error'][] = 'Contact field is required';
            }

            if((strlen($contact) < 10) && !empty($contact)){
                $_SESSION['contact_error'][] = 'Contact can not be less than 10 characters';
            }

            if((strlen($contact) > 15) && isset($contact)){
                $_SESSION['contact_error'][] = 'Contact can not be longer than 15 characters';
            }

            //validation password
            if(empty($password)){
                $_SESSION['password_error'][] = 'Password field is required';
            }

            if(($password != $confirm_password) && !empty($password) && !empty($confirm_password)){
                $_SESSION['password_error'][] = 'Passwords do not match';
            }

            //if validation pass
            if( empty($_SESSION['name_error']) &&
                empty($_SESSION['email_error']) &&
                empty($_SESSION['address_error']) &&
                empty($_SESSION['password_error']) &&
                empty($_SESSION['contact_error'])){
                $this->connect->query("INSERT INTO users (name, contact, email, address, password) VALUES('$name','$contact','$email','$address',md5('$password'))");
                $columns = ['name','email','contact','address'];
                foreach($columns as $col){
                      $_SESSION[$col] = $$col;
                      header('location:index.php');
                }
            }else{
                header('location:register.php');
            }


        }


        public function logout(){
            session_destroy();
            header("Location:login.php");
        }

        public function pupils($status){
            $qry = $this->connect->query("SELECT * FROM pupils WHERE status = '$status' AND teacher = '$this->teacher'");
            $sum = mysqli_num_rows($qry);
            return $sum;
        }

        public function assignments(){
            $qry = $this->connect->query("SELECT * FROM assignments WHERE teacher = '$this->teacher'");
            $sum = mysqli_num_rows($qry);
            return $sum;
        }

        public function get_pupils(){
            $qry = $this->connect->query("SELECT * FROM pupils WHERE teacher = '$this->teacher'");
            return $qry;
        }

        public function get_assignments(){
          $qry = $this->connect->query("SELECT * FROM assignments WHERE teacher = '$this->teacher'");
          return $qry;
        }

        public function add_pupil(){
          extract($_POST);
          $_SESSION['user_code_error'] = [];
          $_SESSION['first_name_error'] = [];
          $_SESSION['last_name_error'] = [];
          $_SESSION['contact_error'] = [];
          $qry = $this->connect->query("SELECT * FROM pupils WHERE user_code = '$user_code'");

          /**
              *validation
          **/

          //validating code
          if(empty($user_code)){
              $_SESSION['user_code_error'][] = 'User code field is required';
          }

          if((strlen($user_code) > 8) && !empty($user_code)){
              $_SESSION['user_code_error'][] = 'User code can not be longer than 8 characters';
          }

          if(mysqli_num_rows($qry) > 0){
              $_SESSION['user_code_error'][] = 'Pupil with user code '.$user_code.' already exists';
          }

          //validating first name
          if(empty($first_name)){
              $_SESSION['first_name_error'][] = 'First name field is required';
          }

          //validating last name
          if(empty($last_name)){
              $_SESSION['last_name_error'][] = 'Last name field is required';
          }

          //validating contact
          if(empty($contact)){
              $_SESSION['contact_error'][] = 'Contact field is required';
          }

          if((strlen($contact) < 10) && !empty($contact)){
              $_SESSION['contact_error'][] = 'Contact can not be less than 10 characters';
          }

          if((strlen($contact) > 15) && isset($contact)){
              $_SESSION['contact_error'][] = 'Contact can not be longer than 15 characters';
          }

          //if validation pass
          if( empty($_SESSION['user_code_error']) &&
              empty($_SESSION['first_name_error']) &&
              empty($_SESSION['last_name_error']) &&
              empty($_SESSION['contact_error'])){
              $this->connect->query("INSERT INTO pupils(user_code,first_name,last_name,contact,teacher) VALUES('$user_code','$first_name','$last_name', '$contact','$this->teacher')");

              $_SESSION['success'] = 'Pupil registered successfully';
              header('location:addpupil.php');

          }else{
              header('location:addpupil.php');
          }



        }

        public function add_assignment(){
          extract($_POST);
          $_SESSION['assignment_number_error'] = [];
          $_SESSION['assignment_list_error'] = [];
          $_SESSION['start_time_error'] = [];
          $_SESSION['end_time_error'] = [];
          $_SESSION['assignment_date_error'] = [];
          $qry = $this->connect->query("SELECT * FROM assignments WHERE assignment_number = '$assignment_number'");

          /**
              *validation
          **/

          //validating number
          if(empty($assignment_number)){
              $_SESSION['assignment_number_error'][] = 'Assignment number field is required';
          }

          if((strlen($assignment_number) > 8) && !empty($assignment_number)){
              $_SESSION['assignment_number_error'][] = 'User code can not be longer than 8 characters';
          }

          if(mysqli_num_rows($qry) > 0){
              $_SESSION['assignment_number_error'][] = 'Assignment number '.$assignment_number.' exists,use something else';
          }

          //validating list
          if(empty($assignment_list)){
              $_SESSION['assignment_list_error'][] = 'Assignment List field is required';
          }

          if((strlen($assignment_list) > 8) && !empty($assignment_list)){
              $_SESSION['assignment_list_error'][] = 'List can not be greater than 8 characters';
          }

          //validating start time
          if(empty($start_time)){
              $_SESSION['start_time_error'][] = 'Start Time field is required';
          }

          //validating end time
          if(empty($end_time)){
              $_SESSION['end_time_error'][] = 'End time field is required';
          }

          //validating date
          if(empty($end_time)){
              $_SESSION['assignment_date_error'][] = 'Assignment Date field is required';
          }


          //if validation pass
          if( empty($_SESSION['assignment_number']) &&
              empty($_SESSION['assignment_list_error']) &&
              empty($_SESSION['start_time_error']) &&
              empty($_SESSION['end_time_error']) &&
              empty($_SESSION['assignment_date_error'])){
              $this->connect->query("INSERT INTO assignments(assignment_number,assignment_list,start_time,end_time,assignment_date,teacher) VALUES('$assignment_number','$assignment_list','$start_time','$end_time','$date','$this->teacher')");

              $_SESSION['success'] = 'Assignment created successfully';
              header('location:create.php');

          }else{
              header('location:create.php');
          }
        }

        public function monitor_assignment_age(){
            $qry = $this->connect->query("SELECT * FROM assignments");
            foreach ($qry as $result){
              ($result['assignment_date'] > date('Y-m-d'))?
                $this->change_active_status($result['assignment_number'],1) : $this->change_active_status($result['assignment_number'],0);
            }
        }

        public function submitted_assignment(){
            $qry = $this->connect->query("SELECT pup.user_code,pup.last_name,pup.first_name,prog.id,prog.score,prog.comment,prog.assignment_number
                                          FROM pupils AS pup
                                          LEFT JOIN progress AS prog ON pup.user_code = prog.user_code
                                          WHERE pup.teacher = '$this->teacher'");
            return $qry;
        }

        public function comment(){
            extract($_POST);
            $qry = $this->connect->query("UPDATE progress SET comment ='$comment' WHERE id = $id");
            header('Location:index.php');
        }

        public function deactivate_pupil($id){
            $qry = $this->connect->query("UPDATE pupils SET status = 0 WHERE user_code = $id");
            header('Location:pupils.php');
        }
        public function reports(){
            header('Location:report_data.php');
        }

    }
?>
