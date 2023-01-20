<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="article-list">
    <?php while ($this->next()) : ?>
        <div class="article">
            <a class="title" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
            <div class="meta">
                <div class="time me-20"><?php $this->date(); ?></div>
                <div class="type me-20"><?php $this->category(','); ?></div>
            </div>
            <div class="content markdown-body">
                <?php $this->content('阅读全文'); ?>
            </div>
        </div>
    <?php endwhile ?>
    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>