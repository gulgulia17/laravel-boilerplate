@extends('layouts.main',['name' => 'home'])
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link" href="{!!  route('user.index') !!}">
                                <i class="ion ion-ios-list-outline mr-2"></i>{{ __('User') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{!!  route('user.create') !!}">
                                <i class="ion ion-plus mr-2"></i>{{ __('Create') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{!!  route('user.edit', $user->id) !!}">
                                <i class="fas fa-pencil-alt mr-2"></i>{{ __('Edit') }}
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <form action="{{ route('user.update', $user->id) }}" method="post">
                        @method('patch')
                        @include('admin.user.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
