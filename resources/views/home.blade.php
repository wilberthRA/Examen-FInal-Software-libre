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

                    <center style="font-size: 30px; color: Steelblue;"> Examen Final ISW811 - Wilberth José Rojas Arce</center>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
