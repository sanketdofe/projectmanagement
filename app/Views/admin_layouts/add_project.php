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
             <div class="row">
             <div class="col-md-8">
              <?php if(session()->get('username')): ?>
               <h1>Add Project</h1>
               <?php endif; ?>
               </div>
            </div>
                <a href="<?php echo base_url('admin/logout'); ?>" class = "btn btn-dark">Logout</a>
            </div>
        
 
           
           <div class="col-md-12 box" >
               
               
               
                <form action="<?php echo base_url('admin/add_project/'.session()->get('user_id')); ?>" enctype="multipart/form-data" method="post" style="width:50%; margin:30px auto">
                   
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
                      <label for="">Project title</label>
                       <input type="text" name="project_title" class="form-control">
                   </div>
                   
                   <div class="form-group">
                      <label for="">Project description</label>
                       <textarea  name="project_body" rows="10" class="form-control"></textarea>
                   </div>
                   
                   <div class="form-group">
                      <label for="">Project end data</label>
                       <input type="date" name="project_end_date" class="form-control">
                   </div>
                   
                   
                   <div class="form-group d-flex justify-content-center">
                       <input type="submit" name="create_project" value="Create project" class=" btn btn-primary">
                       <a href="<?php echo base_url('admin/index'); ?>" class = "btn btn-primary">Home</a>
                   </div>
                   <div >
                   
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