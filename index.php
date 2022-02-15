

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css links -->
    <link rel="stylesheet" href="./css/styles.css">
    <title>HOME PAGE</title>
</head>
<body onload="myFunction()", style="background-image: url('css/recess_still.jpg'); background-repeat:no repeat;background-size:100% 100%;backdrop-filter:blur(4px);">
    <!-- main container -->
    <div class="main_con">
        <!-- choosing whether your student or teacher -->
        <div class="R1">
            <div class="box box1" onclick="page1()"> 
                <div class="pupil">              
                    <div><img src="css/undraw_exams_g-4-ow.svg" alt="pupil"></div>
                    <div><h1>PUPIL</h1></div>   
                </div>
            </div>
            <div class="box box2" onclick="page2()"> 
                <div class="teacher">
                  <a href="login.php">
                    <div><img src="css/Recess picture.jpg" alt="teacher"></div>
                    <div><h1>TEACHER</h1></div>    
                  </a>
                </div>         
            </div>
        </div>
        <div class="title" id="title1">
            <div class="bg">
                <h1><i>WELCOME TO KINDERCARE</i></h1>
            </div>
            <div class="bg">
                <h1><i>WELCOME TO KINDERCARE</i></h1>
                    
            </div>
        </div>
    </div>
    
    <!-- js links -->
    <script src="./js/main.js"></script>
</body>
</html>