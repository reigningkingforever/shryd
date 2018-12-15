@extends('layouts.admin')
@section('head')
    <title>Shryd | </title>
@endsection
@section('main')
    <div class="span12">
        <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
                <h3>Vehicles</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th> Thumbnail </th>
                        <th> Type </th>
                        <th> Brand </th>
                        <th> Model</th>
                        <th> Owned by</th>
                        <th> Particulars</th>
                        <th> Verified</th>
                        <th class="td-actions"> Action </th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($vehicles as $vehicle)
                    <tr>
                        <td> <img src="#"> </td>
                        <td>{{$vehicle->type}} </td>
                        <td>{{$vehicle->brand}} </td>
                        <td>{{$vehicle->model}} </td>
                        <td> <a href="#">{{$vehicle->user->name}}</a> </td>
                        <td class="td-actions">
                            @if($vehicle->document)
                                <a href="javascript:;" class="btn btn-small btn-info" title="view">
                                    View <i class="btn-icon-only icon-eye-open"> </i>
                                </a>
                                @else
                                <a href="javascript:;" class="btn btn-small btn-danger">
                                    Null <i class="btn-icon-only icon-exclamation-sign"> </i>
                                </a>
                            @endif


                        </td>
                        <td>
                            @if($vehicle->verified)
                            <a href="javascript:;" class="btn btn-success btn-small">
                                 <i class="btn-icon-only icon-ok"> </i>
                            </a>
                                @else
                                <a href="javascript:;" class="btn btn-small btn-danger">
                                    <i class="btn-icon-only icon-ban-circle"> </i>
                                </a>
                                @endif
                        </td>
                        <td>
                            @if($vehicle->status)
                            <a href="javascript:;" class="btn btn-default btn-small" title="suspend">
                               Suspend <i class="btn-icon-only icon-warning-sign"> </i>
                            </a>
                            @else
                                <a href="javascript:;" class="btn btn-small btn-default">
                                    Verify <i class="btn-icon-only icon-ok"> </i>
                                </a>
                                @endif
                            <a href="javascript:;" class="btn btn-danger btn-small" title="delete">
                               Delete <i class="btn-icon-only icon-remove"> </i>
                            </a>
                        </td>
                    </tr>
                    @empty <tr>No vehicle</tr>
                    @endforelse
                    {{--<tr>--}}
                        {{--<td> <img src="#"> </td>--}}
                        {{--<td>SUV </td>--}}
                        {{--<td> Nissan </td>--}}
                        {{--<td> Pathfinder </td>--}}
                        {{--<td> <a href="#">John Bull</a> </td>--}}
                        {{--<td class="td-actions">--}}
                            {{--<a href="javascript:;" class="btn btn-small btn-danger">--}}
                               {{--Null <i class="btn-icon-only icon-exclamation-sign"> </i>--}}
                            {{--</a>--}}

                        {{--</td>--}}
                        {{--<td>--}}
                            {{--<a href="javascript:;" class="btn btn-small btn-danger">--}}
                                {{--<i class="btn-icon-only icon-ban-circle"> </i>--}}
                            {{--</a>--}}
                        {{--</td>--}}
                        {{--<td>--}}
                            {{--<a href="javascript:;" class="btn btn-small btn-success">--}}
                               {{--Verify <i class="btn-icon-only icon-ok"> </i>--}}
                            {{--</a>--}}
                            {{--<a href="javascript:;" class="btn btn-danger btn-small" title="delete">--}}
                                {{--Delete <i class="btn-icon-only icon-remove"> </i>--}}
                            {{--</a>--}}
                        {{--</td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<td> <img src="#"> </td>--}}
                        {{--<td>SUV </td>--}}
                        {{--<td> Nissan </td>--}}
                        {{--<td> Pathfinder </td>--}}
                        {{--<td> <a href="#">John Bull</a> </td>--}}
                        {{--<td class="td-actions">--}}
                            {{--<a href="javascript:;" class="btn btn-small btn-info" title="view">--}}
                                {{--View <i class="btn-icon-only icon-eye-open"> </i>--}}
                            {{--</a>--}}

                        {{--</td>--}}
                        {{--<td>--}}
                            {{--<a href="javascript:;" class="btn btn-success btn-small">--}}
                                {{--<i class="btn-icon-only icon-ok"> </i>--}}
                            {{--</a>--}}
                        {{--</td>--}}
                        {{--<td>--}}
                            {{--<a href="javascript:;" class="btn btn-warning btn-small" title="suspend">--}}
                                {{--Suspend <i class="btn-icon-only icon-warning-sign"> </i>--}}
                            {{--</a>--}}
                            {{--<a href="javascript:;" class="btn btn-danger btn-small" title="delete">--}}
                                {{--Delete <i class="btn-icon-only icon-remove"> </i>--}}
                            {{--</a>--}}
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

