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

    @include('student.components.form-edit')

</div>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        check_ganti();
    });

    function check_ganti() {
        let ganti = $('#ganti_foto');
        let ganti_foto_div = $('#ganti_foto_div');
        let foto = $('#foto');
        ganti_foto_div.toggle(ganti.prop('checked'));
        foto.prop('required', ganti.prop('checked') );
    }

    // VALIDASI FILE FOTO
    document.getElementById('foto').addEventListener('change', function () {

        const file = this.files[0];

        if (!file) {
            return;
        }

        // tipe file yang diizinkan
        const allowedTypes = [
            'image/jpeg',
            'image/jpg',
            'image/png'
        ];

        // ukuran maksimal 2 MB
        const maxSize = 2 * 1024 * 1024;

        // validasi tipe file
        if (!allowedTypes.includes(file.type)) {

            alert('File harus berupa JPG, JPEG, atau PNG!');

            this.value = '';

            return;
        }

        // validasi ukuran file
        if (file.size > maxSize) {

            alert('Ukuran file maksimal 2 MB!');

            this.value = '';

            return;
        }

    });
</script>

</body>

</html>
