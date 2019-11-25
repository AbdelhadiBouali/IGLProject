@extends('layouts.adminfront')

@section('content')
<div class="container">
@if(\Session::has('success'))
                <div class="alert">
                <h4> {{ \Session::get('success') }}</h4>
                </div>
                     @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard Administrateur</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Vous êtes connecté au tant qu' <strong>ADMINISTRATEUR</strong>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
