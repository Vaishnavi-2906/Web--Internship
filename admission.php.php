<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Admission </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #cdefff, #a2d4c4);
      color: #000;
      padding: 30px;
    }
    .table-container {
      background: white;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    }
    .table thead {
      background-color: #00264d;
      color: white;
    }
    .btn-edit {
      background-color: #ffc107;
      color: black;
    }
    .btn-delete {
      background-color: #dc3545;
      color: white;
    }
  </style>
</head>
<body>

<div class="table-container">
  <h3 class="text-center mb-4">Student Admission</h3>

  <table class="table table-bordered table-hover text-center">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Date of Admission</th>
        <th>Branch</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Kunal Varkute</td>
        <td>7666897432</td>
        <td>kunal123@gmail.com</td>
        <td>20-07-2025</td>
        <td>AIML</td>
        <td>
          <button class="btn btn-edit btn-sm">Edit</button>
          <button class="btn btn-delete btn-sm">Delete</button>
        </td>
      </tr>
      <tr>
        <td>2</td>
        <td>Jayesh Godambe</td>
        <td>1234567890</td>
        <td>jayesh@gmail.com</td>
        <td>21-07-2025</td>
        <td>AIML</td>
        <td>
          <button class="btn btn-edit btn-sm">Edit</button>
          <button class="btn btn-delete btn-sm">Delete</button>
        </td>
      </tr>
      <tr>
        <td>3</td>
        <td>Bhargav Jagre</td>
        <td>0987654321</td>
        <td>Bhargav@gmail.com</td>
        <td>23-07-2025</td>
        <td>AIML</td>
        <td>
          <button class="btn btn-edit btn-sm">Edit</button>
          <button class="btn btn-delete btn-sm">Delete</button>
        </td>
      </tr>
      <tr>
        <td>4</td>
        <td>Anamika Yadav</td>
        <td>77277727</td>
        <td>Anamika@gmail.com</td>
        <td>27-07-2025</td>
        <td>AIML</td>
        <td>
           <button class="btn btn-edit btn-sm">Edit</button>
          <button class="btn btn-delete btn-sm">Delete</button>
        </td>
      </tr>
      <tr>
          <td>5</td>
        <td>Raj Bhere</td>
        <td>77277727</td>
        <td>rajbhere@gmail.com</td>
        <td>29-07-2025</td>
        <td>IT</td>
        <td>

          <button class="btn btn-edit btn-sm">Edit</button>
          <button class="btn btn-delete btn-sm">Delete</button>
        </td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
