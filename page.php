<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="article-list">
    <?php while ($this->next()) : ?>
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
    <?php endwhile ?>
</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>