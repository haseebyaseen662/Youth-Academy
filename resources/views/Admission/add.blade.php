@extends('layout.app')
@section('content')
    <!--APP-CONTENT START-->
    <div class="main-content app-content">
        <div class="container-fluid">

            <!-- Page Header -->
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <div class="my-auto">
                    <h5 class="page-title fs-21 mb-1 mt-4">New Admission</h5>
                </div>
            </div>
            <!-- Page Header Close -->

            <!-- Start:: row-1 -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="card-header justify-content-between">
                            <div class="card-title">
                                Academic Details
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row gy-4">
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <label for="institute-code" class="form-label">Academic Year</label>
                                    <select class="form-control" id="institute-type">
                                        <option value="">Select Year</option>
                                        <option value="school">2024-2025</option>
                                        <option value="college">2023-2024</option>
                                        <option value="university">2022-2023</option>
                                        <option value="training-center">2021-2022</option>
                                        <option value="training-center">2020-2021</option>
                                    </select>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <label for="institute-code" class="form-label">Student Roll No</label>
                                    <input type="number" class="form-control" id="institute-code"
                                        placeholder="Enter Student Roll No">
                                </div>

                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <label for="institute-code" class="form-label">Admission Date</label>
                                    <input type="date" class="form-control" id="institute-code">
                                </div>

                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <label for="institute-name" class="form-label">Class</label>
                                    <select class="form-control" id="institute-type">
                                        <option value="">Select Class</option>
                                        <option value="school">10</option>
                                        <option value="college">9</option>
                                        <option value="college">8</option>
                                        <option value="college">7</option>
                                        <option value="college">6</option>
                                        <option value="college">5</option>
                                        <option value="college">4</option>
                                        <option value="college">3</option>
                                        <option value="college">2</option>
                                        <option value="college">1</option>
                                        <option value="college">Kindergarden</option>
                                    </select>
                                </div>

                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <label for="institute-type" class="form-label">Section</label>
                                    <select class="form-control" id="institute-type">
                                        <option value="">Select Section</option>
                                        <option value="school">Rose</option>
                                        <option value="college">Tulip</option>
                                    </select>
                                </div>

                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <label for="institute-type" class="form-label">Gender</label>
                                    <select class="form-control" id="institute-type">
                                        <option value="">Select Gender</option>
                                        <option value="school">Male</option>
                                        <option value="college">Female</option>
                                    </select>
                                </div>

                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <label for="institute-type" class="form-label">Religion</label>
                                    <select class="form-control" id="institute-type">
                                        <option value="">Select Religion</option>
                                        <option value="school">Islam</option>
                                        <option value="college">Christan</option>
                                    </select>
                                </div>

                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <label for="institute-code" class="form-label">Enrollment Year</label>
                                    <select class="form-control" id="institute-type">
                                        <option value="">Select Year</option>
                                        <option value="school">2024</option>
                                        <option value="college">2023</option>
                                        <option value="university">2022</option>
                                        <option value="training-center">2021</option>
                                        <option value="training-center">2020</option>
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
                                    <label for="institute-name" class="form-label">Student Address</label>
                                    <input type="text" class="form-control" id="institute-name"
                                        placeholder="Enter Address">
                                </div>

                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <label for="institute-name" class="form-label">Student Email</label>
                                    <input type="email" class="form-control" id="institute-name"
                                        placeholder="Enter Email">
                                </div>

                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <label for="institute-name" class="form-label">Student Phone</label>
                                    <input type="number" class="form-control" id="institute-name"
                                        placeholder="Enter Phone No">
                                </div>


                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Student Details
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row gy-4">
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <label for="institute-name" class="form-label">Student Name</label>
                                            <input type="text" class="form-control" id="institute-name"
                                                placeholder="Enter Student Name">
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <label for="institute-code" class="form-label">Student Roll No</label>
                                            <input type="number" class="form-control" id="institute-code"
                                                placeholder="Enter Student Roll No">
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <label for="institute-code" class="form-label">Date of Birth</label>
                                            <input type="date" class="form-control" id="institute-code">
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <label for="institute-type" class="form-label">Gender</label>
                                            <select class="form-control" id="institute-type">
                                                <option value="">Select Gender</option>
                                                <option value="school">Male</option>
                                                <option value="college">Female</option>
                                            </select>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <label for="institute-type" class="form-label">Religion</label>
                                            <select class="form-control" id="institute-type">
                                                <option value="">Select Religion</option>
                                                <option value="school">Islam</option>
                                                <option value="college">Christan</option>
                                            </select>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <label for="institute-code" class="form-label">Enrollment Year</label>
                                            <select class="form-control" id="institute-type">
                                                <option value="">Select Year</option>
                                                <option value="school">2024</option>
                                                <option value="college">2023</option>
                                                <option value="university">2022</option>
                                                <option value="training-center">2021</option>
                                                <option value="training-center">2020</option>
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
                                            <label for="institute-name" class="form-label">Student Address</label>
                                            <input type="text" class="form-control" id="institute-name"
                                                placeholder="Enter Address">
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <label for="institute-name" class="form-label">Student Email</label>
                                            <input type="email" class="form-control" id="institute-name"
                                                placeholder="Enter Email">
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <label for="institute-name" class="form-label">Student Phone</label>
                                            <input type="number" class="form-control" id="institute-name"
                                                placeholder="Enter Phone No">
                                        </div>

                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                Parent Info
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <label for="institute-phone" class="form-label">Father Name</label>
                                            <input type="text" class="form-control" id="institute-phone"
                                                placeholder="Enter Father Name">
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <label for="institute-phone" class="form-label">Mother Name</label>
                                            <input type="text" class="form-control" id="institute-phone"
                                                placeholder="Enter Father Name">
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <label for="institute-email" class="form-label">Father Email</label>
                                            <input type="email" class="form-control" id="institute-email"
                                                placeholder="Enter Father Email">
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <label for="institute-email" class="form-label">Father Phone</label>
                                            <input type="number" class="form-control" id="institute-email"
                                                placeholder="Enter Father Phone No">
                                        </div>


                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button class="btn btn-primary me-md-2 btn-wave" type="button">Add
                                                Student</button>
                                            <button class="btn btn-primary btn-wave" type="button">Back</button>
                                        </div>

                                    </div>
                                @endsection
