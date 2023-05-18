<html>
<head>
<title>Тестовое задание</title>
<link rel='stylesheet' href='style.css' />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/suggestions-jquery@21.12.0/dist/css/suggestions.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/suggestions-jquery@21.12.0/dist/js/jquery.suggestions.min.js"></script>
</head>
<body>
<H1></H1>
<div class="flex-search">
    <div class="flex-item">
        <label for="party">Поиск по ИНН:</label>
        <input id="party" name="party" type="text" placeholder="Введите ИНН организации" />
            <script>
                var token = "07d1c1c4bcf911d144f2b3e190f00998f2a7f38d";

                function formatSelected(suggestion ) {
                return suggestion.data.inn || "";
                }

                function showInn(suggestion) {
                if (suggestion.data.inn == null) {$("#inn").val("Информация отсутствует")}
                else {$("#inn").val(suggestion.data.inn);}

                if (suggestion.data.kpp == null) {$("#kpp").val("Информация отсутствует")}
                else {$("#kpp").val(suggestion.data.kpp);}

                if (suggestion.data.ogrn == null) {$("#ogrn").val("Информация отсутствует")}
                else {$("#ogrn").val(suggestion.data.ogrn);}

                if (suggestion.data.ogrn_date == null) {$("#date_ogrn").val("Информация отсутствует");}
                else {var ticks = suggestion.data.ogrn_date;
                $("#date_ogrn").val(new Date(ticks))}
                
                if(suggestion.data.type == null) {$("#type_org").val("Информация отсутствует")}
                else {$("#type_org").val(suggestion.data.type);}

                if (suggestion.value == null) {$("#name").val("Информация отсутствует")}
                else {$("#name").val(suggestion.value);}

                if (suggestion.data.fio == null) {$("#fio_ip").val("Информация отсутствует")}
                else {$("#fio_ip").val(suggestion.data.fio);};
                
                if (suggestion.data.kpp == null) {$("#code_stat").val("Информация отсутствует")}
                else {$("#code_stat").val(suggestion.data.kpp);};
                
                if (suggestion.data.okato == null) {$("#okato").val("Информация отсутствует")}
                else {$("#okato").val(suggestion.data.okato);}
                
                if (suggestion.data.oktmo == null) {$("#oktmo").val("Информация отсутствует")}
                else {$("#oktmo").val(suggestion.data.oktmo);}

                if (suggestion.data.okpo == null) {$("#okpo").val("Информация отсутствует")}
                else {$("#okpo").val(suggestion.data.okpo);}

                if (suggestion.data.okogu == null) {$("#okogu").val("Информация отсутствует")}
                else {$("#okogu").val(suggestion.data.okogu);}

                if (suggestion.data.okfs == null) {$("#okfs").val("Информация отсутствует")}
                else {$("#okfs").val(suggestion.data.okfs);}

                if (suggestion.data.okved == null) {$("#okved").val("Информация отсутствует")}
                else {$("#okved").val(suggestion.data.okved);}

                if (suggestion.data.opf.full == null) {$("#opf").val("Информация отсутствует")}
                else {$("#opf").val(suggestion.data.opf.full);}

                if (suggestion.data.management.name == null) {$("#fio_ruk").val("Информация отсутствует")}
                else {$("#fio_ruk").val(suggestion.data.management.name);}

                if (suggestion.data.address.value == null) {$("#address").val("Информация отсутствует")}
                else {$("#address").val(suggestion.data.address.value);}
                }

                function clearInn(suggestion) {
                $("#inn").val("");
                $("#kpp").val("");
                $("#ogrn").val("");
                $("#date_ogrn").val("");
                $("#type_org").val("");
                $("#name").val("");
                $("#fio_ip").val("");
                $("#code_stat").val("");
                $("#okato").val("");
                $("#oktmo").val("");
                $("#okpo").val("");
                $("#okogu").val("");
                $("#okfs").val("");
                $("#okved").val("");
                $("#opf").val("");
                $("#fio_ruk").val("");
                $("#address").val("");
                }

                $("#party").suggestions({
                token: token,
                type: "PARTY",
                formatSelected: formatSelected,
                onSelect: showInn,
                onSelectNothing: clearInn
                });
            </script>
    </div>
    
</div>
<div class="flex-container">
    <div class="flex-item">
    <label for="inn">ИНН:</label>  
    <input type="text" id="inn" name="inn" value="" readonly>
    </div>
    <div class="flex-item">
    <label for="kpp">КПП:</label>  
    <input type="text" id="kpp" name="kpp" value="" readonly>
    </div>
    <div class="flex-item">
    <label for="ogrn">ОГРН:</label>  
    <input type="text" id="ogrn" name="ogrn" value="" readonly>
    </div>
    <div class="flex-item">
    <label for="date_ogrn">Дата выдачи ОГРН:</label>  
    <input type="text" id="date_ogrn" name="date_ogrn" value="" readonly>
    </div>
    <div class="flex-item">
    <label for="type_org">Тип организации:</label>  
    <input type="text" id="type_org" name="type_org" value="" readonly>
    </div>
    <div class="flex-item">
    <label for="name">Наименование:</label>  
    <input type="text" id="name" name="name" value="" readonly>
    </div>
    <div class="flex-item">
    <label for="fio_ip">ФИО ИП:</label>  
    <input type="text" id="fio_ip" name="fio_ip" value="" readonly>
    </div>
    <div class="flex-item">
    <label for="code_stat">Коды статистики:</label>  
    <input type="text" id="code_stat" name="code_stat" value="" readonly>
    </div>
    <div class="flex-item">
    <label for="okato">Код ОКАТО:</label>  
    <input type="text" id="okato" name="okato" value="" readonly>
    </div>
    <div class="flex-item">
    <label for="oktmo">Код ОКТМО:</label>  
    <input type="text" id="oktmo" name="oktmo" value="" readonly>
    </div>
    <div class="flex-item">
    <label for="okpo">Код ОКПО:</label>  
    <input type="text" id="okpo" name="okpo" value="" readonly>
    </div>
    <div class="flex-item">
    <label for="okogu">Код ОКОГУ</label>  
    <input type="text" id="okogu" name="okogu" value="" readonly>
    </div>
    <div class="flex-item">
    <label for="okfs">Код ОКФС</label>  
    <input type="text" id="okfs" name="okfs" value="" readonly>
    </div>
    <div class="flex-item">
    <label for="okved">Код ОКВЭД</label>  
    <input type="text" id="okved" name="okved" value="" readonly>
    </div>
    <div class="flex-item">
    <label for="opf">Организационно-правовая форма:</label>  
    <input type="text" id="opf" name="opf" value="" readonly>
    </div>
    <div class="flex-item">
    <label for="fio_ruk">ФИО руководителя:</label>  
    <input type="text" id="fio_ruk" name="fio_ruk" value="" readonly>
    </div>
    <div class="flex-item">
    <label for="address">Адрес:</label>  
    <input type="text" id="address" name="address" value="" readonly>
    </div>
</div>
</body>
</html>