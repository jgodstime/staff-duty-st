<?php
namespace Mini\Controller;

use Mini\Core\View;
use Mini\Model\Register;


class RegisterController
{
    var $View;
    public $msg;
   
    function __construct() {
        $this->View = new View();
        $this->msg = new \Mini\Libs\FlashMessages();
    }


    public function teaching_staff()
    {
        if(isset($_POST['regTeachingStaffBtn'])){
          
            $registrationDate = ($_POST['registrationDate']);
            $registrationId = $_POST['registrationId'];
            $surnameOfStaff = ($_POST['surnameOfStaff']);
            $otherNameOfStaff = ($_POST['otherNameOfStaff']);
            $classAssigned = ($_POST['classAssigned']);

            $term = ($_POST['term']);
            $subjectAssigned = ($_POST['subjectAssigned']);
            $academicYear = ($_POST['academicYear']);
            
           

            if(empty($registrationDate)){
                $this->msg->error('Date is required.');
            }if(empty($registrationId)){
                $this->msg->error('ID is required.');
            }if(empty($surnameOfStaff)){
                $this->msg->error('Surname of staff is required.');
            }if(empty($otherNameOfStaff)){
                $this->msg->error('Other name is required.');
            }if(empty($classAssigned)){
                $this->msg->error('Class assigned is required.');
            }if(empty($term)){
                $this->msg->error('Term is required.');
            }if(empty($subjectAssigned)){
                $this->msg->error('Subject assigned is required.');
            }if(empty($academicYear)){
                $this->msg->error('Academic year is required.');
            }

           
           
            if ($this->msg->hasErrors()){
                header('location:' . $_SERVER['HTTP_REFERER']);
                die();
            }else{
                
                $registrationDate = ($_POST['registrationDate']);
                $registrationId = $_POST['registrationId'];
                $surnameOfStaff = ($_POST['surnameOfStaff']);
                $otherNameOfStaff = ($_POST['otherNameOfStaff']);
                $classAssigned = ($_POST['classAssigned']);
    
                $term = ($_POST['term']);
                $subjectAssigned = ($_POST['subjectAssigned']);
                $academicYear = ($_POST['academicYear']);

                (new Register())->registerTeachingStaff($registrationDate,$registrationId,$surnameOfStaff,$otherNameOfStaff,$classAssigned,$term,$subjectAssigned,$academicYear);
            }

        }
            // html data
            $data["title"] = "Register teaching staff"; /* for <title></title> inside header.php in this case */
            // load views
            $this->View->render('home/teachingStaff', $data);
    }

    public function report()
    {
      
            // html data
            $data["title"] = " Report"; /* for <title></title> inside header.php in this case */
            // load views
            $this->View->render('home/report', $data);
    }

    public function updateTeachingStaff()
    {

        if(isset($_POST['upateTeachingStaffBtn'])){

            $registrationId = ($_GET['registrationId']);
            $surnameOfStaff = ($_POST['surnameOfStaff']);
            $otherNameOfStaff = ($_POST['otherNameOfStaff']);
            $classAssigned = ($_POST['classAssigned']);

            $term = ($_POST['term']);
            $subjectAssigned = ($_POST['subjectAssigned']);
            $academicYear = ($_POST['academicYear']);
            
           

           if(empty($registrationId)){
                $this->msg->error('ID is required.');
            }if(empty($surnameOfStaff)){
                $this->msg->error('Surname of staff is required.');
            }if(empty($otherNameOfStaff)){
                $this->msg->error('Other name is required.');
            }if(empty($classAssigned)){
                $this->msg->error('Class assigned is required.');
            }if(empty($term)){
                $this->msg->error('Term is required.');
            }if(empty($subjectAssigned)){
                $this->msg->error('Subject assigned is required.');
            }if(empty($academicYear)){
                $this->msg->error('Academic year is required.');
            }

           

           
            if ($this->msg->hasErrors()){
                header('location:' . $_SERVER['HTTP_REFERER']);
                die();
            }else{
                
                (new Register())->updateTeachingStaff($registrationId,$surnameOfStaff,$otherNameOfStaff,$classAssigned,$term,$subjectAssigned,$academicYear);
            }


        }

        $data["title"] = "Update Teaching staff "; /* for <title></title> inside header.php in this case */
            // load views
            $this->View->render('home/updateTeachingStaff', $data);
    }

    public function record()
    {
        $data["title"] = "Record"; /* for <title></title> inside header.php in this case */
            // load views
            $this->View->render('home/updateUser', $data);
    }
   





    public function non_teaching_staff()
    {
        if(isset($_POST['regNonTeachingStaffBtn'])){
          
            $registrationDate = ($_POST['registrationDate']);
            $registrationId = $_POST['registrationId'];
            $surnameOfStaff = ($_POST['surnameOfStaff']);
            $otherNameOfStaff = ($_POST['otherNameOfStaff']);
            $dutyAssigned = ($_POST['dutyAssigned']);

            $academicYear = ($_POST['academicYear']);
            
           

            if(empty($registrationDate)){
                $this->msg->error('Date is required.');
            }if(empty($registrationId)){
                $this->msg->error('ID is required.');
            }if(empty($surnameOfStaff)){
                $this->msg->error('Surname of staff is required.');
            }if(empty($otherNameOfStaff)){
                $this->msg->error('Other name is required.');
            }if(empty($dutyAssigned)){
                $this->msg->error('Duty assigned is required.');
            }if(empty($academicYear)){
                $this->msg->error('Academic year is required.');
            }

           
           
            if ($this->msg->hasErrors()){
                header('location:' . $_SERVER['HTTP_REFERER']);
                die();
            }else{
               

                (new Register())->registerNonTeachingStaff($registrationDate,$registrationId,$surnameOfStaff,$otherNameOfStaff,$dutyAssigned,$academicYear);
            }

        }
            // html data
            $data["title"] = "Register non teaching staff"; /* for <title></title> inside header.php in this case */
            // load views
            $this->View->render('home/nonTeachingStaff', $data);
    }


    public function updateNonTeachingStaff()
    {

        if(isset($_POST['upateNonTeachingStaffBtn'])){

            $registrationId = ($_GET['registrationId']);
            $surnameOfStaff = ($_POST['surnameOfStaff']);
            $otherNameOfStaff = ($_POST['otherNameOfStaff']);
            $dutyAssigned = ($_POST['dutyAssigned']);

            $academicYear = ($_POST['academicYear']);
            
           

           if(empty($registrationId)){
                $this->msg->error('ID is required.');
            }if(empty($surnameOfStaff)){
                $this->msg->error('Surname of staff is required.');
            }if(empty($otherNameOfStaff)){
                $this->msg->error('Other name is required.');
            }if(empty($dutyAssigned)){
                $this->msg->error('Duty assigned is required.');
            }if(empty($academicYear)){
                $this->msg->error('Academic year is required.');
            }

           

           
            if ($this->msg->hasErrors()){
                header('location:' . $_SERVER['HTTP_REFERER']);
                die();
            }else{
                
                (new Register())->updateNonTeachingStaff($registrationId,$surnameOfStaff,$otherNameOfStaff,$dutyAssigned,$academicYear);
            }


        }

        $data["title"] = "Update Non Teaching staff "; /* for <title></title> inside header.php in this case */
            // load views
            $this->View->render('home/updateNonTeachingStaff', $data);
    }



}
