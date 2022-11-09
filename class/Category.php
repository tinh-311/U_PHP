<?php
class Category extends Db {

    function all() {
        $sql = 'select * from category';
        
        return $this->select($sql);
    }

    function delete($id) {
        $sql = 'delete from category where cat_id=?';
        $arr = [$id];
        return $this->update($sql, $arr);
    }

    function insert($cat_id, $cat_name) {
        $sql = 'insert into category(cat_id, cat_name) values(?, ?)';
        $arr = [$cat_id, $cat_name];
        return $this->update($sql, $arr);
    }
}