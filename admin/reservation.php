<?php
include('db.php')
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AHI HOTEL</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="../index.php"><i class="fa fa-home"></i> AnaSayfa</a>
                    </li>
                    
					</ul>

            </div>

        </nav>
       
        <div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    AHI OTEL <small></small>
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5 col-sm-5">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        KİŞİSEL BİLGİLER
                    </div>
                    <div class="panel-body">
                        <form name="form" method="post">
                            <div class="form-group">
                                <label>Unvan*</label>
                                <select name="title" class="form-control" required>
                                    <option value selected></option>
                                    <option value="Dr.">Dr.</option>
                                    <option value="Miss.">Bayan</option>
                                    <option value="Mr.">Bay</option>
                                    <option value="Mrs.">Hanım</option>
                                    <option value="Prof.">Prof.</option>
                                    <option value="Rev .">Rev.</option>
                                    <option value="Rev . Fr">Rev. Fr.</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Ad</label>
                                <input name="fname" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Soyad</label>
                                <input name="lname" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>E-posta</label>
                                <input name="email" type="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Milliyet*</label>
                                <label class="radio-inline">
                                    <input type="radio" name="nation" value="Sri Lankan" checked="">Sri Lanka Vatandaşı
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="nation" value="Non Sri Lankan">Sri Lanka Vatandaşı Olmayan
                                </label>
                            </div>
                            <?php
                                $countries = array("Afganistan", "Arnavutluk", "Cezayir", "Amerikan Samoası", "Andorra", "Angola", "Anguilla", "Antarktika", "Antigua ve Barbuda", "Arjantin", "Ermenistan", "Aruba", "Avustralya", "Avusturya", "Azerbaycan", "Bahamalar", "Bahreyn", "Bangladeş", "Barbados", "Beyaz Rusya", "Belçika", "Belize", "Benin", "Bermuda", "Butan", "Bolivya", "Bosna-Hersek", "Botsvana", "Bouvet Adası", "Brezilya", "Britanya Hint Okyanusu Bölgesi", "Brunei Darussalam", "Bulgaristan", "Burkina Faso", "Burundi", "Kamboçya", "Kamerun", "Kanada", "Cape Verde", "Cayman Adaları", "Orta Afrika Cumhuriyeti", "Çad", "Şili", "Çin", "Noel Adası", "Cocos (Keeling) Adaları", "Kolombiya", "Komorlar", "Kongo", "Kongo, Demokratik Cumhuriyeti", "Cook Adaları", "Kosta Rika", "Fildişi Sahili", "Hırvatistan", "Küba", "Kıbrıs", "Çek Cumhuriyeti", "Danimarka", "Cibuti", "Dominika", "Dominik Cumhuriyeti", "Doğu Timor", "Ekvador", "Mısır", "El Salvador", "Ekvator Ginesi", "Eritre", "Estonya", "Etiyopya", "Falkland Adaları (Malvinler)", "Faroe Adaları", "Fiji", "Finlandiya", "Fransa", "Fransa Metropolü", "Fransız Guyanası", "Fransız Polinezyası", "Fransız Güney Bölgeleri", "Gabon", "Gambiya", "Gürcistan", "Almanya", "Gana", "Cebelitarık", "Yunanistan", "Grönland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Gine", "Gine-Bisau", "Guyana", "Haiti", "Heard ve Mc Donald Adaları", "Kutsal See (Vatikani Şehri Devleti)", "Honduras", "Hong Kong", "Macaristan", "İzlanda", "Hindistan", "Endonezya", "İran (İslam Cumhuriyeti)", "Irak", "İrlanda", "İsrail", "İtalya", "Jamaika", "Japonya", "Ürdün", "Kazakistan", "Kenya", "Kiribati", "Kuzey Kore", "Güney Kore", "Kuveyt", "Kırgızistan", "Laos", "Letonya", "Lübnan", "Lesotho", "Liberiya", "Libya", "Lihtenştayn", "Litvanya", "Lüksemburg", "Makao", "Makedonya", "Madagaskar", "Malavi", "Malezya", "Maldivler", "Mali", "Malta", "Marshall Adaları", "Martinik", "Mauritius", "Mayotte", "Meksika", "Mikronezya", "Moldova", "Monako", "Moğolistan", "Montserrat", "Fas", "Mozambik", "Myanmar", "Namibya", "Nauru", "Nepal", "Hollanda", "Hollanda Antilleri", "Yeni Kaledonya", "Yeni Zelanda", "Nikaragua", "Nijer", "Nijerya", "Niue", "Norfolk Adası", "Kuzey Mariana Adaları", "Norveç", "Umman", "Pakistan", "Palau", "Panama", "Papua Yeni Gine", "Paraguay", "Peru", "Filipinler", "Pitcairn", "Polonya", "Portekiz", "Porto Riko", "Katar", "Reunion", "Romanya", "Rusya", "Ruanda", "Saint Kitts ve Nevis", "Saint Lucia", "Saint Vincent ve Grenadinler", "Samoa", "San Marino", "São Tomé ve Principe", "Suudi Arabistan", "Senegal", "Seyşeller", "Sierra Leone", "Singapur", "Slovakya", "Slovenya", "Solomon Adaları", "Somali", "Güney Afrika", "Güney Georgia ve Güney Sandwich Adaları", "İspanya", "Sri Lanka", "Saint Helena", "Saint Pierre ve Miquelon", "Sudan", "Surinam", "Svalbard ve Jan Mayen Adaları", "Swaziland", "İsveç", "İsviçre", "Suriye Arap Cumhuriyeti", "Tayvan", "Tacikistan", "Tanzanya", "Tayland", "Togo", "Tokelau", "Tonga", "Trinidad ve Tobago", "Tunus", "Türkiye", "Türkmenistan", "Turks ve Caicos Adaları", "Tuvalu", "Uganda", "Ukrayna", "Birleşik Arap Emirlikleri", "Birleşik Krallık", "Amerika Birleşik Devletleri", "Amerika Birleşik Devletleri Küçük Dış Adaları", "Uruguay", "Özbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virjin Adaları (İngiliz)", "Virjin Adaları (ABD)", "Wallis ve Futuna Adaları", "Batı Sahra", "Yemen", "Yugoslavya", "Zambiya", "Zimbabve");
                            ?>
                            <div class="form-group">
                                <label>Pasaport Ülkesi*</label>
                                <select name="country" class="form-control" required>
                                    <option value selected></option>
                                    <?php
                                    foreach ($countries as $key => $value):
                                        echo '<option value="'.$value.'">'.$value.'</option>';
                                    endforeach;
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Telefon Numarası</label>
                                <input name="phone" type="text" class="form-control" required>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

                  
