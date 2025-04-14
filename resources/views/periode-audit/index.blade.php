@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Periode Audit</h1>
        
        <table class="table">
            <thead>
                <tr>
                    <th>Nama Periode</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Berakhir</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($periods as $period)
                    <tr>
                        <td>{{ $period->nama_periode }}</td>
                        <td>{{ $period->tanggal_mulai }}</td>
                        <td>{{ $period->tanggal_berakhir }}</td>
                        <td>{{ $period->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $periods->links() }} <!-- Untuk pagination -->
    </div>
@endsection