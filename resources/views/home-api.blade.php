@extends('layouts.app-api')

@section('content')

    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <strong>Home API 1</strong><br><br>
            <a class="btn btn-primary" href="{{ route('merchantsalebonus') }}" role="button">Merchant Sale Bonus</a><br><br>
            <a class="btn btn-primary" href="{{ route('convertshoppingpoint') }}" role="button">Convert Shopping Point</a><br><br>
        </div>
    </div>


@endsection
