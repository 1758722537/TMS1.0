<?php
/**
 * 轮播图以及问题
 * Created by PhpStorm.
 * User: liuhui
 * Date: 2017/9/16
 * Time: 21:10
 */

namespace app\admin\controller;
use app\admin\common\Base;
use think\File;
use think\Db;
use think\Request;

class Info extends Base
{
    protected $table = 'carousel';

    /**
     * 问题列表
     * @return view
     */
    public function questionList()
    {
        return $this->fetch('question-list');
    }
    /**
     * 删除问题
     * @return view
     */
    public function questionDel()
    {
        return $this->fetch('question-del');
    }

    /**
     * 分页显示轮播列表
     * @return View
     */
    public function bannerList()
    {
        $this->islogin();           //检查是否登录
        $row = 6;
        $data = $this->pageSelectList('carousel',$row);
        if(isset($data['page'])){
            $list = $data['list'];
            $page = $data['page'];
            $this->assign('page',$page);
        }else{
            $list = Db::table('carousel')->select();
        }
        $num = count($list);
        $this->assign(['num'=>$num,'list'=>$list]);
        //dump($list);
        return $this->fetch('banner-list');
    }

    /**
     * 添加轮播图模板
     * @return mixed
     */
    public function bannerAdd()
    {
        return $this->fetch('banner-add');
    }

    /**
     * 新增轮播图片
     * @return \think\response\Json
     */
    public function addImage()
    {
        //获取上传的图片
        $file = request()->file('image');
        $desc = request()->param('desc');
        $url = request()->param('url');
        //移动到/public/uplaods/images/banner
        $info = $file->validate(['ext'=>'jpg,png,gif'])->move(ROOT_PATH.'public'.DS.'uploads');
        if($info){
            $status = 1;
            $msg = "新增成功！";
            //存入数据库
           $path = "__UPLOAD__/";
           $name = $info->getSaveName();
           $src = $path.$name;
           $data = ['desc'=>$desc,'src'=>$src,'url'=>$url];
           Db::table('carousel')->insert($data);
        }else{
            $status=0;
            $msg = $file->getError();
        }
        if($status==0){
            $this->error($msg);
        }else{
            $this->success($msg);
        }
    }

    /**
     * 是否显示轮播图
     * @param Request $request
     */
    public function changeStatus(Request $request)
    {
        $table = $this->table;
        $this->setStatus($request,$table);
    }

    public function changeVideoStatus(Request $request)
    {
        $table = 'video';
        $this->setStatus($request,$table);
    }

    /**
     * 渲染修改页面
     * @param Request $request
     * @return mixed
     */
    public function bannerEdit(Request $request)
    {
        $id = $request->param('id');
        $list = Db::table('carousel')->where(['id'=>$id])->find();
        $this->assign('list',$list);
        return $this->fetch('banner-edit');
    }

    /**
     * 编辑图片
     * @param Request $request
     */
    public function editImage(Request $request)
    {
        $id = $request->param('id');
        $image = $request->file('image');
        $desc = $request->param('desc');
        $url = $request->param('url');
        $data = ['desc'=>$desc,'url'=>$url];
        $result = Db::table('carousel')->where(['id'=>$id])->update($data);
        if ($result){
            $this->success('成功！');
        }
    }

    /**
     * 删除轮播图
     * @param Request $request
     */
    public function bannerDel(Request $request)
    {
        $id = $request->param('id');
        Db::table('carousel')->where('id',$id)->delete();
        $this->success('删除成功！');
    }


    /**
     * 分页显示视频列表
     * @return View
     */
    public function videoList()
    {
        $this->islogin();           //检查是否登录
        $row = 6;
        $data = $this->pageSelectList('video',$row);
        if(isset($data['page'])){
            $list = $data['list'];
            $page = $data['page'];
            $this->assign('page',$page);
        }else{
            $list = Db::table('video')->select();
        }
        $num = count($list);
        $this->assign(['num'=>$num,'list'=>$list]);
        //dump($list);
        return $this->fetch('video-list');
    }

    public function videoAdd()
    {
        return $this->fetch('video-add');
    }
    /**
     * 新增视频
     * @return \think\response\Json
     */
    public function addVideo()
    {
        //获取上传的视频
        $video_file = request()->file('video');
        $image_file = request()->file('image');
        $title = request()->param('title');
        $desc = request()->param('desc');
        if (empty($video_file)||empty($image_file)||empty($title)||empty($desc)){
            $this->error("表单不完整!");
        }
        //移动到/public/uplaods
        $video_info = $video_file->validate(['ext'=>'jpg,gif,png'])->move(ROOT_PATH.'public'.DS.'uploads');
        $image_info = $image_file->validate(['ext'=>'mp4'])->move(ROOT_PATH.'public'.DS.'uploads');
        if($video_file&&$image_file){
            $status = 1;
            $msg = "新增成功！";
            //存入数据库
            $path = "__UPLOAD__/";
            $video_name = $video_info->getSaveName();
            $image_name = $image_info->getSaveName();
            $video_url = $path.$video_name;
            $image_url = $path.$image_name;
            $data = ['title'=>$title,'desc'=>$desc,'url'=>$video_url,'img_url'=>$image_url];
            Db::table('video')->insert($data);
        }else{
            $status=0;
            $msg = $info->getError();
        }
        if($status==0){
            $this->error($msg);
        }else{
            $this->success($msg);
        }
    }

    /**
     * 删除视频
     * @param Request $request
     */
    public function videoDel(Request $request)
    {
        $id = $request->param('id');
        try {
          Db::table('video')->where('id',$id)->delete();
        } catch (Exception $e) {
          $this->error($e->getError());  
        }
        $this->success('删除成功！');
    }

     public function addVideo1()
    {
        //获取上传的视频
        $video_file = request()->file('video');
        $image_file = request()->file('image');
        $title = request()->param('title');
        $desc = request()->param('desc');
        if (empty($video_file)||empty($image_file)||empty($title)||empty($desc)){
            $this->error("表单不完整!");
        }
        //移动到/public/uplaods/images/banner
        $video_info = $video_file->move(ROOT_PATH.'public'.DS.'uploads');
        $image_info = $image_file->move(ROOT_PATH.'public'.DS.'uploads');
        if($video_info&&$image_info){
            $status = 1;
            $msg = "新增成功！";
            //存入数据库
            $path = "__UPLOAD__/";
            $video_name = $video_info->getSaveName();
            $image_name = $image_info->getSaveName();
            $video_url = $path.$video_name;
            $image_url = $path.$image_name;
            $data = ['title'=>$title,'desc'=>$desc,'url'=>$video_url,'img_url'=>$img_url];
            Db::table('video')->insert($data);
        }else{
            $status=0;
            $msg = $info->getError();
        }
        if($status==0){
            $this->error($msg);
        }else{
            $this->success($msg);
        }
    }
}