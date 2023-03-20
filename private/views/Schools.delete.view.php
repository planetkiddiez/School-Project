 <?php  $this->view('includes/header')?>
 <?php  $this->view('includes/nav')?>
        <div class="container-fluid">
        <div class="container-fluid p-3 shadow mx-auto" style="max-width: 1000px; background-color:#987 !important;">
         <?php  $this->view('includes/crumbs', ['crumbs'=>$crumbs])?>
            
            <?php if($row):?>
        <div class="card-group justify-content-center">
            
            <form action="" method="post">
                <h3>Are sure you want to delete this?!!</h3>
               
              <input disabled autofocus class="form-control" type="text" value="<?=get_var('school', $row[0]->school)?>" name="school" placeholder="School Name"><br>
              <input type="hidden" name="id">
                <a href="<?=ROOT?>/schools"><input class="btn btn-success" type="button" value="Cancel"></a>
                <input class="btn btn-danger float-right" type="submit" value="Delete">
                
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