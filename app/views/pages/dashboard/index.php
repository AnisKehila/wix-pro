<?php     require_once APPROOT."/views/includes/header.php"; ?>

<div class="dash-container">
    <div class="sidebar">
        <?php     require_once APPROOT."/views/includes/side-bar.php"; ?>
    </div>
    <div class="sidebar-invsble" style="
        width: 20vw;
    ">
    </div>
    <div class="container">
        <h1><?php if(isset( $data['currentBlog']->blog_title)){echo $data['currentBlog']->blog_title;}  ?></h1>
        <hr>
        <?php if(!isset( $_SESSION['blog_id'])): ?>
            <h1 style="text-align: center ;">
                Looks like you have no blogs lets create <a href="<?php echo URLROOT ?>/dashboard/newblog"> one now </a> 
            </h1>
        <?php endif ?>
        <?php require_once APPROOT."/views/pages/dashboard/articles.php" ; ?>
    </div>
</div>
<?php require_once APPROOT."/views/includes/footer.php"; ?>
