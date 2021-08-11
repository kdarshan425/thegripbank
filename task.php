<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GRIP | transaction history</title>
    <link rel="stylesheet" type="text/css" href="header.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,200;1,600;1,900&display=swap" rel="stylesheet">
    <style>
      

    </style>
</head>
<body style="padding:0px;margin:0px;">
    <?php include 'header.php'; ?>
    <div style="text-align:center;padding-top:80px;padding-bottom:50px;">
        <h1 style="font-family: 'Raleway', sans-serif;color: #80808096;font-weight: 600;">Task to do</h1>
    </div>    
    <?php include 'db.php'; ?>
    <div class="inner-user" style="overflow-y: auto;">
       <div>
           <center>
           <img src="img/Capture.PNG" style="width:80%;height:auto;" alt="task">
           </center>
        </div>
    </div>
    <?php include 'footer.php';?>
<script src="script.js"></script>
</body>
</html>
