<?php

class TagsModel
{
    public function getAll()
    {
        $list = Dao::getInstance()->db()->select('tags', ['id', 'title']);
        return $list;
    }

    public function getRow($id)
    {
        $list = Dao::getInstance()->db()->get('tags', '*', ['id' => $id]);
        return $list;
    }
}
