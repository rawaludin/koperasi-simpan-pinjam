@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="card card-default">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <p>
                        Total Pinjaman : Rp{{ number_format($loanRequest->amount) }} <br/>
                        Jangka Waktu : {{ $loanRequest->duration }} bulan
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
