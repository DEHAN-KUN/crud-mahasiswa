<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrinkto-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students Add | Laravel</title>
    <!DOCTYPE html>

    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Students Add | Laravel</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/css/bootstrap.min.css">

    </head>

<body>

    <div class="container">
        <div class="container-fluid mt-4">

            @include('student.components.form-add')

        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
        document.getElementById('foto').addEventListener('change', function () {

            const file = this.files[0];

            if (!file) {
                return;
            }

            // validasi tipe file
            const allowedTypes = ['image/jpeg', 'image/jpg', 'image/png'];

            // validasi ukuran file (2 MB)
            const maxSize = 2 * 1024 * 1024;

            // cek tipe file
            if (!allowedTypes.includes(file.type)) {

                alert('File harus berupa JPG, JPEG, atau PNG!');

                this.value = '';

                return;
            }

            // cek ukuran file
            if (file.size > maxSize) {

                alert('Ukuran file maksimal 2 MB!');

                this.value = '';

                return;
            }

        });
    </script>

</body>

</html>