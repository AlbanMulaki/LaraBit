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
                    <form data-parsley-validate action="{{ route('dashboard.settings-update') }}" class="form-horizontal form-label-left input_mask" method="POST">
                        {{ csrf_field() }}
                        <div id="myTabContent" class="tab-content">
                            <?php $i = 0; ?>
                            @foreach($options as $tabName => $option)
                            <div role="tabpanel" class="tab-pane fade @if($i==0) active in @endif" id="{{ $tabName }}" aria-labelledby="home-tab">
                                @foreach($option as $optionValue)

                                @if($optionValue->code == 'logo')

                                <!-- the avatar markup -->
                                <div id="kv-avatar-errors-2" class="center-block" style="width:800px;display:none"></div>
                                <form class="text-center" action="/avatar_upload.php" method="post" enctype="multipart/form-data">
                                    <div class="kv-avatar center-block" style="width:200px">
                                        <input id="logo" name="avatar-2" type="file" class="file-loading">
                                    </div>
                                    <!-- include other inputs if needed and include a form submit (save) button -->
                                </form>
                                <!-- your server code `avatar_upload.php` will receive `$_FILES['avatar']` on form submission -->

                                <!-- the fileinput plugin initialization -->
                                <script>

                                </script>
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
    $("#logo").fileinput({
        overwriteInitial: true,
        maxFileSize: 1500,
        showClose: false,
        showCaption: false,
        showBrowse: false,
        browseOnZoneClick: true,
        removeLabel: '',
        removeIcon: '<i class="fa fa-remove"></i>',
        removeTitle: 'Cancel or reset changes',
        elErrorContainer: '#kv-avatar-errors-2',
        msgErrorClass: 'alert alert-block alert-danger',
        defaultPreviewContent: '<img src="/uploads/default_avatar_male.jpg" alt="Your Avatar" style="width:160px"><h6 class="text-muted">Click to select</h6>',
        layoutTemplates: {main2: '{preview} {remove} {browse}'},
        allowedFileExtensions: ["jpg", "png", "gif"]
    });
    
//    uploadUrl: "http://localhost/file-upload-single/1", // server upload action
//    uploadAsync: true,
</script>
@stop