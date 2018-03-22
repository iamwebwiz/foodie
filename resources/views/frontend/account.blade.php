@extends('layouts.frontend')

@section('content')

    <!-- Page Header -->
    <section class="page_header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="text-uppercase">Account</h2>
                    <p>Please login or signup to continue with your purchase</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Account Content -->
    <section class="shop-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row shop-login">
                        <div class="col-md-6">
                            <div class="box-content">
                                <h3 class="text-center">Existing Customer</h3>
                                <br>
                                <form class="logregform">
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>Username or E-mail Address</label>
                                                <input type="text" value="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <a class="pull-right" href="./index.html">(Lost Password?)</a>
                                                <label>Password</label>
                                                <input type="password" value="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="row">
                                        <div class="col-md-6">
                                                    <span class="remember-box checkbox">
                                            <label for="rememberme">
                                            <input type="checkbox" id="rememberme" name="rememberme">Remember Me
                                            </label>
                                            </span>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-default pull-right">Login</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="box-content">
                                <h3 class="text-center">Register An Account</h3>
                                <br>
                                <form class="logregform">
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>E-mail Address</label>
                                                <input type="text" value="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix space20"></div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label>Password</label>
                                                <input type="password" value="" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Re-enter Password</label>
                                                <input type="password" value="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="space20"></div>
                                            <button type="submit" class="btn btn-default pull-right">Register</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection