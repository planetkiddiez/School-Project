 <?php  $this->view('includes/header')?>
<?php  
    print_r($errors);
    
    ?>
        <div class="container-fluid">
            <form method="post" action="">
            <div class="p-4 mx-auto shadow rounded" style="background-color:#567; margin-top:100px; width:100%; max-width: 340px;">
                <h2 class="text-center">My School</h2>
                <img src="<?=ROOT?>/assets/logo2.png" class="d-block mx-auto rounded-circle" style="width:100px;">
                <h3>Login</h3>
                
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
                
            <input class="form-control" value="<?=get_var('email')  ?>" type="email" name="email" placeholder="Email" autofocus >
                 <br >
            <input class="form-control" value="<?=get_var('password')  ?>" type="password" name="password" placeholder="Password" >
                <br >
                <button class="btn btn-primary">Login</button>
            </div>
                </form>
       </div>
<?php  $this->view('includes/footer')?>