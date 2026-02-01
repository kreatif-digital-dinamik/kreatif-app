<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about()
    {
        return view('pages/about');
    }
    public function project()
    {
        return view('pages/project');
    }
    public function project_carousel()
    {
        return view('pages/project-carousel');
    }
    public function project_details()
    {
        return view('pages/project-details');
    }
    public function team()
    {
        return view('pages/team');
    }
    public function team_carousel()
    {
        return view('pages/team-carousel');
    }
    public function team_details()
    {
        return view('pages/team-details');
    }
    public function reviews()
    {
        return view('pages/reviews');
    }
    public function reviews_carousel()
    {
        return view('pages/reviews-carousel');
    }
    public function packages()
    {
        return view('pages/packages');
    }
    public function packages_carousel()
    {
        return view('pages/packages-carousel');
    }
    public function gallery()
    {
        return view('pages/gallery');
    }
    public function gallery_filter()
    {
        return view('pages/gallery-filter');
    }
    public function gallery_grid()
    {
        return view('pages/gallery-grid');
    }
    public function gallery_carousel()
    {
        return view('pages/gallery-carousel');
    }
    public function faq()
    {
        return view('pages/faq');
    }
    public function login()
    {
        return view('pages/login');
    }
    public function services()
    {
        return view('pages/services');
    }
    public function products()
    {
        return view('pages/products');
    }
    public function products_left()
    {
        return view('pages/products-left');
    }
    public function products_right()
    {
        return view('pages/products-right');
    }
    public function products_carousel()
    {
        return view('pages/products-carousel');
    }
    public function product_details()
    {
        return view('pages/product-details');
    }
    public function cart()
    {
        return view('pages/cart');
    }
    public function checkout()
    {
        return view('pages/checkout');
    }
    public function blog_grid()
    {
        return view('pages/blog-grid');
    }
    public function blog_grid_left()
    {
        return view('pages/blog-grid-left');
    }
    public function blog_grid_right()
    {
        return view('pages/blog-grid-right');
    }
    public function blog_list()
    {
        return view('pages/blog-list');
    }
    public function blog_list_left()
    {
        return view('pages/blog-list-left');
    }
    public function blog_list_right()
    {
        return view('pages/blog-list-right');
    }
    public function blog_carousel()
    {
        return view('pages/blog-carousel');
    }
    public function blog_details()
    {
        return view('pages/blog-details');
    }
    public function blog_details_left()
    {
        return view('pages/blog-details-left');
    }
    public function blog_details_right()
    {
        return view('pages/blog-details-right');
    }
    public function contact()
    {
        return view('pages/contact');
    }

    public function career()
    {
        return view('pages/career');
    }

    public function not_found()
    {
        return view('pages/404');
        return redirect()->route('404');
    }
}
