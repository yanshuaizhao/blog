<?php

class IndexController extends Yaf_Controller_Abstract
{
    public function indexAction()
    {
        // 文章列表
        $articleModel = new ArticleModel();
        $articleList = $articleModel->selectArticle();
        $articleModel->update(['id' => 1], ['view_num[+]' => 1]);
        // 分类
        $categoryModel = new CategoryModel();
        $categoryTop = $categoryModel->getAllByShow(1);
        $categoryAll = $categoryModel->getAll();
        // 标签
        $tagsModel = new TagsModel();
        $tagsList = $tagsModel->getAll();

        $this->getView()->assign("articleList", $articleList);
        $this->getView()->assign("categoryTop", $categoryTop);
        $this->getView()->assign("categoryAll", $categoryAll);
        $this->getView()->assign("tagsList", $tagsList);

        return true;
    }
}
