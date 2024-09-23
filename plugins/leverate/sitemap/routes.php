<?php
/**
 * @author Mochdika Leverate
 * Sitemap 2019
 */

Route::group(['namespace' => 'leverate\sitemap\Http\Controllers','middleware'=> 'web'], function() {
	Route::get('sitemap.xml','IndexController');
	Route::get('sitemap/menus.xml','MenuController');
        Route::get('sitemap/recipes.xml','RecipeController');
	Route::get('sitemap/products.xml','ProductController');
	Route::get('sitemap/milkpedias.xml','MilkpediaController');
	Route::get('sitemap/companies.xml','CompanyController');
	Route::get('sitemap/careers.xml','CareerController');
	Route::get('sitemap/static-pages.xml','PageController');
});
