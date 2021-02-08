`@extends('layouts.main',['name' => 'home'])
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="{!!  route('role.index') !!}">
                                <i class="ion ion-ios-list-outline mr-2"></i>{{ __('Roles') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{!!  route('role.create') !!}">
                                <i class="ion ion-plus mr-2"></i>{{ __('Create') }}
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card-body table-responsive">
                    {{ $dataTable->table() }}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    {{ $dataTable->scripts() }}
@endsection