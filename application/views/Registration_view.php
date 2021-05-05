<!doctype html>
<html>
<head>
     <title>Registration page</title>
	  <meta charset="utf-8">
 	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <meta name="keywords" content="HTML,CSS,JavaScript,Bootstrap,Courses,Jobs,Career,Education,ChefHacks,Recipies,">
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
</head>
<body>
    <div class="py-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7">
            <div class="card shadow">
              <div class="card-header">
                <h5>Register</h5>
              </div>
              <div class="card-body">
               <form action="" method="POST">  
                 <div class="row">
                   <div class="col-md-6">
                     <div class="form-group">
                       <label for="">First Name</label>
                       <input type="text" name="first_name" class="form-control">
                       <small><?php echo form_error('first_name');?></small>
                     </div>
                   </div>
 
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Last Name</label>
                        <input type="text" name="last_name" class="form-control">
                        <small><?php echo form_error('last_name');?></small>
                      </div>
                    </div>
 
                    <div class="col-md-12">
                       <div class="form-group">
                         <label for="">Email ID</label>
                         <input type="text" name="email" class="form-control">
                         <small><?php echo form_error('email')?></small>
                       </div>
                   </div>
 
                   <div class="col-md-6">
                     <div class="form-group">
                       <label for="">Password</label>
                       <input type="password" name="password" class="form-control">
                       <small><?php echo form_error('password')?></small>
                     </div>
                   </div>
 
                   <div class="col-md-6">
                     <div class="form-group">
                       <label for="">Confirm Password</label>
                       <input type="password" name="cpassword" class="form-control">
                       <small><?php echo form_error('cpassword')?></small>
                     </div>
                   </div>
 
                   <div class="col-md-12">
                     <button type="submit" class="btn btn-primary px-5">Register Now</button>
                   </div>
                 </div>
               </form> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 
	</body> 
</html>	
