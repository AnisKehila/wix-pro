<?php 
    require_once APPROOT."/views/includes/header.php";
    require_once APPROOT."/views/includes/nav-bar.php";
?>
<div class="container">
    <?php foreach($data['blogs'] as $blog): ?>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"> <?php echo $blog->blog_title ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"> <?php echo $blog->blog_created_at ?></h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="<?php echo URLROOT ?>/blogs/blog/<?php echo $blog->blog_id ?>" class="card-link">View blog</a>
            </div>
        </div>      
    <?php endforeach ?>
</div>

<?php require_once APPROOT."/views/includes/footer.php";?>
