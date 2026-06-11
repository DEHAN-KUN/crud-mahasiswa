<div class="card shadow mb-4">

    <div class="card-header py-3 d-flex justify-content-between align-items-center">

        <div>
            <h5 class="m-0 font-weight-bold text-primary">
                <i class="fas fa-users mr-2"></i>
                Data Siswa
            </h5>

            <small class="text-muted">
                Total Data : {{ count($students) }} Mahasiswa
            </small>
        </div>

        <a href="/student/add" class="btn btn-primary">
            <i class="fas fa-plus"></i>
            Tambah Siswa
        </a>

    </div>

    <div class="card-body">

        @if(session('notifikasi'))
            <div class="alert alert-{{ session('type') }}">
                {{ session('notifikasi') }}
            </div>
        @endif

        <div class="table-responsive">

            <table class="table table-bordered table-hover align-middle">

                <thead class="thead-dark">

                    <tr class="text-center">
                        <th width="60">No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Program Studi</th>
                        <th width="120">Foto</th>
                        <th width="260">Aksi</th>
                    </tr>

                </thead>

                <tbody>

                    @forelse ($students as $index => $data)

                        <tr>

                            <td class="text-center">
                                {{ $index + 1 }}
                            </td>

                            <td>
                                <strong>{{ $data->nim }}</strong>
                            </td>

                            <td>
                                {{ $data->nama }}
                            </td>

                            <td>
                                <span class="badge badge-info p-2">
                                    {{ $data->prodi }}
                                </span>
                            </td>

                            <td class="text-center">

                                <img src="{{ asset('storage/' . $data->foto) }}" width="70" height="70"
                                    class="rounded-circle shadow" style="object-fit:cover;">

                            </td>

                            <td class="text-center">

                                <a href="/student/edit/{{ $data->nim }}" class="btn btn-warning btn-sm mb-1">

                                    <i class="fas fa-edit"></i>
                                    Edit

                                </a>

                                <form method="POST" action="/student/delete/{{ $data->nim }}" style="display:inline;">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger btn-sm mb-1"
                                        onclick="return confirm('Yakin ingin menghapus data ini?')">

                                        <i class="fas fa-trash"></i>
                                        Hapus

                                    </button>

                                </form>

                                <a href="/student/download/{{ $data->nim }}" class="btn btn-success btn-sm mb-1">

                                    <i class="fas fa-download"></i>
                                    Download

                                </a>

                                <a href="/student/preview/{{ $data->nim }}" class="btn btn-info btn-sm mb-1">

                                    <i class="fas fa-eye"></i>
                                    Preview

                                </a>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="6" class="text-center py-4">

                                <i class="fas fa-folder-open fa-2x text-secondary mb-2"></i>

                                <br>

                                Belum ada data siswa.

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>