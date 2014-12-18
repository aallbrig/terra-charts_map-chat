<?php

class ApplicationController extends \BaseController {

	protected $layout = 'layouts.master';
	// Pages
	public function index() {
		$chatCircles = ChatCircle::all();
		foreach ($chatCircles as $chatCircle) {
			$chatCircle->messages;
		}
		return $this->layout->nest('content', 'application.pages.index', ['data'=>$chatCircles]);
	}
	public function about() {
		return $this->layout->nest('content', 'application.pages.about');
	}
	public function instructions() {
		return $this->layout->nest('content', 'application.pages.instructions');
	}
	// Interactions
	public function postMessage() {
		$chatCircleId = Input::get('chatCircleId');
		$messageInput = Input::get('message');
		$chatCircle = ChatCircle::findOrFail($chatCircleId);
		$message = new Message();
		$message->message = $messageInput;
		$chatCircle->messages()->save($message);
		return $message;
	}
}
