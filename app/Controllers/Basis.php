<?php
namespace App\controllers;
class Basis extends BaseController{
    public function index(){
        return view('firstpage');
    }
    public function integrasi(){
        return view('bootstrappage');
    }
}