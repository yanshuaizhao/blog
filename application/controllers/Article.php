<?php

class ArticleController extends Yaf_Controller_Abstract
{

    /**
     * 文章相关
     */
    public function daileAction()
    {
        $id = $this->getRequest()->getQuery('id', 0);
        if (empty($id) || !is_numeric($id)) {
            exit('参数错误!');
        }
        $articleModel = new ArticleModel();
        $this->getView()->assign("article", $articleModel->getRow($id));
        return true;
    }

}

