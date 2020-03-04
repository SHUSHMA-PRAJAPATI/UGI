<?php include "../../database.php";
    $sql1 = "SELECT department_alias FROM department";
    $sql2 = "SELECT subject_name FROM subject";
        $result1 = $con->query($sql1);?>
        <select name="department" style="width: -webkit-fill-available;margin: 2px;"><?php 
            if ($result1->num_rows > 0) {
                while($row1 = $result1->fetch_assoc()) {?>
                      <option value=""><?php echo $row1['department_alias']; ?></option>
                      <?php
                    }
                }
                ?>
                 </select><br><?php
            $result2 = $con->query($sql2);?>
            <select name="subject" style="width: -webkit-fill-available;margin: 2px;"><?php
                if($result2->num_rows>0){
                    while($row2 = $result2->fetch_assoc()){
                        ?>
                        <option value=""><?php echo $row2['subject_name'];?></option>
            <?php  }
                }   ?>
                </select><br>
                <select name="isLab" style="width: -webkit-fill-available;margin: 2px;">
<option value="theory">Theory</option>
<option value="lab">Lab</option>
</select><?php             
            $con->close();?>