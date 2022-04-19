<?php
require_once "header.php";
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    echo "<meta http-equiv='refresh' content='0;url=index.php'>";
    exit;
}


?>
<div id="content" class="content">
  <section>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. You're logged in, your role is <b><?php echo htmlspecialchars($_SESSION["role"]); ?></b></h1>
    <p>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out</a>
    </p>
  </section>
</div>


<?php
  include_once 'footer.php';
 ?>
