<?php require_once APPROOT."/views/includes/header.php"; ?>

<body>
    <?php if(isset($data['article']->created_at)): ?>
    <div class="article">
    <h1><?php echo $data['article']->article_title ?></h1>
    <h2>Created at <?php echo $data['article']->created_at  ?></h2>
    <p class="txt">
        <?php 
            echo $data['article']->article ;
        ?>
    </p>
    </div>
    <div class="comments">
        <?php foreach($data['comments'] as $k):?>
            <div class="comment-container">
                <div class="comment-user">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z"/></svg>
                <div class="comment-date">
                    <h3 class="usr-cmntr"><?php echo $k->comment_name  ?></h3>
                    <h4>
                        <?php echo $k->comment_date ?>
                    </h4>
                </div>
            </div>
                <div class="comment">
                    <p>
                    <?php echo $k->comment ?>
                    </p>
                </div>                
            </div>
        <?php endforeach; if(empty($data['comments'])):?>
            <div class="comment">
                <h2>
                    Be the 1st who comment!
                </h2>
            </div>
        <?php endif ?>  
    </div>
    <div class="postcomment">
        <form action="" method="POST">
            <h1>Leave a comment</h1>
            <textarea name="comment" id="comment" class="form-control my-5" placeholder="Leave a comment here.." style="height: 150px" required></textarea>
            <input type="text" name="cmnt-name" class="form-control mb-3" id="cmnt-name" placeholder="Enter your name*" required>
            <input style="outline: none;" type="submit" value="Post comment »" name="submit" id="btn">
        </form>        
    </div>
    <?php endif  ?>
    <?php if(!isset($data['article']->article)): ?>
        <div class="err">
            <h1> ERROR 404 </h1>
            <h3>Article not found </h3>        
            <span><a href="<?php echo URLROOT ?>">return home</a></span>
        </div>
    <?php endif ?>
</body>

<?php     require_once APPROOT."/views/includes/footer.php"; ?>
