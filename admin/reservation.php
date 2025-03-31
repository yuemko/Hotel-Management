<?php
include('db.php');
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AHI HOTEL</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="../index.php"><i class="fa fa-home"></i> AnaSayfa</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">AHI OTEL</h1>
                    </div>
                </div>

                <!-- Tek bir form içinde tüm alanlar -->
                <form method="post" action="" name="rezervasyonForm">
                    <div class="row">
                        <!-- Kişisel Bilgiler -->
                        <div class="col-md-5 col-sm-5">
                            <div class="panel panel-primary">
                                <div class="panel-heading">KİŞİSEL BİLGİLER</div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label>Unvan*</label>
                                        <select name="title" class="form-control" required>
                                            <option value="">Seçiniz</option>
                                            <option value="Dr.">Dr.</option>
                                            <option value="Miss.">Bayan</option>
                                            <option value="Mr.">Bay</option>
                                            <option value="Mrs.">Hanım</option>
                                            <option value="Prof.">Prof.</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Ad*</label>
                                        <input name="fname" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Soyad*</label>
                                        <input name="lname" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>E-posta*</label>
                                        <input name="email" type="email" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Telefon*</label>
                                        <input name="phone" type="tel" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Ülke*</label>
                                        <select name="country" class="form-control" required>
                                            <option value="">Seçiniz</option>
                                            <?php
                                            $countries = array("Türkiye", "Almanya", "İngiltere", "Fransa", "İtalya", "İspanya", "Hollanda", "Belçika", "İsviçre", "Avusturya");
                                            foreach($countries as $country) {
                                                echo '<option value="'.htmlspecialchars($country).'">'.htmlspecialchars($country).'</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Rezervasyon Bilgileri -->
                        <div class="col-md-7 col-sm-7">
                            <div class="panel panel-primary">
                                <div class="panel-heading">REZERVASYON BİLGİLERİ</div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label>Oda Tipi*</label>
                                        <select name="troom" class="form-control" required>
                                            <option value="">Seçiniz</option>
                                            <option value="Superior Room">Superior Oda</option>
                                            <option value="Deluxe Room">Deluxe Oda</option>
                                            <option value="Guest House">Misafir Evi</option>
                                            <option value="Single Room">Tek Kişilik Oda</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Yatak Tipi*</label>
                                        <select name="bed" class="form-control" required>
                                            <option value="">Seçiniz</option>
                                            <option value="Single">Tek Kişilik</option>
                                            <option value="Double">Çift Kişilik</option>
                                            <option value="Triple">Üç Kişilik</option>
                                            <option value="Quad">Dört Kişilik</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Giriş Tarihi*</label>
                                        <input name="cin" type="date" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Çıkış Tarihi*</label>
                                        <input name="cout" type="date" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Yemek Planı*</label>
                                        <select name="meal" class="form-control" required>
                                            <option value="">Seçiniz</option>
                                            <option value="Room only">Sadece Oda</option>
                                            <option value="Breakfast">Kahvaltı</option>
                                            <option value="Half Board">Yarım Pansiyon</option>
                                            <option value="Full Board">Tam Pansiyon</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Doğrulama Kodu -->
                        <div class="col-md-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">DOĞRULAMA</div>
                                <div class="panel-body">
                                    <?php $Random_code = rand(10000, 99999); ?>
                                    <div class="form-group">
                                        <label>Güvenlik Kodu: <strong><?php echo $Random_code; ?></strong></label>
                                        <input type="text" name="code1" class="form-control" required>
                                        <input type="hidden" name="code" value="<?php echo $Random_code; ?>">
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary btn-block">Rezervasyon Yap</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <?php
                if(isset($_POST['submit'])) {
                    try {
                        // Doğrulama kodu kontrolü
                        if($_POST['code1'] != $_POST['code']) {
                            throw new Exception("Güvenlik kodu hatalı!");
                        }

                        // Tarih kontrolü
                        $cin = strtotime($_POST['cin']);
                        $cout = strtotime($_POST['cout']);
                        if($cin >= $cout) {
                            throw new Exception("Çıkış tarihi giriş tarihinden sonra olmalıdır!");
                        }

                        // Veritabanı bağlantısı
                        $con = mysqli_connect("localhost", "root", "", "hotel");
                        if(!$con) {
                            throw new Exception("Veritabanı bağlantı hatası: " . mysqli_connect_error());
                        }

                        // SQL Injection koruması
                        $email = mysqli_real_escape_string($con, $_POST['email']);
                        $stmt = $con->prepare("SELECT COUNT(*) FROM roombook WHERE email = ?");
                        $stmt->bind_param("s", $email);
                        $stmt->execute();
                        $stmt->bind_result($count);
                        $stmt->fetch();
                        $stmt->close();

                        if($count > 0) {
                            throw new Exception("Bu e-posta adresi ile daha önce rezervasyon yapılmış!");
                        }

                        // Yeni rezervasyon ekleme
                        $stmt = $con->prepare("INSERT INTO roombook (Title, FName, LName, Email, Country, Phone, TRoom, Bed, Meal, cin, cout, stat, nodays) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, DATEDIFF(?, ?))");
                        
                        $status = "Onaylanmadı";
                        $stmt->bind_param("ssssssssssssss", 
                            $_POST['title'],
                            $_POST['fname'],
                            $_POST['lname'],
                            $_POST['email'],
                            $_POST['country'],
                            $_POST['phone'],
                            $_POST['troom'],
                            $_POST['bed'],
                            $_POST['meal'],
                            $_POST['cin'],
                            $_POST['cout'],
                            $status,
                            $_POST['cout'],
                            $_POST['cin']
                        );

                        if($stmt->execute()) {
                            echo "<script>alert('Rezervasyonunuz başarıyla alınmıştır!'); window.location.href='index.php';</script>";
                        } else {
                            throw new Exception("Rezervasyon kaydedilirken bir hata oluştu!");
                        }

                    } catch(Exception $e) {
                        echo "<script>alert('Hata: " . $e->getMessage() . "');</script>";
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/custom-scripts.js"></script>
</body>
</html>