<?php

namespace Admin\Controller;
use Think\Controller;

/**
 *
 */
class CatController extends Controller
{
    /**
    * 增加栏目
    */
    public function cateadd(){

      //打印post值
      var_dump($_POST);


      $this->display();

    }

    /**
    * 栏目列表
    */
    public function catelist(){

      $this->display();
    }

    /**
    * 栏目编辑
    */
    public function cateedit(){

      $this->display();
    }

    /**
    * 栏目删除
    */
    public function catedel(){

    }
}



?>
