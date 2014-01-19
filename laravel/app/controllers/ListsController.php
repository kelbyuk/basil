<?php

class ListsController extends BaseController {

	public function getIndex()
	{
		return View::make('cats.index');
		
	}
	
	public function getLost($pcode)
	{
		echo "lost Postcode {$pcode}";
		$lost = Incident::with(array('cat'))->whereResolution(0)->wherePcode($pcode)->get();
		return View::make('cats.index')->with('cat', $lost);

	}
	
	public function getFound($pcode)
	{
		echo "found Postcode {$pcode}";
	}
	
	public function getSafe($pcode)
	{
		echo "safe Postcode {$pcode}";
		$safe = Incident::with(array('cat'))->whereResolution(1)->wherePcode($pcode)->get();
		return View::make('cats.index')->with('cat', $safe);
	}
}
