<?php

class ArticleModel
{

    public function selectArticle()
    {
        $list = Dao::getInstance()->db()->select('article', ['id', 'title', 'ctime'], ['LIMIT' => 5]);
        return $list;
    }

    public function getRow($id)
    {
        $list = Dao::getInstance()->db()->get('article', '*', ['id' => $id]);
        return $list;
    }


    public function update($where, $data)
    {
        $list = Dao::getInstance()->db()->update('article', $data, $where);
        return $list;
    }

}
