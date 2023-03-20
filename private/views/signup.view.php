 <?php  $this->view('includes/header')?>

        <div class="container-fluid">
            <form action="" method="post">
            <div class="p-4 mx-auto shadow rounded" style="background-color:#567; margin-top:100px; width:100%; max-width: 340px;">
                <h2 class="text-center">My School</h2>
                <img src="<?=ROOT?>/assets/logo2.png" class="d-block mx-auto rounded-circle" style="width:100px;">
                <h3>SignUp</h3>
                <?php  if(count($errors) > 0): ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>Errors:</strong> 
                    <?php foreach($errors as $error):?>
                    <?=$error?>
                    <?php endforeach; ?>
                    <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php endif;?>
            <input class="my-2 form-control" value="<?=get_var('firstname')  ?>" type="text" name="firstname" placeholder="First Name" >
            <input class="my-2 form-control" value="<?=get_var('lastname')  ?>" type="text" name="lastname" placeholder="Last Name" >
            <input class="my-2 form-control" value="<?=get_var('email')  ?>" type="email" name="email" placeholder="Email" >
            <select class="my-2 form-control" name="gender">
                <option <?php echo get_select('gender', '')  ?> value="">--Select a Gender---</option>
                <option <?php echo get_select('gender', 'Male')  ?> value="Male">Male</option>
                <option <?php echo get_select('gender', 'Female')  ?> value="Female">Female</option>
                
                </select>  
                <?php if($mode == 'students'):?>
                 <input type="hidden" value="student" name="rank">
                 <?php else:?>
                <select class="my-2 form-control" name="rank">
                <option <?=get_select('rank', '')  ?> value="">--Select a Rank---</option>
                <option <?=get_select('rank', 'student')  ?> value="student">Student</option>
                <option <?=get_select('rank', 'reception')  ?> value="reception">Reception</option>
                <option <?=get_select('rank', 'lecturer')  ?> value="lecturer">Lecturer</option>
                <option <?=get_select('rank', 'admin')  ?> value="admin">Admin</option>
                <?php endif;?>
                    
                <?php if(Auth::getRank() == 'super_admin'): ?>
                <option <?=get_select('rank', 'super_admin')  ?> value="super_admin">Super Admin</option>
                <?php endif;?>
                </select>     
            <input class="my-2 form-control" value="<?=get_var('password')  ?>" type="password" name="password" placeholder="Password" >
            <input class="my-2 form-control" value="<?=get_var('password2')  ?>" type="password" name="password2" placeholder="Retype Password" >
                <br >
                <?php if($mode == 'students'):?>
                <a href="<?=ROOT?>/students">
                     <button type="button" class="btn btn-danger">Cancle</button>
                </a>
                <?php else:?>
                
                <a href="<?=ROOT?>/users">
                     <button type="button" class="btn btn-danger">Cancle</button>
                </a>
                <?php endif;?>
                <button class="btn btn-primary float-end" style="float:right;">SignUp</button>
            </div>
                </form>
       </div>
<?php  $this->view('includes/footer')?>