<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project detail</title>
    
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
        
        .addt{
            position: absolute;
            left: 88%;
        }

        .taskdel{
            position: absolute;
            left: 86%;
        }
        .taskupd{
            position: absolute;
            left: 86%;
            top: 120px;
        }

        a{
                margin: 0 20px;
            }
            
        .footer {
                margin: 0 37% 0;
            }
    
    </style>
    
</head>
<body style="">
   

    <div class="container">
       
       <div class="row">
            
            <div class="col-md-12 box" >
              <div class="row">
              <div class="col-md-8">
               <?php if(session()->get('username')): ?>
                <h1>Task Details</h1>
                <?php endif; ?>
                </div>
             </div>
                 <a href="<?php echo base_url('admin/logout'); ?>" class = "btn btn-dark">Logout</a>
             </div>
           
           
           
           
           
           
           <div class="col-md-12 box" >
               
                <?php if(isset($task)): ?>
                <h2><?php echo $task[0]->task_title; ?> <small><small><?php echo $task[0]->task_status; ?></small></small></h2>
            
                <a class="btn btn-outline-dark taskupd" href="<?php echo base_url('admin/update_task/'.$task[0]->task_id); ?>">Update task</a>
                
                <a class="btn btn-outline-dark taskdel" href="<?php echo base_url('admin/delete_task/'.$task[0]->task_id); ?>">Delete task</a>
                <h5>Start date: <?php echo $task[0]->task_date; ?></h5>
                
                <p><?php echo $task[0]->task_body; ?></p>
                
                
                <h5>End date: <?php echo $task[0]->task_end_date; ?></h5>
                
                
                
                
                <?php endif; ?>
                <div class = "d-flex justify-content-center">
                    <a href="<?php echo base_url('admin/index'); ?>" class = "btn btn-primary">Home</a>
                </div>
           </div>
           
        <div class="col-md-12 box" >
            <p class = "footer">Simple Project Management System</p>
        </div>
           
       </div>
       
   </div>
   
   
   
   
   
   
   
   
   
    
</body>
</html>