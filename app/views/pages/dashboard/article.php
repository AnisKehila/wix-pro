<?php     require_once APPROOT."/views/includes/header.php"; ?>

<div class="dash-container">
    <div class="editarticle">
        <h1>Edit article :</h1>
        <form action="" method="POST">
            <input type="text" name="articleTitle" id="articleTitle" placeholder="Article title" value="<?php echo $data['article']->article_title ?>">
            <textarea name="article" id="article" placeholder="Article body.."><?php echo $data['article']->article ?></textarea>
            <input type="submit" value="Save" >
        </form>
    </div>
</di>
<?php require_once APPROOT."/views/includes/footer.php"; ?>
