<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tytuł – Zadanie zdalne e-MSI</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body>
<div class="row">
    <div class="col-md-3" id="Lewy">
        <ul class="h5">
            <a href="kontrolki.blade.php"><li class="mt-5">a. Różne kontrolki HTML</li></a>
            <a href="Pracovniki.blade.php"><li class="mt-5">b. Tabela Pracowników</li></a>
            <a href="faktury.blade.php"><li class="mt-5">c. Tabela Faktur VAT</li></a>
            <a href="delehacji.blade.php"><li class="mt-5">d. Tabela Delegacji BD</li></a>
            <a href="kontrahenty.blade.php"><li class="mt-5">e. Dane Kontrahentów</li></a>
        </ul>
    </div>
    <div class="col-md-9 h6" id="Prawy">
        <form>
        <table class="dynamicTable table table-bordered">
<thead>
            <tr>
                    <th>Lp</th>
                    <th>Imie i Nazwisko</th>
                    <th>Data od:</th>
                    <th>Data do:</th>
                    <th>Miejsce wyjazdu:</th>
                    <th>Miejsce przyjazdu:</th>
                </tr>
</thead>
            <tbody>

            </tbody>

            </table>
    <button class="btn-primary" id="importDel" name="importDel">IMPORTUJ</button>
     </form>

        </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
<script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">

    $('#importDel').click(function (event) {
        event.preventDefault();
        $('.dynamicTable').DataTable({
            processing: true,
            serverSide: true,

        ajax: "{{ route("delehacji.list") }}",

                 columns: [
                {data: 'lp', name: 'lp'},
                {data: 'name', name: 'name'},
                {data: 'dataod', name: 'dataod'},
                {data: 'datado', name: 'datado'},
                {data: 'wyjazd', name: 'wyjazd:'},
                {data: 'przyjazd', name: 'przyjazd'},

            ],
            orderable: true,
            searchable: true
        })
    })

</script>

</body>
</html>
