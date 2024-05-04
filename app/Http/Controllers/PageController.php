<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePageRequest;
use App\Http\Requests\UpdatePageRequest;
use App\Models\ContactUs;
use App\Models\Page;
use App\Models\Solution;
use App\Repositories\BenefitRepository;
use App\Repositories\FooterRepository;
use App\Repositories\MenuRepository;
use App\Repositories\OptionRepository;
use App\Repositories\QuoteRepository;
use App\Repositories\SliderRepository;
use Illuminate\Http\Request;

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
        $quotes = (new QuoteRepository())->getEnabled();
//        dd($quotes);
        return view('index', compact(
            'menus',
            'sliders',
            'options',
            'benefits',
            'quotes',
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
        $footers = (new FooterRepository())->getEnabled();
        return view('contact', compact(
            'menus',
            'footers'
        ));
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


    public function submitForm(Request $request)
    {
//        dd($request);
        // Validate the form data
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'company' => 'nullable',
            'phone' => 'required',
            'email' => 'required|email',
            'topic' => 'required',
        ]);

        // Save the form data to the database or perform other actions
        // ...

        $item = ContactUs::create($validatedData);


        // Redirect or return a response
        return redirect()->back()->with('success', 'Form submitted successfully.');
    }

}
