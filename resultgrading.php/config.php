<?php

$grade=" ";

if( isset($_POST['result'])) {
$name =$_POST['name'];
$standard =$_POST['standard'];
$standard =$_POST['standard'];

$ABE417 =$_POST['ABE417'];
$ABE418 =$_POST['ABE418'];
$ABE419 =$_POST['ABE419'];
$ABE412 =$_POST['ABE412'];
$ABE414 =$_POST['ABE414'];

$obtained_marks = $ABE417 + $ABE418 + $ABE419 + $ABE412 + $ABE414;

$percentage = $obtained_marks * 100 / 500;


if( $percentage >=70){
    $grade= "Your grade is A-1";
}

elseif($percentage>=60){
   $grade= "Your grade is B";
}

elseif($percentage>=50){
$grade= "Your grade is C";
  }

elseif($percentage>=40){
  $grade= "Your grade is D";
}

elseif($percentage>=30){
    $grade= "Your grade is E";
      }
elseif($percentage>=0){
    $grade= "Your grade is F";
      }
else{
  $grade= "";
}
}
?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="font/flaticon.css">
    <link rel="stylesheet" type="text/css" href="font/fonts2/flaticon.css">

    <link rel="stylesheet" href="css/style.css">

<title></title>
</head>
<body>
<h1 style="text-align:center;background:#000;color:#fff;">Check Your Result</h1>
    <div class="container" style="margin-top: 20%;">
    <table class="table text-center" border="5">
    <thead class="thead-dark">
    <tr>
    <th>Your Name</th>
    <!--th>Your Course </th>
    <th>Your unit </th-->
    <th>Your Class</th>
    <th>Your Obtained Marks</th>
    <th>Your Percentage</th>
    <th>Your Grade</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td><?php if (isset($_POST['result'])){ echo $name;}else { echo "No Record Yet";
    }  ?></td>

      <?php 
      #if (isset($_POST['result'])){echo $percentage;}else{
      # echo "No Record Yet";
    #} #?>

    <!--td><?php if (isset($_POST['result'])){ echo $course;}else { echo "No Record Yet";
    }  ?></td>
    <td><?php if (isset($_POST['result'])){ echo $unit;}else { echo "No Record Yet";
    }  ?></td-->
    <td><?php if (isset($_POST['result'])){ echo $standard;}else { echo "No Record Yet";
    }  ?></td>
    <td><?php if (isset($_POST['result'])){ echo $obtained_marks;}else { echo "No Record Yet";
    }  ?></td>
    <td><?php if (isset($_POST['result'])){ echo $percentage . "%";}else { echo "No Record Yet";
    } ?></td>
    <td><?php if (isset($_POST['result'])){ echo $grade;}else { echo "No Record Yet";
    }  ?></td>
    </tr>
    </tbody>
    </table>
    </div>
</body>
</html>