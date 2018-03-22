@extends('layouts.admin')

@section('content')

    <!-- Main Content -->
    <div class="container-fluid">
        <!-- Title -->
        <div class="row heading-bg bg-pink">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-light">add-products</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="!#">Products</a></li>
                    <li class="active"><span>add-products</span></li>
                </ol>
            </div>
            <!-- /Breadcrumb -->
        </div>
        <!-- /Title -->

        @if(Session::has('info'))
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="ti-check pr-15"></i> Session::get('info')
        </div>

        @endif
        <!-- Row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="form-wrap">
                                <form action=" {{ route('admin.new-product') }}" method="post"  enctype="multipart/form-data">

                                    @csrf
                                    <h6 class="txt-dark capitalize-font"><i class="icon-list mr-10"></i>about product</h6>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label mb-10">Product Name</label>
                                                <input type="text" name="name"  class="form-control">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="panel panel-default card-view">
                                                <div class="panel-heading">
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="panel-wrapper collapse in">
                                                    <div class="panel-body">
                                                        <div class="form-wrap mt-40">

                                                                <div class="row">
                                                                    <div class="panel panel-default card-view">
                                                                        <div class="panel-heading">
                                                                            <div class="pull-left">
                                                                                <h6 class="panel-title txt-dark">Checkbox Circle</h6>
                                                                            </div>
                                                                            <div class="clearfix"></div>
                                                                        </div>
                                                                        <div class="panel-wrapper collapse in">
                                                                            <div class="panel-body">
                                                                                <div class="row mt-40">
                                                                                    <div class="col-sm-12">

                                                                                     <div class="form-group">

                                                                                                 <select name="category_id" class="form-control">
                                                                                                     <option> Choose Category </option>
                                                                                                     @foreach($categories as $category)
                                                                                                     <option value="{{ $category->id }}"> {{ $category->name }}</option>
                                                                                                     @endforeach
                                                                                                 </select>
                                                                                        </div>



                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label mb-10">Price</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="ti-money"></i></div>
                                                    <input type="text" class="form-control" id="exampleInputuname" name="price" placeholder="153">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="seprator-block"></div>
                                    <h6 class="txt-dark capitalize-font"><i class="icon-speech mr-10"></i>Product Description</h6>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <textarea class="form-control" rows="4" name="description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/row-->

                                    <div class="seprator-block"></div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-6 ol-md-6 col-xs-12">
                                            <div class="panel panel-default card-view">
                                                <div class="panel-heading">
                                                    <div class="pull-left">
                                                        <h6 class="panel-title txt-dark"> Image Upload </h6>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="panel-wrapper collapse in">
                                                    <div class="panel-body">
                                                        <p class="text-muted">Add Image.</p>
                                                        <div class="mt-40">
                                                            <input type="file" name="image" id="input-file-now" class="dropify" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="seprator-block"></div>



                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success btn-icon left-icon mr-10"> <i class="fa fa-check"></i> <span>save</span></button>
                                        <button type="reset" class="btn btn-warning">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Row -->

    </div>
    <!-- End Main Content -->

    @endsection
