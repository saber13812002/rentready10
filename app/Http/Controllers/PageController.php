<?php

namespace App\Http\Controllers;

use App\Models\CallToAction;
use App\Models\ContactUs;
use App\Models\Solution;
use App\Repositories\BackgroundRepository;
use App\Repositories\BenefitRepository;
use App\Repositories\FooterRepository;
use App\Repositories\HowWorkRepository;
use App\Repositories\MenuRepository;
use App\Repositories\OptionRepository;
use App\Repositories\OurServiceRepository;
use App\Repositories\QuoteRepository;
use App\Repositories\SliderRepository;
use App\Repositories\SolutionBenefitRepository;
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
        $backgrounds = (new BackgroundRepository())->getEnabled();

//        dd($quotes);
        return view('index', compact(
            'menus',
            'sliders',
            'options',
            'backgrounds',
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
        $backgrounds = (new BackgroundRepository())->getEnabled();
        $our_services = (new OurServiceRepository())->getEnabled();
        $solution_benefits = (new SolutionBenefitRepository())->getEnabled();
        $how_works = (new HowWorkRepository())->getEnabled();
        $call_to_actions = CallToAction::all();
        $footers = (new FooterRepository())->getEnabled();
//        dd($how_works[0]->image);
//        dd($how_works[0]->logo);
//        dd($footers->logo);
//        dd($backgrounds);
//['resources']->logo
        return view('solutions', compact(
            'menus',
            'options',
            'our_services',
            'backgrounds',
            'solution_benefits',
            'call_to_actions',
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
        $backgrounds = (new BackgroundRepository())->getEnabled();
        $footers = (new FooterRepository())->getEnabled();

        return view('resources', compact(
            'menus',
            'options',
            'backgrounds',
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
        $backgrounds = (new BackgroundRepository())->getEnabled();
        $footers = (new FooterRepository())->getEnabled();

        return view('company', compact(
            'menus',
            'backgrounds',
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
        $backgrounds = (new BackgroundRepository())->getEnabled();
        $footers = (new FooterRepository())->getEnabled();

        return view('contact', compact(
            'menus',
            'backgrounds',
            'footers'
        ));
    }


    /**
     * Display contact page
     */
    public function privacy()
    {
        $menus = (new MenuRepository())->getEnabled();

        return view('privacy', compact('menus'));
    }

    /**
     * Display contact page
     */
    public function terms()
    {
        $menus = (new MenuRepository())->getEnabled();
        return view('terms', compact('menus'));
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
