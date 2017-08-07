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
