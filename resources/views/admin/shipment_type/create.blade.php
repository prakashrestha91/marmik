@extends('Layout.app')

@section('main-content')


        <!-- Main content -->
<section class="content">
    {!! Form::open(array('route'=>'shipment.type.store', 'method'=>'post' ))!!}

    <div class="row ">
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label pad">
            <label for="shipment_type">Shipment Type</label>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
            <div class="form-group">
                <div class="form-line">
                    <input type="text" id="type" class="form-control" required placeholder="Name" name="name">
                </div>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label pad">
            <label for="price">Price</label>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
            <div class="form-group">
                <div class="form-line">
                    <input type="number" id="price" class="form-control" required placeholder="price in $ " name="price">
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix pad">

    </div>
    <div class="clearfix pad"></div>
    <div align="right" >
        {{Form::submit('ADD', array('class'=>'btn btn-bg btn-primary ','title'=>'Save the Shipment type'))}}
        {!! Form::close() !!}

    </div>
</section>
<!-- /.content -->

@endsection