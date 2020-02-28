@foreach($data as $d)
<!-- <div id="coba"></div> -->
<div class="col-md-4">
    <div class="card border border-primary">
        <div class="card-header">
            <strong class="card-title mb-3" <small><span class="badge badge-success float-right mt-1">Success</span></small></strong>
        </div>

        <div  class="card-body">
            <div class="mx-auto d-block">
                <img class="rounded-circle mx-auto d-block" src="{{asset('images/avatar/'.$d->image)}}" alt="Card image cap">
                <h5  class="text-sm-center mt-2 mb-1">{{$d->nama}}</h5>
                <div class="location text-sm-center"><i class="ti-timer"></i> {{$d->waktu}}</div>
            </div>
            <hr>
        </div>

    </div>
</div>
@endforeach
