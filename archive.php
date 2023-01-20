<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="article-list">
    <div class="main-title"><?php $this->archiveTitle([
                                'category' => _t('分类 <b>%s</b> 下的文章'),
                                'search'   => _t('包含关键字 <b>%s</b> 的文章'),
                                'tag'      => _t('标签 <b>%s</b> 下的文章'),
                                'author'   => _t('<b>%s</b> 发布的文章')
                            ], '', ''); ?></div>
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