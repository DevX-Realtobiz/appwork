@extends('layouts.layout-2')

@section('scripts')
    <script src="{{ mix('/js/ui_app-brand.js') }}"></script>
@endsection

@section('content')
    <h4 class="font-weight-bold py-3 mb-4">
        <span class="text-muted font-weight-light">UI elements /</span> App brand
    </h4>

    <hr class="border-light container-m--x mt-0 mb-4">

    <div class="ui-bordered p-4 mb-4">
        <div class="app-brand">
            <a href="javascript:void(0)" class="app-brand-text text-big text-dark">Brand</a>
        </div>
    </div>

    <div class="ui-bordered p-4">
        <div class="app-brand">
            <img src="/img/logo.png" alt="" class="app-brand-logo ui-w-40">
            <a href="javascript:void(0)" class="app-brand-text text-big text-dark ml-2">Brand</a>
        </div>
    </div>

    <hr class="border-light container-m--x my-4">
    <h6 class="text-muted small font-weight-bold py-3 my-4">
        Within navbar
    </h6>

    <nav class="navbar navbar-expand-lg bg-light">
        <!-- Brand -->
        <a class="navbar-brand app-brand" href="javascript:void(0)">
            <img src="/img/logo.png" alt="" class="app-brand-logo ui-w-40">
            <span class="app-brand-text ml-2">Brand</span>
        </a>
        <!-- / Brand -->

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-app-brand-example">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar-app-brand-example">
            <div class="navbar-nav mr-auto">
                <a class="nav-item nav-link active" href="javascript:void(0)">Home</a>
                <a class="nav-item nav-link" href="javascript:void(0)">Features</a>
                <a class="nav-item nav-link" href="javascript:void(0)">Pricing</a>
            </div>
        </div>
    </nav>

    <hr class="border-light container-m--x my-4">
    <h6 class="text-muted small font-weight-bold py-3 my-4">
        Within sidenav
    </h6>

    <div>
        <button type="button" id="sidenav-app-brand-toggle-collapsed" class="btn btn-primary mb-4">Toggle collapsed</button>
    </div>

    <!-- Simple text -->

    <div id="sidenav-app-brand-1" class="sidenav sidenav-vertical bg-light d-inline-flex align-top mr-4 mb-4" style="height: 400px">
        <!-- Brand -->
        <div class="app-brand py-3">
            <a href="javascript:void(0)" class="app-brand-text text-big sidenav-text">Brand</a>
        </div>
        <div class="sidenav-divider my-0"></div>
        <!-- / Brand -->

        <ul class="sidenav-inner py-3">
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-notifications-outline"></i><div>Item 1</div></a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-settings"></i><div>Item 2</div></a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-paper"></i><div>Item 3</div></a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-flask"></i><div>Item 4</div></a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-basketball"></i><div>Item 5</div></a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-bonfire"></i><div>Item 6</div></a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cafe"></i><div>Item 7</div></a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cloud-outline"></i><div>Item 8</div></a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-code"></i><div>Item 9</div></a>
            </li>
        </ul>
    </div>

    <!-- With logo -->

    <div id="sidenav-app-brand-2" class="sidenav sidenav-vertical bg-light d-inline-flex align-top mr-4 mb-4" style="height: 400px">
        <!-- Brand -->
        <div class="app-brand py-3">
            <img src="/img/logo.png" alt="" class="app-brand-logo ui-w-40">
            <a href="javascript:void(0)" class="app-brand-text text-big sidenav-text ml-2">
                Brand<br>
                <span class="text-tiny font-weight-semibold opacity-25">ADMIN AREA</span>
            </a>
        </div>
        <div class="sidenav-divider my-0"></div>
        <!-- / Brand -->

        <ul class="sidenav-inner py-3">
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-notifications-outline"></i><div>Item 1</div></a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-settings"></i><div>Item 2</div></a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-paper"></i><div>Item 3</div></a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-flask"></i><div>Item 4</div></a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-basketball"></i><div>Item 5</div></a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-bonfire"></i><div>Item 6</div></a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cafe"></i><div>Item 7</div></a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cloud-outline"></i><div>Item 8</div></a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-code"></i><div>Item 9</div></a>
            </li>
        </ul>
    </div>

    <!-- With layout sidenav toggle -->

    <div id="sidenav-app-brand-3" class="sidenav sidenav-vertical bg-light d-inline-flex align-top mr-4 mb-4" style="height: 400px">
        <!-- Brand -->
        <div class="app-brand py-3">
            <img src="/img/logo.png" alt="" class="app-brand-logo ui-w-40">
            <a href="javascript:void(0)" class="app-brand-text text-big sidenav-text ml-2">Brand</a>
            <a href="javascript:void(0)" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
                <i class="ion ion-md-menu align-middle"></i>
            </a>
        </div>
        <div class="sidenav-divider my-0"></div>
        <!-- / Brand -->

        <ul class="sidenav-inner py-3">
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-notifications-outline"></i><div>Item 1</div></a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-settings"></i><div>Item 2</div></a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-paper"></i><div>Item 3</div></a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-flask"></i><div>Item 4</div></a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-basketball"></i><div>Item 5</div></a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-bonfire"></i><div>Item 6</div></a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cafe"></i><div>Item 7</div></a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-ios-cloud-outline"></i><div>Item 8</div></a>
            </li>
            <li class="sidenav-item">
                <a href="javascript:void(0)" class="sidenav-link"><i class="sidenav-icon ion ion-md-code"></i><div>Item 9</div></a>
            </li>
        </ul>
    </div>
@endsection