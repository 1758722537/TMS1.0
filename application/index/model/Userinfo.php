<?php
/**
 * Created by PhpStorm.
 * User: liuhui
 * Date: 2017/10/4
 * Time: 18:41
 */

namespace app\index\model;
use think\Model;

class Userinfo extends Model
{
    protected $autoWriteTimestamp = true;
    public function records()
    {
    	return $this->hasMany('Record','uid','id');
    }
    protected function setPasswordAttr($value)
    {
        $str = md5($value);
        return $str;
    }
}