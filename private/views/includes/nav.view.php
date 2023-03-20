<style>
    nav ul li a{
        width: 110px;
        text-align: center;
        border-left: solid thin #eee;
        border-right: solid thin #fff;
    }
    nav ul li a:hover{
        background-color: grey;
        color: white !important;
    }

</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light p-2">

    <a class="navbar-brand" href="#"> <img src="<?=ROOT?>/assets/logo2.png" class="" style="width:20px;">  <?=Auth::getSchool_name()?> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?=ROOT?>">DASHBOARD</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=ROOT?>/schools">SCHOOLS</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="<?=ROOT?>/users">STAFF</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="<?=ROOT?>/students">STUDENTS</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="<?=ROOT?>/classes">CLASSES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=ROOT?>/tests">TEST</a>
        </li>
          </ul>
          <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
           <?=Auth::getFirstname()?>
          </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
          
            <a class="dropdown-item" href="<?=ROOT?>/profile">Profile</a>
            <a class="dropdown-item" href="<?=ROOT?>">Dashboard</a>
              <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?=ROOT?>/logout">logout</a>
          
                </div>
        </li>
      </ul>
  
  </div>
</nav>