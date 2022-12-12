<?
include 'connect.php'
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <form>
        <label for="mahasiswa"> Pilih Prodi : </label>
        <select id="mahasiswa" name="mahasiswa">
            <option value="">Pilih Prodi...</option>
            <option value="Biomedis">Biomedis</option>
            <option value="Fisika">Fisika</option>
            <option valuie="Teknik Industri"> Teknik Industri</option>
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Teknik Sipil">Teknik Sipil</option>
        </select>
    </form>

    <div id="show-table">
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nim</th>
                <th>Nama</th>
                <th>Prodi</th>
            </tr>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous">
        </script>

    <script>
        $(document).ready(function () {
            $("#mahasiswa").change(function () {
                var value = $(this).val();
                $.ajax({
                    url: "showdata.php",
                    type: "GET",
                    data: "request=" + value,
                    success: function (data) {
                        $("#show-table").html(data);
                    }
                })
            });
        });
    </script>
</body>

</html>