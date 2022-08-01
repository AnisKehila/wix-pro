<?php $url = getUrl(); $blogsNum = 0;$i = 0;
    foreach($data['blogs'] as $k) {
        $blogsNum++;
    }
?>
<div class="side-bar">
    <div class="profile">
        <img src="<?php echo URLROOT?>/public/img/user-large-solid.svg" alt="usericon">
        <span class="accname"><?php echo $_SESSION['username'] ?> </span>
        <span class="accname">Blogs : <?php echo $blogsNum?> </span>
        <span class="accname">Total articles : <?php echo $data['articlesNum'] ?> </span>
    </div>
    <select class="form-select" name="blog" id="mySelect" onchange="location = this.value;" <?php if($url[1] == 'account' || $url[1] == 'newblog' || !isset( $data['currentBlog']->blog_title)) {echo 'disabled';} ?>>
        <?php foreach($data['blogs'] as $k): ?>
            <?php $select = '';$blog_id = '';
                if(isset($url[2]) && $url[1]=='articles' && $url[2] == $k->blog_id) {
                    $_SESSION['blog_id'] = $k->blog_id;
                }
                if($_SESSION['blog_id'] == $k->blog_id) {
                    $select = 'SELECTED';
                }
            ?>   
        <option value="<?php echo URLROOT ?>/dashboard/articles/<?php echo $k->blog_id?>" <?php echo $select ?>>
            <?php if(isset($k->blog_title )) echo $k->blog_title ;?>
        </option>
        <?php $i++; endforeach ?>
        <option value="<?php echo URLROOT ?>/dashboard/newblog">New blog</option>
    </select>
    <hr>
    <a href="<?php echo URLROOT ?>/dashboard/newarticle"><i class="fa-solid fa-plus"></i>New article</a><hr>
    <a href="<?php echo URLROOT ?>/dashboard/articles/<?php echo $_SESSION['blog_id']?>"><i class="fa-solid fa-book"></i> Articles</a>
    <a href="<?php echo URLROOT ?>/dashboard/theme"><i class="fa-solid fa-brush"></i>Theme</a>
    <a href="<?php echo URLROOT ?>/dashboard/mycomments/<?php echo $_SESSION['blog_id']?>"><i class="fa-regular fa-message"></i> Comments</a>
    <a href="<?php echo URLROOT ?>/dashboard/account"><i class="fa-solid fa-gear"></i> Account</a>
    <a href="<?php echo URLROOT ?>/users/logout" id="logout"><i class="fa-solid fa-arrow-right-from-bracket"></i> Log out</a>
</div>
