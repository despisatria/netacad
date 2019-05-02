<?php  
  session_start();
  if ($_SESSION['user_id'] != NULL){
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Join Educode and learn to code from the best online free courses programs.">
    <link rel="icon" href="asset/img/favicon.png">

    <title>Evaluasi - IP Addressing</title>
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/css/font-awesome.min.css" rel="stylesheet">
    <link href="asset/css/style.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="container-fluid">
      <div class="row">
        <?php  
          include 'sidebar.php';
        ?>
        <div class="col-md-10">
          <div class="row">
            <div class="title-page">
              <div class="col-md-6">
                <span>
                  <ol class="breadcrumb">
                    <li><a href="evaluasi.php">Evaluasi</a></li>
                    <li class="active">IP Addressing & Subnetting</li>                  
                  </ol>
                </span>
              </div>
              <div class="col-md-4 text-right">
                <span>Halo,
                  <?php  
                    echo $_SESSION['nama'];
                  ?>!
                </span>
              </div>
            </div>
            <div class="content">
              <div class="col-md-12">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-2 program-list scroll">
                      <ul class="nav nav-tabs nav-program text-center" role="tablist">
                        <li role="presentation" class="active">
                          <a href="#soal1" aria-controls="materi" role="tab" data-toggle="tab">Soal 1</a>
                        </li>
                        <li role="presentation">
                          <a href="#soal2" aria-controls="materi" role="tab" data-toggle="tab">Soal 2</a>
                        </li>
                        <li role="presentation">
                          <a href="#soal3" aria-controls="materi" role="tab" data-toggle="tab">Soal 3</a>
                        </li>
                        <li role="presentation">
                          <a href="#soal4" aria-controls="materi" role="tab" data-toggle="tab">Soal 4</a>
                        </li>
                        <li role="presentation">
                          <a href="#soal5" aria-controls="materi" role="tab" data-toggle="tab">Soal 5</a>
                        </li>
                        <li role="presentation">
                          <a href="#soal6" aria-controls="materi" role="tab" data-toggle="tab">Soal 6</a>
                        </li>
                        <li role="presentation">
                          <a href="#soal7" aria-controls="materi" role="tab" data-toggle="tab">Soal 7</a>
                        </li>
                        <li role="presentation">
                          <a href="#soal8" aria-controls="materi" role="tab" data-toggle="tab">Soal 8</a>
                        </li>
                        <li role="presentation">
                          <a href="#soal9" aria-controls="materi" role="tab" data-toggle="tab">Soal 9</a>
                        </li>
                        <li role="presentation">
                          <a href="#soal10" aria-controls="materi" role="tab" data-toggle="tab">Soal 10</a>
                        </li>
                        <li role="presentation">
                          <a href="#soal11" aria-controls="materi" role="tab" data-toggle="tab">Soal 11</a>
                        </li>
                        <li role="presentation">
                          <a href="#soal12" aria-controls="materi" role="tab" data-toggle="tab">Soal 12</a>
                        </li>
                        <li role="presentation">
                          <a href="#soal13" aria-controls="materi" role="tab" data-toggle="tab">Soal 13</a>
                        </li>
                        <li role="presentation">
                          <a href="#soal14" aria-controls="materi" role="tab" data-toggle="tab">Soal 14</a>
                        </li>
                        <li role="presentation">
                          <a href="#soal15" aria-controls="materi" role="tab" data-toggle="tab">Soal 15</a>
                        </li>
                        <li role="presentation">
                          <a href="#soal16" aria-controls="materi" role="tab" data-toggle="tab">Soal 16</a>
                        </li>
                        <li role="presentation">
                          <a href="#soal17" aria-controls="materi" role="tab" data-toggle="tab">Soal 17</a>
                        </li>
                        <li role="presentation">
                          <a href="#soal18" aria-controls="materi" role="tab" data-toggle="tab">Soal 18</a>
                        </li>
                        <li role="presentation">
                          <a href="#soal19" aria-controls="materi" role="tab" data-toggle="tab">Soal 19</a>
                        </li>
                        <li role="presentation">
                          <a href="#soal20" aria-controls="materi" role="tab" data-toggle="tab">Soal 20</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-10">
                      <div class="body-card-setting">
                        <div class="setting-page">
                          <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="soal1">
                              <div class="embed-responsive embed-responsive-16by9">
                                <h3>Sebuah aturan atau standar yang mengatur bagaimana terjadinya hubungan dan perpindahan data antara dua atau lebih komputer yang saling terhubung, dikenal dengan istilah ...</h3>

                                <div class="funkyradio">
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio1" />
                                      <label for="radio1">Internet Protocol </label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio2"/>
                                      <label for="radio2">Protocol Jaringan</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio3" />
                                      <label for="radio3">Standarisasi</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio4" />
                                      <label for="radio4">Rules</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio5" />
                                      <label for="radio5">Peraturan</label>
                                  </div>
                                </div>
                                <div class="row"  style="margin-top: 10px;">
                                  <div class="col-md-6 text-right">
                                    <a href="eval-ipaddress.php" class="btn btn-default">< Sebelumnya</a>
                                  </div>
                                  <div class="col-md-6 ">
                                    <a href="#materi2" aria-controls="materi" role="tab" data-toggle="tab" class="btn btn-success" role="presentation">Selanjutnya ></a>
                                  </div> 
                                </div>
                              </div>
                            </div>

                            <div role="tabpanel" class="tab-pane " id="soal2">
                              <div class="embed-responsive embed-responsive-16by9">
                                </h3><h3>Dalam jaringan komputer, pengidentifikasian suatu komputer pada jaringan sehingga memiliki identitas yang unik sangat penting. Proses pengidentifikasian komputer tersebut disebut ....</h3>
                                <div class="funkyradio">
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio1" />
                                      <label for="radio1">Broadcast</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio2"/>
                                      <label for="radio2">Subnetting</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio3" />
                                      <label for="radio3">Pengalamatan IP</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio4" />
                                      <label for="radio4">Pembagian Kelas</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio5" />
                                      <label for="radio5">Sistem Penamaan</label>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div role="tabpanel" class="tab-pane " id="soal3">
                              <div class="embed-responsive embed-responsive-16by9">
                                <h3>Pada dasarnya, arsitektur IPv4 menganut konsep ...</h3>
                                <div class="funkyradio">
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio1" />
                                      <label for="radio1">Unicast Addresses</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio2"/>
                                      <label for="radio2">Classfull Addressing</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio3" />
                                      <label for="radio3">Anycast Addresses</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio4" />
                                      <label for="radio4">Classess Addressing</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio5" />
                                      <label for="radio5">Multicast Addresses</label>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div role="tabpanel" class="tab-pane " id="soal4">
                              <div class="embed-responsive embed-responsive-16by9">
                                <h3>Alamat kelas D digunakan untuk keperluan ...</h3>
                                <div class="funkyradio">
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio1" />
                                      <label for="radio1">Multicast</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio2"/>
                                      <label for="radio2">Broadcast</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio3" />
                                      <label for="radio3">Unicast</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio4" />
                                      <label for="radio4">Private</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio5" />
                                      <label for="radio5">Public</label>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div role="tabpanel" class="tab-pane " id="soal5">
                              <div class="embed-responsive embed-responsive-16by9">
                                <h3>Nilai oktet pertama dari IP Address kelas A adalah …</h3>
                                <div class="funkyradio">
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio1" />
                                      <label for="radio1">240-255</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio2"/>
                                      <label for="radio2">224-239</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio3" />
                                      <label for="radio3">192-223</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio4" />
                                      <label for="radio4">128-192</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio5" />
                                      <label for="radio5">1-127</label>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div role="tabpanel" class="tab-pane " id="soal6">
                              <div class="embed-responsive embed-responsive-16by9">
                                <h3>IP Address kelas C memiliki jumlah host untuk setiap network sebanyak …</h3>
                                <div class="funkyradio">
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio1" />
                                      <label for="radio1">254 host</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio2"/>
                                      <label for="radio2">256 host</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio3" />
                                      <label for="radio3">65.534 host</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio4" />
                                      <label for="radio4">65.536 host</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio5" />
                                      <label for="radio5">1024 host</label>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div role="tabpanel" class="tab-pane " id="soal7">
                              <div class="embed-responsive embed-responsive-16by9">
                                <h3>Diketahui sebuah IP 200.168.20.2, yang menunjukkan network ID adalah ....</h3>
                                <div class="funkyradio">
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio1" />
                                      <label for="radio1">20.2</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio2"/>
                                      <label for="radio2">168.20.2</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio3" />
                                      <label for="radio3">200</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio4" />
                                      <label for="radio4">2</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio5" />
                                      <label for="radio5">200.168.20</label>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div role="tabpanel" class="tab-pane " id="soal8">
                              <div class="embed-responsive embed-responsive-16by9">
                                <h3>3.  Pada dasarnya, arsitektur IPv4 menganut konsep ...</h3>
                                <div class="funkyradio">
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio1" />
                                      <label for="radio1">aaa</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio2"/>
                                      <label for="radio2">bbb</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio3" />
                                      <label for="radio3">ccc</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio4" />
                                      <label for="radio4">ddd</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio5" />
                                      <label for="radio5">eee</label>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div role="tabpanel" class="tab-pane " id="soal9">
                              <div class="embed-responsive embed-responsive-16by9">
                                <h3>3.  Pada dasarnya, arsitektur IPv4 menganut konsep ...</h3>
                                <div class="funkyradio">
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio1" />
                                      <label for="radio1">aaa</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio2"/>
                                      <label for="radio2">bbb</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio3" />
                                      <label for="radio3">ccc</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio4" />
                                      <label for="radio4">ddd</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio5" />
                                      <label for="radio5">eee</label>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div role="tabpanel" class="tab-pane " id="soal10">
                              <div class="embed-responsive embed-responsive-16by9">
                                <h3>3.  Pada dasarnya, arsitektur IPv4 menganut konsep ...</h3>
                                <div class="funkyradio">
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio1" />
                                      <label for="radio1">aaa</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio2"/>
                                      <label for="radio2">bbb</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio3" />
                                      <label for="radio3">ccc</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio4" />
                                      <label for="radio4">ddd</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio5" />
                                      <label for="radio5">eee</label>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div role="tabpanel" class="tab-pane " id="soal11">
                              <div class="embed-responsive embed-responsive-16by9">
                                <h3>3.  Pada dasarnya, arsitektur IPv4 menganut konsep ...</h3>
                                <div class="funkyradio">
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio1" />
                                      <label for="radio1">aaa</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio2"/>
                                      <label for="radio2">bbb</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio3" />
                                      <label for="radio3">ccc</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio4" />
                                      <label for="radio4">ddd</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio5" />
                                      <label for="radio5">eee</label>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div role="tabpanel" class="tab-pane " id="soal12">
                              <div class="embed-responsive embed-responsive-16by9">
                                <h3>3.  Pada dasarnya, arsitektur IPv4 menganut konsep ...</h3>
                                <div class="funkyradio">
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio1" />
                                      <label for="radio1">aaa</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio2"/>
                                      <label for="radio2">bbb</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio3" />
                                      <label for="radio3">ccc</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio4" />
                                      <label for="radio4">ddd</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio5" />
                                      <label for="radio5">eee</label>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div role="tabpanel" class="tab-pane " id="soal13">
                              <div class="embed-responsive embed-responsive-16by9">
                                <h3>3.  Pada dasarnya, arsitektur IPv4 menganut konsep ...</h3>
                                <div class="funkyradio">
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio1" />
                                      <label for="radio1">aaa</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio2"/>
                                      <label for="radio2">bbb</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio3" />
                                      <label for="radio3">ccc</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio4" />
                                      <label for="radio4">ddd</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio5" />
                                      <label for="radio5">eee</label>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div role="tabpanel" class="tab-pane " id="soal14">
                              <div class="embed-responsive embed-responsive-16by9">
                                <h3>3.  Pada dasarnya, arsitektur IPv4 menganut konsep ...</h3>
                                <div class="funkyradio">
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio1" />
                                      <label for="radio1">aaa</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio2"/>
                                      <label for="radio2">bbb</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio3" />
                                      <label for="radio3">ccc</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio4" />
                                      <label for="radio4">ddd</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio5" />
                                      <label for="radio5">eee</label>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div role="tabpanel" class="tab-pane " id="soal15">
                              <div class="embed-responsive embed-responsive-16by9">
                                <h3>3.  Pada dasarnya, arsitektur IPv4 menganut konsep ...</h3>
                                <div class="funkyradio">
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio1" />
                                      <label for="radio1">aaa</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio2"/>
                                      <label for="radio2">bbb</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio3" />
                                      <label for="radio3">ccc</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio4" />
                                      <label for="radio4">ddd</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio5" />
                                      <label for="radio5">eee</label>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div role="tabpanel" class="tab-pane " id="soal16">
                              <div class="embed-responsive embed-responsive-16by9">
                                <h3>3.  Pada dasarnya, arsitektur IPv4 menganut konsep ...</h3>
                                <div class="funkyradio">
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio1" />
                                      <label for="radio1">aaa</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio2"/>
                                      <label for="radio2">bbb</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio3" />
                                      <label for="radio3">ccc</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio4" />
                                      <label for="radio4">ddd</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio5" />
                                      <label for="radio5">eee</label>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div role="tabpanel" class="tab-pane " id="soal7">
                              <div class="embed-responsive embed-responsive-16by9">
                                <h3>3.  Pada dasarnya, arsitektur IPv4 menganut konsep ...</h3>
                                <div class="funkyradio">
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio1" />
                                      <label for="radio1">aaa</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio2"/>
                                      <label for="radio2">bbb</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio3" />
                                      <label for="radio3">ccc</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio4" />
                                      <label for="radio4">ddd</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio5" />
                                      <label for="radio5">eee</label>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div role="tabpanel" class="tab-pane " id="soal18">
                              <div class="embed-responsive embed-responsive-16by9">
                                <h3>3.  Pada dasarnya, arsitektur IPv4 menganut konsep ...</h3>
                                <div class="funkyradio">
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio1" />
                                      <label for="radio1">aaa</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio2"/>
                                      <label for="radio2">bbb</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio3" />
                                      <label for="radio3">ccc</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio4" />
                                      <label for="radio4">ddd</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio5" />
                                      <label for="radio5">eee</label>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div role="tabpanel" class="tab-pane " id="soal19">
                              <div class="embed-responsive embed-responsive-16by9">
                                <h3>3.  Pada dasarnya, arsitektur IPv4 menganut konsep ...</h3>
                                <div class="funkyradio">
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio1" />
                                      <label for="radio1">aaa</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio2"/>
                                      <label for="radio2">bbb</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio3" />
                                      <label for="radio3">ccc</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio4" />
                                      <label for="radio4">ddd</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio5" />
                                      <label for="radio5">eee</label>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div role="tabpanel" class="tab-pane " id="soal20">
                              <div class="embed-responsive embed-responsive-16by9">
                                <h3>3.  Pada dasarnya, arsitektur IPv4 menganut konsep ...</h3>
                                <div class="funkyradio">
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio1" />
                                      <label for="radio1">aaa</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio2"/>
                                      <label for="radio2">bbb</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio3" />
                                      <label for="radio3">ccc</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio4" />
                                      <label for="radio4">ddd</label>
                                  </div>
                                  <div class="funkyradio-success">
                                      <input type="radio" name="radio" id="radio5" />
                                      <label for="radio5">eee</label>
                                  </div>
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="asset/js/jquery.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
  </body>
</html>
<?php
} else {
  header('location: index.php');
}
?>