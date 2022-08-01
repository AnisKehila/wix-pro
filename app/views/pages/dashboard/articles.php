<div class="articles-container">
    <?php if( isset($data['articles'][0]) && $data['articles'][0] == 'empty'): ?>
        <div class="row">
            <img src="<?php echo URLROOT ?>/public/img/articles.svg" alt="" srcset="">
            <div class="note">
                <h2>Looks like your article section is empty.</h2>
                <h3> start writing <a href="<?php echo URLROOT ?>/dashboard/newarticle/<?php echo $_SESSION['blog_id'] ?>">Now</a>.</h3>
            </div>
        </div>
    <?php endif ?>
    <?php foreach($data['articles'] as $article):  ?>
        <?php if($data['articles'][0] != 'empty'): ?>
        <!-- <div  class="article-box mb-4" onclick='window.location = "<?php //echo URLROOT ?>/dashboard/article/<?php //echo $article->article_id ?>"'> -->
        <div  class="article-box mb-4">
            <?php $articlesum=$article->article;
            $articlesum = filter_var($articlesum, FILTER_SANITIZE_STRING);
                if (strlen($articlesum) > 350){
                    $articlesum = substr($articlesum, 0, 250) . '...';
                }
            ?>
            <div class="box-header">
            <h2>
                <?php echo $article->article_title ?>
            </h2>
            <div class="options">
                <a class="btn btn-info" href="<?php echo URLROOT ?>/dashboard/article/<?php echo $article->article_id ?>" role="button"><i class="fa-solid fa-pen"></i> Edit</a>
                <a class="btn btn-success" href="<?php echo URLROOT ?>/dashboard/preview/<?php echo $article->article_id ?>" role="button"><i class="fa-solid fa-eye"></i> View</a>
                <form action="<?php echo URLROOT ?>/dashboard/delete/<?php echo $article->article_id ?>" method="POST">
                    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> Delete</button>
                </form>
            </div>
            </div>

            <h5>
                published : <?php echo $article->created_at ?>
            </h5>
            <div class="text-box">
                <p style="word-break: break-all;">
                    <?php echo $articlesum; ?>
                </p>
            </div>

        </div>
        <?php endif ?>
    <?php endforeach ?>
</div>
