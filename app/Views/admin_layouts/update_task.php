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
               <h1>Update Task</h1>
               <?php endif; ?>
               </div>
            </div>
                <a href="<?php echo base_url('admin/logout'); ?>" class = "btn btn-dark">Logout</a>
            </div>
           
            
           <div class="col-md-12 box" >
               
               
               
                
                   
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
                   
                   <?php if(isset($task)): ?>
                   
                   <form action="<?php echo base_url('admin/update_task/'.$task[0]->task_id); ?>" enctype="multipart/form-data" method="post" style="width:50%; margin:30px auto">
                   
                   <div class="form-group">
                      <label for="">Task title</label>
                       <input type="text" value="<?php echo $task[0]->task_title; ?>" name="task_title" class="form-control">
                   </div>
                   
                   <div class="form-group">
                      <label for="">Task description</label>
                       <textarea  name="task_body"  rows="10" class="form-control"><?php echo $task[0]->task_body; ?></textarea>
                   </div>
                   
                   <div class="form-group">
                      <label for="">Task end data</label>
                       <input type="date" value="<?php echo $task[0]->task_end_date; ?>" name="task_end_date" class="form-control">
                   </div>
                   
                   <div class="form-group">
                      <label for="">Task status</label>
                       <select name="task_status" class="form-control">
                           <option value="<?php echo $task[0]->task_status; ?>"><?php echo $task[0]->task_status; ?></option>
                           <?php
                           if($task[0]->task_status=='complete')
                           {
                                ?>
                                <option value="incomplete">Incomplete</option>
                                <?php  }else{
                               ?>
                               <option value="complete">Complete</option>
                               <?php
                           }    ?>
                       </select>
                   </div>
                   
                   
                   <div class="form-group d-flex justify-content-center">
                       <input type="submit" name="update_task" value="Update task" class="btn btn-primary">
                       <a href="<?php echo base_url('admin/index'); ?>" class = "btn btn-primary">Home</a>
                   </div>
                   
               </form>
               
               <?php endif; ?>
               
               
               
           </div>
           
           
        <div class="col-md-12 box" >
            <p class = "footer">Simple Project Management System</p>
        </div>
           
       </div>
       
   </div>
   
   
    
</body>
</html>