<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Attendance Details</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to right, #c4e0e5, #4ca1af);
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button {
      padding: 0.3em 1em;
      margin-left: 2px;
    }
    .btn-edit {
      background-color: #ffc107;
      color: #000;
    }
    .btn-delete {
      background-color: #dc3545;
      color: #fff;
    }
  </style>
</head>
<body>
<div class="container mt-5">
  <h3 class="text-center mb-4">Student Attendence details.</h3>
  <table id="attendanceTable" class="table table-bordered table-striped table-hover">
    <thead class="table-dark">
      <tr>
        <th>Date</th>
        <th>Name</th>
        <th>Status</th>
        <th>Remark</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $sql = "SELECT * FROM attendance ORDER BY date DESC";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
          <tr>
                  <td>28-07-2025</td>
                  <td>Kunal Varkute</td>
                  <td>Present</td>
                  <td>101%Present</td>
                  <td>
                    <a href='edit_attendance.php?id={$row['id']}' class='btn btn-sm btn-edit'>Edit</a>
                    <a href='delete_attendance.php?id={$row['id']}' class='btn btn-sm btn-delete' onclick=\"return confirm('Are you sure?')\">Delete</a>
                  </td>
                </tr>"
              <tr>

                  <td>28-07-2025</td>
                  <td>Jayesh Godambe</td>
                  <td>Late</td>
                  <td>Play Bgmi</td>
                  <td>
                    <a href='edit_attendance.php?id={$row['id']}' class='btn btn-sm btn-edit'>Edit</a>
                    <a href='delete_attendance.php?id={$row['id']}' class='btn btn-sm btn-delete' onclick=\"return confirm('Are you sure?')\">Delete</a>
                  </td>
                </tr>"        

                <tr>

                  <td>28-07-2025</td>
                  <td>Bhargav Jagre</td>
                  <td>Present</td>
                  <td>90%Present</td>
                  <td>
                    <a href='edit_attendance.php?id={$row['id']}' class='btn btn-sm btn-edit'>Edit</a>
                    <a href='delete_attendance.php?id={$row['id']}' class='btn btn-sm btn-delete' onclick=\"return confirm('Are you sure?')\">Delete</a>
                  </td>
                </tr>" 

                 <tr>

                  <td>28-07-2025</td>
                  <td>Anamika Yadav</td>
                  <td>Late</td>
                  <td>In Hospital</td>
                  <td>
                    <a href='edit_attendance.php?id={$row['id']}' class='btn btn-sm btn-edit'>Edit</a>
                    <a href='delete_attendance.php?id={$row['id']}' class='btn btn-sm btn-delete' onclick=\"return confirm('Are you sure?')\">Delete</a>
                  </td>
                </tr>"      

                 <tr>

                  <td>28-07-2025</td>
                  <td>Raj Bhere</td>
                  <td>Absent</td>
                  <td>In Jail</td>
                  <td>
                    <a href='edit_attendance.php?id={$row['id']}' class='btn btn-sm btn-edit'>Edit</a>
                    <a href='delete_attendance.php?id={$row['id']}' class='btn btn-sm btn-delete' onclick=\"return confirm('Are you sure?')\">Delete</a>
                  </td>  
        
      
    </tbody>
  </table>
</div>

<!-- JS Files -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script>
  $(document).ready(function () {
    $('#attendanceTable').DataTable();
  });
</script>
</body>
</html>
