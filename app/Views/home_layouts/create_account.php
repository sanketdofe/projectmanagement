<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project Management System</title>
    
    <link rel="stylesheet" href="<?php echo base_url('public/assets/bootstrap/css/bootstrap.min.css'); ?>">
    <script src="<?php echo base_url('public/assets/bootstrap/js/bootstrap.min.js'); ?>" ></script>
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url('public/favicon.ico'); ?>"/>
    
    
    <style>
    
        .box {
            background: #FFF;
            padding: 20px;
            margin: 5px;
        }

        .heading{
            margin:0 0 20px;
        }
        
        .btn-dark{
            position: absolute;
            left: 90%;
            bottom: 30px;
        }

        a{
            margin: 0 20px;
        }
        
        .footer {
            margin: 0 37% 0;
        }
    
    </style>
    
    
</head>
<body>
   
   
   
   
   
   
   
   <div class="container">
       
       <div class="row">
           
           <div class="col-md-12 box" >
               <h1>Create Account</h1>
           </div>
           
           <div class="col-md-12 box" >
               
               <form action="<?php echo base_url('home/create_account'); ?>" enctype="multipart/form-data" method="post" style="width:50%; margin:30px auto">
                   
                   <?php
                   if(isset($errors))
                   {
                       echo $errors->listErrors();
                       
                   }
                   
                   
                   
                   if(isset($message))
                   {
                       echo $message;
                   }
                   
                   
                   ?>
                   
                   <div class="form-group">
                      <label for="">Username</label>
                       <input type="text" name="username" class="form-control">
                   </div>
                   
                   <div class="form-group">
                      <label for="">Password</label>
                       <input type="password" name="user_password" class="form-control">
                   </div>
                   
                   <div class="form-group">
                      <label for="">Firstname</label>
                       <input type="text" name="user_firstname" class="form-control">
                   </div>
                   
                   <div class="form-group">
                      <label for="">Lastname</label>
                       <input type="text" name="user_lastname" class="form-control">
                   </div>
                   
                   <div class="form-group">
                      <label for="">Email</label>
                       <input type="text" name="user_email" class="form-control">
                   </div>
                   
                   
                   <div class="form-group d-flex justify-content-center">
                       <input type="submit" name="create_accout" value="Create Account" class="btn btn-primary">
                       <a href="<?php echo base_url('admin/index'); ?>" class = "btn btn-primary">Home</a>
                   </div>
                   
               </form>
               
           </div>
           
           <div class="col-md-12 box" >
                <p class = "footer">Simple Project Management System</p>
            </div>
           
           
       </div>
       
   </div>
   
   
    
</body>
</html>