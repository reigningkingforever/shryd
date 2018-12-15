@extends('layouts.admin')
@section('head')
    <title>Shryd | </title>
@endsection
@section('main')
    <div class="span12">
        <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
                <h3>Rides</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th> Date </th>
                        <th> Origin </th>
                        <th> Destination</th>
                        <th> Seats</th>
                        <th> Offer per seat</th>
                        <th> Seat booked</th>
                        <th> Driver</th>
                        <th> Departure day</th>
                        <th> Departure time</th>
                        <th> Details</th>
                        <th> Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($rides as $ride)
                    <tr>
                        <td> {{$ride->created_at}} </td>
                        <td> {{$ride->origin}} </td>
                        <td> {{$ride->destination}} </td>
                        <td> {{$ride->available_seats}} </td>
                        <td> {{$ride->unit_cost}} </td>
                        <td> {{$ride->bookings->sum('seats')}} </td>
                        <td> {{$ride->user->name}} </td>
                        <td> {{$ride->departure}}</td>
                        <td> {{$ride->departure}} </td>
                        <td class="td-actions">
                            <a href="javascript:;" class="btn btn-small btn-default" title="view">
                                View <i class="btn-icon-only icon-eye-open"> </i>
                            </a>

                        </td>
                        <td>
                            @if($ride->status == 'departed')
                                <a href="javascript:;" class="btn btn-default btn-small">
                                    {{$ride->status}} <i class="btn-icon-only icon-ok"> </i>
                                </a>
                                @elseif($ride->status == 'fullybooked')
                                <a href="javascript:;" class="btn btn-success btn-small">
                                    Fully booked <i class="btn-icon-only icon-group"> </i>
                                </a>
                                @elseif($ride->status == 'available')
                                <a href="javascript:;" class="btn btn-info btn-small" title="suspend">
                                    Available <i class="btn-icon-only icon-plus-sign"> </i>
                                </a>
                                @else
                                <a href="javascript:;" class="btn btn-danger btn-small" title="suspend">
                                    Cancelled <i class="btn-icon-only icon-warning-sign"> </i>
                                </a>
                            @endif
                        </td>
                    </tr>
                        @empty
                        <tr>No ride</tr>
                    @endforelse
                    {{--<tr>--}}
                        {{--<td> 28th Nov, 6:06PM </td>--}}
                        {{--<td> Ride24 </td>--}}
                        {{--<td> Ketu </td>--}}
                        {{--<td> Ajah </td>--}}
                        {{--<td> 4 </td>--}}
                        {{--<td> 2 </td>--}}
                        {{--<td>  </td>--}}
                        {{--<td> 29th Nov</td>--}}
                        {{--<td> 2:00PM </td>--}}
                        {{--<td class="td-actions">--}}
                            {{--<a href="javascript:;" class="btn btn-small btn-default" title="view">--}}
                                {{--View <i class="btn-icon-only icon-eye-open"> </i>--}}
                            {{--</a>--}}

                        {{--</td>--}}
                        {{--<td>--}}
                            {{--<a href="javascript:;" class="btn btn-warning btn-small">--}}
                                {{--Awaiting <i class="btn-icon-only icon-refresh"> </i>--}}
                            {{--</a>--}}
                        {{--</td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<td> 28th Nov, 6:06PM </td>--}}
                        {{--<td> Ride24 </td>--}}
                        {{--<td> Ketu </td>--}}
                        {{--<td> 4 </td>--}}
                        {{--<td> 100 </td>--}}
                        {{--<td> 1 </td>--}}
                        {{--<td> John Bull </td>--}}
                        {{--<td> 29th Nov</td>--}}
                        {{--<td> 2:00PM </td>--}}
                        {{--<td class="td-actions">--}}
                            {{--<a href="javascript:;" class="btn btn-small btn-default" title="view">--}}
                                {{--View <i class="btn-icon-only icon-eye-open"> </i>--}}
                            {{--</a>--}}

                        {{--</td>--}}
                        {{--<td>--}}
                            {{----}}
                        {{--</td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<td> 28th Nov, 6:06PM </td>--}}
                        {{--<td> Ride24 </td>--}}
                        {{--<td> Ketu </td>--}}
                        {{--<td> Ajah </td>--}}
                        {{--<td> 4 </td>--}}
                        {{--<td> 100 </td>--}}
                        {{--<td> John Bull </td>--}}
                        {{--<td> 29th Nov</td>--}}
                        {{--<td> 2:00PM </td>--}}
                        {{--<td class="td-actions">--}}
                            {{--<a href="javascript:;" class="btn btn-small btn-default" title="view">--}}
                                {{--View <i class="btn-icon-only icon-eye-open"> </i>--}}
                            {{--</a>--}}

                        {{--</td>--}}
                        {{--<td>--}}
                            {{----}}
                        {{--</td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<td> 28th Nov, 6:06PM </td>--}}
                        {{--<td> Ride24 </td>--}}
                        {{--<td> Ketu </td>--}}
                        {{--<td> Ajah </td>--}}
                        {{--<td> 4 </td>--}}
                        {{--<td> 100 </td>--}}
                        {{--<td> John Bull </td>--}}
                        {{--<td> 29th Nov</td>--}}
                        {{--<td> 2:00PM </td>--}}
                        {{--<td class="td-actions">--}}
                            {{--<a href="javascript:;" class="btn btn-small btn-default" title="view">--}}
                                {{--View <i class="btn-icon-only icon-eye-open"> </i>--}}
                            {{--</a>--}}

                        {{--</td>--}}
                        {{--<td>--}}
                            {{----}}
                        {{--</td>--}}
                    {{--</tr>--}}

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

