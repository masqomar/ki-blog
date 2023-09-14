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
                    We encourage you to read our posts and let us know your feedback. It would be really help us to move forward.
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

        <div class="row news-row">
            @foreach ($$module_name as $$module_name_singular)
            @php
            $details_url = route("frontend.$module_name.show",[encode_id($$module_name_singular->id), $$module_name_singular->slug]);
            @endphp
            <div class="col-md-12">
                <div class="news-card">
                    <div class="nc-top">
                        <div class="nc-left">
                            <div class="ncl-image">
                                <img src="{{$$module_name_singular->featured_image}}" alt="$$module_name_singular->name">
                            </div>
                        </div>
                        <div class="nc-right">
                            <a href="{{ $details_url}}">
                                <div class="ncr-row-a">
                                    {{$$module_name_singular->name}}
                                </div>
                                <div class="ncr-row-b">
                                    {{$$module_name_singular->intro}}
                                </div>
                            </a>
                            <br>
                            @foreach ($$module_name_singular->tags as $tag)
                            <a href="{{route('frontend.tags.show', [encode_id($tag->id), $tag->slug])}}" style="background-color: #00b33c;">{{$tag->name}}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    {{ $$module_name->links('frontend.pagination.custom_pagination') }}
</div>
@endsection