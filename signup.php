<?php
  include_once 'header.php';
?>
<div class="content">
  <section class="signup-form">
    <form action="includes/signup.inc.php" class="login">
      <div class="form-outline mb-4">
        <input type="text" class="form-control" name="name" placeholder="Full name..."/>
      </div>

      <div class="form-outline mb-4">
        <input type="email" class="form-control" name="email" placeholder="Email..."/>
      </div>

      <div class="form-outline mb-4">
        <input type="text" class="form-control" name="uid" placeholder="Username..."/>
      </div>

      <div class="form-outline mb-4">
        <input type="password" class="form-control" name="pwd" placeholder="Password..."/>
      </div>

      <div class="form-outline mb-4">
        <input type="password" class="form-control" name="pwdrepeat" placeholder="Repeat password..."/>
      </div>


      <button type="button" class="btn btn-dark btn-block mb-4">Sign up</button>
    </form>

</section>
</div>

<?php
  include_once 'footer.php';
 ?>
