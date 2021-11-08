@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <h3>Ini Halaman User</h3>
                    <table class="table-hover table bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Tanggal Buat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($objek as $item)
                               <tr>
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        {{ $item->name }}   
                                    </td>
                                    <td>
                                        {{ $item->email }}
                                    </td>
                                    <td>{{ $item->created_at }}</td>
                            </tr> 
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
