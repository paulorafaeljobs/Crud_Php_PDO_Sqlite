<?php
require 'Model.php';

class View
{
    public function index()
    {
        $model = new Model();//Instaciando a classe

        $_model = $model->Read();

        $Result = $_model->fetchALL();

        return $Result;
    }

    public function Reads_Update()
    {
        
        $model = new Model();
        $model->id = $this->id;
        $_model = $model->Read_Update();
        $Result = $_model->fetchALL();
        return $Result;
    }
}