<nav id="nav" class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="<?php if($page_title !== "Sandbox"){echo "../";} ?>index.php"> 
    <img id="brand" class="img-fluid" src="<?php if($page_title !== "Sandbox"){echo "../";} ?>images/sand-castle.png">
    Sambocks 
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

    <span class="navbar-toggler-icon"></span>

  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">

      <li class="nav-item <?php if($page_title == "Notes 1"){ echo "active";} ?>">
        <a class="nav-link" href="<?php if($page_title == "Sandbox"){echo "views/";} ?>notes.php"> Notes </a>
      </li>

      <li class="nav-item <?php if($page_title == "Notes 2"){ echo "active";} ?>">
        <a class="nav-link" href="<?php if($page_title == "Sandbox"){echo "views/";} ?>notes2.php"> Notes 2 </a>
      </li>

    </ul>

  </div>

</nav>