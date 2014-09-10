<?php

class HomePageController extends BaseController{

	public function showHome()
	{
		return View::make('home');
	}

}