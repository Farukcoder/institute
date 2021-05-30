<!DOCTYPE html>
<html lang="en">

<body onload="onload_hide_fun();">
    <div id="wrapper">
        <!-- start header -->
        <header style="padding-left:120px;">
          
              <div class="body" style="width:67%;height:1300px;background:#E5E8E8;float:left;">
               <h3 style="text-align:center;font-size:32px;padding-top:30px;color:blue;">Refrigration & Air Condition</h3>
                <p style="text-align:center;font-size:32px;padding-top:30px;color:gray;">Student List</p>
                <h1 style="border-bottom:1px solid gray"></h1>
                 <table class="table table-bordered">
        <tr>
          
        <!-- <th>User Id</th> -->
           <th>SI</th>
       
            
                
        <th>Semister Name</th>
          <th>Shift</th>
        <th>Student Name</th>
         <th>Mobile</th>
       
    </tr>
            <?php 
            
            $n=1;
                 foreach ($row as  $value) {
                   # code...
                 
            ?> 

       <tr>
        <td><?php
            echo $n++;
         ?></td> 
        <!--  <td>
              <?php
                if($value->dep_name == 1){
                    echo "Computer";
                  }elseif($value->dep_name == 2){
                    echo "Electronics";
                  }elseif($value->dep_name == 3){
                    echo "Civil";
                  }elseif($value->dep_name == 4){
                    echo "Refrigration & Air Condition";
                  }elseif($value->dep_name == 5){
                    echo "Electrical";
                  }elseif($value->dep_name == 6){
                    echo "RS";
                  }
                ?>
             </td> -->
      
        <td> <?php
                if($value->sem_name == 1){
                    echo "Semister1";
                  }elseif($value->sem_name== 2){
                    echo "Semister2";
                  }elseif($value->sem_name == 3){
                    echo "Semister3";
                  }elseif($value->sem_name == 4){
                    echo "Semister4";
                  }elseif($value->sem_name == 5){
                    echo "Semister5";
                  }elseif($value->sem_name == 6){
                    echo "Semister6";
                  }elseif($value->sem_name == 7){
                    echo "Semister7";
                  }
                ?></td>
                <td>
                	<?php if($value->shift==1){
                		echo "First Shift";
                	}else{
                		echo"Second Shift";
                	}?>
                </td>
        <td><?php
             echo $value->stu_name;
         ?></td>
          <td><?php
             echo $value->mobile;
         ?></td>
      
       


         
       

       </tr>


       
 
          <?php }?>
       </table>
<h1 style="text-align:center;font-size:32px;padding-top:30px;color:gray;">Staff List</h1>
    <h2 style="border-bottom:1px solid gray"></h2>
 <table class="table table-bordered">
        <tr>
          
        <!-- <th>User Id</th> -->
           <th>SI</th>
     
            
                
        <th>Teacher Name</th>
        <th>Designation</th>
         <th>Mobile</th>
       
    </tr>
            <?php 
            
            $n=1;
                 foreach ($all_data as  $data) {
                   # code...
                 
            ?> 

       <tr>
        <td><?php
            echo $n++;
         ?></td> 

      
               
       
          <td><?php
             echo $data->teacher_name;
         ?></td>
          <td><?php
             echo $data->designation;
         ?></td>
         <td>
           <?php echo $data->mobile; ?>
         </td>
      
       


         
       

       </tr>


       
 
          <?php }?>
       </table>




















         
              </div>

                </header>
   <!-- end header