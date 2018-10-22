<?php

class CategoryModel
{
    public function getAll()
    {
        $list = Dao::getInstance()->db()->select('category', ['id', 'title']);
        return $list;
    }

    public function getRow($id)
    {
        $list = Dao::getInstance()->db()->get('category', '*', ['id' => $id]);
        return $list;
    }

    public function getAllByShow($type)
    {
        return Dao::getInstance()->db()->select('category', ['id', 'title'], ['category_show' => $type]);
    }

}
