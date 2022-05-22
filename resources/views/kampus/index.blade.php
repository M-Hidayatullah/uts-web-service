@extends('layouts.main')

@section('title')
    Kampus
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Kampus</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('home.index') }}">Beranda</a></div>
                <div class="breadcrumb-item">Kampus</div>
            </div>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Daftar Kampus</h4>
                    <div class="card-header-action">
                        <a href="{{ route('kampuses.create') }}" class="btn btn-primary">
                            <i class="fa fa-plus"></i> Tambah Kampus
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="table-1">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Kampus</th>
                                    <th>Alamat Kampus</th>
                                    <th>No.HP</th>
                                    <th>Email</th>
                                    <th>Website</th>
                                    <th>facebook</th>
                                    <th>Twitter</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kampus as $key => $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->alamat }}</td>
                                        <td>{{ $item->no_hp }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->website }}</td>
                                        <td>{{ $item->facebook ?? 'Tidak Ada' }}</td>
                                        <td>{{ $item->twitter ?? 'Tidak Ada'}}</td>
                                        <td class="text-center">
                                            <div class="d-flex d-inline justify-content-center">
                                                <a href="{{ route('kampuses.edit', $item->id) }}"
                                                    class="btn btn-sm btn-success ml-1">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>

                                                <form action="{{ route('kampuses.destroy', $item->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm ml-1"
                                                        onclick="return confirm('Apa Anda yakin ingin hapus data ini ?');">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
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
    </section>
@endsection
