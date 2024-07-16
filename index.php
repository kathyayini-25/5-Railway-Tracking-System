<!DOCTYPE html>
<html>
    <head>
        <title>RAILWAY TRACKING SYSTEM</title>
        <style> 
        .content {
            max-width: fit-content;
            margin: auto;
        }
        input[type=text] {
            position:center;
            text-align:center;
            width: 100%;
            margin: 8px 0px;
            display:grid;
            padding: 12px 20px;
            box-sizing: border-box;
            border-radius: 25px;
            border-radius: 25px;
        }
        </style>
        <style>
         input[type=date] {
            width: 100%;
            font-size: 20px;
            display:grid;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border-radius: 35px;
        }
        button[type=submit] {
            display:grid;
            margin: auto;
            text-align: center;
            position: center;    
            width: 75px;  
            height:40px;  
            padding-top: 10px; 
            background: #0066A2;
            color: white;
            border-style: outset;
            background-color: #3E6B89;
            font: bold 15px arial,sans-serif;
            text-shadow: none;
        }
        body{
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            font-size: 20px;
            font-weight: bold;
            margin: auto;
            position:center;
            background-color:#F2D7D9;
            background-image:url('imageedit_2_3308293185.png');
            background-repeat:no-repeat;
            background-size:cover;
            
        }
        .title{
            text-align:center;
            font-size:50px;
            font-family:'Times New Roman', Times, serif;
        }
        img{
            max-width: 30%;
            margin: auto;
            display: grid;
            align-items: center;
        }
        </style>
    </head>
    <body>
        <div class='content'>
        <title> Railway Tracking System </title>
        <br>
        <img src='logo.jpeg' >
        <form method="get" action="buffer.php">
        <div class='title'><label for='title' >Welcome to<br> The Indian Railways!</label></div>
        <label for="fname"><br><br><br><br><br><br><br>Enter the train number:</label><br>
        <input type="text" name="t_no"/><br>
        <label for="fname"> Date: </label><br>
        <input type="date" name="date"/>
        <button type="submit">Track</button> 
    </form>
    </div>
    </body>
</html>