<?php

namespace App\Http\Controllers\Web;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Setting;
use App\Events\Settings\Updated as SettingsUpdated;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function borehole() {
        return view('services.borehole');
    }

    public function construction() {
        return view('services.construction');
    }

    public function kitchens() {
        return view('services.kitchens');
    }

    public function plumbing() {
        return view('services.plumbing');
    }

    public function shuttle() {
        return view('services.shuttle');
    }

    public function solarElectricals() {
        return view('services.solar');
    }

    public function trucks() {
        return view('services.trucks');
    }

    public function shopper() {
        return view('services.shopper');
    }

    public function hamper() {
        return view('services.hamper');
    }

    public function template() {
        return view('services.template');
    }

    public function swimming() {
        return view('services.swimming');
    }

    public function calculator() {
        return view('services.calculator');
    }
}
