<?php  require_once APPROOT."/views/includes/header.php"; ?>

<div class="big-container">
    <div class="form-container reg-container">
        <div class="img-container">
            <img src="<?php echo URLROOT ?>/public/img/palm-recognition.svg" alt="">
        </div>
        <div class="inputs-container">
            <h1 id="reg-header">Register </h1>
            <p id="reg-span">Please fill the form to create your account</p>
            <form method="POST" action="<?php echo URLROOT ?>/users/signup">
                <div class="Inp reg-inp" id="user">
                    <input type="text" name="username" id="Username" placeholder="Username" value="<?php if(!empty($data['username'])){ echo $data['username']; }?>">
                    <span class="text-danger">
                        <?php echo $data['usernameError'];  ?>
                    </span>
                </div>
                <div class="Inp reg-inp">
                    <img src="<?php echo URLROOT ?>/public/img/frame.svg" alt=""><input type="email" name="email" id="email" placeholder="E-mail" value="<?php if(!empty($data['email'])){ echo $data['email']; }?>">
                    <span class="text-danger">
                        <?php echo $data['emailError'];  ?>
                    </span>
                </div>
                <div class="Inp reg-inp">
                    <img src="<?php echo URLROOT ?>/public/img/psw.svg" alt=""><input type="password" name="password" id="password" placeholder="Password">
                </div>
                <div class="Inp reg-inp">
                    <img src="<?php echo URLROOT ?>/public/img/psw.svg" alt=""><input type="password" name="passwordConfirmation" id="con-pwd" placeholder="Confirm Password">
                    <span class="text-danger">
                        <?php echo $data['passwordError'];  ?>
                    </span>
                </div>
                <button type="submit" class="btn btn-primary sbmt">Sign up</button>
                <span>already have an account? Log in <a href="<?php echo URLROOT ?>/users/login">here </a></span>
            </form>
            </div>
        </div>
</div>


<?php require_once APPROOT."/views/includes/footer.php"; ?>
