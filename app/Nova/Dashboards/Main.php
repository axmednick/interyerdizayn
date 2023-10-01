<?php

namespace App\Nova\Dashboards;

use App\Nova\Metrics\Arenas;
use App\Nova\Metrics\Cities;
use App\Nova\Metrics\ContactRequests;
use App\Nova\Metrics\Neighborhoods;
use App\Nova\Metrics\Properties;
use App\Nova\Metrics\States;
use Laravel\Nova\Cards\Help;
use Laravel\Nova\Dashboards\Main as Dashboard;

class Main extends Dashboard
{
    /**
     * Get the cards for the dashboard.
     *
     * @return array
     */
    public function cards()
    {
        return [

        ];
    }
}
