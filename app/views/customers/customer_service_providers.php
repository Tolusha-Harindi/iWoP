<?php include_once APPROOT . '/views/includes/topnav.php'; ?>

<?php include_once APPROOT . '/views/includes/customer_sidenav.php'; ?>


<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/table.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/button.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/customer/ads.css"/>
<link rel='stylesheet' href="<?php echo URLROOT;?> /public/css/home/popup.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">

<!--------------------------search bar------------------------------->
<div class="wrap">
    <div class="search" style="margin-top:-36em">
        <input type="text" class="searchTerm" placeholder="Search">
        <button type="submit" class="searchButton">
            <i class="fa fa-search"></i>
        </button>
    </div>
</div>

<!---------------------Select options --------------------------------->

<table class="select-relate">
    <tr>
        <td  style="padding:1em 8em;"> District</td>
        <td  style="padding:1em 8em;">City</td>
        <td  style="padding:1em 8em;">Category</td>
    </tr>


    <tr>
        <td  style="padding:1em 8em;"> 
            <form  action= "<?php echo URLROOT; ?>/customers/customer_service_providers" method= "POST">
                <select name="district" id="list1" style="background-color: #3E5AD8; height:35px; color:white; border:none;">
                    <option value =" "  selected label="District" style="background-color: white; color:black"> Select District</option>
                    <option value ="Colombo"    label="Colombo" style="background-color: white; color:black"> Colombo</option>
                    <option value ="Kalutara"   label="Kalutara" style="background-color: white; color:black"> Kaluatara</option>
                    <option value ="Gampaha"    label="Gampaha" style="background-color: white; color:black"> Gampaha</option>
                    <option value ="Galle"      label="Galle" style="background-color: white; color:black"> Gampaha</option>
                    <option value ="Kandy"      label="Kandy" style="background-color: white; color:black"> Kandy</option>
                    <option value ="Mullaitiuv" label="Mullaitiuv" style="background-color: white; color:black"> Mullaitiuv</option>
                    <option value ="Kurunegala" label="Kurunegala" style="background-color: white; color:black"> Kurunegala</option>
                    <option value ="Matara"     label="Matara" style="background-color: white; color:black"> Matara</option>
                    <option value ="Kegalle"    label="Kegalle" style="background-color: white; color:black"> Kegalle</option>
                    <option value ="Ratnapura"  label="Ratnapura" style="background-color: white; color:black"> Ratnapura</option>
                    <option value ="Anuradhapura"label="Anuradhapura" style="background-color: white; color:black"> Anuradhapura</option>
                    <option value ="Badulla"    label="Badulla" style="background-color: white; color:black"> Badulla</option>
                    <option value ="Puttalam"   label="Puttalam" style="background-color: white; color:black"> Puttalam</option>
                    <option value ="Matale"     label="Matale" style="background-color: white; color:black"> Matale</option>
                    <option value ="Hambantota" label="Hambantota" style="background-color: white; color:black"> Hambantota</option>
                    <option value ="Nuwara Eliya"label="Nuwara Eliya" style="background-color: white; color:black"> Nuwara Eliya</option>
                    <option value ="Jaffna"     label="Jaffna" style="background-color: white; color:black"> Jaffna</option>
                    <option value ="Ampara"     label="Ampara" style="background-color: white; color:black">Ampara</option>
                    <option value ="Polonnaruwa"label="Polonnaruwa" style="background-color: white; color:black"> Polonnaruwa</option>
                    <option value ="Monaragala" label="Monaragala" style="background-color: white; color:black"> Monaragala</option>
                    <option value ="Trincomalee"label="Trincomalee" style="background-color: white; color:black"> Trincomalee</option>
                    <option value ="Batticaloa" label="Batticaloa" style="background-color: white; color:black"> Batticaloa</option>
                    <option value ="Vavuniya"   label="Vavuniya" style="background-color: white; color:black"> Vavuniya</option>
                    <option value ="Kilinochchi"label="Kilinochchi" style="background-color: white; color:black"> Kilinochchi</option>
                    <option value ="Mannar"     label="Mannar"style="background-color: white; color:black"> Mannar</option>
                </select>
            <!-- </form> -->
        </td>
        <!---------------------------------------------------------------------------------------------------->
        <td  style="padding:1em 8em;">
            <!-- <form name = "select"  method="post"> -->
                    <select name="city" id="list2" style="background-color: #3E5AD8; height:35px; color:white; border:none;">
                        <option value =" "  selected label="City" style="background-color: white; color:black"> Select City</option>
                        <option value ="Colombo"    label="Colombo" style="background-color: white; color:black"> Colombo</option>
                        <option value ="Kalutara"   label="Kalutara" style="background-color: white; color:black"> Kaluatara</option>
                        <option value ="Gampaha"    label="Gampaha" style="background-color: white; color:black"> Gampaha</option>
                        <option value ="Galle"      label="Galle" style="background-color: white; color:black"> Gampaha</option>
                        <option value ="Kandy"      label="Kandy" style="background-color: white; color:black"> Kandy</option>
                        <option value ="Mullaitiuv" label="Mullaitiuv" style="background-color: white; color:black"> Mullaitiuv</option>
                        <option value ="Kurunegala" label="Kurunegala" style="background-color: white; color:black"> Kurunegala</option>
                        <option value ="Matara"     label="Matara" style="background-color: white; color:black"> Matara</option>
                        <option value ="Kegalle"    label="Kegalle" style="background-color: white; color:black"> Kegalle</option>
                        <option value ="Ratnapura"  label="Ratnapura" style="background-color: white; color:black"> Ratnapura</option>
                        <option value ="Anuradhapura"label="Anuradhapura" style="background-color: white; color:black"> Anuradhapura</option>
                        <option value ="Badulla"    label="Badulla" style="background-color: white; color:black"> Badulla</option>
                        <option value ="Puttalam"   label="Puttalam" style="background-color: white; color:black"> Puttalam</option>
                        <option value ="Matale"     label="Matale" style="background-color: white; color:black"> Matale</option>
                        <option value ="Hambantota" label="Hambantota" style="background-color: white; color:black"> Hambantota</option>
                        <option value ="Nuwara Eliya"label="Nuwara Eliya" style="background-color: white; color:black"> Nuwara Eliya</option>
                        <option value ="Jaffna"     label="Jaffna" style="background-color: white; color:black"> Jaffna</option>
                        <option value ="Ampara"     label="Ampara" style="background-color: white; color:black">Ampara</option>
                        <option value ="Polonnaruwa"label="Polonnaruwa" style="background-color: white; color:black"> Polonnaruwa</option>
                        <option value ="Monaragala" label="Monaragala" style="background-color: white; color:black"> Monaragala</option>
                        <option value ="Trincomalee"label="Trincomalee" style="background-color: white; color:black"> Trincomalee</option>
                        <option value ="Batticaloa" label="Batticaloa" style="background-color: white; color:black"> Batticaloa</option>
                        <option value ="Vavuniya"   label="Vavuniya" style="background-color: white; color:black"> Vavuniya</option>
                        <option value ="Kilinochchi"label="Kilinochchi" style="background-color: white; color:black"> Kilinochchi</option>
                        <option value ="Mannar"     label="Mannar" style="background-color: white; color:black"> Mannar</option>
