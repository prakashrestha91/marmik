@extends('Layout.app')

<<<<<<< HEAD
@section('main-content')
=======

@section('main-content')
    <style>
        .example-modal .modal {
            position: relative;
            top: auto;
            bottom: auto;
            right: auto;
            left: auto;
            display: block;
            z-index: 1;
        }

        .example-modal .modal {
            background: transparent !important;
        }
    </style>
>>>>>>> d2e21dfb4cba4c9b29131ac621e89425f80b009e

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Package type List</h3>
                    </div>

                    <div align="right" style="padding: 10px">
                        <a href="{{route('batch.create')}}">
                            <span class=" btn btn-sm btn-success" title="Create new category">Create batch</span>
                        </a>
                    </div>

                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Batch ID</th>
                                <th>tracking Id</th>
<<<<<<< HEAD
=======
                                <th>location</th>
>>>>>>> d2e21dfb4cba4c9b29131ac621e89425f80b009e

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($batch as $list)
                                <tr>
                                    <td>{{$list->id}}</td>
                                    <td> {{$list->tracking_id}}</td>
<<<<<<< HEAD
=======
                                    <td> <button  > view location</button></td>

>>>>>>> d2e21dfb4cba4c9b29131ac621e89425f80b009e

                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>

<<<<<<< HEAD
=======

>>>>>>> d2e21dfb4cba4c9b29131ac621e89425f80b009e
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
<<<<<<< HEAD
=======

        <div class="example-modal">
            <div class="modal modal-primary">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Primary Modal</h4>
                        </div>
                        <div class="modal-body">
                            <p>One fine body&hellip;</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-outline">Save changes</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
        </div>
>>>>>>> d2e21dfb4cba4c9b29131ac621e89425f80b009e
        <!-- /.row -->
    </section>

@endsection