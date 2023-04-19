@extends('layouts.app')
@section('title', 'User')
@section('content')
    <!-- Main Container -->
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <div class="flex-grow-1">
                        <h1 class="h3 fw-bold mb-2">
                            User
                        </h1>
                    </div>
                    <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-alt">
                            <li class="breadcrumb-item">
                                <a class="link-fx" href="#">User Management</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                User
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <!-- Quick Overview -->
            <div class="row">
                <div class="col-6 col-lg-3">
                    <a class="block block-rounded block-link-shadow text-center" href="be_pages_ecom_product_edit.html">
                        <div class="block-content block-content-full">
                            <div class="fs-2 fw-semibold text-success">
                                <i class="fa fa-plus"></i>
                            </div>
                        </div>
                        <div class="block-content py-2 bg-body-light">
                            <p class="fw-medium fs-sm text-success mb-0">
                                Add New
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3">
                    <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                        <div class="block-content block-content-full">
                            <div class="fs-2 fw-semibold text-danger">24</div>
                        </div>
                        <div class="block-content py-2 bg-body-light">
                            <p class="fw-medium fs-sm text-danger mb-0">
                                Out of stock
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3">
                    <a class="block block-rounded block-link-shadow text-center" href="be_pages_ecom_dashboard.html">
                        <div class="block-content block-content-full">
                            <div class="fs-2 fw-semibold text-dark">260</div>
                        </div>
                        <div class="block-content py-2 bg-body-light">
                            <p class="fw-medium fs-sm text-muted mb-0">
                                New
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3">
                    <a class="block block-rounded block-link-shadow text-center" href="be_pages_ecom_dashboard.html">
                        <div class="block-content block-content-full">
                            <div class="fs-2 fw-semibold text-dark">14503</div>
                        </div>
                        <div class="block-content py-2 bg-body-light">
                            <p class="fw-medium fs-sm text-muted mb-0">
                                All Products
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <!-- END Quick Overview -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Table User </h3>
                </div>
                <div class="block-content block-content-full">
                    <table class="table table-bordered table-striped table-vcenter" id="table-user">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 80px;">ID</th>
                                <th>Name</th>
                                <th style="width: 30%;">Email</th>
                                <th style="width: 15%;">Access</th>
                                <th style="width: 15%;">Registered</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center fs-sm">1</td>
                                <td class="fw-semibold fs-sm">Jack Estrada</td>
                                <td class=" fs-sm">
                                    client1<span class="text-muted">@example.com</span>
                                </td>
                                <td class="">
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                                </td>
                                <td>
                                    <span class="text-muted fs-sm">6 days ago</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center fs-sm">2</td>
                                <td class="fw-semibold fs-sm">Betty Kelley</td>
                                <td class=" fs-sm">
                                    client2<span class="text-muted">@example.com</span>
                                </td>
                                <td class="">
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                                </td>
                                <td>
                                    <span class="text-muted fs-sm">6 days ago</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center fs-sm">3</td>
                                <td class="fw-semibold fs-sm">Henry Harrison</td>
                                <td class=" fs-sm">
                                    client3<span class="text-muted">@example.com</span>
                                </td>
                                <td class="">
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                                </td>
                                <td>
                                    <span class="text-muted fs-sm">7 days ago</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center fs-sm">4</td>
                                <td class="fw-semibold fs-sm">Megan Fuller</td>
                                <td class=" fs-sm">
                                    client4<span class="text-muted">@example.com</span>
                                </td>
                                <td class="">
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                                </td>
                                <td>
                                    <span class="text-muted fs-sm">10 days ago</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center fs-sm">5</td>
                                <td class="fw-semibold fs-sm">Jack Estrada</td>
                                <td class=" fs-sm">
                                    client5<span class="text-muted">@example.com</span>
                                </td>
                                <td class="">
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                                </td>
                                <td>
                                    <span class="text-muted fs-sm">7 days ago</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center fs-sm">6</td>
                                <td class="fw-semibold fs-sm">Melissa Rice</td>
                                <td class=" fs-sm">
                                    client6<span class="text-muted">@example.com</span>
                                </td>
                                <td class="">
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                                </td>
                                <td>
                                    <span class="text-muted fs-sm">9 days ago</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center fs-sm">7</td>
                                <td class="fw-semibold fs-sm">Jose Wagner</td>
                                <td class=" fs-sm">
                                    client7<span class="text-muted">@example.com</span>
                                </td>
                                <td class="">
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                                </td>
                                <td>
                                    <span class="text-muted fs-sm">10 days ago</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center fs-sm">8</td>
                                <td class="fw-semibold fs-sm">Justin Hunt</td>
                                <td class=" fs-sm">
                                    client8<span class="text-muted">@example.com</span>
                                </td>
                                <td class="">
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                                </td>
                                <td>
                                    <span class="text-muted fs-sm">6 days ago</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center fs-sm">9</td>
                                <td class="fw-semibold fs-sm">Adam McCoy</td>
                                <td class=" fs-sm">
                                    client9<span class="text-muted">@example.com</span>
                                </td>
                                <td class="">
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                                </td>
                                <td>
                                    <span class="text-muted fs-sm">8 days ago</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center fs-sm">10</td>
                                <td class="fw-semibold fs-sm">Marie Duncan</td>
                                <td class=" fs-sm">
                                    client10<span class="text-muted">@example.com</span>
                                </td>
                                <td class="">
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                                </td>
                                <td>
                                    <span class="text-muted fs-sm">2 days ago</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center fs-sm">11</td>
                                <td class="fw-semibold fs-sm">Danielle Jones</td>
                                <td class=" fs-sm">
                                    client11<span class="text-muted">@example.com</span>
                                </td>
                                <td class="">
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                                </td>
                                <td>
                                    <span class="text-muted fs-sm">5 days ago</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center fs-sm">12</td>
                                <td class="fw-semibold fs-sm">Adam McCoy</td>
                                <td class=" fs-sm">
                                    client12<span class="text-muted">@example.com</span>
                                </td>
                                <td class="">
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                                </td>
                                <td>
                                    <span class="text-muted fs-sm">5 days ago</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center fs-sm">13</td>
                                <td class="fw-semibold fs-sm">Albert Ray</td>
                                <td class=" fs-sm">
                                    client13<span class="text-muted">@example.com</span>
                                </td>
                                <td class="">
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                                </td>
                                <td>
                                    <span class="text-muted fs-sm">6 days ago</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center fs-sm">14</td>
                                <td class="fw-semibold fs-sm">Megan Fuller</td>
                                <td class=" fs-sm">
                                    client14<span class="text-muted">@example.com</span>
                                </td>
                                <td class="">
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                                </td>
                                <td>
                                    <span class="text-muted fs-sm">7 days ago</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center fs-sm">15</td>
                                <td class="fw-semibold fs-sm">Alice Moore</td>
                                <td class=" fs-sm">
                                    client15<span class="text-muted">@example.com</span>
                                </td>
                                <td class="">
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                                </td>
                                <td>
                                    <span class="text-muted fs-sm">3 days ago</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center fs-sm">16</td>
                                <td class="fw-semibold fs-sm">David Fuller</td>
                                <td class=" fs-sm">
                                    client16<span class="text-muted">@example.com</span>
                                </td>
                                <td class="">
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                                </td>
                                <td>
                                    <span class="text-muted fs-sm">2 days ago</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center fs-sm">17</td>
                                <td class="fw-semibold fs-sm">Jose Mills</td>
                                <td class=" fs-sm">
                                    client17<span class="text-muted">@example.com</span>
                                </td>
                                <td class="">
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                                </td>
                                <td>
                                    <span class="text-muted fs-sm">4 days ago</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center fs-sm">18</td>
                                <td class="fw-semibold fs-sm">Lisa Jenkins</td>
                                <td class=" fs-sm">
                                    client18<span class="text-muted">@example.com</span>
                                </td>
                                <td class="">
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                                </td>
                                <td>
                                    <span class="text-muted fs-sm">7 days ago</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center fs-sm">19</td>
                                <td class="fw-semibold fs-sm">Jose Wagner</td>
                                <td class=" fs-sm">
                                    client19<span class="text-muted">@example.com</span>
                                </td>
                                <td class="">
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                                </td>
                                <td>
                                    <span class="text-muted fs-sm">2 days ago</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center fs-sm">20</td>
                                <td class="fw-semibold fs-sm">Carol Ray</td>
                                <td class=" fs-sm">
                                    client20<span class="text-muted">@example.com</span>
                                </td>
                                <td class="">
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                                </td>
                                <td>
                                    <span class="text-muted fs-sm">6 days ago</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center fs-sm">21</td>
                                <td class="fw-semibold fs-sm">Jack Greene</td>
                                <td class=" fs-sm">
                                    client21<span class="text-muted">@example.com</span>
                                </td>
                                <td class="">
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                                </td>
                                <td>
                                    <span class="text-muted fs-sm">10 days ago</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center fs-sm">22</td>
                                <td class="fw-semibold fs-sm">Barbara Scott</td>
                                <td class=" fs-sm">
                                    client22<span class="text-muted">@example.com</span>
                                </td>
                                <td class="">
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                                </td>
                                <td>
                                    <span class="text-muted fs-sm">10 days ago</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center fs-sm">23</td>
                                <td class="fw-semibold fs-sm">Albert Ray</td>
                                <td class=" fs-sm">
                                    client23<span class="text-muted">@example.com</span>
                                </td>
                                <td class="">
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                                </td>
                                <td>
                                    <span class="text-muted fs-sm">10 days ago</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center fs-sm">24</td>
                                <td class="fw-semibold fs-sm">Amber Harvey</td>
                                <td class=" fs-sm">
                                    client24<span class="text-muted">@example.com</span>
                                </td>
                                <td class="">
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Disabled</span>
                                </td>
                                <td>
                                    <span class="text-muted fs-sm">3 days ago</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center fs-sm">25</td>
                                <td class="fw-semibold fs-sm">Jose Parker</td>
                                <td class=" fs-sm">
                                    client25<span class="text-muted">@example.com</span>
                                </td>
                                <td class="">
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                                </td>
                                <td>
                                    <span class="text-muted fs-sm">2 days ago</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center fs-sm">26</td>
                                <td class="fw-semibold fs-sm">Barbara Scott</td>
                                <td class=" fs-sm">
                                    client26<span class="text-muted">@example.com</span>
                                </td>
                                <td class="">
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                                </td>
                                <td>
                                    <span class="text-muted fs-sm">8 days ago</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center fs-sm">27</td>
                                <td class="fw-semibold fs-sm">Jose Wagner</td>
                                <td class=" fs-sm">
                                    client27<span class="text-muted">@example.com</span>
                                </td>
                                <td class="">
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                                </td>
                                <td>
                                    <span class="text-muted fs-sm">7 days ago</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center fs-sm">28</td>
                                <td class="fw-semibold fs-sm">Lori Grant</td>
                                <td class=" fs-sm">
                                    client28<span class="text-muted">@example.com</span>
                                </td>
                                <td class="">
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                                </td>
                                <td>
                                    <span class="text-muted fs-sm">7 days ago</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center fs-sm">29</td>
                                <td class="fw-semibold fs-sm">Carol White</td>
                                <td class=" fs-sm">
                                    client29<span class="text-muted">@example.com</span>
                                </td>
                                <td class="">
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                                </td>
                                <td>
                                    <span class="text-muted fs-sm">2 days ago</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center fs-sm">30</td>
                                <td class="fw-semibold fs-sm">Judy Ford</td>
                                <td class=" fs-sm">
                                    client30<span class="text-muted">@example.com</span>
                                </td>
                                <td class="">
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                                </td>
                                <td>
                                    <span class="text-muted fs-sm">3 days ago</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center fs-sm">31</td>
                                <td class="fw-semibold fs-sm">Sara Fields</td>
                                <td class=" fs-sm">
                                    client31<span class="text-muted">@example.com</span>
                                </td>
                                <td class="">
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                                </td>
                                <td>
                                    <span class="text-muted fs-sm">2 days ago</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center fs-sm">32</td>
                                <td class="fw-semibold fs-sm">Susan Day</td>
                                <td class=" fs-sm">
                                    client32<span class="text-muted">@example.com</span>
                                </td>
                                <td class="">
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                                </td>
                                <td>
                                    <span class="text-muted fs-sm">9 days ago</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center fs-sm">33</td>
                                <td class="fw-semibold fs-sm">Susan Day</td>
                                <td class=" fs-sm">
                                    client33<span class="text-muted">@example.com</span>
                                </td>
                                <td class="">
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                                </td>
                                <td>
                                    <span class="text-muted fs-sm">3 days ago</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center fs-sm">34</td>
                                <td class="fw-semibold fs-sm">Ryan Flores</td>
                                <td class=" fs-sm">
                                    client34<span class="text-muted">@example.com</span>
                                </td>
                                <td class="">
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                                </td>
                                <td>
                                    <span class="text-muted fs-sm">4 days ago</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center fs-sm">35</td>
                                <td class="fw-semibold fs-sm">Ryan Flores</td>
                                <td class=" fs-sm">
                                    client35<span class="text-muted">@example.com</span>
                                </td>
                                <td class="">
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                                </td>
                                <td>
                                    <span class="text-muted fs-sm">2 days ago</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center fs-sm">36</td>
                                <td class="fw-semibold fs-sm">Judy Ford</td>
                                <td class=" fs-sm">
                                    client36<span class="text-muted">@example.com</span>
                                </td>
                                <td class="">
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                                </td>
                                <td>
                                    <span class="text-muted fs-sm">6 days ago</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center fs-sm">37</td>
                                <td class="fw-semibold fs-sm">Judy Ford</td>
                                <td class=" fs-sm">
                                    client37<span class="text-muted">@example.com</span>
                                </td>
                                <td class="">
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                                </td>
                                <td>
                                    <span class="text-muted fs-sm">5 days ago</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center fs-sm">38</td>
                                <td class="fw-semibold fs-sm">Ralph Murray</td>
                                <td class=" fs-sm">
                                    client38<span class="text-muted">@example.com</span>
                                </td>
                                <td class="">
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                                </td>
                                <td>
                                    <span class="text-muted fs-sm">4 days ago</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center fs-sm">39</td>
                                <td class="fw-semibold fs-sm">Lori Grant</td>
                                <td class=" fs-sm">
                                    client39<span class="text-muted">@example.com</span>
                                </td>
                                <td class="">
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                                </td>
                                <td>
                                    <span class="text-muted fs-sm">6 days ago</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center fs-sm">40</td>
                                <td class="fw-semibold fs-sm">Lori Moore</td>
                                <td class=" fs-sm">
                                    client40<span class="text-muted">@example.com</span>
                                </td>
                                <td class="">
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                                </td>
                                <td>
                                    <span class="text-muted fs-sm">4 days ago</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-responsive-bs5/css/responsive.bootstrap5.min.css') }}">
@endsection


@section('js')
    <!-- jQuery (required for DataTables plugin) -->
    <script src="{{ asset('js/lib/jquery.min.js') }}"></script>

    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/buttons.print.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/buttons.html5.min.js') }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('js/pages/be_tables_datatables.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#table-user').DataTable({
                pageLength: 10,
                lengthMenu: [
                    [5, 10, 15, 20, 1000],
                    [5, 10, 15, 20, 'All']
                ],
                responsive: true,
                autoWidth: false,
                buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
                dom: "<'row'<'col-sm-12'<'text-left py-2 mb-2'B>>>" +
                    "<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>><'row'<'col-sm-12'tr>><'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>"
            });
        });
    </script>
@endsection
