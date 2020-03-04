<div class="card card-plain">
                <!-- <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0"> College</h4>
                </div> -->
                <div class="card-body ">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="card-header-primary" >
                        <th>  SN   </th>
                        <th>  Name </th>
                        <th>  Designation  </th>
                        <th> Department </th>
                        <th>  Enable/Disable </th>
                      </thead>
                      <tbody>
                      <?php include "../../database.php";
                        $sql = "SELECT * FROM register";
                        $count=1;
                        $result = $con->query($sql);
  
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {?>
                        <tr>
                          <td><?php  echo $count++;?></td>
                          <td><?php  echo $row['name']; ?> </td>
                          <td><?php  echo $row['designation']; ?> </td>
                          <td><?php  echo $row['department']; ?> </td>
                          <td><div class="custom-control custom-switch">
                          
                          <?php
                             if($row["is_status"]==0)
                             {
                                 ?><input type='checkbox' class='custom-control-input' id='customSwitch1'><?php
                             }
                             else
                             {
                                  ?><input type='checkbox' class='custom-control-input' id='customSwitch1' checked><?php
                             }
                             ?>
                             </div>
                             </td>
                        </tr>
                        <?php }}
                        $con->close();?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

