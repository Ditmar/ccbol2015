<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
class MainPageController extends BaseController
{
	
	public function index()
	{
		return View("welcome",array("data"=>5));
	}
}