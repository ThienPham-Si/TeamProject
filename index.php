<?php
  include_once 'header.php';
?>
<div id="content" class="content">
  <div id="bg"></div>
    <?php
    if(isset($_SESSION['message'])):
      echo $_SESSION['message'];
 ?>

    <div class="alert alert-<?=$_SESSION['msg_type']?>">
      <?php
        echo $_SESSION['message'];
        unset($_SESSION['message']);
       ?>
    </div>
  <?php endif ?>
</div>




<?php
  include_once 'footer.php';
 ?>
