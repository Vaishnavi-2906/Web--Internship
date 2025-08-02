<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Exam Detail </title>
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
  <h3 class="text-center mb-4">Student Exam Detail</h3>

  <table class="table table-bordered table-hover text-center">
    <thead>
      <tr>
        <th>Name</th>
        <th>Branch</th>
        <th>Subject</th>
        <th>Exam</th>
        <th>Score</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        
        <td>Kunal Varkute</td>
        <td>AIML</td>
        <td>Java Full Stack</td>
        <td>Polytechnic</td>
        <td>99/100</td>
        <td>
          <button class="btn btn-edit btn-sm">Edit</button>
          <button class="btn btn-delete btn-sm">Delete</button>
        </td>
      </tr>
      <tr>
         <td>Jayesh Godambe</td>
        <td>AIML</td>
        <td>MIC</td>
        <td>Polytechnic</td>
        <td>90/100</td>
        <td>
          <button class="btn btn-edit btn-sm">Edit</button>
          <button class="btn btn-delete btn-sm">Delete</button>
        </td>
      </tr>
      <tr>
         <td>Bhargav Jagre</td>
        <td>AIML</td>
        <td>Java Programing</td>
        <td>Polytechnic</td>
        <td>92/100</td>
        <td>
          <button class="btn btn-edit btn-sm">Edit</button>
          <button class="btn btn-delete btn-sm">Delete</button>
        </td>
      </tr>
      <tr>
        <td>Anamika Yadav</td>
        <td>AIML</td>
        <td>C Programing</td>
        <td>Polytechnic</td>
        <td>80/100</td>
        <td>
           <button class="btn btn-edit btn-sm">Edit</button>
          <button class="btn btn-delete btn-sm">Delete</button>
        </td>
      </tr>
      <tr>
         <td>Raj Bhere</td>
        <td>IT</td>
        <td>DCN</td>
        <td>Polytechnic</td>
        <td>-2/100</td>
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
