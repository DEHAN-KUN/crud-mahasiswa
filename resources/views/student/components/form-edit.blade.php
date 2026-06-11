<div class="card shadow mb-4">

    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h5 class="m-0 font-weight-bold text-primary">
            <i class="fas fa-user-edit mr-2"></i>
            Edit Data Siswa
        </h5>

        <a href="/student" class="btn btn-danger btn-sm">
            <i class="fas fa-arrow-left"></i>
            Kembali
        </a>
    </div>

    <form action="/student/edit/{{ $student->nim }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <input type="hidden" name="old_nim" value="{{ $student->nim }}">

        <div class="card-body">

            <div class="alert alert-info">
                <i class="fas fa-info-circle"></i>
                Perbarui data mahasiswa sesuai kebutuhan, lalu klik tombol Edit Data.
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

                        <input type="text" name="nim" id="nim" class="form-control @error('nim') is-invalid @enderror"
                            value="{{ old('nim', $student->nim) }}" placeholder="Masukkan NIM" required>

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

                        <input type="text" name="nama" id="nama"
                            class="form-control @error('nama') is-invalid @enderror"
                            value="{{ old('nama', $student->nama) }}" placeholder="Masukkan Nama" required>

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

                        <input type="email" name="email" id="email"
                            class="form-control @error('email') is-invalid @enderror"
                            value="{{ old('email', $student->email) }}" placeholder="Masukkan Email" required>

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

                        <select name="prodi" id="prodi" class="form-control @error('prodi') is-invalid @enderror"
                            required>

                            <option value="">- Pilih Prodi -</option>

                            <option value="Teknik Informatika" {{ old('prodi', $student->prodi) == 'Teknik Informatika' ? 'selected' : '' }}>
                                Teknik Informatika
                            </option>

                            <option value="Teknik Rekayasa Keamanan Siber" {{ old('prodi', $student->prodi) == 'Teknik Rekayasa Keamanan Siber' ? 'selected' : '' }}>
                                Teknik Rekayasa Keamanan Siber
                            </option>

                            <option value="Teknik Rekayasa Perangkat Lunak" {{ old('prodi', $student->prodi) == 'Teknik Rekayasa Perangkat Lunak' ? 'selected' : '' }}>
                                Teknik Rekayasa Perangkat Lunak
                            </option>

                        </select>

                        @error('prodi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                </div>

            </div>

            <hr>

            <div class="form-group">
                <label><strong>Foto Saat Ini</strong></label>

                <div>
                    <img src="{{ asset('storage/' . $student->foto) }}" class="img-thumbnail shadow" width="220">
                </div>
            </div>

            <div class="custom-control custom-switch my-3">

                <input type="hidden" name="ganti_foto" value="0">

                <input type="checkbox" class="custom-control-input" id="ganti_foto" name="ganti_foto" value="1"
                    onclick="check_ganti()" {{ old('ganti_foto') == 1 ? 'checked' : '' }}>

                <label class="custom-control-label" for="ganti_foto">
                    Ganti Foto Mahasiswa
                </label>

            </div>

            <div id="ganti_foto_div" style="display:none">

                <div class="form-group">
                    <label>Upload Foto Baru</label>

                    <input type="file" accept=".jpg,.jpeg,.png" id="foto" name="foto"
                        class="form-control @error('foto') is-invalid @enderror">

                    @error('foto')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

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

            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i>
                Edit Data
            </button>

        </div>

    </form>

</div>