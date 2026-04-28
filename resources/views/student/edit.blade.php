<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students Edit | Laravel</title>
    <!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Edit | Laravel</title>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="/css/bootstrap.min.css">

</head>

<body>

<div class="container">
    <div class="container-fluid mt-4">

    <div class="card">

        <div class="card-header">
            Edit Siswa
            <a href="/student" class="btn btn-danger float-right">Kembali</a>
        </div>

        <form action="/student/edit/{{ $student->nim }}" method="POST">
            @csrf
            @method('PUT')

            <input type="hidden" name="old_nim" value="{{ $student->nim }}">

            <div class="card-body">

                @if(session('notifikasi'))
                <div class="form-group">
                    <div class="alert alert-{{ session('type') }}">
                        {{ session('notifikasi') }}
                    </div>
                </div>
                @endif


                <div class="form-group">
                    <label>NIM <b class="text-danger">*</b></label>

                    <input
                        type="text"
                        name="nim"
                        id="nim"
                        class="form-control @error('nim') is-invalid @enderror"
                        value="{{ old('nim', $student->nim) }}"
                        placeholder="Masukkan NIM"
                        required
                    >

                    @error('nim')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>


                <div class="form-group">
                    <label>Nama <b class="text-danger">*</b></label>

                    <input
                        type="text"
                        name="nama"
                        id="nama"
                        class="form-control @error('nama') is-invalid @enderror"
                        value="{{ old('nama', $student->nama) }}"
                        placeholder="Masukkan Nama"
                        required
                    >

                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>


                <div class="form-group">
                    <label>Email <b class="text-danger">*</b></label>

                    <input
                        type="email"
                        name="email"
                        id="email"
                        class="form-control @error('email') is-invalid @enderror"
                        value="{{ old('email', $student->email) }}"
                        placeholder="Masukkan E-Mail"
                        required
                    >

                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>


                <div class="form-group">
                    <label>Prodi <b class="text-danger">*</b></label>

                    <select
                        name="prodi"
                        id="prodi"
                        class="form-control @error('prodi') is-invalid @enderror"
                        required
                    >

                        <option value="">- Pilih Prodi -</option>

                        <option value="Teknik Informatika"
                            @if(old('prodi', $student->prodi) == "Teknik Informatika") selected @endif>
                            Teknik Informatika
                        </option>

                        <option value="Teknik Rekayasa Keamanan Siber"
                            @if(old('prodi', $student->prodi) == "Teknik Rekayasa Keamanan Siber") selected @endif>
                            Teknik Rekayasa Keamanan Siber
                        </option>

                        <option value="Teknik Rekayasa Perangkat Lunak"
                            @if(old('prodi', $student->prodi) == "Teknik Rekayasa Perangkat Lunak") selected @endif>
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


            <div class="card-footer">
                <a href="/student" class="btn btn-danger">Batal</a>
                <button type="reset" class="btn btn-warning">Reset</button>
                <button type="submit" class="btn btn-success">Edit</button>
            </div>

        </form>

    </div>

</div>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>
