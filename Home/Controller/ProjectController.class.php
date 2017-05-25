<?php

namespace Home\Controller;

// use Think\Controller;
use Tools\AdminController;

//新生注册
class ProjectController extends AdminController
{
    public function about()
    {
        $this->display();
    }

    public function contact()
    {
        $student = new \Model\NewstudentModel();
        if (isset($_POST)) {
            if (!$student->create()) {

            } else {
                $rst = $student->add();
                if ($rst) {
                    $this->Mes("报名成功", 'Project/show');
                } else {
                    $this->Mes("报名失败", 'contact');
                }
            }
        } else {
            $this->Mes("信息不能为空", 'contact');
        }

        $this->display();
    }

    public function show()
    {
        // if(session('n_name')==''||null){
        //         $this->Error('请先登录',U('Inform/login'));
        //       }
        $student = new \Model\NewstudentModel();
        $total = $student->count();
        $page = new \Think\Page($total, 2);
        $show = $page->show();
        $list = $student->limit($page->firstRow . ',' . $page->listRows)->select();
        $this->assign('show', $show);
        $this->assign('list', $list);
        $this->display();
    }

    public function project()
    {

        if ($_POST['submit']) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $User = new  \Model\UserModel();
            $re = $User->CheckLogin($username, $password);
        }
        $this->display();
    }

    public function single()
    {
        $this->display();
    }

    public function suanfa()
    {
        $this->display();
    }

    public function xiangce()
    {

        $image = new \Model\ImageModel();
        if ($_GET['im']) {
            $im = $_GET['im'];
            $de = $_GET['de'];
            if ($im == '1') {
                $name = 'TC环境';
            } elseif ($im == '2') {
                $name = '户外活动';
            } elseif ($im == '3') {
                $name = '小聚餐';
            } elseif ($im == '4') {
                $name = '新生培训';
            } elseif ($im == '5') {
                $name = '寒暑假集训';
            } elseif ($im == '6') {
                $name = '每周例会';
            } elseif ($im == '7') {
                $name = 'TC藏书';
            } elseif ($im == '8') {
                $name = '成员风貌';
            }
            $p = "pic$im";
            if (!empty($_POST)) {
                //处理上传的图片附件
                if ($_FILES['file']['error'] < 4) {
                    $cfg = array(
                        'rootPath' => "Public/images/$p/",//保存根路径

                    );
                    $up = new \Think\Upload($cfg);
                    //uploadOne() 方法执行成功后把附件（在服务器上的名字和路径等相关信息给我们返回
                    $z = $up->uploadOne($_FILES['file']);//自动保存到指定文件家中
                    $src_img = $up->rootPath . $z['savepath'] . $z['savename'];
                    $sma_img = $up->rootPath . $z['savepath'] . 'small_' . $z['savename'];
                    //上传好的图片制作成缩略图
                    $sma = new \Think\Image();
                    $sma->open($src_img);
                    $sma->thumb(450, 300, 2);//默认等比例效果  2为自己设定的大小
                    //保存缩略图到服务器去；
                    $sma->save($sma_img);//将缩略图保存道服务器
                    //使用ltrim($src_img,'./');去掉./的方法
                    if (session('username') == '' || null) {
                        $this->Mes('请先登陆哦', project);
                    } else {
                        $_POST['user'] = session('username');
                        $_POST['path'] = $p;
                        $_POST['src_image'] = $src_img;
                        $_POST['small_image'] = $sma_img;
                        // var_dump($_POST);
                        $re = $image->add($_POST);
                        if ($re) {
                            $this->Mes('上传成功', "xiangce.html?im=$im");
                        } else {
                            $this->Mes('上传失败', "xiangce.html?im=$im");
                        }
                    }
                }
            }
            if ($_GET['de']) {
                $id = $_GET['de'];
                if (session('username') == '' || null) {
                    $this->Mes('请先登陆哦', project);
                } else {
                    $re = $image->where("id='$id'")->delete();
                    if ($re) {
                        $this->Mes('删除成功', "xiangce?im=$im");
                    } else {
                        $this->Mes_back('删除失败');
                    }
                }

            }


            //else{
            //
            // }

            //相册列表
            $total = $image->count();
            $listRows = 5;
            $page = new \Think\Page($total, $listRows);
            $sql = "select * from tc_image where path='$p' order by id desc  limit $page->firstRow,5";
            $info = $image->query($sql);
            $info['im'] = $_GET['im'];
            //$info=array('im'=>$im);

            $pagelist = $page->show();
            $this->assign('pagelist', $pagelist);
            $this->assign('info', $info);
            $this->assign('name', $name);
            $this->assign('im', $im);
            $this->display();
        }
    }

}