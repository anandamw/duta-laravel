@extends('admin.layouts.app')


@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h4 class="card-title">Profile Datatable</h4>
                <a href="/kandidat/create" class="btn btn-primary">Tambah Kandidat</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example3" class="display min-w850">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Fakultas</th>
                                <th>Prodi</th>
                                <th>Jenis Kelamin</th>
                                <th>Foto</th>
                                <th>Email</th>
                                <th>Waktu</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kandidats as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->fakultas }}</td>
                                    <td>{{ $item->prodi }}</td>
                                    @if ($item->jenis_kelamin == 0)
                                        <td>Perempuan</td>
                                    @elseif ($item->jenis_kelamin == 1)
                                        <td>Laki-Laki</td>
                                    @endif
                                    <td>{{ $item->gambar }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                    class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                    class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
