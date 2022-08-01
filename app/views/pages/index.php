<?php 
    require_once APPROOT."/views/includes/header.php";
    require_once APPROOT."/views/includes/nav-bar.php";
?>
<!-- <img src="<?php //echo URLROOT ?>/public/img/appreciated.svg" alt="paaaaage"> -->
<div class="container">
    <div class="wlcm-container">
        <h1>
            Create a Blog,<br>
            you're proud of
        </h1>
        <h2>
            Discover the platform that gives you the freedom 
            to create and manage your web presence exactly the way you want.
        </h2>
        <button class="btn-normal">
            <a href="<?php echo URLROOT?>/users/signup">Get started</a>
        </button>
    </div>
</div>
<div class="expl">
    <div class="prgrph">
        <p>The Freedom to Create</p>
        <p>the Websites You Want</p>
    </div>
    <img src="<?php echo URLROOT ?>/public/img/articles.svg" alt="article image">
</div>
<div class="expl1">
    <div class="img-container">
        <img src="<?php echo URLROOT ?>/public/img/jrnal.webp" alt="">
    </div>
    <div class="txt-container">
        <h2>How to Create a Free Blog</h2>
        <h3>Follow these 4 simple steps to create a blog today.</h3>
        <div class="list">
            <ol>
                <li>Sign up for a free Blog builder.</li><span class="ho-line"></span>
                <li>Start writing your first articles.</li><span class="ho-line"></span>
                <li>Publish your articles and go live.</li><span class="ho-line"></span>
                <li>Drive traffic to your site.</li>
            </ol>
        </div>
        <a href="<?php echo URLROOT?>/users/signup">Get started &#8594;</a>
    </div>
</div>


<?php require_once APPROOT."/views/includes/footer.php";?>
