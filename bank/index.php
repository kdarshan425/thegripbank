<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GRIP | BANK</title>
    <link rel="stylesheet" type="text/css" href="header.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,200;1,600;1,900&display=swap" rel="stylesheet">
    <style>
        #home{
    height: 100vh;
    width: 100%;
    background: url(img/bankbg.jpg)  no-repeat;
    background-size: cover;
    transition: all ease-in-out 2s ;
}
@media screen and (max-width: 500px) {
    #home{
        height: 100vh;
    width: 100%;
    background: url(img/bankbg.jpg)  no-repeat;
    background-size: cover;
    transition: all ease-in-out 2s ;
    }
}
.container{
    height: 100%;
    width:100%;
}

.inner{
    position: relative;
    
    
}
.ov{
    background: rgba(255,255,255,0.0);
    height: auto;
    position: absolute;
    top: 200px;
    left: 35%;
    border: 0px white solid;
    border-radius: 20px;
    padding-right:20px;
}
@media(max-width:768px){
    .ov{
    background: rgba(255,255,255,0.0);
    height: auto;
    position: absolute;
    top: 250px;
    left: 18%;
    border: 0px white solid;
    border-radius: 20px;
    padding-right:20px;
}
}

@media(max-width:768px){
    .ov{
    background: rgba(255,255,255,0.0);
    height: auto;
    position: absolute;
    top: 250px;
    margin-left:auto;
    border: 0px white solid;
    border-radius: 20px;
}}
.ov1{
    float: right;
    height: auto;
    width: auto;
    right: 0px;
    padding-top: 30px;
}
.ov h1{font-family: 'Raleway', sans-serif;}



.row{
    display: flex;
    width: 100%;
    height: auto;
    margin-right: 0px;
    padding-right: 0px;
}

.col1{
    width: 35%;
    margin-left:0px;
    margin-right:0px;
    float: left;
    text-align: center;
    padding-left: 10%;
    padding-right: 50px;
    padding-bottom: 20px;
    padding-top: 20px;
}
.col2{
    width: 35%;
    margin-left:0px;
    margin-right:0px;
    float: left;
    text-align: center;
    padding-left: 5%;
    padding-right: auto;
    padding-bottom: 20px;
    padding-top: 20px;
}
@media(max-width:768px){
    .text{
          padding-left:30px;                                         
        }

        .col1{
    width: 80%;
    margin-left: 40px;
    float: left;
    text-align: center;
    padding-left: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-top: 0px;
}
.col2{
    width: 80%;
    margin-left: 40px;
    float: left;
    text-align: center;
    padding-left: 0px;
    padding-right: auto;
    padding-bottom: 0px;
    padding-top: 50px;
    
}

    
}
    </style>
</head>
<body style="padding:0px;margin:0px;">
    <?php include 'header.php'; ?>
    <div id="home" style="padding-top:70px;padding:0,margin:0">
        <div class="inner" > 
            <center>
                <div class="ov"  >
                    <div style="height:250px;width:auto;background:rgba(255,255,255,0.8);border:solid 2px black;">
                        <img style="height:100%;width:100%" src="img/logo_final.png" alt="the grip bank">
                    </div>
                                       
                </div>     
            </center>                               
        </div>                    
    </div>
    <div id="product" style="width:100%;height:auto;">
            <div class="container" style="padding-top: 40px;padding-bottom: 30px;">
                <center><h1 style="font-size: 40px; color: gray;font-family: 'Raleway', sans-serif;padding-top: 60px;"><b>THE GRIP BANK</b></h1></center>
            </div>    
            <div class="row">
                <center>
                <div class="col1">
                    <div class="t"><h1 style="font-family: 'Raleway', sans-serif; font-weight: 600;">USERS</h1></div>
                    <div  style="height: auto;width: 100%;">
                        <div class="card">
                            <div class="in" style=" box-shadow: 5px 5px 5px 5px rgba(0,0,0,0.3);">
                                <center>
                                    <a href="users.php"><img src="img/user.jpg" /></a>
                                </center>                                
                            </div>
                        </div>
                    </div>                    
                    
                </div>
                <div class="col2">
                    <div class="t"><h1 style="font-family: 'Raleway', sans-serif; font-weight: 600;">HISTORY</h1></div>
                    <div  style="height: auto;width: 100%;">
                        <div class="card">
                            <div class="in" style=" box-shadow: 5px 5px 5px 5px rgba(0,0,0,0.3);">
                                <center>
                                    <a href="transaction.history.php"><img src="img/history.jpg" /></a>                                    
                                </center>                                
                            </div>
                        </div>
                    </div>                    
                    
                </div>
                </center>
            </div>            
        </div>
    <?php include 'footer.php';?>
    <script src="script.js"></script>
</body>
</html>