

<div class="col-md-4 col-sm-4 col-xs-12 profile_details">
    <div class="well profile_view">
        <div class="col-sm-12">
            <h4 class="brief"><i>{{ $server->server_name }}</i> - <small>{{ $server->OS }}</small>
                <a href="#" class="btn btn-primary btn-xs">
                    <i class="fa fa-server "> </i> @lang('system::general.edit')
                </a>
            </h4>
            <div class=" col-lg-4">
                <span class="fa fa-linux fa-5x"> </span>
            </div>
            <div class=" col-lg-7">
                <div class="col-lg-5">{{ $health->getHealth->name }} </div>
                <div class="col-lg-5">
                    <span class="label label-success">
                        <span class="fa fa-chevron-up">

                        </span> {{ $health->getHealthCheckStatus()['status']['uptime'] }}%
                    </span>
                </div>

                <div class="col-lg-2">
                    <span class="btn btn-xs ">
                        <a href='{{ route('system.monitor.detach-health-server',['server_id'=>$server->id,'health_id'=>$health->getHealth->id]) }}'>
                            <span class="fa fa-times" ></span>
                        </a> 
                    </span>
                </div>

                @each('system::partials.monitor.server-health',$server->healths(),'health')
            </div>
        </div>
        @permission('system.monitor.attach-health-server')
        <div class="col-lg-12"> <br></div>
        <div class="col-xs-12 bottom text-center">
            <div class="col-xs-12 col-sm-6 emphasis">
                <select required="" class="form-control" type="text" name="health_check" >
                    <option>@lang('system::general.select_check_health')</option>
                    @foreach($healthList as $list)
                    <option value="{{ $list->id}}">{{ $list->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-xs-12 col-sm-6 emphasis text-left">
                <a class="btn btn-dark btn-sm add-health-server" href="#"  data-server='{{ $server->id }}'><span class="fa fa-plus"></span></a>
            </div>
        </div>
        @endpermission
    </div>
</div>