<?php     require_once APPROOT."/views/includes/header.php"; ?>
<div class="big-container">
  <div class="form-container">
    <div class="img-container">
      <img src="<?php echo URLROOT ?>/public/img/palm-recognition.svg" alt="">
    </div>
    <div class="inputs-container">
      <h1>Welcome to WIXPRO </h1>
      <p>Please sign in to access your account</p>
      <form method="POST" action="<?php echo URLROOT ?>/users/login">
        <div class="Inp">
          <img src="<?php echo URLROOT ?>/public/img/frame.svg" alt=""><input type="email" name="email" id="e-mail" placeholder="E-mail">
        </div>
        <div class="Inp">
          <img src="<?php echo URLROOT ?>/public/img/psw.svg" alt=""><input type="password" name="password" id="password" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary sbmt">Sign in</button>
        <span>Don't have an account? <a href="<?php echo URLROOT ?>/users/signup">Sign up </a>now for free!</span>
        <span class="text-danger">
          <?php echo $data['emailError']; echo '<br>' .$data['passwordError']  ?>
        </span>
      </form>
    </div>
  </div>
</div>


<?php require_once APPROOT."/views/includes/footer.php"; ?>
