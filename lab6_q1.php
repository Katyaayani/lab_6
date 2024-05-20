<!DOCTYPE html>
<html lang="en">
<head>
 
 <style>
   table, th, td {
     border: 1px solid black;
     border-collapse: collapse;
     padding: 10px;
   }
 </style>
</head>
<body>
 <?php 
 $Name = "Katyaayani Selvaraj";
 $Matric_Number = "DI220145";
 $Course = "BIT";
 $YearOfStudy = "Year 3";
 $Address = "No 87, Jalan TSA 6, Taman Sri Angsana, 71700 Mantin, Negeri Sembilan";
 ?>
 <table>
 <tr>
 <td>Name</td>
 <td><?php echo $Name; ?></td> 
 </tr>
 <tr>
 <td>Matric Number</td>
 <td><?php echo $Matric_Number; ?></td> 
 </tr>
 <tr>
 <td>Course</td>
 <td><?php echo $Course; ?></td> 
 </tr>
 <tr>
 <td>Year of Study</td>
 <td><?php echo $YearOfStudy; ?></td> 
 </tr>
 <tr>
 <td>Address</td>
 <td><?php echo $Address; ?></td> 
 </tr>
 </table>
</body>
</html>