<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Fees Detail </title>
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
  <h3 class="text-center mb-4">Student Fees Detail</h3>

  <table class="table table-bordered table-hover text-center">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Cource</th>
        <th>Amount Paid</th>
        <th>Payment Date</th>
        <th>Payment Mode</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Jayesh Godambe</td>
        <td>App Devlopment</td>
        <td>30000$</td>
        <td>20-07-2025</td>
        <td>Online</td>
        <td>
          <button class="btn btn-edit btn-sm">Edit</button>
          <button class="btn btn-delete btn-sm">Delete</button>
        </td>
      </tr>
      <tr>
        <td>2</td>
        <td>Kunal Varkute</td>
        <td>Web Devlopment</td>
        <td>40000$</td>
        <td>22-07-2025</td>
        <td>Cash</td>
        <td>
          <button class="btn btn-edit btn-sm">Edit</button>
          <button class="btn btn-delete btn-sm">Delete</button>
        </td>
      </tr>
      <tr>
        <td>3</td>
        <td>Bhargav Jagre</td>
        <td>Java Full Stack</td>
        <td>20000$</td>
        <td>24-07-2025</td>
        <td>Cash</td>
        <td>
          <button class="btn btn-edit btn-sm">Edit</button>
          <button class="btn btn-delete btn-sm">Delete</button>
        </td>
      </tr>
      <tr>
      <td>4</td>
       <td>Anamika Yadav</td>
        <td>Python Programing</td>
        <td>10000$</td>
        <td>25-07-2025</td>
        <td>Online</td>
        <td>
           <button class="btn btn-edit btn-sm">Edit</button>
          <button class="btn btn-delete btn-sm">Delete</button>
        </td>
      </tr>
      <tr>
          <td>5</td>
        <td>Raj Bhere</td>
        <td>Cloud Computing</td>
        <td>1000$</td>
        <td>25-07-2025</td>
        <td>Online</td>
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
