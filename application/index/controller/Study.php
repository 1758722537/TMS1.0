<?php
namespace app\index\controller;
/**
* 学习相关
*/
use think\Controller;
use think\Request;
use app\index\model\UserInfo;
use app\index\model\Record;
use app\index\model\Video;
use think\Session;
use app\index\common\Base;
class Study extends Base
{
	 /**
     * 学习记录
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function haveStudy(Request $request)
    {
        $id = $request->param('id');
        $list = Record::where(['uid'=>$id])->order('id','desc')->paginate(4);
        $this->assign('list',$list);
        return $this->fetch();
    }
    /**
     * 播放教学视频
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function playVideo(Request $request)
    {
        $this->islogin();
        //教学视频id
        //将学习信息写入记录表
        $id = $request->param('id');

        $list = Video::get(['id'=>$id]);
        $data['title'] = $list->title;
        $data['content'] = $list->desc;
        //用户id
        $uid = Session::get('user_sid');
        //关联新增
        $user = UserInfo::find($uid);
        $user->records()->save($data);

        $this->assign('list',$list);
        return $this->fetch('video');
    }
}