<?php include 'db.php'; ?>
<?php
if(isset($_POST['submit']))
  {
  $from=$_GET['id'];
  $to=$_POST['user'];
  $amount=$_POST['amount'];

  $sql="SELECT * FROM `users` where `id`='$to'";
   $query=mysqli_query($conn,$sql);
   $sql1=mysqli_fetch_array($query);

   $sql="SELECT * FROM `users` where `id`='$from'";
   $query=mysqli_query($conn,$sql);
   $sql2=mysqli_fetch_array($query);
  
   if(($amount)<0)
  {
      echo '<script type="text/JavaScript"> 
           alert("Opps!!Amount cannot be negative");
           </script>';
      
  }

  else if($amount==0)
  {
    echo '<script type="text/JavaScript"> 
         alert("Zero Value cannot be transferred.");
         </script>';    
  }

  else if($amount > $sql2['balance'])
  {
    echo '<script type="text/JavaScript"> 
         alert("Insufficient Blance.");
         </script>';
  }

  else{
      $newbalance=$sql1['balance'] + $amount;
      $sql="UPDATE `users` SET `balance`=$newbalance WHERE id='$to'";
      mysqli_query($conn,$sql);

      $newbalance=$sql2['balance'] - $amount;
      $sql="UPDATE `users` SET `balance`=$newbalance WHERE id='$from'";
      mysqli_query($conn,$sql);

      $sender=$sql2['name'];
      $receiver=$sql1['name'];

      $sql = "INSERT INTO `transaction` (`id`, `sender`, `reciever`, `amount`, `timestamp`) VALUES (NULL, '$sender','$receiver','$amount', CURRENT_TIMESTAMP);";
      $query=mysqli_query($conn,$sql);

      if($query){
        echo '<script type="text/JavaScript"> 
         alert("Money sent successfully");
         window.location.href="transaction.history.php";
         </script>';     
            
      }
      else{
        echo '<script type="text/JavaScript"> 
        alert("Something went wrong");
        </script>';  
      }

      $newbalance=0;
      $amount=0; 
 }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GRIP | transaction page</title>
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

select{
    width: 300px;
    height: 40px;
    padding: 10px;
}
}
    </style>
</head>
<body style="padding:0px;margin:0px;">
    <?php include 'db.php'; ?>
    <?php include 'header.php'; ?>
    <div style="text-align:center;padding-top:80px;padding-bottom:50px;">
        <h1 style="font-family: 'Raleway', sans-serif;color: #80808096;font-weight: 600;">This is Transaction Page</h1>
    </div>
    <?php
    $sid=$_GET['id'];    
    $sql = "SELECT * FROM `users` WHERE id='$sid' ";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $balance = $row['balance'];
        $time = $row['timestamp'];
    ?>
    <div class="inner-user" style="overflow-y: auto;padding:10px;">
        <table id="customers">
        <tr>
            <th>S.NO</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>BALANCE (RS.)</th>
            <th>OPERATION</th>
        <tr>
    
        <tr>
            <td><?php echo $id;?></td>
            <td><?php echo $name;?></td>
            <td><?php echo $email;?></td>
            <td><?php echo $balance;?></td>
            <td><?php echo $time;?></td>
        </tr>
        <?php
            } ?>
        </table>
    </div>
     
    <div class="transfer" style="padding:5px;">
        <center>
        <div class="form" style="padding:7px;">
        <form method="post">
            <div style="padding:20px;">
                <h2>Recepient's Name:</h2>
            </div>     
            
            <select style="width: 240px;height: 30px; padding: 5px;" id="user" name="user">
                <option value="" selected disabled>Choose</option>
            <?php
            $sql="SELECT * FROM users WHERE id!='$sid'";
            $result = mysqli_query($conn, $sql);          

                if($result->num_rows>0)
                {
                    while($row=$result->fetch_assoc())
                    {
                ?>
                <option style="width:200px;" value="<?php echo $row["id"];?>" ><?php echo $row["name"];?></option>
                <?php
                    }
                }
            ?>
            </select>
            
            <div style="padding:20px;">
                <h2>Transfer Amount(Rs.):</h2>
            </div>        
        
            <input style="width: 170px;height: 11px; padding: 7px;" type="text" name="amount" required>
        
            <input type="submit" style="padding:7px;background: #4dc955;color: white;border: none;border-radius: 0px;" name="submit" value="Transfer">
        </form>
        </center>
    </div>
    
    </div>
    <?php include 'footer.php';?>
    <script src="script.js"></script>
</body>
</html>