@extends('layouts.frontend.main_app')

@section('bg-section')
@endsection

@section('section')
    <div class="section-empty section-item">
        <div class="container content">
            <h5 class="text-bold" class=" text-center">ORDERs' TABLE</h5>
            <table class="table table-condensed table-hover table-striped bootgrid-table" aria-busy="false">
                <thead>
                    <tr>
                        <th data-column-id="id" class="text-left" style=""><a href="javascript:void(0);"
                                class="column-header-anchor sortable"><span class="text">

                                    ID

                                </span><span class="icon fa"></span></a></th>
                        <th data-column-id="name" class="text-left" style=""><a href="javascript:void(0);"
                                class="column-header-anchor sortable"><span class="text">

                                    Name

                                </span><span class="icon fa"></span></a></th>
                        <th data-column-id="logo" class="text-left" style=""><a href="javascript:void(0);"
                                class="column-header-anchor sortable"><span class="text">

                                    Logo

                                </span><span class="icon fa"></span></a></th>
                        <th data-column-id="more-info" class="text-left" style=""><a href="javascript:void(0);"
                                class="column-header-anchor sortable"><span class="text">

                                    More info

                                </span><span class="icon fa"></span></a></th>
                        <th data-column-id="link" class="text-left" style=""><a href="javascript:void(0);"
                                class="column-header-anchor sortable"><span class="text">

                                    Status

                                </span><span class="icon fa"></span></a></th>
                        <th data-column-id="link-icon" class="text-left" style=""><a href="javascript:void(0);"
                                class="column-header-anchor sortable"><span class="text">

                                    Link

                                </span><span class="icon fa fa-angle-down"></span></a></th>
                    </tr>
                </thead>
                <tbody>
        
                @foreach ( $orders as $order)
                <tr data-row-id="{{$order->id}}">
                <td class="text-left" style="">{{$order->id}}</td>
                <td class="text-left" style="">{{$order->transaction_id }}</td>
                <td class="text-left" style=""><a class="lightbox"
                        href="{{asset('assets/images/gallery/square-1.jpg')}}"><img
                                src="{{asset('assets/images/gallery/square-1.jpg')}}"></a></td>
                <td class="text-left" style=""><a href="https://it.wikipedia.org/wiki/Walter_White"
                        class="btn btn-default btn-xs">Read more</a></td>
                <td class="text-left" style=""><a href="https://it.wikipedia.org/wiki/Walter_White"
                        class="link">{{$order->status}}</a></td>
                <td class="text-left" style=""><a target="_blank"
                        href="https://it.wikipedia.org/wiki/Walter_White" class="link"><i
                                class="fa fa-external-link"></i></a></td>
                </tr>
                @endforeach

                </tbody>
            </table>
            <div id="undefined-footer" class="bootgrid-footer container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <ul class="pagination">
                            <li class="first disabled" aria-disabled="true"><a href="#first" class="button">«</a>
                            </li>
                            <li class="prev disabled" aria-disabled="true"><a href="#prev"
                                    class="button">&lt;</a></li>
                            <li class="page-1 active" aria-disabled="false" aria-selected="true"><a href="#1"
                                    class="button">1</a></li>
                            <li class="next disabled" aria-disabled="true"><a href="#next"
                                    class="button">&gt;</a></li>
                            <li class="last disabled" aria-disabled="true"><a href="#last" class="button">»</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 infoBar">
                        <div class="infos">Showing 1 to 8 of 8 entries</div>
                    </div>
                </div>
            </div>
            <hr class="space" />
            <hr />
            <hr class="space" />
        </div>
    </div>
@endsection
