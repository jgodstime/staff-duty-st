<?php

namespace Mini\Model;

use Mini\Core\Model;
use PDO;


class Register extends Model
{

    public function getTeachingStaffInfo($id){
        $query = $this->db -> prepare("SELECT * FROM teaching_tbl WHERE registrationId = ? LIMIT 1");
        $query -> execute(array($id));
        $result = $query->fetch();
        return $result;
    }


    public function registerTeachingStaff($registrationDate,$registrationId,$surnameOfStaff,$otherNameOfStaff,$classAssigned,$term,$subjectAssigned,$academicYear){

      
    $queryInsert = $this->db->prepare("INSERT INTO teaching_tbl (id,registrationDate,registrationId,surnameOfStaff,otherNameOfStaff,classAssigned,term,subjectAssigned,academicYear) VALUES(?,?,?,?,?,?,?,?,?)");
    $queryInsert->execute(array('',$registrationDate,$registrationId,$surnameOfStaff,$otherNameOfStaff,$classAssigned,$term,$subjectAssigned,$academicYear));
    //    die();
    // print_r($this->db->errorInfo());

    if($queryInsert){
        $this->msg->success('Registration successful.', $_SERVER['HTTP_REFERER']);
    }else{
        $this->msg->success('Unable to register at this time, please try again later.', $_SERVER['HTTP_REFERER']);
    }

    }


    public function updateTeachingStaff($registrationId,$surnameOfStaff,$otherNameOfStaff,$classAssigned,$term,$subjectAssigned,$academicYear){
           
        $queryUpdate = $this->db->prepare("UPDATE teaching_tbl set surnameOfStaff=?,otherNameOfStaff=?,classAssigned=?,term=?,subjectAssigned=?,academicYear=? WHERE registrationId = ?");
        $queryUpdate->execute(array($surnameOfStaff,$otherNameOfStaff,$classAssigned,$term,$subjectAssigned,$academicYear,$registrationId));
        
        // print_r($this->db->errorInfo());

        if($queryUpdate){
            $this->msg->success('Successfully updated.', $_SERVER['HTTP_REFERER']);  
        }else{
            $this->msg->error('Unable to update at this time, please try again later.', $_SERVER['HTTP_REFERER']);            

        }
    
        }


    public function teachingStaffRecord(){
        $query = $this->db -> prepare("SELECT * FROM  teaching_tbl ORDER BY id DESC");
        $query->execute();
        if($query->rowCount()>0){
    
     
    ?>
    <h2 class=""> Teaching Staff</h2>
    <div class="table-responsive">
  
        <table class="table table-hover table-striped">
            <thead>
            
                <tr>
                    <th>Date registered </th>
                    <th>Registration ID</th>
                    <th>Surname of staff</th>
                    <th>Other name of staff</th>
                    <th>Class Assigned</th>
                    <th>Term</th>
                    <th>Subject assigned</th>
                    <th>Academic year</th>
                </tr>
            </thead>
            <?php
            
            while($row = $query->fetch(PDO::FETCH_ASSOC)){ 

                ?>
             <tr>
                <td><?php echo $row['registrationDate'];?></td>
                <td> <?php echo $row['registrationId'];?> </td>
                <td><?php echo $row['surnameOfStaff'];?></td>
               
                <td><?php echo $row['otherNameOfStaff'] ;?> </td>
                <td><?php echo $row['classAssigned'] ;?> </td>

                <td><?php echo $row['term'] ;?> </td>
                <td><?php echo $row['subjectAssigned'] ;?> </td>
                <td><?php echo $row['academicYear'] ;?> </td>
                       
            </tr>
    
            <?php
             }    
            ?>
        </table>
    </div>
    <?php
        }else{
            echo '<div>
                <a class="list-group-item">No Record Found.</a>
            </div>';	
        }			
    
    }
   

    public function updateTeachingStaffRecord(){
        $query = $this->db -> prepare("SELECT * FROM  teaching_tbl ORDER BY id DESC");
        $query->execute();
        if($query->rowCount()>0){
    
     
    ?>
    <h2 class=""> Teaching Staff</h2>
    <div class="table-responsive">
  
        <table class="table table-hover table-striped">
            <thead>
          
                <tr>
                    <th>Date registered </th>
                    <th>Registration ID</th>
                    <th>Surname of staff</th>
                    <th>Other name of staff</th>
                    <th>Class Assigned</th>
                    <th>Term</th>
                    <th>Subject assigned</th>
                    <th>Academic year</th>
                    <th>Update</th>
                </tr>
            </thead>
            <?php
            
            while($row = $query->fetch(PDO::FETCH_ASSOC)){ 

                ?>
             <tr>
                <td><?php echo $row['registrationDate'];?></td>
                <td> <?php echo $row['registrationId'];?> </td>
                <td><?php echo $row['surnameOfStaff'];?></td>
               
                <td><?php echo $row['otherNameOfStaff'] ;?> </td>
                <td><?php echo $row['classAssigned'] ;?> </td>

                <td><?php echo $row['term'] ;?> </td>
                <td><?php echo $row['subjectAssigned'] ;?> </td>
                <td><?php echo $row['academicYear'] ;?> </td>
                <td> <a class="btn btn-info" href="<?php URL ?>updateTeachingStaff?registrationId=<?php echo $row['registrationId']?>">Update</a></td>                       
            </tr>
    
            <?php
             }    
            ?>
        </table>
    </div>
    <?php
        }else{
            echo '<div>
                <a class="list-group-item">No Record Found.</a>
            </div>';	
        }			
    
    }


