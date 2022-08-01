<?php     require_once APPROOT."/views/includes/header.php"; ?>

<div class="dash-container">
    <div class="sidebar">
        <?php if(isset($_SESSION['blog_id'])) require_once APPROOT."/views/includes/side-bar.php"; ?>
    </div>
    <div class="container">
        <form action="<?php echo URLROOT ?>/dashboard/newblog" method="POST">
            <label for="blogTitle">Create new blog :</label>
            <input type="text" name="blogTitle" id="blogTitle" placeholder="Blog title" class="blogadd">
            <input type="submit" value="Save" class="blogadd" >
        </form>
    </div>
</div>
<?php require_once APPROOT."/views/includes/footer.php"; ?>
