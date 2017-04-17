@extends('layouts.default')

@section('content')
<div class="row">

    <div class="col-md-12 col-xs-12">

        <div class="x_panel">
            <div class="x_title">
                <h2>@lang('dashboard::general.settings') <small>@lang('dashboard::general.setting_description')</small></h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br>
                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <?php $i = 0; ?>
                        @foreach($options as $tabName => $option)
                        <li role="presentation" class="@if($i==0) active @endif"><a href="#{{ $tabName }}" role="tab" data-toggle="tab" aria-expanded="@if($i==0) true @endif">{{ trans('dashboard::general.'.$tabName) }}</a>
                        </li>
                        <?php $i++; ?>
                        @endforeach
                    </ul>
                    <form data-parsley-validate action="{{ route('dashboard.settings-update') }}" class=" form-horizontal form-label-left input_mask" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div id="myTabContent" class="tab-content">
                            <?php $i = 0; ?>
                            @foreach($options as $tabName => $option)
                            <div role="tabpanel" class="tab-pane fade @if($i==0) active in @endif" id="{{ $tabName }}" aria-labelledby="home-tab">
                                @foreach($option as $optionValue)

                                @if($optionValue->code == 'logo')
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="{{ $optionValue->code }}">{{ trans('dashboard::general.'.$optionValue->lang) }}</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">

                                            </div>
                                            <div>
                                                <span class="btn btn-default btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="logo"></span>
                                                <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput"><span class="fa fa-remove"> </span>Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @elseif($optionValue->type == "string")
                                @include('dashboard::partials.settings.text-input')
                                @endif
                                @endforeach

                            </div>
                            <?php $i++; ?>
                            @endforeach
                            <div class="form-group">
                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                    <button type="submit" class="btn btn-success">@lang('dashboard::general.update')</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>
</div>
@stop

@section('scripts')
<script>
    var successTitle = "@lang('dashboard::validation.success_update_settings')";
    var successText = "@lang('dashboard::validation.success_update_settings')";
    var errorTitle = "@lang('dashboard::validation.settings_cannot_be_updated')";
    var errorText = "@lang('dashboard::validation.settings_cannot_be_updated')";
</script>
@stop