@extends('layouts.admin')
@section('head')
    <title>Shryd | </title>
@endsection
@section('main')
    <div class="span12">
        <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
                <h3>Bookings</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th> Date </th>
                        <th> Ride</th>
                        <th> Passenger</th>
                        <th> Origin </th>
                        <th> Destination</th>
                        <th> Departure date</th>
                        <th> Seats</th>
                        <th> Fare</th>
                        <th> Payment mode</th>
                        <th> Status</th>
                        <th> Action</th>


                    </tr>
                    </thead>
                    <tbody>
                    @forelse($bookings as $booking)
                    <tr>
                        <td> {{$booking->created_at}} </td>
                        <td> <a href="#">{{$booking->ride->id}}</a> </td>
                        <td> {{$booking->user->name}} </td>
                        <td> {{$booking->ride->origin}} </td>
                        <td> {{$booking->ride->destination}} </td>
                        <td> {{$booking->ride->departure}}</td>
                        <td> {{$booking->seats}} </td>
                        <td> {{$booking->seats * $booking->ride->unit_cost}} </td>
                        <td> {{$booking->payment_mode}} </td>
                        <td>
                            @if($booking->status == 'completed')
                            <a href="javascript:;" class="btn btn-success btn-small">
                                Completed </i>
                            </a>
                                @elseif($booking->status =='waiting')
                                <a href="javascript:;" class="btn btn-default btn-small">
                                    Waiting </i>
                                </a>
                            @else
                                <a href="javascript:;" class="btn btn-warning btn-small" title="suspend">
                                    Cancelled </i>
                                </a>
                            @endif
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
                    @empty
                    <tr>No booking</tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
            <div>{{$bookings->links()}}</div>
            <!-- /widget-content -->
        </div>
        <!-- /widget -->
    </div>


@endsection
@push('scripts')

@endpush

