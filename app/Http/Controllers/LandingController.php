<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Inertia\Response;

class LandingController extends Controller
{
    /**
     * Display the landing page.
     *
     * @return \Inertia\Response
     */
    public function index() : Response {
        return Inertia::render('Landing', [

        ]);
    }

    /**
     * Display the education page.
     *
     * @return \Inertia\Response
     */
    public function education() : Response {
        return Inertia::render('Education', [

        ]);
    }

    /**
     * Display the service page.
     *
     * @return \Inertia\Response
     */
    public function service() : Response {
        return Inertia::render('Service', [

        ]);
    }

    /**
     * Display the web design page.
     *
     * @return \Inertia\Response
     */
    public function webDesign() : Response {
        return Inertia::render('WebDesign', [

        ]);
    }

    /**
     * Display the other services page.
     *
     * @return \Inertia\Response
     */
    public function otherServices() : Response {
        return Inertia::render('OtherServices', [

        ]);
    }

    /**
     * Display the contact page.
     *
     * @return \Inertia\Response
     */
    public function contact() : Response {
        return Inertia::render('Contact', [

        ]);
    }
}
