<?php
/**
 * Created by PhpStorm.
 * User: lyon
 * Date: 16-12-23
 * Time: 下午3:38
 */

namespace app\admin\model;


use app\admin\repositories\SqlInterface;
use think\Model;

class Teacher extends Model implements SqlInterface
{
    protected $model;
    public function _init()
    {
        $this->model = new Teacher();
    }
    public function _checkSql($sql)
    {
        // TODO: Implement _checkSql() method.
    }
    public function findOne($where, $field)
    {
        $this->_init();
        if ($field == null) {
            return $this->model->where($where)->find();
        } else {
            return $this->model->where($where)->field($field)->find();
        }
    }
    public function findAll($where, $field)
    {
        // TODO: Implement findAll() method.
    }
    public function updateTable($where, $data)
    {
        // TODO: Implement updateTable() method.
    }
}