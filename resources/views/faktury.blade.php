<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tytuł – Zadanie zdalne e-MSI</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="{{ asset('css/tableFakt.css') }}" rel='stylesheet' type='text/css' />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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
        <table class="table table-bordered" id="faktury">
            <thead>
            <tr>
                <th>Lp</th>
                <th>Opis</th>
                <th>MPK</th>
                <th>Kwota Netto</th>
                <th>Ilość</th>
                <th>VAT</th>
                <th>Kwota brutto</th>
                <th>Wartość Netto</th>
                <th>Wartość Brutto</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <th>Cegla</th>
                <td>0090</td>
                <td><input type="text" size="4" class="auto-calc price form-control" /></td>
                <td><input type="text" size="4" class="auto-calc amount form-control" /></td>
                <td><select class="calc-vat">
                        <option value="23" selected="">23%</option>
                        <option value="0">ZV</option>
                        <option value="0">NP</option>
                        <option value="0">0%</option>
                        <option value="8">8%</option>
                    </select>
                </td>
                <td><input type="text" size="6" class="kwota-brutto form-control" /></td>
                <td><input type="text" size="6" class="total-netto form-control" /></td>
                <td><input type="text" size="6" class="total-brutto form-control" /></td>
            </tr>
            <tr>
                <th>2</th>
                <th>Panele</th>
                <td>84985</td>
                <td><input type="text" size="4" class="auto-calc price form-control" /></td>
                <td><input type="text" size="4" class="auto-calc amount form-control" /></td>
                <td><select class="calc-vat">
                        <option value="23" selected="">23%</option>
                        <option value="0">ZV</option>
                        <option value="0">NP</option>
                        <option value="0">0%</option>
                        <option value="8">8%</option>
                    </select>
                </td>
                <td><input type="text" size="6" class="kwota-brutto form-control" /></td>
                <td><input type="text" size="6" class="total-netto form-control" /></td>
                <td><input type="text" size="6" class="total-brutto form-control" /></td>
            </tr>
            <tr>
                <th>3</th>
                <th>Lampy</th>
                <td>09870</td>
                <td><input type="text" size="4" class="auto-calc price form-control" /></td>
                <td><input type="text" size="4" class="auto-calc amount form-control" /></td>
                <td><select class="calc-vat">
                        <option value="23" selected="">23%</option>
                        <option value="0">ZV</option>
                        <option value="0">NP</option>
                        <option value="0">0%</option>
                        <option value="8">8%</option>
                    </select>
                </td>
                <td><input type="text" size="6" class="kwota-brutto form-control" /></td>
                <td><input type="text" size="6" class="total-netto form-control" /></td>
                <td><input type="text" size="6" class="total-brutto form-control" /></td>
            </tr>
            <tr>
                <th>4</th>
                <th>Cement </th>
                <td>77887</td>
                <td><input type="text" size="4" class="auto-calc price form-control" /></td>
                <td><input type="text" size="4" class="auto-calc amount form-control" /></td>
                <td><select class="calc-vat">
                        <option value="23" selected="">23%</option>
                        <option value="0">ZV</option>
                        <option value="0">NP</option>
                        <option value="0">0%</option>
                        <option value="8">8%</option>
                    </select>
                </td>
                <td><input type="text" size="6" class="kwota-brutto form-control" /></td>
                <td><input type="text" size="6" class="total-netto form-control" /></td>
                <td><input type="text" size="6" class="total-brutto form-control" /></td>
            </tr>
            <tr>
                <th>5</th>
                <th>Drot</th>
                <td>9900</td>
                <td><input type="text" size="4" class="auto-calc price form-control" /></td>
                <td><input type="text" size="4" class="auto-calc amount form-control" /></td>
                <td><select class="calc-vat">
                        <option value="23" selected="">23%</option>
                        <option value="0">ZV</option>
                        <option value="0">NP</option>
                        <option value="0">0%</option>
                        <option value="8">8%</option>
                    </select>
                <td><input type="text" size="6" class="kwota-brutto form-control" /></td>
                <td><input type="text" size="6" class="total-netto form-control" /></td>
                <td><input type="text" size="6" class="total-brutto form-control" /></td>
            </tr>
            <tr>
                <th>6</th>
                <th>Desky</th>
                <td>45677</td>
                <td><input type="text" size="4" class="auto-calc price form-control" /></td>
                <td><input type="text" size="4" class="auto-calc amount form-control" /></td>
                <td><select class="calc-vat">
                        <option value="23" selected="">23%</option>
                        <option value="0">ZV</option>
                        <option value="0">NP</option>
                        <option value="0">0%</option>
                        <option value="8">8%</option>
                    </select>
                </td>
                <td><input type="text" size="6" class="kwota-brutto form-control" /></td>
                <td><input type="text" size="6" class="total-netto form-control" /></td>
                <td><input type="text" size="6" class="total-brutto form-control" /></td>
            </tr>
            </tbody>
        </table>
    <button class="btn btn-primary" id="wiecej">Wiecej 1000 Netto</button>

</form>
    </div>
</div>

    <script>

        $(document).on('keyup change', ':input', "td > input.auto-calc select.calc-vat", function() {
            const row = $(this).closest("tr");

            const first = row.find("td input.price").val();
            const second = row.find("td input.amount").val();
            const vat = row.find("td select.calc-vat").val();
            const vatCalc = (first * second * vat / 100).toFixed(2);
            nettoCalc = (first * second).toFixed(2);
                row.find(".kwota-brutto").val(vatCalc);
            row.find(".total-netto").val(nettoCalc);
            row.find(".total-brutto").val((Number(vatCalc) + Number(nettoCalc)).toFixed(2));
            });
        $('#wiecej').click(function (e) {
                    e.preventDefault()
            $("tr").each(function(){
                const row = $(this).closest("tr");
                let nettoSum = (Number(row.find("td input.total-netto").val()));
               console.log(nettoSum)
               if (nettoSum > 1000){
                   $(this).css('background-color', `green`);
               };

            });
        });
    </script>
</div>
</body>
</html>
