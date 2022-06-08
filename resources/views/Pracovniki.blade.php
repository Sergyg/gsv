<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tytuł – Zadanie zdalne e-MSI</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link href="{{ asset('css/tablePr.css') }}" rel='stylesheet' type='text/css' />

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
    <div class="col-md-9 h4" id="Prawy">
        <table class="tablePr table-bordered mt-3">
            <thead>
            <tr>
                <th>Lp</th>
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>Stanowisko</th>
                <th>Data zatrudnienia</th>
                <th>Ilość dni urlopowych</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Magda</td>
                <td>Bessler</td>
                <td>Kontroler finansowy</td>
                <td>20.02.2020</td>
                <td>10</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Kuba</td>
                <td>Guzik</td>
                <td>Kierownik ds. personalnych0</td>
                <td>10.01.2021</td>
                <td>10</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Mateusz</td>
                <td>Panasiuk</td>
                <td>Analityk finansowy</td>
                <td>15.05.2005</td>
                <td>30</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Irena </td>
                <td>Kendlerowa</td>
                <td>Pracownik biurowy w dziale finansów</td>
                <td>21.11.2011</td>
                <td>32</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Radosław</td>
                <td>Galas</td>
                <td>Dyrektor finansowy</td>
                <td>07.07.2007</td>
                <td>5</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Agnieszka</td>
                <td>Musaj</td>
                <td>Kierownik ds. finansów i controllingu</td>
                <td>01.02.2022</td>
                <td>5</td>
            </tr>
            </tbody>
        </table>
        <div class="blok">
            <p>Wybierz kolor</p>

            <div>
                <input class="color-picker" type="color" data-id="wiersz-even" name="wiersz-even"
                       value="#e66465">
            </div>

            <div>
                <input class="color-picker" type="color"  data-id="wiersz-odd" name="wiersz-odd"
                       value="#f6b73c">
            </div>
        </div>
    </div>
</div>
    <script>
        const handleColorUpdate = (cssVars) => {
            const root = document.querySelector(':root');
            const keys = Object.keys(cssVars);
            keys.forEach(key => {
                root.style.setProperty(key, cssVars[key]);
            });
        }

        const dynamicInputs = document.querySelectorAll('input.color-picker');

        dynamicInputs.forEach((item) => {
            item.addEventListener('input', (e) => {
                const cssPropName = `--cs-${e.target.getAttribute('data-id')}`;
                console.log(cssPropName)
                handleColorUpdate({
                    [cssPropName]: e.target.value
                });
            });
        });
    </script>
</body>
</html>
