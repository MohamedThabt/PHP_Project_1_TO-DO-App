<?php
/**********document of code***********
 * in delete button we send id of task with link(DeleteTask.php)
**/
// Start the session at the top of your PHP file
session_start();

// open connection
$connect = mysqli_connect("localhost", "root", "","TO_DO");
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
  //  view data (tasks)
$sql = "SELECT * FROM (tasks) ";// --ORDER BY id DESC
$result= mysqli_query($connect,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TO_DO APP</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="Assets/checklist.png" type="image/x-icon">
    <style>
        .form-container, .table-container {
            padding: 15px;
        }
    </style>
</head>
<body>



    <div class="container-fluid mt-5">
        <div class="row">
            <!-- Form Section -->
            <div class="col-md-6 form-container">
                <h2 class="text-center mb-4">Add Task</h2>
                <form action="Controller/StoreTask.php" method="POST" class="border p-4 rounded-3 shadow-sm needs-validation" novalidate>
                    <?php if (isset($_SESSION['success'])): ?>
                        <div class="alert alert-info text-center" role="alert">
                            <?php echo $_SESSION['success']; ?>
                        </div>
                        <?php unset($_SESSION['success']); // Clear the message after displaying ?>
                    <?php endif; ?>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="taskTitle" placeholder="Enter task title" required name="title">
                        <div class="invalid-feedback">
                            Please write the task.
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">
                        <i class="fas fa-plus"></i> Add Task
                    </button>
                </form>
            </div>

            <!-- Table Section -->
            <div class="col-md-6 table-container">
                <h2 class="text-center mb-4">Task List</h2>
                <table class="table table-light">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col" class="text-center">Task</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <th scope="row"><?php echo $row['id']; ?></th>
                            <td class="text-center"><?php echo $row['title']; ?></td>
                            <td class="text-center">
                                <a href="Controller/Update.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-success btn-sm">Edit</a>
                                <a href="Controller/DeleteTask.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- Footer -->

    <footer class="bg-dark text-white mt-5">
      <div class="container py-4">
        <div class="row">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            <h5>About Us</h5>
            <p>
            I specialize in creating secure and scalable web applications, focusing on robust back-end systems and cutting-edge security practices. My goal is to build innovative solutions while ensuring data protection and system integrity.
            </p>
          </div>
          <div class="col-md-6 text-center text-md-end">
            <h5>Follow Us</h5>
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="https://www.facebook.com/mohamed.thabet.545?mibextid=kFxxJD" class="text-white"
                  ><i class="fab fa-facebook fa-2x"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="https://x.com/Mohamed13546660" class="text-white"
                  ><i class="fab fa-twitter fa-2x"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/m7mad_thabet/" class="text-white"
                  ><i class="fab fa-instagram fa-2x"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.linkedin.com/in/mohamed-thabet-5694462a0?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BJVmhEe2rRsGWlP7HkwKDyg%3D%3D" class="text-white"
                  ><i class="fab fa-linkedin fa-2x"></i
                ></a>
              </li>
            </ul>
          </div>
        </div>
        <hr />
        <div class="row">
          <div class="col-md-12 text-center">
            <p>&copy; 2024 MHAMED THABET. All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="Assets/main.js"></script>
</body>
</html>