<!-- 
                        <script type="text/javascript">
        var citiesByState = {
            "Colombo": ["Mattakkuliya", "Modara", "Bloemendhal", "Kotahena", "Jinthupitiya", "Grandpass", "Kettarama", "Aluthkade", 
                        "Kochchikade", "Pettah", "Fort", "Galle face", "Slave Island", "Hunupitiya", "Keselwatta", "Panchikawatta", 
                        "Maligawatta", "Maligakanda", "Maradana", "Ibbanwala", "Orugodawatta", "Meethotamulla", "Ambanthale", "Mulleriya", 
                        "Kotikawatta", "Wellampitiya", "Kolonnawa", "Udumulla", "Himbutana", "Kajugahawatta", "Gothatuwa", "Gajabapura", 
                        "Dodamgahahena", "Kaduwela", "Nawagamuwa", "Thalahena", "Ranala", "Dedigamuwa", "Malabe", "Thalangama", "Battaramulla", 
                        "Hokandara", "Athurugiriya", "Henpita", "Batawala", "Mullegama", "Habarakanda", "Panagoda", "Meegoda", "Homagama",
                        "Pitipana", "Godagama", "Kurunduwatta", "Watareka", "Hiripitiya", "Siddamulla", "Mattegoda", "Siyabalagoda", "Kahathuduwa", 
                        "Avissawella", "Akaravita", "Kulu Aggala", "Salawa", "Miriswatta", "Puwakpita", "Diddeniya", "Koswatta", "Mawathagama", 
                        "Waga", "Thummodara", "Galagedara", "Padukka", "Ganegoda", "Horagala", "Kahawala", "Mirihana", "Madiwela", "Thalawathugoda", 
                        "Kottawa", "Pamunuwa", "Makumbura", "Pannipitiya", "Navinna", "Wijerama", "Obesekarapura", "Rajagiriya", "Nawala", "Ethulkotte", 
                        "Pitakotte", "Nugegoda", "Gangodawila", "kohuwala", "Kalubowila", "Galwala", "Dehiwala", "Karagampitiya", "Kawdana", "Mount lavania", 
                        "Attidiya", "Rathmalana", "Kandawala", "Soysapura", "Thelawala", "Katubedda", "Indibedda", "Koralawella", "katukurunda", "Egoda Uyana", 
                        "Pepiliyana", "Divulpitiya", "Bellanwila", "Boralesgamuwa", "Rattanapitiya", "Werahera", "Erewwala", "Mampe", "Kesbewa", "Madapatha", 
                        "Delthara", "Batuwandara", "Colombo", "Hanwella", "Maharagama", "Sri Jayawaradanapura Kotte", "Thimbirigasyaya", "Moratuwa", 
                        "Piliyandala", "Borella", "Kirulupana", "Wellawatte", "Colpetty", "Bambalapitiya"
                        ],


            "Gampaha": ["Kochchikade", "Hunupitiya", "Thalahena", "katana", "Thimbirigaskatuwa", "Kimbulapitiya", "Katunayaka", "Raddolugama", "Seeduwa", 
                        "Bandarawatta", "Kotugoda", "Mellawagedara", "Akaragama", "Ihala Madampella", "Delwagura", "Wekada", "Kotadeniyawa", "Miriswatta", 
                        "katuwellegama", "Kadawala", "Doonagaha", "Hunumulla", "Kaluaggala" ,"Nawana", "Dagonna", "Divulapitiya", "Loluwagoda", "Henegama", 
                        "Kandalama", "Keenadeniya", "Kidiwala", "Meerigama", "Kosetadeniya", "Banduragoda", "Pamunuwatta", "Danovita", "Weweldeniya", "Muddaragama", 
                        "Pallewala", "Maligathenna", "Galgamuwa", "Kumbaloluwa", "Pasyala", "Radawadunna", "Debahera", "Horampella", "Mabodala", "Wegowwa", "yatiyana", 
                        "Dewalapola", "Pethiyagoda", "Doranagoda", "Uggalboda", "Asgiriya", "Madelgamuwa", "Opatha", "Siyambalapitiya", "Pamunugama", "Welisara", 
                        "Uswetakeiyawa", "Mahabage", "Kerawalapitiya", "Mabola", "Wattala", "Ekala", "Niwandama", "Ja-ela", "Kandana", "Polpitimookalana", 
                        "Batuwatta", "Ragama", "Makevita", "Bollatha", "Yakkala", "Mudungoda", "Ganemulla", "Galahitiyawa", "Belummahara", "Amunugoda", "Weliweriya", 
                        "Nedungamuwa", "Nittambuwa", "Bemmulla", "Kalagedihena", "Ellakkala", "Alawala","Nikahetikanda", "Urapola", "Bopagama","Kahatovita", 
                        "Udathuththiripitiya", "Kirindiwela", "Radawana", "Udagama", "Werahera", "Mandawala", "Pepiliyawala", "Demalagama", "Poogoda", "Dekatana", 
                        "Dompe", "Kapugoda", "Malwana", "Thittapattara", "Ambgaspitiya", "Buthpitiya", "Neelamahara","Naranwala", "Webada", "Kiribathgoda", "Dalugama", 
                        "Wedamulla", "Kelaniya", "Mawaramandiya", "Delgoda", "Heiyanthuduwa", "Makola", "Gonawala", "Siyambalape", "Ulahitiwala", "Biyagama", 
                        "Kadawatha", "Negombo", "Minuwangoda", "Gampaha", "Attanagalla", "Mahara", "Essella", "Hiswella"
                        ],


            
            "Galle" : ["Bodhimaluwa", "Dedduwa", "Athuruwella", "Galagama", "Thunduwa", "Warakamulla", "Miriswatta", "Viyandoowa", "Mahavila", "Ranthotuwila", 
                        "Malawala", "Uragaha", "Doowemodara", "Kosgoda", "Ahungalla", "Balapitiya", "Wathugedara", "Kurunduwatta", "Uragasmanhandiya", "Karandeniya", 
                        "Kurundugaha Hethekma", "Aviththawa","Opatha", "Amugoda", "batuwanhena", "Ella", "Ella Thanabaddegama", "Kahadoowa", "Pitigala", "Mattaka", 
                        "Weihena", "Porawagama", "Hiniduma", "Panagala", "Neluwa", "Warukandeniya", "Lankagama", "Pannimulla", "Medagama", "Mapalagama", 
                        "Parana Thanayamgoda", "Nagoda", "Udugama", "Udalamatta", "Yatalamatta", "Gothatuwa", "Keradewala", "Dodangoda", "Wanduramba", 
                        "Deiyandara", "Nattewela", "Ampegama", "Agaliya", "Batapola", "Nindana", "Meetiyagoda", "Kuleegoda", "Akurala", "Kahawa", "Weragoda", 
                        "Seenigama", "Thiranagama", "Dodandugoda", "Dodandoowa", "Maliduwa", "Ganegoda", "Rathgama", "Boossa", "Ginthota", "Madawalamulla", 
                        "Dangedara", "Bataganvila", "Bope", "Minuwangoda", "Magalla", "Poddala", "Panideniya", "Wakwella", "Hapugala", "Uluvitike", "Labudoowa", 
                        "Kithulampitiya", "Karapitiya", "Hiyare", "Akmeemana", "Amukotuwa", "Walahanduwa", "Pilana", "Bataduwa", "Kalahe", "Wanchawala", 
                        "Nakiyadeniya", "Yakkalamulla", "Karagoda", "Thalgampala", "Ihala Walpola", "Pituwala", "Paragoda", "Mawanella", "Imaduwa", "Dikkumbura", 
                        "Unawatuna", "Thalpe", "Meepe", "Koggala", "kathluwa", "Ahangama", "Aluthwala", "Gonapeenuwala", "Hikkaduwa", "Benthota", "Elpitiya", 
                        "Thawalama", "Baddegama", "Ambalangoda", "Galle", "Bope-poddala","Habaraduwa", "Anangoda", "Angulugaha", "Ethkandura", "Kalegana", "Induruwa"
                        ],
            

            "Kandy" :  ["Gallenawatta", "Galagedara", "Uduwa", "Paranagama", "Weththewa", "Poholiyadda", "Pallekotuwa", "Minigamuwa", "Thennewela", "Egodamulla", 
                        "Ankumbura", "Galhinna", "Palliya Kotuwa", "Batagolladeniya", "Udahiguwala", "Kahatagasthenna", "Dolapihilla", "Weligalla", "Diddeniya", "Batagalla", 
                        "Batugoda", "Kahawatta", "Alawathugoda", "Rathkoho", "Pallawelikatiya", "Akurana", "Dunuvila", "Doragamuwa", "Wattegama", "Eriyagasthenna", 
                        "Udathalavinna", "Pallethalavinna ihala", "Ambathanna", "Pallethalavinna", "Madawala", "Gunnepana", "Polgolla", "Beddegama" ,"Madulkele", "Panvila", 
                        "Kalugala", "Pallewela", "Kobonilla", "Hanwella", "Udadumbara", "Hunnasgiriya", "Gangoda", "Karandagolla", "Rambukwella", "Madugalla","Ulpathagama", 
                        "Pallewatta", "Handaganawa", "Batumulla", "Ambagahapelessa", "Minipe", "Hakmana", "Rangala", "Makuldeniya", "Putuhapuwa", "Naranpanawa", "Makkanigama", 
                        "Gonawala", "Pilawala", "Kengalla", "Nattarampotha", "Rajawella", "Senkadagala", "Asgiriya", "Bogambara", "Gatambe", "Ampitiya", "Gurudeniya", 
                        "Maligathenna", "Ketawala", "Uda Peradeniya", "Hindagala", "Nugawela", "Pallebokalawela", "Senarathgama","Yahalathenna", "Kulugammana", "Katugasthota", 
                        "Haloluwa", "Aludeniya", "Pallepola", "Muruddeniya", "Dedenupitiya", "Kobbekaduwa", "Ihala kobbekaduwa", "Yahalathenna", "Gannoruwa", "Menikdiwela", 
                        "Gondeniya", "Danthure", "Ketakumbura", "Balana", "Ranawana", "Kiribathkumbura", "Pilimathalawa", "Kadugannawa", "Gadaladeniya", "Belungala", "Wattappola", 
                        "Handessa", "Embakka", "Gelioya", "Hondiyadeniya", "Galoya", "Megoda Kalugamuwa", "Nillamba", "Doluwa", "Pupuressa", "Thalathuoya", "Uduwela", 
                        "Nugaliyadda", "Godamunna", "Galagoda", "Bawlana", "Unuvinna", "Bopitiya", "Galaha", "Kolambissa", "Kahatapitiya", "Gampola", "Pussellawa", "Uduwella", 
                        "Patithalawa", "Ulapane", "Ethgala", "Weligampala", "Nawalapitiya", "Dekinda", "Thumpane", "Poojapitiya", "Pathadumbara", "Kandy", "Harispattuwa", 
                        "Yatinuwara", "Pathahewaheta", "Delthota", "Pasbage", "Kapuliyadde", "kundasale", "Mahadoraliyadda", "Peradeniya", "Teldeniya"
                        ], 

            "Kalutara":["Keselwatta", "Pinwatta", "Wadduwa", "Molligoda", "Aluthgama", "Mahavila", "Alubomulla", "Raigama", "Bandaragama","Wellmilla", 
                        "Pannila", "Kuda Uduwa", "Pokunuwita", "Gurugoda", "Horana", "Ingiriya", "Pelpitigoda", "Poruwadanda", "Kobawaka", "Diwalakada", 
                        "Halwathura", "Bulathsinhala", "Govinna", "Delmella", "Paragoda", "Mahagama", "Anguruwanthota", "Haltota", "Millaniya", "Paragasthota", 
                        "Pelpola", "Galpatha", "Dombgoda", "Uduwara" ,"Yatawara", "Moronthuduwa", "Pothupitiya", "Kalutara", "Nagoda", "Payagala", "Halkandavila", 
                        "Maggon", "Kalavila", "Padagoda", "Dharaga Town", "Koholana","Bolossagama", "Remunagoda", "Nebada", "Thebuwana", "Bombuwala", "Dodangoda", 
                        "Mathugama", "Yatadolawatta", "Navuttuduwa", "Horawala", "Welipenna", "Meegama", "Walagedara", "Agalawatta", "Kithulgoda", "Polgampala", 
                        "kelinkanda", "Pelenda", "Morapitiya", "Bellana", "Baduraliya", "Boralugoda", "Meegahathenna", "Uthumgama", "Halwala", "iththapana", 
                        "Pareigama", "Pahala Hewessa", "Pelawatta", "Yagirala", "Panadura", "Beruwala", "Walallavita", "Molkawa", "Waskaduwa"
                        ],


            "Mullaitivu" : ["Alankulam", "Amaithipuram", "Ampalapperumalkulam", "Anichchiyankulam", "Barathinagar", "Iyankankulam", "Kalvilan", 
                            "Koddaikaddiyakulam", "Mallavi", "Palayamurikandy", "Pugalenthinagar", "Puththuvedduvan", "Thenniyankulam", "Therankandal", 
                            "Thirunagar", "Thunukkai", "Uyilankulam", "Yogapuram", "Ampalpuram", "Karumpulliyan", "Kollavilankulam", "Moonrumurippu"
                            ],


            "Kurunegala" : ["Perakumpura", "Solepura", "Weerapokuna", "Solewewa", "Warawewa", "Gampola", "Wannikudawewa", "Medagama", "Senarathgama", 
                            "Kumbukwewa", "Mahagalkadawala", "Usgala Siyabalangamuwa", "Meegalewa", "Ulpathagama", "Mahagalgamuwa", "Karuwalagaswewa", 
                            "Mahananneriya", "Medawachchiya", "Konwewa", "Mahawelithenna", "Makulewa", "Atharagalla", "Gurugoda", "Thimbiriyawa", "Nabadewa", 
                            "Amunugama", "Kirimetiyawa", "Digannewa", "Diullepitiya", "Monnekulama", "Sirisethgama", "thalakolawewa", "Kadigawa", "Subhasighapura", 
                            "Hulugalla", "Hulogedara", "Nikaweratiya", "Diwullagoda", "Halmillewa", "Madurugama", "Mahawa", "Embogama", "Balalla", "Gallewa", 
                            "Nagollagama", "Thalaglla", "Siyabalagamuwa", "Pallekele", "Polpithigama", "Halmillawewa", "Makulpotha", "polgahangoda", "Madahapola", 
                            "Maeliya", "Nelliya", "Diddeniya", "Panliyadda", "Katupotha", "Mahagama","Ambanpola", "Godagama", "Periyakadu Nelawa", "Polgolla", 
                            "Ibbagamuwa", "Pannala", "Thambagalla", "Makulmade", "Nikadalupotha", "Hunupola", "Makulwewa", "Minuwangete", "Welawa", "Awlegama", 
                            "Muwanwellegedara", "Pandeniya", "Mirihangema", "Wariyapola", "Randemiya", "Malwana", "Henagamuwa","Wannigama", "Amunukole", "Kahatagaswewa", 
                            "Maaulla", "Alahenegama", "Kobeigane", "Wellarawa", "Hiruwalpola", "Ihala Kadigamuwa", "Kurundupotha", "Meladeniya", "Padiwela", "Mandapola", 
                            "rambawa", "pallegama", "Bandara Koswatta", "Panduwasnuwara", "Hettipola", "Munihirigama","Ehetumulla", "Nagollagoda", "Karagahagedra", 
                            "Kosdeniya", "Hanwella", "Angamuwa", "Moragane", "Bamunakotuwa", "Demataluwa", "Minhettiya", "Kudagalgamuwa", "Maspotha", "Wellawa", "Boyagne", 
                            "Aththanapitiya", "Pillawa"
                            ],


        }

        function makeSubmenu(value) {
            if(value.length==0) document.getElementById("citySelect").innerHTML = "<option></option>";
            else {
                var citiesOptions = "";
            for(cityId in citiesByState[value]) {
                citiesOptions+="<option>"+citiesByState[value][cityId]+"</option>";
            }
            document.getElementById("citySelect").innerHTML = citiesOptions;
            }
        }
        function displaySelected() { var country = document.getElementById("countrySelect").value;
            var city = document.getElementById("citySelect").value;
            alert(country+"\n"+city);
        }
        function resetSelection() {
            document.getElementById("countrySelect").selectedIndex = 0;
            document.getElementById("citySelect").selectedIndex = 0;
        }
                
