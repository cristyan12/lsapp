<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function index()
	{
		$title = 'Wellcome to Laravel';
		return view('pages.index', compact('title'));
	}

	public function about()
	{
		$title = 'About us';
		return view('pages.about', compact('title'));
	}

	public function services()
	{
		$data = array(
			'title' => 'Services',
			'services' => [
				'Web Design','Programming', 'PHP', 
				'Laravel', 'CSS', 'HTML'
			]);
		// $title = 'Services';
		// $services = ['Web Design', 'Programming', 'PHP', 'Laravel', 'CSS', 'HTML'];
		return view('pages.services')->with($data);
	}
}
