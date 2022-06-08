<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tytuł – Zadanie zdalne e-MSI</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>

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
    .element {
        background-color: #FF0000;
        height: 80px;
        width: 20%;
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
    <div class="col-md-9 h5" id="Prawy">
        <p class="advTexts">
        <div class="blok"> Kontrahent
        </div>
        <div>
            <form action="" class="blokinput"  method="post" id="nipform" autocomplete="off">
                <label class="col" for="nip">N I P</label>
                <input type="text" name="nip" id="nip"  pattern=^[0-9]{10}  title="Ten digits code" required/>
                <span class="validity"></span>
            </form>
            <form action="" class="blokinput"  method="post" id="regionform" autocomplete="off">
                <label class="col" for="region">Region</label>
                <input type="text" name="region"  id="region" pattern="[0-9]{5,10}"  title="5-10 digits code" required/>
                <span class="validity"></span>
            </form>
            <form class="blokinput" action="" method="post" id="nazwaform" autocomplete="off">
                <label class="col" for="region">Nazwa</label>
                <input type="text" name="region"  id="nazwa" pattern="[A-Za-z]{2,}"  title="Two literas min " required/>
                <span class="validity"></span>

            </form>
            <form class="blokinput" action="" method="post" id="datapowstform" autocomplete="off">
                <label class="col" for="datapowst">Data powstania</label>
                <input type="date" name="datapowst"  id="datapowst" />
            </form>


            <form class="numerdom" action="" method="post" id="numerdomform" autocomplete="off">
                <label class="col" for="numerdom">Numer domu</label>
                <input type="text" name="numerdom"  id="numerdom" pattern="[0-9]{0,4}"  title="max9999 " required/>
                <span class="validity"></span>
            </form>
            <form class="blokinput" action="" method="post" id="ulicaform" autocomplete="off">
                <label class="col" for="ulica">Ulica</label>
                <input type="text" name="ulica"  id="ulica" pattern="[A-Za-z\s]{2,}"  title="Two literas min " required/>
                <span class="validity"></span>
            </form>
            <form class="numermeszk" action="" method="post" id="numermieszkID" autocomplete="off">
                <label class="col" for="numermieszk">Numer mieszksnia</label>
                <input type="text" name="numermieszk"  id="numermieszk" pattern="[0-9]{0,3}"  title="max999 " required/>
                <span class="validity"></span>
            </form>
            <form class="blokinput" action="" method="post" id="UwagiId" autocomplete="off">
                <label class="col" for="uwagi">Uwagi</label>
                <input type="text" name="region"  id="uwagi" pattern="[0-9A-Za-z\s]{2,}"  title="Two literas min " required/>
                <span class="validity"></span>
            </form>

            <div id="kol" class="element m-2" style="background-color: #ff0000;">
            </div>
            <label>Wybierz kolor z listy rozwijanej: </label>
            <select id="kolor">
                <option value="#FF0000" selected="">czerwony</option>
                <option value="#00FF00">zielony</option>
                <option value="#0000FF">niebieski</option>
                <option value="white">bialy</option>
                <option value="#778899"> szary</option>
                <option value="#00FFFF">turkusowy</option>
                <option value="#000080"> granatowy</option>
            </select>
            <button type="button" onclick="zmiana()">Zmien kolor</button>

            <div>
                <label>Wybierz VAT z listy rozwijanej: </label>
                <select class="advTexts" id="vatt">
                    <option value="23%" selected="">23%</option>
                    <option value="ZV">ZV</option>
                    <option value="NP">NP</option>
                    <option value="0%">0%</option>
                    <option value="3%">8%</option>
                </select>
                <button type="button" onclick="zmVat()">Zmien VAT</button>
                <div class="advTexts m-2">VAT<div id="vatChange"></div>
                </div>
            </div>
            <div>Listę html uporządkowaną numerowaną</div>

            <button onclick="sortListR()">ROSNĄCO</button>
            <button onclick="sortListM()">malejąco</button>


            <ul id="sort">
                <li>1. Element</li>
                <li>2. Element</li>
                <li>3. Element</li>
                <li>4. Element</li>
            </ul>

            <script>
                function sortListR() {
                    let list, i, switching, b, shouldSwitch;
                    list = document.getElementById("sort");
                    switching = true;
                    while (switching) {
                        switching = false;
                        b = list.getElementsByTagName("LI");
                        for (i = 0; i < (b.length - 1); i++) {
                            shouldSwitch = false;
                            if (b[i].innerHTML.toLowerCase() > b[i + 1].innerHTML.toLowerCase()) {
                                shouldSwitch = true;
                                break;
                            }
                        }
                        if (shouldSwitch) {
                            b[i].parentNode.insertBefore(b[i + 1], b[i]);
                            switching = true;
                        }
                    }
                }
                function sortListM() {
                    let list, i, switching, b, shouldSwitch;
                    list = document.getElementById("sort");
                    switching = true;
                    while (switching) {
                        switching = false;
                        b = list.getElementsByTagName("LI");
                        for (i = 0; i < (b.length - 1); i++) {
                            shouldSwitch = false;
                            if (b[i].innerHTML.toLowerCase() < b[i + 1].innerHTML.toLowerCase()) {
                                shouldSwitch = true;
                                break;
                            }
                        }
                        if (shouldSwitch) {
                            b[i].parentNode.insertBefore(b[i + 1], b[i]);
                            switching = true;
                        }
                    }
                }
            </script>
            <div>

            </div>
        </div>

    </div>




</div>
</div>

<script>
    function zmVat(){
        const vat  = document.getElementById("vatt").value;
        vatChange.innerHTML = vat
        console.log(vatChange);
    }

    function zmiana() {
        const kolors = document.getElementById("kolor").value;
        document.getElementById("kol").style.backgroundColor = kolors;
    }
</script>
</body>

</html>
