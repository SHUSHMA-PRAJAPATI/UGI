<div class="card card-plain">
                <!-- <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0"> College</h4>
                </div> -->
                <div class="card-body ">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="card-header-primary" >
                      <th>   SN           </th>
                        <th>  Course Name   </th>
                        <th> Course Alias  </th>
                        <th>Course Duration</th>
                        <th>Total Semester</th>
                        <th>University</th>
                        <th> Is Active  </th>
                        <th>  Edit </th>
                        <th>  Delete </th>
                      </thead>
                      <tbody>
                      <?php include "../../database.php";
                        $sql = "SELECT * FROM course";
                        $count=1;
                        $result = $con->query($sql);
  
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {?>
                        <tr>
                          <td><?php  echo $count++;?></td>
                          <td><?php  echo $row['course_name']; ?> </td>
                          <td><?php  echo $row['course_alias']; ?> </td>
                          <td><?php  echo $row['course_duration']; ?> </td>
                          <td><?php  echo $row['total_semester']; ?> </td>
                          <td><?php  echo $row['university']; ?> </td>
                          <?php
                             if($row["is_active"]==0)
                             {
                                 echo "<td>NO</td>";
                             }
                             else
                             {
                                  echo "<td>YES</td>";
                             }
                             ?>
                          <td>
                            <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task" aria-describedby="tooltip496569">
                                <i class="material-icons">edit</i>
                              </button>
                           </td>
                           <td> 
                               <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove" aria-describedby="tooltip767707">
                                <i class="material-icons">close</i>
                               </button>
                            </td>
                        </tr>
                        <?php }}
                        $con->close();?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>