</script> -->

                    </select>
        </td>

        <!------------------------------------------------------------------------------------------------------>
        <td  style="padding:1em 8em;">
                    <select name="category" id="list3" style="background-color: #3E5AD8; height:35px; color:white; border:none;">
                        <option value =" "  selected label="Category"> Select Category</option>
                        <option value="Plumber" style="background-color: white; color:black"> Plumber</option>
                        <option value="Masons" style="background-color: white; color:black"> Masons</option>
                        <option value="Tile" style="background-color: white; color:black"> Tile</option>
                        <option value="Carpenter" style="background-color: white; color:black"> Carpenter</option>
                        <option value="Painter" style="background-color: white; color:black"> Painter</option>
                        <option value="Electricians" style="background-color: white; color:black"> Electricians</option>
                        <option value="Landscape" style="background-color: white; color:black"> Landscape</option>
                        <option value="Civil Workers" style="background-color: white; color:black"> Civil Workers</option>
                        <option value="Designer" style="background-color: white; color:black"> Designer</option>
                        <option value="Concrete Slab" style="background-color: white; color:black"> Concrete Slab</option>
                        <option value="Rent Tools" style="background-color: white; color:black"> Rent Tools </option>
                        <option value="A/C Repair" style="background-color: white; color:black"> A/C Repair</option>
                        <option value="Welding" style="background-color: white; color:black"> Welding</option>
                        <option value="Chef" style="background-color: white; color:black"> Chef</option>
                        <option value="Cushion Work" style="background-color: white; color:black"> Cushion Work</option>
                        <option value="Vehicle Repairs" style="background-color: white; color:black"> Vehicle Repairs</option>
                        <option value="Cleaner" style="background-color: white; color:black"> Cleaner</option>
                        <option value="CCTV Repair" style="background-color: white; color:black"> CCTV Repair</option>
                        <option value="Ceiling Repair" style="background-color: white; color:black"> Ceiling Repair</option>
                        <option value="TV Repair" style="background-color: white; color:black"> TV Repair</option>
                        <option value="Lorry Driver" style="background-color: white; color:black"> Lorry Driver</option>
                        <option value="Concrete Slab" style="background-color: white; color:black">Concrete Slab</option>
                        <option value="Solar Panel fixing" style="background-color: white; color:black"> Solar Panel fixing</option>
                        <option value="Demolition" style="background-color: white; color:black"> Demolition</option>
                        <option value="Ceiling Repair" style="background-color: white; color:black">Ceiling Repair</option>
                        <option value="Well Cleaner" style="background-color: white; color:black"> Well Cleaner</option>
                        <option value="Movers" style="background-color: white; color:black"> Movers</option>
                        <option value="Aluminium Repair" style="background-color: white; color:black"> Aluminium Repair</option>
                        <option value="Catering" style="background-color: white; color:black"> Catering</option>
                        <option value="Mug Designer" style="background-color: white; color:black"> Mug Designer</option>
                        <option value="Chair Weaver" style="background-color: white; color:black"> Chair Weaver</option>
                        <option value="Curtain Supplier" style="background-color: white; color:black"> Curtain Supplier</option>

                    </select>
        </td>

        <td> <input type="submit" value="Go" class="searchButton" style="background-color: #3E5AD8; font-size:13px"> </td>
    </tr>
    </form>
