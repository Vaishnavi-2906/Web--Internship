<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Admission Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f5f5f5;">
  <div class="container mt-5">
    <h2 class="text-center mb-4">Student Admission Form</h2>
    <form action="admission.php" method="POST" class="border p-4 bg-white rounded shadow-sm">
      <div class="mb-3">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" class="form-control" name="name" required>
      </div>

      <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="number" class="form-control" name="age" required>
      </div>

      <div class="mb-3">
        <label for="gender" class="form-label">Gender</label>
        <select class="form-select" name="gender" required>
          <option value="">Select Gender</option>
          <option>Male</option>
          <option>Female</option>
          <option>Other</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="course" class="form-label">Course</label>
        <input type="text" class="form-control" name="course" required>
      </div>

      <div class="mb-3">
        <label for="contact" class="form-label">Contact Number</label>
        <input type="text" class="form-control" name="contact" required>
      </div>

      <button type="submit" name="submit" class="btn btn-primary w-100">Submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
      $name = $_POST['name'];
      $age = $_POST['age'];
      $gender = $_POST['gender'];
      $course = $_POST['course'];
      $contact = $_POST['contact'];

      $sql = "INSERT INTO admission (name, age, gender, course, contact) VALUES ('$name', '$age', '$gender', '$course', '$contact')";

      if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success mt-4'>Admission submitted successfully!</div>";
      } else {
        echo "<div class='alert alert-danger mt-4'>Error: " . $conn->error . "</div>";
      }
    }
    ?>
  </div>
</body>
</html>
