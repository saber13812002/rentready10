<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePageRequest;
use App\Http\Requests\UpdatePageRequest;
use App\Models\ContactUs;
use App\Models\OurService;
use App\Models\Page;
use App\Models\Solution;
use App\Models\SolutionBenefit;
use App\Repositories\BenefitRepository;
use App\Repositories\FooterRepository;
use App\Repositories\HowWorkRepository;
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
//        dd($benefits[0]->image);
//        dd($benefits[0]['title']);
        $footers = (new FooterRepository())->getEnabled();
//        dd($footers->logo);
//        dd($menus);
        $quotes = (new QuoteRepository())->getEnabled();
//        dd($quotes);
        return view('index', compact(
            'menus',
            'sliders',
            'options',
            'benefits',
            'quotes',
            'footers',
        ));
    }


    /**
     * Display solutions page
     */
    public function solutions()
    {
        $options = (new OptionRepository())->getEnabled();
        $menus = (new MenuRepository())->getEnabled();
        $solutions = Solution::all();
        $footers = (new FooterRepository())->getEnabled();
        $how_works = (new HowWorkRepository())->getEnabled();
        $our_services = OurService::all();
        $solution_benefits = SolutionBenefit::all();
//        dd($how_works[0]->image);
//        dd($how_works[0]->logo);
//        dd($footers->logo);

        return view('solutions', compact(
            'menus',
            'options',
            'our_services',
            'solution_benefits',
            'footers',
            'how_works',
            'solutions',
        ));
    }


    /**
     * Display resource page
     */
    public function resources()
    {
        $options = (new OptionRepository())->getEnabled();
        $menus = (new MenuRepository())->getEnabled();
        $footers = (new FooterRepository())->getEnabled();

        return view('resources', compact(
            'menus',
            'options',
            'footers',
        ));
    }


    /**
     * Display company page
     */
    public function company()
    {
        $options = (new OptionRepository())->getEnabled();
        $menus = (new MenuRepository())->getEnabled();
        $footers = (new FooterRepository())->getEnabled();

        return view('company', compact(
            'menus',
            'options',
            'footers'
        ));
    }


    /**
     * Display contact page
     */
    public function contact()
    {
        $menus = (new MenuRepository())->getEnabled();
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
