@extends('layouts.admin')
@section('head')
    <title>Shryd | </title>
@endsection
@section('main')
    <div class="span12">
        <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
                <h3>Shryd Passengers</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th> Thumbnail </th>
                        <th> Passenger Name </th>
                        <th> Email</th>
                        <th> Phone</th>
                        <th> Verified</th>
                        <th> View details</th>
                        <th class="td-actions"> Action </th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($passengers as $passenger)
                    <tr>
                        <td> <img src="#"> </td>
                        <td>{{$passenger->name}} </td>
                        <td> {{$passenger->email}} </td>
                        <td> {{$passenger->phone}} </td>
                        <td class="td-actions">
                            @if($passenger->verified)
                            <a href="javascript:;" class="btn btn-small btn-success" title="verified">
                                <i class="btn-icon-only icon-ok"> </i>
                            </a>

                                @else
                                    <a href="javascript:;" class="btn btn-small btn-danger">
                                        <i class="btn-icon-only icon-ban-circle"> </i>
                                    </a>
                            @endif

                        </td>
                        <td><a href="javascript:;" class="btn btn-info btn-small">
                                View <i class="btn-icon-only icon-eye-open"> </i>
                            </a></td>
                        <td>
                            @if($passenger->status)

                                <a href="javascript:;" class="btn btn-warning btn-small" title="suspend">
                                    <i class="btn-icon-only icon-warning-sign"> </i>
                                </a>
                            @else
                                <a href="javascript:;" class="btn btn-success btn-small" title="unsuspend">
                                    <i class="btn-icon-only icon-ok"> </i>
                                </a>
                            @endif
                            <a href="javascript:;" class="btn btn-danger btn-small" title="delete">
                                <i class="btn-icon-only icon-remove"> </i>
                            </a>
                        </td>
                    </tr>
                    @empty
                        <tr> No records</tr>
                    @endforelse
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

