<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tytuł – Zadanie zdalne e-MSI</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body>
<style>
    input:invalid+span::before {
        position: absolute; content: 'X';
        padding-left: 5px;
        color: red;
    }
    input:valid+span::before {
        position: absolute;
        content: '✓';
        padding-left: 5px;
        color: green;
    }
</style>
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


<div class="container mt-5">
    <h2 class="mb-4">Kontrahenty</h2>
    <div allign="right">
    <button  type="button" name="add" id="show_add_data" class="btn btn-success m-2">Nowy klient</button>
    </div>
    <table class="table table-bordered" id="kontrTable">
        <thead>
        <tr>
            <th>NIP</th>
            <th>REGON</th>
            <th>NAZWA</th>
            <th>CZY PŁATNIK VAT?</th>
            <th>ULICA</th>
            <th>NUMER DOMU</th>
            <th>NUMER MIESZKANIA</th>
            <th>ACTION</th>
        </tr>
        </thead>
    </table>

</div>
<div id="kontrahentModal" class="modal fade " role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method = "post" id="addKontrForm" class="h6">
                <div class="modal-header">
                    <h4 class="card-header cardheader">Dodaj Kontragenta</h4>
                </div>
                <div class="modal-body">
                    {{csrf_field()}}
                    <input type="hidden" name="pid" id="pid">
                    <span id="form_output"></span>
                        <div class="form-group">
                            <label for="nip">Wprowadz NIP</label>
                            <div class="row inputForm">
                            <input type="text" inputmode="numeric" pattern="[0-9]{10}" placeholder="10 cyfr" name="nip"
                                   id="nip" class="form-control col-sm-11" required/>
                            <span class="validity col-sm-1"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="reg">Wprowadz REGION</label>
                            <div class="row inputForm">
                            <input type="text" inputmode="numeric" name="reg" id="reg" class="form-control col-sm-11" pattern="[0-9]{5,10}"
                                   placeholder="5-10 cyfr" required />
                            <span class="validity col-sm-1"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nazwe">Wprowadz NAZWE</label>
                        <div class="row inputForm">
                                <input type="text" name="nazwa" class="form-control col-sm-11"
                            id="nazwa" pattern="[A-Za-z]{2,}"  placeholder="Two literas min " required/>
                                <span class="validity col-sm-1"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="czyvat">Wprowadz CZY PŁATNIK VAT?</label>
                            <select type="text" name="czyvat" id="czyvat" class="form-control">
                            <option value="Tak" selected="">Tak</option>
                            <option value="Nie">Nie</option>
                            </select>>
                        </div>
                        <div class="form-group">
                            <label for="ulica">Wprowadz ULICE</label>
                        <div class="row inputForm">
                            <input type="text" name="ulica" id="ulica" pattern="[A-Za-z\s]{2,}"  class="form-control col-sm-11"
                                   placeholder="Two literas min " required  />
                            <span class="validity col-sm-1"></span>
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="numdom">Wprowadz NUMER DOMU</label>
                            <div class="row inputForm">
                            <input type="text" name="numdom" id="numdom" class="form-control col-sm-11" pattern="[0-9]{0,4}"
                                   placeholder="max9999 " required/>
                                <span class="validity col-sm-1"></span>
                            </div>
                            </div>
                        <div class="form-group">
                            <label for="nummeszk">Wprowadz NUMER MIESZKANIA </label>
                            <div class="row inputForm">
                            <input type="text" name="nummeszk" id="nummeszk" class="form-control col-sm-11"
                                   pattern="[0-9]{0,3}"  placeholder="max999 " required/>
                                <span class="validity col-sm-1"></span>
                            </div>
                            </div>
                    </div>
                <div class="modal-footer">
                     <input type="submit" name="submit" id="action" value="DODAJ" class="btn btn-info">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
                </div>
            </form>
        </div>
</div>
</div>
    </div>
        </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">

    $(document).ready(function () {
           $('#kontrTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('kontrahenty.getdata') }}",
            columns: [
                {data: 'nip', name: 'nip'},
                {data: "reg", name: 'reg'},
                {data: 'nazwa', name: 'nazwa'},
                {data: 'czyvat', name: 'czyvat'},
                {data: 'ulica', name: 'ulica'},
                {data: 'numdom', name: 'numdom'},
                {data: 'nummeszk', name:' nummeszk'},
                {
                    data: 'action', name: 'action',
                    orderable: true,
                    searchable: false
                }
            ],
        })

        $('#show_add_data').click(function (e) {
            e.preventDefault()
            $('#kontrahentModal').modal('show');
            $('#addKontrForm')[0].reset();
            $('#form_output').html('');
            $('#button action').val('insert');
            $('#action').val('Add');
        });

        $('#addKontrForm').on('submit', function (event) {
            event.preventDefault();
            let form_data = $(this).serialize();
            $.ajax
            ({
                url: "{{ route('kontrahenty.postdata') }}",
                method: "POST",
                data: form_data,
                dataType: "json",
                success: function (data) {
                        $('#form_output').html(data).success;
                        $('#addKontrForm')[0].reset();
                        $('#action').val('Add');
                        $('.modal-title').text('Add Data');
                        $('#button_action').val('insert');
                        $('#kontrTable').DataTable().ajax.reload();
                    $('#kontrahentModal').modal('hide');


                }

            });
        });

        $(document).on('click', '#edit', function (e) {
            e.preventDefault();
            $('#kontrahentModal').modal('show');
            let id = $(this).data('id');
            $('#addKontrForm')[0].reset();
                $('#form_output').html('');
                $('#action').val('REDAGUJ');
            $('.cardheader').text('Redaguj produkt');
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                url: '{{ route("kontrahenty.gettData") }}',
                data: {
                    'id': id
                },
                success: function (data) {

                    $('#cancel').show();
                    $('#pid').val(data.data.id);
                    $('#nip').val(data.data.nip);
                    $('#reg').val(data.data.reg);
                    $('#nazwa').val(data.data.nazwa);
                    $('#czyvat').val(data.data.czyvat);
                    $('#ulica').val(data.data.ulica);
                    $('#numdom').val(data.data.numdom);
                    $('#nummeszk').val(data.data.nummeszk);

                }
            });
        });

    $(document).on('click', '#delete', function (e) {
        e.preventDefault()
        let id=$(this).data('id');
        $.ajax({
            headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                url: '{{ route("kontrahenty.destroy") }}',
                data: {
                    'id': id
                },
                success: function (data) {
                    $('#kontrTable').DataTable().ajax.reload(null, false);

            }
        })
    })})

</script>
</html>

