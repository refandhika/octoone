<?php

namespace Leverate\Sitemap\Http\Controllers;

use \Backend\Classes\Controller;
use \Response;

class IndexController extends Controller
{
	public function __invoke()
  {		
    return Response::view('leverate.sitemap::index')->header('Content-Type', 'text/xml');
  }
}
