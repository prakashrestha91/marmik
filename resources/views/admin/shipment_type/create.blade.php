@extends('Layout.app')

@section('main-content')


        <!-- Main content -->
<section class="content">

    <div class="row ">
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label pad">
            <label for="shipment_type">Shipment Type</label>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
            <div class="form-group">
                <div class="form-line">
                    <input type="text" id="type" class="form-control" placeholder="Name" name="name">
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
                    <input type="number" id="price" class="form-control" placeholder="price in $ " name="price">
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix pad">

    </div>
    <div align="right" >
        <btn class="btn btn-primary" href="#">Save</btn>
    </div>
</section>
<!-- /.content -->

@endsection