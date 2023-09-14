<?php

namespace Modules\Banner\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BannersController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Banners';

        // module name
        $this->module_name = 'banners';

        // directory path of the module
        $this->module_path = 'banner::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\Banner\Models\Banner";
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Store';

        $validatedData = $request->validate([
            'name' => 'required|max:191|unique:'.$module_model.',name',
            'url' => 'nullable|max:191',
            'status' => 'required|max:191',
            'banner_image' => 'required',
        ]);

        $$module_name_singular = $module_model::create([
            'name' => $request->name,
            'url' => $request->url,
            'status' => $request->status,
            'banner_image' => $request->banner_image,
        ]);

        if ($request->banner_image) {
            $media = $$module_name_singular->addMedia($request->file('banner_image'))->toMediaCollection($module_name);
            $$module_name_singular->banner_image = $media->getUrl();
            $$module_name_singular->save();
        }

        flash(icon()."New '".Str::singular($module_title)."' Added")->success()->important();

        logUserAccess($module_title.' '.$module_action.' | Id: '.$$module_name_singular->id);

        return redirect("admin/$module_name");
    }

}
