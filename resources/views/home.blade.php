@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body" style="aligntext:center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <center style="font-size: 30px;"> Examen Final ISW811 - <span style="color: red;">Wilberth José Rojas Arce</span></center>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
