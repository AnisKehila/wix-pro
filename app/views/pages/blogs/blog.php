<?php 
    require_once APPROOT."/views/includes/header-theme-01.php";
    require_once APPROOT."/views/includes/nav-bar-theme-01.php";
?>
<div class="big-container">
    <?php foreach($data['articles'] as $post ): ?>
        <div class="posts-container">
            <div class="posthead">
                <div class="title">
                    <h1>
                        <?php echo $post->article_title ?>
                    </h1>
                </div>
            </div>
            <h3>
                Created at <?php echo $post->created_at ?>
            </h3>
            <div class="text-box" data-maxlength="350">
            <p style="word-break: break-all;">
                <?php $articlesum=$post->article;
                $articlesum = filter_var($articlesum, FILTER_SANITIZE_STRING);
                    if (strlen($articlesum) > 350){
                        $articlesum = substr($articlesum, 0, 250) . '...';
                    }
                ?>
                <?php echo $articlesum ?>
            </p>
            </div>
            <a href="<?php echo URLROOT ?>/blogs/article/<?php echo $post->article_id ?>"><button class="btn btn-outline-warning fw-bold">Read more >></button></a>
        </div>
    <?php endforeach ?>
</div>
<?php require_once APPROOT."/views/includes/footer.php";?>
