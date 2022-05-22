@extends('layouts.main')

@section('title')
    Edit Kampus
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
            <div class="row">
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Kampus</h4>
                            <div class="card-header-action">
                                <a href="{{ route('kampuses.index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('kampuses.update', $kampus->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="nama">* Nama Kampus</label>
                                    <input type="text" id="nama" name="nama" class="form-control @error('nama') is-invalid @enderror"
                                           value="{{ $kampus->nama }}" required>
                                    @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="alamat">* Alamat Kampus</label>
                                    <textarea name="alamat" id="alamat" rows="6" style="height: 131px;"
                                              class="form-control @error('alamat') is-invalid @enderror" required>{{ $kampus->alamat }}</textarea>
                                    @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="no_hp">* No.HP</label>
                                    <input type="number" id="no_hp" name="no_hp" class="form-control @error('no_hp') is-invalid @enderror"
                                           value="{{ $kampus->no_hp }}" required>
                                    @error('no_hp')
                                    <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">* Email</label>
                                    <input type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                           value="{{ $kampus->email }}" required>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="website">* Website</label>
                                    <input type="text" id="website" name="website" class="form-control @error('website') is-invalid @enderror"
                                           value="{{ $kampus->website }}" required>
                                    @error('website')
                                    <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="facebook">Facebook</label>
                                    <input type="text" id="facebook" name="facebook" class="form-control @error('facebook') is-invalid @enderror"
                                           value="{{ $kampus->facebook }}">
                                    @error('facebook')
                                    <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="twitter">Twitter</label>
                                    <input type="text" id="twitter" name="twitter" class="form-control @error('twitter') is-invalid @enderror"
                                           value="{{ $kampus->twitter }}">
                                    @error('twitter')
                                    <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
