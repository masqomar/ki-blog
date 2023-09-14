<?php

namespace Modules\Video\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class VideosController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Videos';

        // module name
        $this->module_name = 'videos';

        // directory path of the module
        $this->module_path = 'video::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\Video\Models\Video";
    }

}
