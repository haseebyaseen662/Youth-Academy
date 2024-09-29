@extends('layout.app')
@section('content')
    <!--APP-CONTENT START-->
    <div class="main-content app-content">
        <div class="container-fluid">

            <!-- Page Header -->
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <div class="my-auto">
                    <h5 class="page-title fs-21 mb-1 mt-4">Add Institute</h5>
                </div>
            </div>
            <!-- Page Header Close -->

            <!-- Start:: row-1 -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="card-header justify-content-between">
                            <div class="card-title">
                                Institute Info
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row gy-4">
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <label for="institute-name" class="form-label">Institute Name</label>
                                    <input type="text" class="form-control" id="institute-name"
                                        placeholder="Enter Institute Name">
                                </div>

                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <label for="institute-code" class="form-label">Institute Code</label>
                                    <input type="text" class="form-control" id="institute-code"
                                        placeholder="Enter Institute Code">
                                </div>

                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <label for="institute-type" class="form-label">Institute Type</label>
                                    <select class="form-control" id="institute-type">
                                        <option value="">Select Type</option>
                                        <option value="school">School</option>
                                        <option value="college">College</option>
                                        <option value="university">University</option>
                                        <option value="training-center">Training Center</option>
                                    </select>
                                </div>

                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <label for="institute-type" class="form-label">City</label>
                                    <select class="form-control" id="institute-type">
                                        <option value="">Select City</option>
                                        <option value="school">Lahore</option>
                                        <option value="college">Gujranwala</option>
                                        <option value="university">Gujrat</option>
                                        <option value="training-center">Karachi</option>
                                    </select>
                                </div>

                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <label for="institute-type" class="form-label">State / Province</label>
                                    <select class="form-control" id="institute-type">
                                        <option value="">Select State</option>
                                        <option value="school">Sindh</option>
                                        <option value="college">Punjab</option>
                                        <option value="university">Khyber Pakhtunkhwa</option>
                                        <option value="training-center">Balochistan</option>
                                        <option value="training-center">Gigit Baldistan</option>
                                    </select>
                                </div>

                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <label for="institute-type" class="form-label">Country / Region</label>
                                    <select class="form-control" id="institute-type">
                                        <option value="">Select Country</option>
                                        <option value="school">Pakistan</option>
                                        <option value="college">Turkey</option>
                                        <option value="university">USA</option>
                                        <option value="training-center">UAE</option>
                                        <option value="training-center">United Kingdom</option>
                                    </select>
                                </div>

                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <label for="institute-name" class="form-label">Institute Address</label>
                                    <input type="text" class="form-control" id="institute-name"
                                        placeholder="Enter Address">
                                </div>

                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <label for="institute-name" class="form-label">Institute Email</label>
                                    <input type="email" class="form-control" id="institute-name"
                                        placeholder="Enter Email">
                                </div>

                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <label for="institute-name" class="form-label">Institute Phone</label>
                                    <input type="number" class="form-control" id="institute-name"
                                        placeholder="Enter Phone No">
                                </div>

                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Owner Info
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <label for="institute-phone" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="institute-phone"
                                        placeholder="Enter Owner Name">
                                </div>

                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <label for="institute-email" class="form-label">Owner Email</label>
                                    <input type="email" class="form-control" id="institute-email"
                                        placeholder="Enter Owner Email">
                                </div>

                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <label for="institute-email" class="form-label">Owner Phone</label>
                                    <input type="number" class="form-control" id="institute-email"
                                        placeholder="Enter Owner Phone No">
                                </div>

                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button class="btn btn-primary me-md-2 btn-wave" type="button">Add Institute</button>
                                    <button class="btn btn-primary btn-wave" type="button">Back</button>
                                </div>

                            </div>
                        @endsection
