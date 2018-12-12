<nav id="nav" class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="<?php if($page_title !== "Meds"){echo "../";} ?>index.php"> 
    <img id="brand" class="img-fluid" src="<?php if($page_title !== "Meds"){echo "../";} ?>images/sand-castle.png">
    Balilo Seniors Meds 
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

    <span class="navbar-toggler-icon"></span>

  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle <?php if($page_title == "Daddy's Medicine"){ echo "active";} ?>" id="navbarDropdown" role="button" data-toggle="dropdown" href="#"> Daddy </a>
        <div class="dropdown-menu">
          <a class="nav-link dropdown-item <?php if($page_title == "Daddy's Medicine"){ echo "active";} ?>" href="<?php if($page_title !== "Meds"){echo "../";} ?>views/dmed.php"> Medicine Details </a>
          <a class="nav-link dropdown-item" href="<?php if($page_title !== "Meds"){echo "../";} ?>views/dsched.php"> Tabular Schedule </a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" href="#"> Mommy </a>
        <div class="dropdown-menu">
          <a class="nav-link dropdown-item <?php if($page_title == "Mommy's Medicine"){ echo "active";} ?>" href="<?php if($page_title !== "Meds"){echo "../";} ?>views/mmed.php"> Medicine Details </a>
          <a class="nav-link dropdown-item" href="<?php if($page_title !== "Meds"){echo "../";} ?>views/msched.php"> Tabular Schedule </a>
        </div>
      </li>

    </ul>

  </div>

</nav>

