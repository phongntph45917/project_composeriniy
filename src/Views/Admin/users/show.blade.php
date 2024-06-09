@extends('layouts.master')

@section('title')
    Xem chi tiết: {{ $users['name'] }}
@endsection

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>TRƯỜNG</th>
                <th>THÔNG TIN</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($user as $key => $value)
                <tr>
                    <td>{{ $key }}</td>
                    <td>{!! $value !!}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
