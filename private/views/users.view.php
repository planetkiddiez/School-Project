 <?php  $this->view('includes/header')?>
 <?php  $this->view('includes/nav')?>
        <div class="container-fluid">
        <div class="container-fluid p-3 shadow mx-auto" style="max-width: 1000px; background-color:#987 !important;">
         <?php  $this->view('includes/crumbs', ['crumbs'=>$crumbs])?>
            
            <nav class="navbar bg-light">
                  <form class="form-inline">
                    <div class="input-group">
                      <span class="input-group-text" id="basic-addon1"><i class="fa fa-search" ></i></span>
                      <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                  </form>
                
                <a href="<?=ROOT?>/signup"><button class=" btn btn-sm btn-primary"><i class="fa fa-plus"></i>Add New</button></a>
                
                </nav>
            
            
            
        <div class="card-group justify-content-center">
            <?php if($rows): ?>
               <?php foreach($rows as $row): ?>
            
            <?php
            $image = get_image($row->image, $row->gender);
            
            ?>
            <div class="card m-2 shadow-sm" style="max-width: 12rem; min-width:10rem;">
              <div class="card-header">User Profile</div>  
             <img src="<?=$image?>" class="card-img-top" alt="User display photo...">
             <div class="card-body">
               <h5 class="card-title"><?=ucfirst($row->firstname)?> <?=ucfirst($row->lastname)?> </h5>
               <p class="card-text"><?=ucfirst(str_replace("_", " ", $row->rank))?></p>
               <a href="<?=ROOT?>/profile/<?=$row->user_id?>" class="btn btn-primary">Profile</a>
             </div>
           </div>
               <?php  endforeach; ?>
            <?php  else:; ?>
            <h4>No staff data available at the momment!!</h4>
            <?php  endif; ?>
        </div>
            
       </div>

<?php  $this->view('includes/footer')?>