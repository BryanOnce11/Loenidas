@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>User List</h4>
                    <h6>Manage your User</h6>
                </div>
                <div class="page-btn">
                    <a href="newuser.html" class="btn btn-added"><img src="assets/img/icons/plus.svg" alt="img" />Add
                        User</a>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-top">
                        <div class="search-set">
                            <div class="search-path">
                                <a class="btn btn-filter" id="filter_search">
                                    <img src="assets/img/icons/filter.svg" alt="img" />
                                    <span><img src="assets/img/icons/closes.svg" alt="img" /></span>
                                </a>
                            </div>
                            <div class="search-input">
                                <a class="btn btn-searchset"><img src="assets/img/icons/search-white.svg"
                                        alt="img" /></a>
                            </div>
                        </div>
                        <div class="wordset">
                            <ul>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img
                                            src="assets/img/icons/pdf.svg" alt="img" /></a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img
                                            src="assets/img/icons/excel.svg" alt="img" /></a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img
                                            src="assets/img/icons/printer.svg" alt="img" /></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="card" id="filter_inputs">
                        <div class="card-body pb-0">
                            <div class="row">
                                <div class="col-lg-2 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter User Name" />
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter Phone" />
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter Email" />
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" class="datetimepicker cal-icon" placeholder="Choose Date" />
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6 col-12">
                                    <div class="form-group">
                                        <select class="select">
                                            <option>Disable</option>
                                            <option>Enable</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-1 col-sm-6 col-12 ms-auto">
                                    <div class="form-group">
                                        <a class="btn btn-filters ms-auto"><img src="assets/img/icons/search-whites.svg"
                                                alt="img" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table datanew">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Account Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Thomas D</td>
                                    <td>09245367219</td>
                                    <td>Thomas@gmail.com</td>
                                    <td>Admin</td>
                                    <td>thomusername</td>
                                    <td>password</td>
                                    <td><span class="bg-lightgreen badges">Active</span></td>
                                    <td>
                                        <a class="me-3" href="newuseredit.html">
                                            <img src="assets/img/icons/edit.svg" alt="img" />
                                        </a>
                                        <a class="me-3 confirm-text" href="javascript:void(0);">
                                            <img src="assets/img/icons/delete.svg" alt="img" />
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Benjamin B. Please</td>
                                    <td>09563813648</td>
                                    <td>Benjamin@gmail.com</td>
                                    <td>Manager</td>
                                    <td>benjuser</td>
                                    <td>password</td>
                                    <td><span class="bg-lightred badges">Locked</span></td>
                                    <td>
                                        <a class="me-3" href="newuseredit.html">
                                            <img src="assets/img/icons/edit.svg" alt="img" />
                                        </a>
                                        <a class="me-3 confirm-text" href="javascript:void(0);">
                                            <img src="assets/img/icons/delete.svg" alt="img" />
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>James</td>
                                    <td>09245367219</td>
                                    <td>James@gmail.com</td>
                                    <td>Salesman</td>
                                    <td>james8er</td>
                                    <td>password</td>
                                    <td><span class="bg-lightred badges">Locked</span></td>
                                    <td>
                                        <a class="me-3" href="newuseredit.html">
                                            <img src="assets/img/icons/edit.svg" alt="img" />
                                        </a>
                                        <a class="me-3 confirm-text" href="javascript:void(0);">
                                            <img src="assets/img/icons/delete.svg" alt="img" />
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>James</td>
                                    <td>09245367219</td>
                                    <td>James@gmail.com</td>
                                    <td>Salesman</td>
                                    <td>jameyr</td>
                                    <td>password</td>
                                    <td><span class="bg-lightred badges">Locked</span></td>
                                    <td>
                                        <a class="me-3" href="newuseredit.html">
                                            <img src="assets/img/icons/edit.svg" alt="img" />
                                        </a>
                                        <a class="me-3 confirm-text" href="javascript:void(0);">
                                            <img src="assets/img/icons/delete.svg" alt="img" />
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bruklin</td>
                                    <td>09563813648</td>
                                    <td>Bruklin@gmail.com</td>
                                    <td>Delivery Biker</td>
                                    <td>bruksuser</td>
                                    <td>password</td>
                                    <td><span class="bg-lightgreen badges">Active</span></td>
                                    <td>
                                        <a class="me-3" href="newuseredit.html">
                                            <img src="assets/img/icons/edit.svg" alt="img" />
                                        </a>
                                        <a class="me-3 confirm-text" href="javascript:void(0);">
                                            <img src="assets/img/icons/delete.svg" alt="img" />
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Beverly</td>
                                    <td>09245367219</td>
                                    <td>Beverly@gmail.com</td>
                                    <td>Delivery Biker</td>
                                    <td>beve</td>
                                    <td>password</td>
                                    <td><span class="bg-lightgreen badges">Active</span></td>
                                    <td>
                                        <a class="me-3" href="newuseredit.html">
                                            <img src="assets/img/icons/edit.svg" alt="img" />
                                        </a>
                                        <a class="me-3 confirm-text" href="javascript:void(0);">
                                            <img src="assets/img/icons/delete.svg" alt="img" />
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Hanna</td>
                                    <td>09563813648</td>
                                    <td>Hanna@gmail.com</td>
                                    <td>Sales Executive</td>
                                    <td>hana</td>
                                    <td>password</td>
                                    <td><span class="bg-lightgreen badges">Active</span></td>
                                    <td>
                                        <a class="me-3" href="newuseredit.html">
                                            <img src="assets/img/icons/edit.svg" alt="img" />
                                        </a>
                                        <a class="me-3 confirm-text" href="javascript:void(0);">
                                            <img src="assets/img/icons/delete.svg" alt="img" />
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Thomas</td>
                                    <td>09245367219</td>
                                    <td>Thomas@gmail.com</td>
                                    <td>Admin</td>
                                    <td>tom</td>
                                    <td>password</td>
                                    <td><span class="bg-lightgreen badges">Active</span></td>
                                    <td>
                                        <a class="me-3" href="newuseredit.html">
                                            <img src="assets/img/icons/edit.svg" alt="img" />
                                        </a>
                                        <a class="me-3 confirm-text" href="javascript:void(0);">
                                            <img src="assets/img/icons/delete.svg" alt="img" />
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Benjamin</td>
                                    <td>09563813648</td>
                                    <td>Benjamin@gmail.com</td>
                                    <td>Manager</td>
                                    <td>benjus</td>
                                    <td>password</td>
                                    <td><span class="bg-lightred badges">Locked</span></td>
                                    <td>
                                        <a class="me-3" href="newuseredit.html">
                                            <img src="assets/img/icons/edit.svg" alt="img" />
                                        </a>
                                        <a class="me-3 confirm-text" href="javascript:void(0);">
                                            <img src="assets/img/icons/delete.svg" alt="img" />
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>James</td>
                                    <td>09245367219</td>
                                    <td>James@gmail.com</td>
                                    <td>Salesman</td>
                                    <td>usrer</td>
                                    <td>password</td>
                                    <td><span class="bg-lightred badges">Locked</span></td>
                                    <td>
                                        <a class="me-3" href="newuseredit.html">
                                            <img src="assets/img/icons/edit.svg" alt="img" />
                                        </a>
                                        <a class="me-3 confirm-text" href="javascript:void(0);">
                                            <img src="assets/img/icons/delete.svg" alt="img" />
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>James</td>
                                    <td>09245367219</td>
                                    <td>James@gmail.com</td>
                                    <td>Salesman</td>
                                    <td>username</td>
                                    <td>password</td>
                                    <td><span class="bg-lightred badges">Locked</span></td>
                                    <td>
                                        <a class="me-3" href="newuseredit.html">
                                            <img src="assets/img/icons/edit.svg" alt="img" />
                                        </a>
                                        <a class="me-3 confirm-text" href="javascript:void(0);">
                                            <img src="assets/img/icons/delete.svg" alt="img" />
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bruklin</td>
                                    <td>09563813648</td>
                                    <td>Bruklin@gmail.com</td>
                                    <td>Delivery Biker</td>
                                    <td>usernameko</td>
                                    <td>password</td>
                                    <td><span class="bg-lightgreen badges">Active</span></td>
                                    <td>
                                        <a class="me-3" href="newuseredit.html">
                                            <img src="assets/img/icons/edit.svg" alt="img" />
                                        </a>
                                        <a class="me-3 confirm-text" href="javascript:void(0);">
                                            <img src="assets/img/icons/delete.svg" alt="img" />
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Beverly</td>
                                    <td>09245367219</td>
                                    <td>Beverly@gmail.com</td>
                                    <td>Delivery Biker</td>
                                    <td>usernameko</td>
                                    <td>password</td>
                                    <td><span class="bg-lightgreen badges">Active</span></td>
                                    <td>
                                        <a class="me-3" href="newuseredit.html">
                                            <img src="assets/img/icons/edit.svg" alt="img" />
                                        </a>
                                        <a class="me-3 confirm-text" href="javascript:void(0);">
                                            <img src="assets/img/icons/delete.svg" alt="img" />
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Hanna</td>
                                    <td>09563813648</td>
                                    <td>Hanna@gmail.com</td>
                                    <td>Sales Executive</td>
                                    <td>usgfer</td>
                                    <td>password</td>
                                    <td><span class="bg-lightgreen badges">Active</span></td>
                                    <td>
                                        <a class="me-3" href="newuseredit.html">
                                            <img src="assets/img/icons/edit.svg" alt="img" />
                                        </a>
                                        <a class="me-3 confirm-text" href="javascript:void(0);">
                                            <img src="assets/img/icons/delete.svg" alt="img" />
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
