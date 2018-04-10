@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Operator : {{ Auth::user()->name }} | Cabang : {{ Auth::user()->tipe }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(Auth::user()->tipe=='SA')
                       @include('dasborSystem/superAdmin')
                    @elseif(Auth::user()->tipe=='AC')
                       @include('dasborSystem/adminCabang')
                    @else
                       @include('dasborSystem/kasirCabang')
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
