<?php

class ApplicationController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /application
	 *
	 * @return Response
	 */
	public function index()
	{
		return "Application";
	}

	public function about()
	{
		return "about";
	}

	public function instructions()
	{
		return "instructions";
	}

}