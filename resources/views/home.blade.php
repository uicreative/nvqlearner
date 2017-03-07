@extends('layouts.app')

@section('content')
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <!-- TASKS -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">My Units</h3>
                            <div class="right">
                                <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                            </div>
                        </div>
                        <div class="panel-body">
                            <ul class="list-unstyled task-list">
                                <li>
                                    <p>Test 1 <span class="label-percent">23%</span></p>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width:23%">
                                            <span class="sr-only">23% Complete</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <p>test 2 <span class="label-percent">80%</span></p>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <p>Test 3<span class="label-percent">100%</span></p>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                            <span class="sr-only">Success</span>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!-- END TASKS -->
                </div>
                <div class="col-md-6">
                    <!-- RECENT PURCHASES -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Recent Purchases</h3>
                            <div class="right">
                                <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                            </div>
                        </div>
                        <div class="panel-body no-padding">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Order No.</th>
                                    <th>Name</th>
                                    <th>Amount</th>
                                    <th>Date &amp; Time</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><a href="#">763648</a></td>
                                    <td>Steve</td>
                                    <td>$122</td>
                                    <td>Oct 21, 2016</td>
                                    <td><span class="label label-success">COMPLETED</span></td>
                                </tr>
                                <tr>
                                    <td><a href="#">763649</a></td>
                                    <td>Amber</td>
                                    <td>$62</td>
                                    <td>Oct 21, 2016</td>
                                    <td><span class="label label-warning">PENDING</span></td>
                                </tr>
                                <tr>
                                    <td><a href="#">763650</a></td>
                                    <td>Michael</td>
                                    <td>$34</td>
                                    <td>Oct 18, 2016</td>
                                    <td><span class="label label-danger">FAILED</span></td>
                                </tr>
                                <tr>
                                    <td><a href="#">763651</a></td>
                                    <td>Roger</td>
                                    <td>$186</td>
                                    <td>Oct 17, 2016</td>
                                    <td><span class="label label-success">SUCCESS</span></td>
                                </tr>
                                <tr>
                                    <td><a href="#">763652</a></td>
                                    <td>Smith</td>
                                    <td>$362</td>
                                    <td>Oct 16, 2016</td>
                                    <td><span class="label label-success">SUCCESS</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Last 24 hours</span></div>
                                <div class="col-md-6 text-right"><a href="#" class="btn btn-primary">View All Purchases</a></div>
                            </div>
                        </div>
                    </div>
                    <!-- END RECENT PURCHASES -->
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
@endsection
