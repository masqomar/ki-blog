@extends('frontend.layouts.app')

@section('title') {{ __("Articles and News") }} @endsection

@section('content')
<div class="content-wrap page-news-list">
    <div class="subsite-banner">
        <img src="{{asset('assets')}}/img/subsite-banner-5.jpg">
    </div>
    <div class="subsite subsite-with-banner">
        <div class="row">
            <div class="col-md-12">
                <div class="subsite-heading">
                    Have fun with our videos
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="search-form search-content">
                    <div class="search-wrapper ">
                        <input id="search" placeholder="Search...">
                        <button class="ssubmit" type="submit" name="search_submit"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>

        @foreach ($$module_name as $$module_name_singular)
        @php
        $details_url = route("frontend.$module_name.show",[encode_id($$module_name_singular->id)]);
        @endphp
        <div class="row">
            <div class="col-sm-12">
                <div class="embed-responsive embed-responsive-16by9">
                    {!!$$module_name_singular->video_url!!}
                </div>
            </div>
            <div class="col-md-12">
                <div class="subsite-heading">
                    Title : {{$$module_name_singular->name}}
                </div>
            </div>
            <div class="col-md-12">
                <div class="subsite-heading">
                    Level : {{$$module_name_singular->level}}
                </div>
            </div>
            <div class="col-md-12">
                <div class="subsite-heading">
                    Description : {{$$module_name_singular->description ?? '-'}}
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        @endforeach
    </div>
    {{ $$module_name->links('frontend.pagination.custom_pagination') }}
</div>
@endsection