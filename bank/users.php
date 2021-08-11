<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GRIP | users</title>
    <link rel="stylesheet" type="text/css" href="header.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,200;1,600;1,900&display=swap" rel="stylesheet">
    
    <style>
        #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color:#4dbfc9;
  color: white;
}
#customers button{
    background: #4dc955;
    color: white;
    text-decoration: none;
    border: none;
    border-radius: 0px;
}
}
    </style>
</head>
<body style="padding:0px;margin:0px;max-width:100%;">
<?php include 'header.php'; ?>
    <div class="users " >
        <div style="text-align:center;padding-top:80px;padding-bottom:50px;">
            <h1 style="font-family: 'Raleway', sans-serif;color: #80808096;    font-weight: 600;">This is Users Page</h1>
        </div>
                
        <?php include 'db.php'; ?>
        <div class="inner-user" style="overflow-y: auto;">
        <table id="customers">
            <tr>
                <th>S.NO</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>BALANCE (RS.)</th>
                <th>OPERATION</th>
            <tr>
            <?php
            $sql = "SELECT * FROM `users` ";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
                
                $id = $row['id'];
                $name = $row['name'];
                $email = $row['email'];
                $balance = $row['balance'];
                $time = $row['timestamp'];
            ?>
            <tr>
                <td><?php echo $id;?></td>
                <td><?php echo $name;?></td>
                <td><?php echo $email;?></td>
                <td><?php echo $balance;?></td>
                <td><a href="transfer.php?id=<?php echo $id;?>"><button type="button" class="btn">Transfer Money</button></a></td>
            </tr>
            <?php
                } ?>
        </table>
        </div>
    </div>
    <?php include 'footer.php';?>
<script src="script.js"></script>
</body>
</html>