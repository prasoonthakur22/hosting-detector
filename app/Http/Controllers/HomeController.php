<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Iodev\Whois\Factory;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Creating default configured client
        $whois = Factory::get()->createWhois();

        // Checking availability
        if ($whois->isDomainAvailable("3dmr.space")) {
            print "Bingo! Domain is available! :)";
        }

        // Supports Unicode (converts to punycode)
        // if ($whois->isDomainAvailable("почта.рф")) {
        //     print "Bingo! Domain is available! :)";
        // }

        // Getting raw-text lookup
        $response = $whois->lookupDomain("3dmr.space");
        print $response->text;

        // Getting parsed domain info
        $info = $whois->loadDomainInfo("3dmr.space");
        print_r([
            'Domain created' => date("Y-m-d", $info->creationDate),
            'Domain expires' => date("Y-m-d", $info->expirationDate),
            'Domain owner' => $info->owner,
        ]);


        // return view('home');
    }
}
