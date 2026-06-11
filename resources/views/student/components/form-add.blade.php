<div class="card shadow mb-4">

    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h5 class="m-0 font-weight-bold text-primary">
            <i class="fas fa-user-plus mr-2"></i>
            Tambah Data Siswa
        </h5>

        <a href="/student" class="btn btn-danger btn-sm">
            <i class="fas fa-arrow-left"></i>
            Kembali
        </a>
    </div>

    <form action="/student/add" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="card-body">

            <div class="alert alert-info">
                <i class="fas fa-info-circle"></i>
                Silakan lengkapi seluruh data mahasiswa dengan benar.
            </div>

            @if(session('notifikasi'))
                <div class="alert alert-{{ session('type') }}">
                    {{ session('notifikasi') }}
                </div>
            @endif

            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <label>NIM <span class="text-danger">*</span></label>
                        <input type="text" id="nim" name="nim" class="form-control @error('nim') is-invalid @enderror"
                            placeholder="Masukkan NIM" value="{{ old('nim') }}" required>

                        @error('nim')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama <span class="text-danger">*</span></label>
                        <input type="text" id="nama" name="nama"
                            class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama"
                            value="{{ old('nama') }}" required>

                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Email <span class="text-danger">*</span></label>
                        <input type="email" id="email" name="email"
                            class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Email"
                            value="{{ old('email') }}" required>

                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Program Studi <span class="text-danger">*</span></label>

                        <select id="prodi" name="prodi" class="form-control @error('prodi') is-invalid @enderror"
                            required>

                            <option value="">- Pilih Prodi -</option>
                            <option>Teknik Informatika</option>
                            <option>Teknik Rekayasa Keamanan Siber</option>
                            <option>Teknik Rekayasa Perangkat Lunak</option>

                        </select>

                        @error('prodi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                </div>

            </div>

            <div class="form-group">
                <label>Foto Mahasiswa <span class="text-danger">*</span></label>

                <input type="file" accept=".jpg,.jpeg,.png" id="foto" name="foto"
                    class="form-control @error('foto') is-invalid @enderror" required>

                @error('foto')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

        </div>

        <div class="card-footer text-right">

            <a href="/student" class="btn btn-secondary">
                <i class="fas fa-times"></i>
                Batal
            </a>

            <button type="reset" class="btn btn-warning">
                <i class="fas fa-redo"></i>
                Reset
            </button>

            <button type="submit" class="btn btn-success">
                <i class="fas fa-save"></i>
                Simpan Data
            </button>

        </div>

    </form>

</div>