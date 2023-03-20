 <?php  $this->view('includes/header')?>
 <?php  $this->view('includes/nav')?>
 
        <div class="container-fluid p-3 shadow mx-auto" style="max-width: 1000px; background-color:#987 !important;">
            <?php  $this->view('includes/crumbs', ['crumbs'=>$crumbs])?>
            
            <?php if($row):?>
            <?php
            $image = get_image($row->image, $row->gender);
            
            ?>
            <div class="row">
                <div class="col-sm-4 col-md-3">
                    <img src="<?=$image?>" class="border border-primary d-block mx-auto rounded-circle" style="width:150px;">
                    <h3 class="text-center"><?=esc($row->firstname)?> <?=esc($row->lastname)?></h3>
                </div>
                <div class="col-sm-8 col-md-9 bg-light p-2">
                    <table class="table table-hover table-striped table-bordered">
                        <tr><th>First Name :</th><td><?=esc($row->firstname)?></td></tr>
                        <tr><th>Last Name :</th><td><?=esc($row->lastname)?></td></tr>
                        <tr><th>Email :</th><td><?=esc($row->email)?></td></tr>
                        <tr><th>Gender :</th><td><?=esc($row->gender)?></td></tr>
                        <tr><th>Rank :</th><td><?=esc(ucwords(str_replace("_", " ",$row->rank)))?></td></tr>
                        <tr><th>Date Created :</th><td><?=get_date($row->date)?></td></tr>
                    
                    </table>
                
                </div>
            
            </div>
            <hr>
            <div class="container-fluid">
               <ul class="nav nav-tabs">
                 <li class="nav-item">
                   <a class="nav-link active" aria-current="page" href="#">Basic Info</a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link" href="#">Classes</a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link" href="#">Tests</a>
                 </li>
                </ul>
                
                <nav class="navbar bg-light">
                  <form class="container-fluid">
                    <div class="input-group">
                      <span class="input-group-text" id="basic-addon1"><i class="fa fa-search" ></i></span>
                      <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                  </form>
                </nav>
            </div>
            
            <?php else:?>
            <enter><h4>That User profile was not found</h4></enter>
            <?php endif;?>
            
       </div>
<?php  $this->view('includes/footer')?>