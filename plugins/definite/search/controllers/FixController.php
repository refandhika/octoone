<?php
/**
 * @copyright (C) 2018, PT. DEFINITE MAJI ARSANA
 * @author Nurimansyah Rifwan <iman@definite.co.id>
 */
namespace Definite\Search\Controllers;

use Cms\Classes\Page;
use \Response;
use \Request;
use \Redirect;
use \Backend\Classes\Controller;

// Begin Class
class FixController extends Controller
{

    // Not Found Fix
    public function notFound()
    {
        return redirect(Page::url('404'));
    }

}