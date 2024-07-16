<!DOCTYPE html>
        <html>
          <head>
            <h1>Details of the required train:</h1>
            <style>
             h1{
                display: inline-block;
                display:grid;
                margin:auto;
                color: #DCD7C9;
                text-align:center;
                font-size:30px;
                font-family:'Times New Roman', Times, serif;
                background-color: #2C3639;
                border-radius: 10px;
              }
            .input{
                text-align:center;
                font-size:25px;
                font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background-color: #A27B5C;
                border-radius: 10px;
                }
            .display{
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                font-size: 20px;
                color:#E0D8B0;
                background-color: #3F4E4F;
                border-radius: 10px;
                padding-top:10px;
                padding-bottom: 12px;
                padding-left: 8px;
            }
            .tables{
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                border-radius: 10px;
            }
            body{
                background-color:#DCD7C9;
                border-radius: 10px;
            }
            </style>
          </head>
          <body>
    <p class="input">
<?php   $t_no=$_GET['t_no']; ?>
<?php   $date=$_GET['date']; ?>
<?php   echo "<b>Train Number: </b>" .$t_no, "<br>";  ?>
<?php   $y=substr($date,0,4); ?>
<?php   $m=substr($date,5,2); ?>
<?php   $d=substr($date,8,2); ?>
<?php   $new_date=$d."-".$m."-".$y; ?>
<?php   echo "<b>Start Date: </b>".$new_date; ?>
            </p>
    <p class="display">
<?php   $data=file_get_contents("data.json"); ?>
<?php   $json=json_decode($data,true); ?>
<?php   echo "<b>Current Position: </b>".$json['position']; ?>
<?php   echo "<br> <b>Location: </b>" .$json['current_station']['lat'].","; ?>
<?php   echo $json['current_station']['lng'];  ?>
            </p>
    <p class="tables">
<?php   $i=0; ?>
<?php   echo "<table border=2><tr><td>S.No.</td><td>Station Name</td><td>Station Code</td><td>Status</td><td>Day of Journey</td><td>Delay In Arrival by mins</td><td>Scheduled Arrival Time</td><td>Actual Arrival Time</td><td>Scheduled Departure Time</td><td>Actual Departure Time</td><td>Date of Arrival</td><td>Distance Covered</td></tr>"; ?>
<?php   while(isset($json['route'][$i]['station']['name'])){ ?>
<?php      $num=$i+1; ?>
<?php      echo "<tr><td>".$num."</td>"; ?>
<?php      echo "<td>".$json['route'][$i]['station']['name']."</td>"; ?>
<?php      echo "<td>".$json['route'][$i]['station']['code']."</td>";?>
<?php      echo "<td>".$json['route'][$i]['has_arrived']."</td>"; ?>
<?php      echo "<td>".$json['route'][$i]['day']."</td>"; ?>
<?php      echo "<td>".$json['route'][$i]['latemin']."</td>"; ?>
<?php      echo "<td>".$json['route'][$i]['scharr']."</td>"; ?>
<?php      echo "<td>".$json['route'][$i]['actarr']."</td>"; ?>
<?php      echo "<td>".$json['route'][$i]['schdep']."</td>"; ?>
<?php      echo "<td>".$json['route'][$i]['actdep']."</td>"; ?>
<?php      echo "<td>".$json['route'][$i]['actarrdate']."</td>"; ?>
<?php      echo "<td>".$json['route'][$i]['distance']."</td>"; ?>
<?php      $i++;
       }
        echo "</table>"
?>
     </p> 
</html>