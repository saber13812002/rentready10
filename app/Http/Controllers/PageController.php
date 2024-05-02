<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Page;
use App\Http\Requests\StorePageRequest;
use App\Http\Requests\UpdatePageRequest;
use App\Models\Slider;
use App\Models\Solution;
use App\Repositories\BenefitRepository;
use App\Repositories\FooterRepository;
use App\Repositories\MenuRepository;
use App\Repositories\OptionRepository;
use App\Repositories\SliderRepository;

class PageController extends Controller
{

    /**
     * Display index
     */
    public function index()
    {
        $options = (new OptionRepository())->getEnabled();

//        dd($options['title']);

        $menus = (new MenuRepository())->getEnabled();
        $sliders = (new SliderRepository())->getEnabled();
        $benefits = (new BenefitRepository())->getEnabled();
//        dd($benefits[0]['title']);
        $footers = (new FooterRepository())->getEnabled();
//        dd($menu);
        return view('index', compact(
            'menus',
            'sliders',
            'options',
            'benefits',
            'footers'
        ));
    }


    /**
     * Display solutions page
     */
    public function solutions()
    {
        $menus = (new MenuController)->index();
        $solutions = Solution::all();

        return view('solutions', compact('menus', 'solutions'));
    }


    /**
     * Display resource page
     */
    public function resources()
    {
        $menus = (new MenuController)->index();
        return view('resources', compact('menus'));
    }


    /**
     * Display company page
     */
    public function company()
    {
        $menus = (new MenuController)->index();
        return view('company', compact('menus'));
    }


    /**
     * Display contact page
     */
    public function contact()
    {
        $menus = (new MenuController)->index();
        return view('contact', compact('menus'));
    }


    /**
     * Display contact page
     */
    public function privacy()
    {
        $menus = (new MenuController)->index();
        return view('privacy', compact('menus'));
    }

    /**
     * Display contact page
     */
    public function terms()
    {
        $menus = (new MenuController)->index();
        return view('terms', compact('menus'));
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
    public function store(StorePageRequest $request)
    {
        //
    }


    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePageRequest $request, Page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        //
    }
}
