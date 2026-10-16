<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('website.index');
    }

    function about_us() {
        return view('website.about_us');
    }
    function faq_page()
    {
        return view('website.faq_page');
    }
    function forbusiness()
    {
        return view('website.forbusiness');
    }
    function tracking()
    {
        return view('website.tracking');
    }
    function termsPolicy()
    {
        return view('website.termsPolicy');
    }


    function contact_us() {
        return view('website.contact_us');
    }

    function blog() {
        return view('website.theme.suruchi.blog');
    }
    function single_blog() {
        return view('website.theme.suruchi.single_blog');
    }
    function shop() {
        return view('website.theme.suruchi.shop');
    }
    function single_shop() {
        return view('website.theme.suruchi.single_shop');
    }
    function single_product() {
        return view('website.theme.suruchi.single_product');
    }
    function shop_cart() {
        return view('website.theme.suruchi.shop_cart');
    }
    function shop_checkout() {
        return view('website.theme.suruchi.shop_checkout');
    }
    function shop_wishlist() {
        return view('website.theme.suruchi.shop_wishlist');
    }
    function shop_compare() {
        return view('website.theme.suruchi.shop_compare');
    }

    function shop_search() {
        return view('website.theme.suruchi.shop_search');
    }
    function shop_404() {
        return view('website.theme.suruchi.shop_404');
    }
    function shop_403() {
        return view('website.theme.suruchi.shop_403');
    }
    function shop_401() {
        return view('website.theme.suruchi.shop_401');
    }
    function shop_500() {
        return view('website.theme.suruchi.shop_500');
    }
    function shop_maintenance() {
        return view('website.theme.suruchi.shop_maintenance');
    }
    function shop_coming_soon() {
        return view('website.theme.suruchi.shop_coming_soon');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