</table>




    <div class="customer-ad">
        <div class="ad-space-row">
            <div class="grid-container" style="width:50em; margin-left:-5em">
            <!---------------------------------------------------------------------------------------------------->
            <?php foreach($data['worker'] as $worker): ?>
            <div class="ad-space">
                    <div class="img-user">
                        <img src="<?php echo URLROOT;?>/public/img/<?php echo $worker->prof_pic; ?>" alt="propic" class="img-ad"/>
                    </div>
                    <p class="title1"><?php echo $worker->fname; ?> <?php echo $worker->lname; ?></p>
                        <div class="ad-row">
                            <div class="ad-col-35">
                                <label for="name"> <b>District :</b> </label>
                            </div>
                            <div class="ad-col-65">
                                <p class="detail"><?php echo $worker->district; ?></p>
                            </div>
                        </div>

                        <div class="ad-row">
                            <div class="ad-col-35">
                                <label for="name"> <b>Cityt :</b> </label>
                            </div>
                            <div class="ad-col-65">
                                <p class="detail"><?php echo $worker->city; ?></p>
                            </div>
                        </div>

                        <div class="ad-row">
                            <div class="ad-col-35">
                                <label for="name"> <b>Address :</b> </label>
                            </div>
                            <div class="ad-col-65">
                                <p class="detail"><?php echo $worker->address; ?></p>
                            </div>
                        </div>

                        <div class="ad-row">
                            <div class="ad-col-35">
                                <label for="name"> <b>Contact :</b> </label>
                            </div>
                            <div class="ad-col-65">
                                <p class="detail"><?php echo $worker->contact; ?> </p>
                            </div>
                        </div>

                        <div class="ad-row">
                            <div class="ad-col-35">
                                <label for="name"> <b>Email :</b> </label>
                            </div>
                            <div class="ad-col-65">
                                <p class="detail"><?php echo $worker->email; ?> </p>
                            </div>
                        </div>

                        <div class="ad-row">
                            <div class="ad-col-35">
                                <label for="name"> <b>Category :</b> </label>
                            </div>
                            <div class="ad-col-65">
                                <p class="detail"><button  class="focus-area"><?php echo $worker->category; ?> </button></p>
                            </div>
                            <!-- <button class="focus-area">Designer</button> -->
                        </div>

                        <div class="ad-row"> 
                            <input type="submit" value="Invite for Job" class="pink-button" style="margin-left:20%;  margin-bottom:1em; width:60%;">
                        </div>
                        </br>
                        <div class="ad-row" style="margin-top:1em">
                        </div>
                </div>
                <?php endforeach; ?>
        </div>
    </div>
