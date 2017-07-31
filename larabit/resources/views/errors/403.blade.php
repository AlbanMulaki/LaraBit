@extends('layouts.default')

@section('content')
  <div class="col-md-12">
          <div class="col-middle">
            <div class="text-center text-center">
              <h1 class="error-number">403</h1>
              <h2>@lang('errors.access_denied')</h2>
              <p>@lang('errors.full_authentication_is_requried_to_access_this_resource') <a href="#">@lang('errors.report_this?')</a>
              </p>
              <div class="mid_center">
                <h3>@lang('errors.search')</h3>
                <form>
                  <div class="col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="@lang('errors.search_for')">
                      <span class="input-group-btn">
                              <button class="btn btn-default" type="button">@lang('errors.go!')</button>
                          </span>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
@endsection
