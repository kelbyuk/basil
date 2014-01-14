<?php

class HomeController extends BaseController {

	public function getIndex()
	{
		$lost = Incident::with(array('cat'))->whereResolution(0)->orderBy("incidents.incidentdate", "desc")->take(5)->get();
		$found = "";
		$safe = Incident::with(array('cat'))->whereResolution(1)->orderBy("incidents.incidentdate", "desc")->take(5)->get();
		
		return View::make('home.index')->with('lost', $lost)->with('found', $found)->with('safe', $safe);
	} 
}


