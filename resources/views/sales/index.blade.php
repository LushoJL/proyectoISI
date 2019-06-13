@extends('layouts.app', ['activePage' => 'sales', 'titlePage' => __('Venta')])

@section('content')

    <div class="content" id="usurol">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            @if (session('status'))
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <i class="material-icons">close</i>
                                            </button>
                                            <span>{{ session('status') }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-6 text-left">
                                    <button type="button" class="btn btn-success "  data-toggle="modal" data-target="#createSale">
                                        Nueva venta
                                        <div class="ripple-container"></div>
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <ul class="nav nav-pills nav-pills-primary" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#tablesalida" role="tablist" aria-expanded="true">
                                            Salida
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#history" role="tablist" aria-expanded="false">
                                           Historial de Salida
                                        </a>
                                    </li>

                                </ul>
                            </div>

                                <div class="tab-content tab-space">
                                    <div class="tab-pane active" id="tablesalida" aria-expanded="true">
                                        hola mundo
                                    </div>
                                    <div class="tab-pane" id="history" aria-expanded="false">
                                       @include('sales.historysale')
                                    </div>

                                </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
{{--    modal de realizar ventaa--}}
        @include('sales.create')
    </div>

@endsection

