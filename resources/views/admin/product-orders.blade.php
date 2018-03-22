@extends('layouts.admin')

@section('content')

    <!--- Main Content --->
    <div class="container-fluid">
        <!-- Title -->
        <div class="row heading-bg bg-pink">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-light">product orders</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="index.html">Dashboard</a></li>
                    <li><a href="#"><span>e-commerce</span></a></li>
                    <li class="active"><span>product-orders</span></li>
                </ol>
            </div>
            <!-- /Breadcrumb -->
        </div>
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h6 class="panel-title txt-dark">Product orders</h6>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="table-wrap">
                                <div class="table-responsive">
                                    <table class="table display responsive product-overview mb-30" id="myTable">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Order ID</th>
                                            <th>Photo</th>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Jens Brincker</td>
                                            <td>#85457898</td>
                                            <td>
                                                <img src="dist/img/chair.jpg" alt="iMac" width="80">
                                            </td>
                                            <td>Square Chair</td>
                                            <td>20</td>
                                            <td>10-10-2016</td>
                                            <td>
                                                <span class="label label-success font-weight-100">Paid</span>
                                            </td>
                                            <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit" ><i class="fa fa-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Mark Hay</td>
                                            <td>#85457897</td>
                                            <td>
                                                <img src="dist/img/chair2.jpg" alt="iPhone" width="80">
                                            </td>
                                            <td>Semi Circle Chair</td>
                                            <td>15</td>
                                            <td>09-10-2016</td>
                                            <td>
                                                <span class="label label-warning font-weight-100">Pending</span>
                                            </td>
                                            <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit" ><i class="fa fa-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Anthony Davie</td>
                                            <td>#85457896</td>
                                            <td>
                                                <img src="dist/img/chair3.jpg" alt="apple_watch" width="80">
                                            </td>
                                            <td>Rounded Chair</td>
                                            <td>10</td>
                                            <td>08-10-2016</td>
                                            <td>
                                                <span class="label label-success font-weight-100">Paid</span>
                                            </td>
                                            <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit" ><i class="fa fa-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>David Perry</td>
                                            <td>#85457895</td>
                                            <td>
                                                <img src="dist/img/chair4.jpg" alt="mac_mouse" width="80">
                                            </td>
                                            <td>Wooden chair</td>
                                            <td>15</td>
                                            <td>02-10-2016</td>
                                            <td>
                                                <span class="label label-default font-weight-100">Failed</span>
                                            </td>
                                            <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit" ><i class="fa fa-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Anthony Davie</td>
                                            <td>#85457894</td>
                                            <td>
                                                <img src="dist/img/chair.jpg" alt="iMac" width="80">
                                            </td>
                                            <td>Rounded Chair</td>
                                            <td>20</td>
                                            <td>08-10-2016</td>
                                            <td>
                                                <span class="label label-success font-weight-100">Paid</span>
                                            </td>
                                            <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit" ><i class="fa fa-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Alan Gilchrist</td>
                                            <td>#85457893</td>
                                            <td>
                                                <img src="dist/img/chair2.jpg" alt="iPhone" width="80">
                                            </td>
                                            <td>Wooden Chair</td>
                                            <td>24</td>
                                            <td>06-10-2016</td>
                                            <td>
                                                <span class="label label-warning font-weight-100">Pending</span>
                                            </td>
                                            <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit" ><i class="fa fa-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Sue Woodger</td>
                                            <td>#85457892</td>
                                            <td>
                                                <img src="dist/img/chair3.jpg" alt="apple_watch" width="80">
                                            </td>
                                            <td>Square Chair</td>
                                            <td>30</td>
                                            <td>05-10-2016</td>
                                            <td>
                                                <span class="label label-success font-weight-100">Paid</span>
                                            </td>
                                            <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit" ><i class="fa fa-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Barry Croucher</td>
                                            <td>#85457891</td>
                                            <td>
                                                <img src="dist/img/chair4.jpg" alt="mac_mouse" width="80">
                                            </td>
                                            <td>Semi Circle Chair</td>
                                            <td>28</td>
                                            <td>01-10-2016</td>
                                            <td>
                                                <span class="label label-default font-weight-100">Failed</span>
                                            </td>
                                            <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit" ><i class="fa fa-check"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Row -->
    </div>
    <!--- End Main Content --->

@endsection