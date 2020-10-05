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
               <h1>Project Details</h1>
               <?php endif; ?>
               </div>
            </div>
                <a href="<?php echo base_url('admin/logout'); ?>" class = "btn btn-dark">Logout</a>
            </div>
           
        
           
           
           
           
           
           <div class="col-md-12 box" >
               
                <?php if(isset($project)): ?>
                <h5>Start date: <?php echo $project[0]->project_date; ?></h5>
                <h2><?php echo $project[0]->project_title; ?> <small><small><?php echo $project[0]->project_status; ?></small></small></h2>
                <a class="btn btn-outline-dark addt" href="<?php echo base_url('admin/add_task/'.$project[0]->project_id); ?>">Add task</a>
                <p><?php echo $project[0]->project_body; ?></p>
                <h5>End date: <?php echo $project[0]->project_end_date; ?></h5>
                
                
                
                <?php if(isset($tasks)): ?>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Task title</th>
                            <th>Project</th>
                            <th>Task body</th>
                            <th>Task start date</th>
                            <th>Task end date</th>
                            <th>Task status</th>
                            <th></th>
                        </tr>
                    </thead>
                    
                    <tbody>
                       <?php foreach($tasks as $task): ?>
                        <tr>
                            <td><?php echo $task->task_title; ?></td>
                            <td><?php echo $task->project_title; ?></td>
                            <td><?php echo substr($task->task_body,0,50); ?></td>
                            <td><?php echo $task->task_date; ?></td>
                            <td><?php echo $task->task_end_date; ?></td>
                            <td><?php echo $task->task_status; ?></td>
                            <td><a class="btn btn-primary" href="<?php echo base_url('admin/task/'.$task->task_id); ?>">View detail</a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                    
                </table>
                <?php endif; ?>
                
                
                
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