<div class="row">
    <div class="col-md-6 col-sm-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                REZERVASYON BİLGİLERİ
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label>Oda Tipi *</label>
                    <select name="troom" class="form-control" required>
                        <option value selected></option>
                        <option value="Superior Room">Superior Oda</option>
                        <option value="Deluxe Room">Deluxe Oda</option>
                        <option value="Guest House">Misafir Evi</option>
                        <option value="Single Room">Tek Kişilik Oda</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Yatak Tipi</label>
                    <select name="bed" class="form-control" required>
                        <option value selected></option>
                        <option value="Single">Tek Kişilik</option>
                        <option value="Double">Çift Kişilik</option>
                        <option value="Triple">Üç Kişilik</option>
                        <option value="Quad">Dört Kişilik</option>
                        <option value="None">Yok</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Oda Sayısı *</label>
                    <select name="nroom" class="form-control" required>
                        <option value selected></option>
                        <option value="1">1</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Yemek Planı</label>
                    <select name="meal" class="form-control" required>
                        <option value selected></option>
                        <option value="Room only">Sadece Oda</option>
                        <option value="Breakfast">Kahvaltı</option>
                        <option value="Half Board">Yarım Pansiyon</option>
                        <option value="Full Board">Tam Pansiyon</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Giriş Tarihi</label>
                    <input name="cin" type="date" class="form-control">
                </div>
                <div class="form-group">
                    <label>Çıkış Tarihi</label>
                    <input name="cout" type="date" class="form-control">
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12 col-sm-12">
        <div class="well">
            <h4>İNSAN DOĞRULAMASI</h4>
            <p>Aşağıdaki kodu yazın: <?php $Random_code=rand(); echo $Random_code; ?> </p><br />
            <p>Rastgele kodu girin<br /></p>
            <input type="text" name="code1" title="random code" />
            <input type="hidden" name="code" value="<?php echo $Random_code; ?>" />
            <input type="submit" name="submit" class="btn btn-primary">
            <?php
            if(isset($_POST['submit']))
            {
                $code1=$_POST['code1'];
                $code=$_POST['code']; 
                if($code1!="$code")
                {
                    $msg="Geçersiz kod"; 
                }
                else
                {
                    $con=mysqli_connect("localhost","root","","hotel");
                    $check="SELECT * FROM roombook WHERE email = '$_POST[email]'";
                    $rs = mysqli_query($con,$check);
                    $data = mysqli_fetch_array($rs, MYSQLI_NUM);
                    if($data[0] > 1) {
                        echo "<script type='text/javascript'> alert('Kullanıcı Zaten Var')</script>";
                    }
                    else
                    {
                        $new ="Onaylanmadı";
                        $newUser="INSERT INTO `roombook`(`Title`, `FName`, `LName`, `Email`, `National`, `Country`, `Phone`, `TRoom`, `Bed`, `NRoom`, `Meal`, `cin`, `cout`,`stat`,`nodays`) VALUES ('$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[nation]','$_POST[country]','$_POST[phone]','$_POST[troom]','$_POST[bed]','$_POST[nroom]','$_POST[meal]','$_POST[cin]','$_POST[cout]','$new',datediff('$_POST[cout]','$_POST[cin]'))";
                        if (mysqli_query($con,$newUser))
                        {
                            echo "<script type='text/javascript'> alert('Rezervasyon başvurunuz gönderildi')</script>";
                        }
                        else
                        {
                            echo "<script type='text/javascript'> alert('Veritabanına kullanıcı eklerken hata oluştu')</script>";
                        }
                    }

                    $msg="Kodunuz doğru";
                }
            }
            ?>
        </div>
    </div>
</div>

           
                
                </div>
                    
            
				
					</div>
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
