<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 5a Q1</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
        }
        th, td {
            padding: 10px;
            border: 1px solid black;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
// Ensure the server is processing PHP correctly
$name = "Muhammad Arrash Bin Mohd Ismawir";
$matricNum = "CI220091";
$course = "FSKTM, Web Technology";
$yearOfStudy = "3rd year";
$address = "1172 Lorong KS 2/4 Kulim Square";
?>

<h2>Student Information</h2>
<table>
    <tr>
        <th>Field</th>
        <th>Details</th>
    </tr>
    <tr>
        <td>Name</td>
        <td><?php echo htmlspecialchars($name); ?></td>
    </tr>
    <tr>
        <td>Matric Number</td>
        <td><?php echo htmlspecialchars($matricNum); ?></td>
    </tr>
    <tr>
        <td>Course</td>
        <td><?php echo htmlspecialchars($course); ?></td>
    </tr>
    <tr>
        <td>Year of Study</td>
        <td><?php echo htmlspecialchars($yearOfStudy); ?></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><?php echo htmlspecialchars($address); ?></td>
    </tr>
</table>

</body>
</html>
