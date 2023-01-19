<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $this->archiveTitle([
                'category' => _t('分类 %s 下的文章'),
                'search'   => _t('包含关键字 %s 的文章'),
                'tag'      => _t('标签 %s 下的文章'),
                'author'   => _t('%s 发布的文章')
            ], '', ' - ');
            $this->options->title(); ?></title>
    <link rel="stylesheet" href="https://cdn.staticfile.org/github-markdown-css/5.1.0/github-markdown-dark.min.css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    <script>
        window.onload = function() {
            document.body.ondragstart = () => {
                return false
            }
        }
    </script>
    <?php $this->header(); ?>
</head>

<body>
    <div class="nav">
        <a class="title" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
        <div class="link-list">
            <a class="<?php if ($this->is('index')) : ?>active<?php endif; ?>" href="<?php $this->options->siteUrl(); ?>">首页</a>
            <?php \Widget\Contents\Page\Rows::alloc()->to($pages); ?>
            <?php while ($pages->next()) : ?>
                <a class="<?php if ($this->is('page', $pages->slug)) : ?>active<?php endif; ?>" href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
            <?php endwhile; ?>
        </div>
    </div>
    <div class="article-list">
        <?php while ($this->next()) : ?>
            <div class="article" role="button">
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
    </div>
    <footer>
        <div>© 2023 <a href="https://apee.top/">鹏优创</a>.
            All rights reserved.
        </div>
        <div>
            备案号：<a href="https://beian.miit.gov.cn/" class="text-dark" target="_blank">赣ICP备2022000371号-2</a>
        </div>
        <div>
            <a target="_blank" class="text-dark" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=36010802000693">
                <img referrerpolicy="no-referrer" src="https://p.ananas.chaoxing.com/star3/origin/6688ed27e29b4feef62cc2518e2e4de3.png" style="height: 1em;" class="align-middle" alt="公安备案">
                赣公网安备 36010802000693号
            </a>
        </div>
    </footer>
</body>

</html>