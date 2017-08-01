<div class="col-lg-6">{{ $health->getHealth->name }} </div>
<div class="col-lg-6"><span class="label label-success"><span class="fa fa-chevron-up"></span> {{ $health->getHealthCheckStatus()['status']['uptime'] }}%</span></div>
