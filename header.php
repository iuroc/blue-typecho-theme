<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php $this->options->description() ?>">
    <title><?php $this->archiveTitle([
                'category' => _t('分类 %s 下的文章'),
                'search'   => _t('包含关键字 %s 的文章'),
                'tag'      => _t('标签 %s 下的文章'),
                'author'   => _t('%s 发布的文章')
            ], '', ' - ');
            $this->options->title(); ?></title>
    <link rel="stylesheet" href="https://cdn.staticfile.org/github-markdown-css/5.1.0/github-markdown-dark.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/oyps/blue-typecho-theme/style.css">
    <style>
        @font-face {
            font-family: "apee";
            src: url(https://cdn.jsdelivr.net/gh/oyps/blue-typecho-theme/TsangerYuYangT_W03_W03.woff);
        }

        * {
            font-family: 'apee';
        }
    </style>
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
                <a class="<?php if ($this->is('page', $pages->slug)) : ?>active<?php endif; ?>" href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a>
            <?php endwhile; ?>
        </div>
    </div>