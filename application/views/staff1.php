<style>
  .menubar ul li:hover .submenu{
   display:block;
   position:absolute;
   margin-top:15px;
   margin-left:-15px;
  }
</style>

<!DOCTYPE html>
<html lang="en">

<body onload="onload_hide_fun();">
    <div id="wrapper">
        <!-- start header -->
        <header style="padding-left:120px;">
          
              <div class="body" style="width:67%;height:1300px;background:#E5E8E8;float:left;">
                <p style="text-align:center;font-size:32px;padding-top:30px;color:gray;">Staff List</p>
                <h1 style="border-bottom:1px solid gray"></h1>
                 <table class="table table-bordered">
        <tr>
          
        <!-- <th>User Id</th> -->
           <th>SI</th>
        <th>Department</th>
            
                
        <th>Name</th>
        <th>Degi</th>
         <th>Mobile</th>
       
    </tr>
            <?php 
            
            $n=1;
                 foreach ($querry as  $value) {
                   # code...
                 
            ?> 

       <tr>
        <td><?php
            echo $n++;
         ?></td> 
         <td>
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
             </td>
      
        <td><?php
             echo $value->teacher_name;
         ?></td>
        <td><?php
             echo $value->designation;
         ?></td>
          <td><?php
             echo $value->mobile;
         ?></td>
      
       


         
       

       </tr>


       
 
          <?php }?>
       </table>
         
              </div>

                </header>
   <!-- end header