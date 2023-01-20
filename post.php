<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="article-list">
    <div class="article active">
        <a class="title" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
        <div class="meta">
            <div class="time me-20"><?php $this->date(); ?></div>
            <div class="type me-20"><?php $this->category(','); ?></div>
        </div>
        <div class="content markdown-body">
            <?php $this->content(); ?>
        </div>
    </div>
    <div class="keywords p-3 shadow-sm border rounded mb-3 mb-sm-4">
        <?php _e('标签：'); ?><span class="tag"><?php $this->tags('</span><span class="tag">', true, 'none'); ?></span>
        <script>
            var cid = location.href.match(/\/archives\/(\d+)\//)[1]
            document.write('<a href="https://apee.top/admin/write-post.php?cid=' + cid + '" style="margin-left: 15px;">编辑文章</a>')
        </script>
    </div>

</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>