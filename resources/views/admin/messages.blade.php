@extends('layouts.admin')
@section('head')
    <title>Shryd | </title>
@endsection
@section('main')
    <div class="span12">
        <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
                <h3>Request</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th> Date </th>
                        <th> Passenger</th>
                        <th> Origin </th>
                        <th> Destination</th>
                        <th> Departure day</th>
                        <th> Departure time</th>
                        <th> Seats</th>
                        <th> offer per seat </th>
                        <th> Status</th>
                        <th> Action</th>


                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td> 28th Nov, 6:06PM </td>
                        <td> John Bull </td>
                        <td> Ikorodu </td>
                        <td> Lagos Island </td>
                        <td> 29th Nov</td>
                        <td> 6:06PM </td>
                        <td> 4 </td>
                        <td> 200 </td>
                        <td>
                            <a href="javascript:;" class="btn btn-success btn-small">
                                Completed <i class="btn-icon-only icon-ok"> </i>
                            </a>
                        </td>
                        <td class="td-actions">
                            <a href="javascript:;" class="btn btn-small btn-info" title="view">
                                View <i class="btn-icon-only icon-eye-open"> </i>
                            </a>
                            <a href="javascript:;" class="btn btn-danger btn-small" title="delete">
                                Delete <i class="btn-icon-only icon-remove"> </i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td> 28th Nov, 6:06PM </td>
                        <td> John Bull </td>
                        <td> Ikorodu </td>
                        <td> Lagos Island </td>
                        <td> 29th Nov</td>
                        <td> 6:06PM </td>
                        <td> 4 </td>
                        <td> 200 </td>
                        <td>
                            <a href="javascript:;" class="btn btn-success btn-small">
                                Completed <i class="btn-icon-only icon-ok"> </i>
                            </a>
                        </td>
                        <td class="td-actions">
                            <a href="javascript:;" class="btn btn-small btn-info" title="view">
                                View <i class="btn-icon-only icon-eye-open"> </i>
                            </a>
                            <a href="javascript:;" class="btn btn-danger btn-small" title="delete">
                                Delete <i class="btn-icon-only icon-remove"> </i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td> 28th Nov, 6:06PM </td>
                        <td> John Bull </td>
                        <td> Ikorodu </td>
                        <td> Lagos Island </td>
                        <td> 29th Nov</td>
                        <td> 6:06PM </td>
                        <td> 4 </td>
                        <td> 200 </td>
                        <td>
                            <a href="javascript:;" class="btn btn-success btn-small">
                                Completed <i class="btn-icon-only icon-ok"> </i>
                            </a>
                        </td>
                        <td class="td-actions">
                            <a href="javascript:;" class="btn btn-small btn-info" title="view">
                                View <i class="btn-icon-only icon-eye-open"> </i>
                            </a>
                            <a href="javascript:;" class="btn btn-danger btn-small" title="delete">
                                Delete <i class="btn-icon-only icon-remove"> </i>
                            </a>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
            <!-- /widget-content -->
        </div>
        <!-- /widget -->
    </div>


@endsection
@push('scripts')


@endpush

