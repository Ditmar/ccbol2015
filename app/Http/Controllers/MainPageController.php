<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
class MainPageController extends BaseController
{
	/*
    Variable Global
    */
    var $baseresponse;

    /*
    Constructor base
    */
    function __construct()
    {
        $this->baseresponse = array("menu"=>"inicio");
    }
	public function index()
	{
		return View("welcome",$this->baseresponse);
	}
}