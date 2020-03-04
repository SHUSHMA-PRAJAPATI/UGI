<base href="../">


<div class="sidebar" data-color="purple" data-background-color="white" data-image="assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
      <img src="assets/img/logo_ugi.png" style="width:250px;">
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="Admin/adminDashboard.php">
              <i class="material-icons">dashboard</i>
              <p> Admin Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Admin/Manage College/addCollege.php">
              <i class="material-icons">apartment</i>
              <p>Manage College</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="Admin/Manage Department/addDepartment.php">
              <i class="material-icons">business</i>
              <p>Manage Department</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="Admin/Manage Designation/addDesignation.php">
              <i class="material-icons">supervisor_account</i>
              <p>Manage Designation</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="Admin/Manage Course/addCourse.php">
              <i class="material-icons">event</i>
              <p>Manage Course</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="Admin/Manage Subject/addSubject.php">
              <i class="material-icons">assignment</i>
              <p>Manage Subject</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="Admin/Manage User/addUser.php">
              <i class="material-icons">person</i>
              <p>Manage User</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="Admin/Manage Time Table/addTimeTable.php">
              <i class="material-icons">content_paste</i>
              <p>Manage Time Table</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="Admin/applyLeave.php">
              <i class="material-icons">content_paste</i>
              <p>Apply for Leave</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="Admin/manageLeave.php">
              <i class="material-icons">content_paste</i>
              <p>Manage Leave</p>
            </a>
          </li>
          
          <li class="nav-item active-pro ">
            <a class="nav-link" href="./upgrade.html">
              <i class="material-icons">backup</i>
              <p>Backup</p>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <!-- <script>
// Get the container element
var btnContainer = document.getElementById("nav");

// Get all buttons with class="btn" inside the container
var btns = btnContainer.getElementsByClassName("nav-item");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

     -->