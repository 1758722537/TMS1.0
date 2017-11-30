<?php
/**
 * Created by PhpStorm.
 * User: Liu <icandebug@gmail.com>
 * Date: 2017/11/22
 * Time: 11:01
 */

namespace app\index\model;
use think\Model;

class Record extends Model
{
	protected $autoWriteTimestamp = 'ture';
	public function user()
	{
		return $this->belongsTo('UserInfo', 'uid', 'id');
	}
}