</div>

<!------------------------------------------------------------popoup window-------------------------------------------------->

<div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content" style="margin-top: 10%;">
                <form action="<?php echo URLROOT; ?>/customers/customer_service_providers" method="POST">
                    <span class="close">&times;</span>
                    <p class="heading" style="margin-top: 1em; margin-left:35%;">Invite for Job <img src="<?php echo URLROOT;?> /public/img/invite.png" class="popup-image"></p>
                        <div class="row">
                            <div class="col-25">
                            <label for="time" style="color: #0526BA; font-size:15px;">Time</label>
                            </div>
                            <div class="col-75">
                            <input type="time" id="time" name="time" placeholder="Enter time">
                            </br> 
                                <span class="invalidFeedback">
                                    <?php echo $data['timeError']; ?>
                                </span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                            <label for="sdate" style="color: #0526BA; font-size:15px;">Start Date</label>
                            </div>
                            <div class="col-75">
                            <input type="date" id="sdate" name="sdate" placeholder="Enter start date">
                            </br> 
                                <span class="invalidFeedback">
                                    <?php echo $data['sdateError']; ?>
                                </span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                            <label for="fdate" style="color: #0526BA; font-size:15px;">Finish Date</label>
                            </div>
                            <div class="col-75">
                            <input type="date" id="fdate" name="fdate" placeholder="Enter finish date">
                            </br> 
                                <span class="invalidFeedback">
                                    <?php echo $data['fdateError']; ?>
                                </span>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-25">
                            <label for="address" style="color: #0526BA; font-size:15px;">Address</label>
                            </div>
                            <div class="col-75">
                            <input type="text" id="address" name="address" placeholder="Enter adress">
                            </br> 
                                <span class="invalidFeedback">
                                    <?php echo $data['addressError']; ?>
                                </span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                            <label for="amount" style="color: #0526BA; font-size:15px;">Budget</label>
                            </div>
                            <div class="col-75">
                            <input type="text" id="amount" name="amount" placeholder="Enter amount">
                            </br> 
                                <span class="invalidFeedback">
                                    <?php echo $data['amountError']; ?>
                                </span>
                            </div>
                        </div>
                        </br> </br>
                        <div class="row">
                            <input type="submit" value="Submit" class="blue-button" style="margin-left:45%;">
                        </div>
                        </br>
                </form>
        </div>
    </div>

    <!------------------Java Script -  popup message------------------------------->
    <script type="text/javascript" src="<?php echo URLROOT;?> /public/js/pink-button-popup.js"> 
    </script>
            
<!---------------------------Arrow button----------------------------------------->
<div class="arrow">
	<a href="#"><img src="<?php echo URLROOT;?> /public/img/arrow.png" alt="up_arrow"></a>
</div>        

<?php include_once APPROOT . '/views/includes/footer.php'; ?>