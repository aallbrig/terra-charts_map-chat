<?php

class ApplicationController extends \BaseController {

	protected $layout = 'layouts.master';
	// Pages
	public function index() {
		return "success";
		// return ChatCircle::all();
		// foreach ($chatCircles as $chatCircle) {
		// 	$chatCircle->messages;
		// }
		// return $chatCircles;
		// return $this->layout->nest('content', 'application.pages.index');
	}
	public function about() {
		return $this->layout->nest('content', 'application.pages.about');
	}
	public function instructions() {
		return $this->layout->nest('content', 'application.pages.instructions');
	}
	// Interactions
	public function postMessage() {
		return "post message";
	}
}
