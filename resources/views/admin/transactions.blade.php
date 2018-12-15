@extends('layouts.admin')
@section('head')
    <title>Shryd | </title>
@endsection
@section('main')
    <div class="span12">
        <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
                <h3>Transactions</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th> User </th>
                        <th> Type </th>
                        <th> Type no</th>
                        <th> Amount</th>
                        <th> Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>John Bull </td>
                        <td> Wallet funding </td>
                        <td> W04 </td>
                        <td> 3293 </td>
                        <td> Successful </td>

                    </tr>
                    <tr>
                        <td>John Bull </td>
                        <td> Ride Payment </td>
                        <td> R234 </td>
                        <td> 30 </td>
                        <td> Successful </td>

                    </tr>
                    <tr>
                        <td>John Bull </td>
                        <td> Ride Payment </td>
                        <td> R234 </td>
                        <td> 30 </td>
                        <td> Successful </td>

                    </tr>
                    <tr>
                        <td>John Bull </td>
                        <td> Withdrawal </td>
                        <td> W20 </td>
                        <td> 30 </td>
                        <td> Successful </td>

                    </tr><tr>
                        <td>John Bull </td>
                        <td> Withdrawal </td>
                        <td> W20 </td>
                        <td> 30 </td>
                        <td> Successful </td>

                    </tr>
                    <tr>
                        <td>John Bull </td>
                        <td> Service Charge </td>
                        <td> S234 </td>
                        <td> 30 </td>
                        <td> Successful </td>

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

