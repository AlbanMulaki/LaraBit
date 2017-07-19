<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="{{ $optionValue->code }}">{{ trans('dashboard::general.'.$optionValue->lang) }}</label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input @validate(App\Core\Dashboard\Validator\SettingsUpdateValidator@{{ $optionValue->code }}) value='{{ old($optionValue->code) ? old($optionValue->code) : $optionValue->value }}' class="form-control col-md-7 col-xs-12">
    </div>
</div>