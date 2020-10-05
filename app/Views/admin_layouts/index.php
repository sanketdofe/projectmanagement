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
        
        .addp{
            position: absolute;
            left: 86%;
            top: 30px;
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
               <h1>Welcome <?php echo session()->get('username'); ?></h1>
               <?php endif; ?>
               </div>
            </div>
            <a href="<?php echo base_url('admin/logout'); ?>" class = "btn btn-dark">Logout</a>
           </div>
        
           
           
           
           
           
           <div class="col-md-12 box" >
               
               <h1 class = "heading">All Projects</h1>
               <a href="<?php echo base_url('admin/add_project/'.session()->user_id); ?>" class = "btn btn-outline-dark addp">Add project</a>
               
               <?php if(isset($projects)): ?>
               
               <table class="table table-bordered">
                   <thead>
                       <tr>
                           <th>Title</th>
                           <th>Description</th>
                           <th>Start date</th>
                           <th>End date</th>
                           <th>Status</th>
                           <th></th>
                       </tr>
                   </thead>
                   
                   
                   
                   <tbody>
                      
                      <?php foreach($projects as $project): ?>
                      <tr>
                           <td><?php echo $project->project_title; ?></td>
                           <td><?php echo substr($project->project_body,0,50); ?></td>
                           <td><?php echo $project->project_date; ?></td>
                           <td><?php echo $project->project_end_date; ?></td>
                           <td><?php echo $project->project_status; ?></td>
                           <td><a class="btn btn-primary" href="<?php echo base_url('admin/project/'.$project->project_id); ?>">View Detail</a></td>
                       </tr>
                      <?php endforeach; ?>
                      
                       
                   </tbody>

               </table>
               
               <?php endif; ?>

           </div> 
        
        <div class="col-md-12 box" >
            <p class = "footer">Simple Project Management System</p>
        </div>
       </div>
       
   </div>
   
    
    
</body>
</html>