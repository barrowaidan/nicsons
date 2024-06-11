<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\CompanyDetails;

class weblayoutt extends Component
{
    public $company_details;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($company_details)
    {
        $this->company_details = CompanyDetails::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.weblayout');
    }
}
