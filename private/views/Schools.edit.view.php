 <?php  $this->view('includes/header')?>
 <?php  $this->view('includes/nav')?>
        <div class="container-fluid">
        <div class="container-fluid p-3 shadow mx-auto" style="max-width: 1000px; background-color:#987 !important;">
         <?php  $this->view('includes/crumbs', ['crumbs'=>$crumbs])?>
            
            <?php if($row):?>
        <div class="card-group justify-content-center">
            
            <form action="" method="post">
                <h3>Edit School</h3>
                
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
                
              <input autofocus class="form-control" type="text" value="<?=get_var('school', $row[0]->school)?>" name="school" placeholder="School Name"><br>
              <a href="<?=ROOT?>/schools"><input class="btn btn-danger" type="button" value="Cancel"></a>
                <input class="btn btn-primary float-right" type="submit" value="Update">
                
            </form>
           
            
        </div>
             <?php else: ?>
            <div style="text-align:center;">
           <h4> That school was not found!!</h4> <br>
            <a href="<?=ROOT?>/schools"><input class="btn btn-danger" type="button" value="Cancel"></a>
            <?php endif ?>
             </div>
       </div>

<?php  $this->view('includes/footer')?>