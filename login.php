<?php
include 'connection.php';
?>
<!DOCTYPE html>

<html lang="en">
<head>
    
    <title>Document</title>
    <style>
        *{
          margin: 6px;
          padding: 0;
        }
        body{
            background-color: rgb(54, 53, 53);
        }
        .main{
            margin-top: 2em;
            margin-left: 10em;
            margin-right: 50em;
            background-color: rgb(238, 209, 209);
            border-radius: 5%;
            background-attachment: fixed;
        }
        input{
            width: 17em;
            height: 2em;
        }
    .btn{
        border-radius: 15%;
        color: white;
        background-color: blue;
        width: 8em;
    }
    </style>
</head>

<body>
    <form method="post" action="database.php" class="main" enctype="multipart/form-data">
        
        <div class="modal-body">					
            <div class="form-group">
                <div class="form-group">

                    <div class="form-group">

                        <div class="form-group">

                            <div class="form-group">
                               
                                <label>Firstname</label>
                                <input type="Firstname" id="Firstname" name="Firstname" class="form-control" required><br><br>
                            </div>
                            <label>Lastname</label>
                            <input type="Lastname" id="Lastname" name="Lastname" class="form-control" required><br><br>
                        </div>
                        <label>Email</label>
                        <input type="email" id="Email" name="Email" class="form-control" required><br><br>
                    </div>
                    <label>Telephone</label>
                    <input type="Telephone" id="telephone" name="Telephone" class="form-control" required><br><br>
                </div>
                <label>Gender</label><br>
                <input type="radio" id="radio" name="Gender"  value="Male">Male <br>
                <input type="radio" id="radio" name="Gender"  value="Female">Female
                <br><br>
            </div>
            <div class="form-group">
                <label>Nationality</label>
                <input type="Nationality" id="Nationality" name="Nationality" class="form-control" required><br><br>
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="Username" id="Username" name="Username" class="form-control" required><br><br>
            </div>
            <div class="form-group">
                <label>Picture</label>
                <input type="file" id="picture" name="picture" class="form-control" required><br><br>
</div>
            <div class="form-group">
                <label>Password</label>
                <input type="Password" id="city" name="Password" class="form-control" required><br><br>
            </div>					
        </div>
        <div class="modal-footer">
            <input type="hidden" value="1" name="type">
            <input type="Submit" class="btn" data-dismiss="modal" value="submit" name="Submit">
      
        </div>
        </form>
        __
      
    
</body>
</html>
