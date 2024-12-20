<?php


class Home extends Controller{
    public function index($a='',$b='',$c=''){

        $model = new Model;
        $arr['id']=1;
        $model->where([$arr]);

        echo "this is the home controller";

        $this->view('home');
    }

}

