
@if(session()->has('msg'))
    <div class="alert alert-success">
        {{ session()->get('msg') }}
    </div>
@endif

@if(session()->has('msgs'))
    <div class="alert alert-warning">
        {{ session()->get('msgs') }}
    </div>
@endif

@if(session()->has('umsg'))
    <div class="alert alert-success">
        {{ session()->get('umsg') }}
    </div>
@endif