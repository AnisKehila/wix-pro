<?php     require_once APPROOT."/views/includes/header.php"; ?>

<div class="dash-container">
    <div class="sidebar">
        <?php     require_once APPROOT."/views/includes/side-bar.php"; ?>
    </div>
    <div class="addarticle">
        <h1>Add new article :</h1>
        <form action="<?php echo URLROOT ?>/dashboard/newarticle" method="POST">
            <input type="text" name="articleTitle" id="articleTitle" placeholder="Article title">
            <textarea name="article" id="article" placeholder="Article body.."></textarea>
            <input type="submit" value="Save">
        </form>
    </div>
</div>
<?php require_once APPROOT."/views/includes/footer.php"; ?>