    // _______________________________________nONE TEACHING STAFF ____________________________________________________









    public function getNonTeachingStaffInfo($id){
        $query = $this->db -> prepare("SELECT * FROM non_teaching_tbl WHERE registrationId = ? LIMIT 1");
        $query -> execute(array($id));
        $result = $query->fetch();
        return $result;
    }


    public function registerNonTeachingStaff($registrationDate,$registrationId,$surnameOfStaff,$otherNameOfStaff,$dutyAssigned,$academicYear){

    //   die(443);
    $queryInsert = $this->db->prepare("INSERT INTO non_teaching_tbl (id,registrationDate,registrationId,surnameOfStaff,otherNameOfStaff,dutyAssigned,academicYear) VALUES(?,?,?,?,?,?,?)");
    $queryInsert->execute(array('',$registrationDate,$registrationId,$surnameOfStaff,$otherNameOfStaff,$dutyAssigned,$academicYear));
    //    die();
    // print_r($this->db->errorInfo());

    if($queryInsert){
        $this->msg->success('Registration successful.', $_SERVER['HTTP_REFERER']);
    }else{
        $this->msg->success('Unable to register at this time, please try again later.', $_SERVER['HTTP_REFERER']);
    }

    }


    public function updateNonTeachingStaff($registrationId,$surnameOfStaff,$otherNameOfStaff,$dutyAssigned,$academicYear){
           
        $queryUpdate = $this->db->prepare("UPDATE non_teaching_tbl set surnameOfStaff=?,otherNameOfStaff=?,dutyAssigned=?,academicYear=? WHERE registrationId = ?");
        $queryUpdate->execute(array($surnameOfStaff,$otherNameOfStaff,$dutyAssigned,$academicYear,$registrationId));
        
        // print_r($this->db->errorInfo());

        if($queryUpdate){
            $this->msg->success('Successfully updated.', $_SERVER['HTTP_REFERER']);  
        }else{
            $this->msg->error('Unable to update at this time, please try again later.', $_SERVER['HTTP_REFERER']);            

        }
    
        }


    public function nonTeachingStaffRecord(){
        $query = $this->db -> prepare("SELECT * FROM  non_teaching_tbl ORDER BY id DESC");
        $query->execute();
        if($query->rowCount()>0){
    
     
    ?>
    <h2 class=""> Non Teaching Staff</h2>
    <div class="table-responsive">
  
        <table class="table table-hover table-striped">
            <thead>
          
                <tr>
                    <th>Date registered </th>
                    <th>Registration ID</th>
                    <th>Surname of staff</th>
                    <th>Other name of staff</th>
                    <th>Duty assigned</th>
                    <th>Academic year</th>
                </tr>
            </thead>
            <?php
            
            while($row = $query->fetch(PDO::FETCH_ASSOC)){ 

                ?>
             <tr>
                <td><?php echo $row['registrationDate'];?></td>
                <td> <?php echo $row['registrationId'];?> </td>
                <td><?php echo $row['surnameOfStaff'];?></td>
               
                <td><?php echo $row['otherNameOfStaff'] ;?> </td>
                <td><?php echo $row['dutyAssigned'] ;?> </td>

                <td><?php echo $row['academicYear'] ;?> </td>
                       
            </tr>
    
            <?php
             }    
            ?>
        </table>
    </div>
    <?php
        }else{
            echo '<div>
                <a class="list-group-item">No Record Found.</a>
            </div>';	
        }			
    
    }
   

    public function updateNonTeachingStaffRecord(){
        $query = $this->db -> prepare("SELECT * FROM  non_teaching_tbl ORDER BY id DESC");
        $query->execute();
        if($query->rowCount()>0){
    
     
    ?>
    <h2 class=""> Teaching Staff</h2>
    <div class="table-responsive">
  
        <table class="table table-hover table-striped">
        <thead>
          
          <tr>
              <th>Date registered </th>
              <th>Registration ID</th>
              <th>Surname of staff</th>
              <th>Other name of staff</th>
              <th>Duty assigned</th>
              <th>Academic year</th>
              <th>Update</th>
          </tr>
      </thead>
      <?php
      
      while($row = $query->fetch(PDO::FETCH_ASSOC)){ 

          ?>
        <tr>
            <td><?php echo $row['registrationDate'];?></td>
            <td> <?php echo $row['registrationId'];?> </td>
            <td><?php echo $row['surnameOfStaff'];?></td>
            
            <td><?php echo $row['otherNameOfStaff'] ;?> </td>
            <td><?php echo $row['dutyAssigned'] ;?> </td>

            <td><?php echo $row['academicYear'] ;?> </td>
           
                <td> <a class="btn btn-info" href="<?php URL ?>updateNonTeachingStaff?registrationId=<?php echo $row['registrationId']?>">Update</a></td>                       
            </tr>
    
            <?php
             }    
            ?>
        </table>
    </div>
    <?php
        }else{
            echo '<div>
                <a class="list-group-item">No Record Found.</a>
            </div>';	
        }			
    
    }



   
                
     
   




}
