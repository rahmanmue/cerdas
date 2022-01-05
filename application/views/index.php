 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title id="tittle">Cerdas Belajar</title>

  <?php $this->load->view('src/head');?>

  <!-- Google Font: Source Sans Pro -->
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="aset/gambar/logo.png"   height="120" width="200">
  </div>



  <?php $this->load->view('src/top-nav');?>
    <!-- Left navbar-header -->
<?php $this->load->view('src/menu');?>
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Pembahasan Kelas 1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

	
 <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner"> 
				<!-- Trigger/Open The Modal -->
				<h6>Tema 1 Subtema 1 Pembelajaran 1</h6> 
				<div id="myModal" class="modal modal_multi"> 
				  <!-- Modal content -->
				  <div class="modal-content" style="color: black">
					<span class="close close_multi">&times;</span> 
					<p> 
					<ol style="text-align: left;">  	
					<li>Penggunaan kata aku digunakan saat bersama....  <br>
					   a.Teman Sebaya  &nbsp &nbsp b.Orang tua &nbsp &nbsp c.Keluarga   
					<div id="infol1" style="visibility:hidden;">a.Teman Sebaya</div> 
						<button id="l1" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
					</li>
							<li>Jika belum kenal dengan teman satu kelas. Maka kita bisa segera…. <br>
					   a.Menjauh  &nbsp &nbsp b.Berkenalan &nbsp &nbsp c.Diam   
								 
		
							<div id="infol2" style="visibility:hidden;">b. Berkenalan</div> 
							<button id="l2" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>	
							</li>
							<li>Momo : Siapakah namamu? <br>
								Cici : ....Cici. <br>
								Kata apa yang cocok untuk melengkapi percakapan diatas?<br>
								  a.Namamu  &nbsp &nbsp b.Namaku &nbsp &nbsp c.Namanya  
								<div id="infol3" style="visibility:hidden;">b. Namaku</div> 
					   
						<button id="l3" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
								</li>
							<li>Dengan teman baru kita tidak boleh…
							 <br>
							a.Bertengkar  &nbsp &nbsp b.Bermain &nbsp &nbsp c.Belajar  
						<div id="infol4" style="visibility:hidden;">a. Bertengkar</div>
					   
						<button id="l4" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button></li>	
							<li>Kepada teman kita harus… <br>
					   a.Benci  &nbsp &nbsp b.Takut &nbsp &nbsp c.Sayang   
					   <div id="infol5" style="visibility:hidden;">c. Sayang</div> 
						<button id="l5" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>	
							<li>Disekolah kita bisa mendapat banyak…
							<br>
					   a.Makanan  &nbsp &nbsp b.Teman &nbsp &nbsp c.Mainan  
					   <div id="infol6" style="visibility:hidden;">b. Teman</div> 
					   	 	

						<button id="l6" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>
							<li>Ucapan selamat pagi merupakan contoh kalimat…
							 <br>
					   a.Berterima kasih  &nbsp &nbsp b.Meminta maaf &nbsp &nbsp c.Salam   
					   		<div id="infol7" style="visibility:hidden;">c. Salam</div>

						<button id="l7" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>	
							<li>Bila kita berpergian kita harus…
							<br>
					   a.Berpamitan  &nbsp &nbsp b.Diam &nbsp &nbsp c.Tidak acuh 
		<div id="infol8" style="visibility:hidden;">a. Berpamitan</div> 
					   
						<button id="l8" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>	
							<li>Dengan berpamitan, orang tua menjadi…
							 <br>
					   a.Baik  &nbsp &nbsp b.Tidak cemas &nbsp &nbsp c.Marah   
					   		<div id="infol9" style="visibility:hidden;">b. Tidak cemas</div>

						<button id="l9" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>	
							<li>Dengan semangat belajar kita akan…
							 <br>
					   a.Pintar  &nbsp &nbsp b.Malas &nbsp &nbsp c.Bosan   
					   		<div id="infol10" style="visibility:hidden;">a. Pintar</div>

						<button id="l10" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>	 
					</ol> 
                    </p>
				  </div> 
				</div> 
              </div>
              <div class="icon">
                <i class="ion-clipboard"></i>
              </div>
              <a href="#" id="myBtn" class="small-box-footer myBtn_multi"> <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
 <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
               <h6>Tema 1 Subtema 1 Pembelajaran 2</h6>
<!-- The Modal -->
				<div id="myModal" class="modal modal_multi"> 
				  <!-- Modal content -->
				  <div class="modal-content" style="color: black">
					<span class="close close_multi">&times;</span> 
					<p> 
					<ol style="text-align: left;">  	
					<li>Perhatikan gambar berikut!   <br>
						<img src="aset/gambar/siti.png"><br><small>Sumber gambar : Buku Tematik Siswa Kelas 1 KEMENDIKBUD</small><br>
						Pertanyaan apakah yang tepat dengan jawaban pada gambar tersebut?<br>
					   a.Apa kesukaanmu?  &nbsp &nbsp b.Siapa namamu? &nbsp &nbsp c.Dimana Rumahmu?   
						<div id="infol21" style="visibility:hidden;">b. Siapa namamu?</div> 
						<button id="l21" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
					</li>
					<li>Perhatikan gambar berikut!   <br>
						<img src="aset/gambar/olahraga.png"><br><small>Sumber gambar : Buku Tematik Siswa Kelas 1 KEMENDIKBUD</small><br>
						 Apakah yang sedang mereka lakukan?<br>
					    a.Berjalan  &nbsp &nbsp b.Berlari &nbsp &nbsp c.Beristirahat  
						<div id="infol22" style="visibility:hidden;">a. Berjalan</div> 
						<button id="l22" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
					</li>
					<li>Berdasarkan gambar di bawah ini, sedang apakah Siti ?<br>
						<img src="aset/gambar/keluarga.png"><br><small>Sumber gambar : Buku Tematik Siswa Kelas 1 KEMENDIKBUD</small><br>
						  a.Meminta uang   &nbsp &nbsp b.Berpamitan  &nbsp &nbsp c.Menangis   
								<div id="infol23" style="visibility:hidden;">b. Berpamitan</div>     
								<button id="l23" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
					</li>
					<li>Perhatikan gambar berikut!   <br>
					     Jawaban apakah yang tepat ketika kita sedang memperkenalkan diri?<br>
						<img src="aset/gambar/sapa.png"><br><small>Sumber gambar : Buku Tematik Siswa Kelas 1 KEMENDIKBUD</small><br>
							a.Namanya  &nbsp &nbsp b.Namamu &nbsp &nbsp c.Namaku  
						<div id="infol24" style="visibility:hidden;">c. Namaku</div> 
						<button id="l24" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
					</li>	
					<li>Kepada teman kita harus… <br>
					   a.Benci  &nbsp &nbsp b.Takut &nbsp &nbsp c.Sayang   
					   <div id="infol25" style="visibility:hidden;">c. Sayang</div> 
						<button id="l25" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
					</li>	
					<li>Perhatikan gambar berikut!    <br>                             
							<img src="aset/gambar/berteman.png"><br><small>Sumber gambar : Buku Tematik Siswa Kelas 1 KEMENDIKBUD</small><br>
						  Di sekolah kita mendapat banyak... <br>
					   a.Uang  &nbsp &nbsp b.Teman &nbsp &nbsp c.Mainan  
					   <div id="infol26" style="visibility:hidden;">b. Teman</div> 
					    <button id="l26" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
					</li>
					<li>Ketika bertemu dengan teman sebaiknya kita…  <br>
					   a.Cemberut  &nbsp &nbsp b.Marah &nbsp &nbsp c.Tersenyum   
					   		<div id="infol27" style="visibility:hidden;">c. Tersenyum</div>

						<button id="l27" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
					</li>	
					<li>Bila kita berpergian kita harus… <br>
					   a.Berpamitan  &nbsp &nbsp b.Diam &nbsp &nbsp c.Tidak acuh 
						<div id="infol28" style="visibility:hidden;">a. Berpamitan</div> 
					   
						<button id="l28" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
					</li>	
					<li>Gerakan lokomotor adalah…
							 <br>
					   a.Gerakan berpindah tempat  &nbsp &nbsp b.Gerakan berjalan &nbsp &nbsp c.Gerakan melompat   
					   		<div id="infol29" style="visibility:hidden;">a. Gerakan berpindah tempat</div>

						<button id="l29" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>	
							<li>Gerak lokomotor meliputi jalan lari dan…
								 <br>
						   a.Berlari  &nbsp &nbsp b.Melompat &nbsp &nbsp c.Duduk   
								<div id="infol210" style="visibility:hidden;">b. Melompat</div>

							<button id="l210" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>	 
					</ol> 
                    </p>
				 
						
				  </div>

				</div>
              </div>
              <div class="icon">
                <i class="ion-clipboard"></i>
              </div>
              <a href="#" class="small-box-footer myBtn_multi" > <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner"> 
				<!-- Trigger/Open The Modal -->
				<h6>Tema 1 Subtema 1 Pembelajaran 3</h6> 
				<div id="myModal" class="modal modal_multi"> 
				  <!-- Modal content -->
				  <div class="modal-content" style="color: black">
					<span class="close close_multi">&times;</span> 
					<p> 
					<ol style="text-align: left;">  	
					<li>Jumlah huruf ada … <br>
					   a.24  &nbsp &nbsp b.26 &nbsp &nbsp c.25  
					<div id="infol1a" style="visibility:hidden;">b. 26</div> 
						<button id="l1a" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
					</li>
							<li>"SITI" ada berapa huruf di nama tersebut<br>
					   a.4  &nbsp &nbsp b.5 &nbsp &nbsp c.6  
								 
		
							<div id="infol2a" style="visibility:hidden;">a. 4</div> 
							<button id="l2a" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>	
							</li>
							<li>Nama temanku Tina. <br> 
                T- .. -N- .. <br>
                huruf yang tepat untuk melengkapi nama tersebut adalah .. <br>
								  a.a dan i &nbsp &nbsp b.o dan o  &nbsp &nbsp c.i dan a 
								<div id="infol3a" style="visibility:hidden;">c.i dan a </div> 
					   
						<button id="l3a" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
								</li>
							<li>Perhatikan huruf berikut <br>
                i-a-d-n <br>
                Susuan huruf yang benar adalah.. 
							 <br>
							a.dani  &nbsp &nbsp b.nina &nbsp &nbsp c.nuni
						<div id="infol4a" style="visibility:hidden;">a.dani</div>
					   
						<button id="l4a" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button></li>	
							<li>Sesudah huruf C adalah huruf .. <br>
					   a.Huruf B  &nbsp &nbsp b.Huruf D &nbsp &nbsp c.Huruf E  
					   <div id="infol5a" style="visibility:hidden;">b.Huruf D</div> 
						<button id="l5a" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>	
							<li>Sesudah huruf K adalah ..
							<br>
					   a.Huruf L  &nbsp &nbsp b.Huruf M &nbsp &nbsp c.Huruf N 
					   <div id="infol6a" style="visibility:hidden;">a.Huruf L</div> 
					   	 	

						<button id="l6a" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>
							<li>Huruf ke 5 adalah huruf 
							 <br>
					   a.Huruf F  &nbsp &nbsp b.Huruf G &nbsp &nbsp c.Huruf E   
					   		<div id="infol7a" style="visibility:hidden;">c.Huruf E </div>

						<button id="l7a" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>	
							<li>Nama kakakku Fira <br>
                .. - i - r - ..  <br>
                Huruf yang tepat untuk melengkapi nama tersebut adalah .. <br>
               
					   a.a dan r  &nbsp &nbsp b.i dan r  &nbsp &nbsp c.f dan a
		<div id="infol8a" style="visibility:hidden;">c.f dan a</div> 
					   
						<button id="l8a" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>	
							<li>Huruf terakhir adalah huruf ..
							 <br>
					   a.huruf Z  &nbsp &nbsp b.huruf X &nbsp &nbsp c.huruf Y 
					   		<div id="infol9a" style="visibility:hidden;">a.huruf Z </div>

						<button id="l9a" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>	
							<li>Sebelum huruf P adalah huruf ..
							 <br>
					   a.huruf Q  &nbsp &nbsp b.huruf O &nbsp &nbsp c.huruf T
					   		<div id="infol10a" style="visibility:hidden;">b.huruf O &nbsp</div>

						<button id="l10a" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>	 
					</ol> 
                    </p>
				  </div> 
				</div> 
              </div>
              <div class="icon">
                <i class="ion-clipboard"></i>
              </div>
              <a href="#" id="myBtn" class="small-box-footer myBtn_multi"> <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
 
 <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner"> 
				<!-- Trigger/Open The Modal -->
				<h6>Tema 1 Subtema 1 Pembelajaran 5</h6> 
				<div id="myModal" class="modal modal_multi"> 
				  <!-- Modal content -->
				  <div class="modal-content" style="color: black">
					<span class="close close_multi">&times;</span> 
					<p> 
					<ol style="text-align: left;">  	
					<li>Sebelum belajar, sebaiknya kita… <br>
					   a.Berdoa  &nbsp &nbsp b.Makan &nbsp &nbsp c.Minum   
					<div id="infol51" style="visibility:hidden;">a. Berdoa</div> 
						<button id="l51" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
					</li>
							<li>Amati nama berikut! M O M ...<br>
							Huruf yang hilang dari nama tersebut adalah... <br>
					   a.M  &nbsp &nbsp b.O &nbsp &nbsp c.C    
							<div id="infol52" style="visibility:hidden;">b. M</div> 
							<button id="l52" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>	
							</li>
							<li>Huruf Vocal dari nama M O M O yaitu… <br>
								Cici : ....Cici. <br>
								 
								  a.(M) dan (M)  &nbsp &nbsp b.(O) dan (O) &nbsp &nbsp c.(M) dan (O)  
								<div id="infol53" style="visibility:hidden;">b. (O) dan (O)</div> 
					   
						<button id="l53" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
								</li>
							<li>"Amati nama berikut! <br>
								C-C-I-I Susunan huruf tepat dari nama tersebut adalah..." <br>
							  
							a.C-I-I-C  &nbsp &nbsp b.I-C-I-C &nbsp &nbsp c.C-I-C-I  
						<div id="infol54" style="visibility:hidden;">c. C-I-C-I</div>
					   
						<button id="l54" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button></li>	
							<li>Huruf Konsonan dari nama C I C I yaitu…<br>
					   a.(C ) dan (C )  &nbsp &nbsp b.(I) dan (I) &nbsp &nbsp c.(C ) dan (I )   
					   <div id="infol55" style="visibility:hidden;">c. (C ) dan (C )</div> 
						<button id="l55" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>	
							<li>Perhatikan gambar berikut! <br>
							<img src="aset/gambar/tangan.png" width="150px"><br>  Nama bilangan dari gambar tersebut adalah…"
							<br>
					   a.Tiga  &nbsp &nbsp b.Empat &nbsp &nbsp c.Lima  
					   <div id="infol56" style="visibility:hidden;">b. Empat</div>  
						<button id="l56" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>
							<li>Perhatikan gambar berikut! <br>
								<img src="aset/gambar/pensil.png"><br> Pensil pada gambar berjumlah…" <br>
					   a.6  &nbsp &nbsp b.7 &nbsp &nbsp c.8   
					   		<div id="infol57" style="visibility:hidden;">c. 6</div>

						<button id="l57" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>	
							<li>Lima dapat ditulis menjadi angka		<br>
					   a.4  &nbsp &nbsp b.5 &nbsp &nbsp c.6 
							<div id="infol58" style="visibility:hidden;">a. 4</div> 
					   
						<button id="l58" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>	
							<li>Angka 9 jika ditulis, menjadi...  <br>
							a.Tujuh  &nbsp &nbsp b.Delapan &nbsp &nbsp c.Sembilan   
					   		<div id="infol59" style="visibility:hidden;">c. Sembilan</div>

						<button id="l59" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>	
							<li>Susunan angka yang tepat dari bilangan "1-3-5-4-6-7-2-8-10-9" adalah… 
							 <br>
							a.1-2-3-4-5-6-7-8-9-10  <br> b.7-1-4-2-5-3-8-9-10 <br> c.10-4-3-2-1-5-6-7-8   
					   		<div id="infol510" style="visibility:hidden;">a. 1-2-3-4-5-6-7-8-9-10</div>

						<button id="l510" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>	 
					</ol> 
                    </p>
				  </div> 
				</div> 
              </div>
              <div class="icon">
                <i class="ion-clipboard"></i>
              </div>
              <a href="#" id="myBtn" class="small-box-footer myBtn_multi"> <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
 
 
 <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner"> 
				<!-- Trigger/Open The Modal -->
				<h6>Tema 1 Subtema 1 Pembelajaran 6</h6> 
				<div id="myModal" class="modal modal_multi"> 
				  <!-- Modal content -->
				  <div class="modal-content" style="color: black">
					<span class="close close_multi">&times;</span> 
					<p> 
					<ol style="text-align: left;">  	
					<li>Urutan huruf abjad yang benar adalah… <br>
					   a.A-C-B-E-D  &nbsp &nbsp b.A-B-C-D-E &nbsp &nbsp c.A-B-D-E-C   
					<div id="infol61" style="visibility:hidden;">b. A-B-C-D-E</div> 
						<button id="l61" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
					</li>
							<li>Urutan huruf abjad yang benar adalah…<br> 
					   a.F-G-H-I-J  &nbsp &nbsp b.F-H-I-J-G &nbsp &nbsp c.F-G-I-J-H    
							<div id="infol62" style="visibility:hidden;">a. F-G-H-I-J</div> 
							<button id="l62" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>	
							</li>
							<li>Perhatikan huruf berikut! <h2>a b c a</h2>
							Jika huruf-huruf tersebut diurutkan dengan benar, maka huruf-huruf ini menjadi kata...<br> 
								  a.baca  &nbsp &nbsp b.caab &nbsp &nbsp c.abca  
								<div id="infol63" style="visibility:hidden;">a. baca</div> 
					   
						<button id="l63" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
								</li>
							<li>Ada berapakah jumlah huruf abjad pada kata <b><h4>BELAJAR</h4></b> ?<br> 
							a.Delapan  &nbsp &nbsp b.Enam &nbsp &nbsp c.Tujuh
						<div id="infol64" style="visibility:hidden;">c.Tujuh</div>
					   
						<button id="l64" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button></li>	
							<li>Ada berapakah jumlah huruf abjad pada kata <b><h4>RAJIN</h4></b> ?<br>
					   a.Enam  &nbsp &nbsp b.Lima &nbsp &nbsp c.Empat   
					   <div id="infol65" style="visibility:hidden;">b.Lima</div> 
						<button id="l65" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>	
							<li>Perhatikan gambar berikut!                    <br>
							<img src="aset/gambar/berdoa.png"><br><small>Sumber gambar : Buku Tematik Siswa Kelas 1 KEMENDIKBUD</small><br>  
							Sebelum belajar kita harus ..... terlebih dahulu.
							<br>
					   a.Bernyanyi  &nbsp &nbsp b.Berdo'a &nbsp &nbsp c.Bercerita  
					   <div id="infol66" style="visibility:hidden;">b. Berdo'a</div>  
						<button id="l66" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>
							<li>Perhatikan gambar berikut!        <br>  
								<img src="aset/gambar/anak2.png"><br><small>Sumber gambar : Buku Tematik Siswa Kelas 1 KEMENDIKBUD</small><br>  
								Nama temanku adalah Beni. Huruf yang tepat untuk melengkapi gambar adalah…<br> 
					   a.e dan a  &nbsp &nbsp b.a dan I  &nbsp &nbsp c. e dan i   
					   		<div id="infol67" style="visibility:hidden;">c. e dan i</div>

						<button id="l67" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>	
							<li>Lambang bilangan sepuluh adalah…<br>
					   a.8  &nbsp &nbsp b.9 &nbsp &nbsp c.10 
							<div id="infol68" style="visibility:hidden;">a. 10</div> 
					   
						<button id="l68" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>	
							<li>Perhatikan gambar berikut!                <br>
							<img src="aset/gambar/buku.png"><br><small>Sumber gambar : Buku Tematik Siswa Kelas 1 KEMENDIKBUD</small><br>  
								
							Berapakah jumlah buku pada gambar tersebut? <br>
							a.Sembilan  &nbsp &nbsp b.Delapan &nbsp &nbsp c.Sepuluh   
					   		<div id="infol69" style="visibility:hidden;">c. Sembilan</div>

						<button id="l69" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>	
							<li>Memberikan salam kepada Ibu guru, merupakan contoh sikap yang… 
							 <br>
							a.Buruk  <br> b.Baik <br> c.Biasa   
					   		<div id="infol610" style="visibility:hidden;">b. Baik</div>

						<button id="l610" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>	 
					</ol> 
                    </p>
				  </div> 
				</div> 
              </div>
              <div class="icon">
                <i class="ion-clipboard"></i>
              </div>
              <a href="#" id="myBtn" class="small-box-footer myBtn_multi"> <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>





          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner"> 
				<!-- Trigger/Open The Modal -->
				<h6>Tema 1 Subtema 2 Pembelajaran 1</h6> 
				<div id="myModal" class="modal modal_multi"> 
				  <!-- Modal content -->
				  <div class="modal-content" style="color: black">
					<span class="close close_multi">&times;</span> 
					<p> 
					<ol style="text-align: left;">  	
					<li>Anggota tubuh yang digunakan untuk melihat adalah … <br> <!--1-->
					   a. Mulut  &nbsp &nbsp b. Mata &nbsp &nbsp c. Hidung  
					<div id="infol1b" style="visibility:hidden;">b. Mata</div> 
						<button id="l1b" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
					</li>
							<li>Jumlahku satu  <br> <!--2-->
                Aku terletak di bawah mata <br>
                Aku bisa mencium aroma yang wangi <br>
                Aku adalah … <br>

                a. Mulut  &nbsp &nbsp b. Mata &nbsp &nbsp c. Hidung   
								 
		
							<div id="infol2b" style="visibility:hidden;">c. Hidung  </div> 
							<button id="l2b" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>	
							</li>
							<li>Anggota tubuh yang digunakan untuk berjalan adalah …<br> <!--3-->
								  a. Tangan   &nbsp &nbsp b. Jari  &nbsp &nbsp c. Kaki
								<div id="infol3b" style="visibility:hidden;">c. Kaki</div> 
					   
						<button id="l3b" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
								</li>
							<li>Anggota tubuh yang biasa digunakan untuk makan adalah … <br> <!--4-->
							a. Mulut &nbsp &nbsp b. Mata  &nbsp &nbsp c. Hidung    
						<div id="infol4b" style="visibility:hidden;">a. Mulut</div>
					   
						<button id="l4b" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button></li>	
							<li>Aku berjumlah sepuluh <br> <!--5-->
                Ada yang kecil <br>
                Ada yang besar  <br>
                Ada yang tinggi  <br>
                Aku bekerja sama dengan tangan untuk membantu ibu  <br>
                Aku adalah … <br>
					   a.Tangan  &nbsp &nbsp b.Jari &nbsp &nbsp c.Kaki
					   <div id="infol5b" style="visibility:hidden;">b.Jari</div> 
						<button id="l5b" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>	
             
              <li><img src=""><br><small>Gambar animasi anak kecil lalu di beri garis dibagian pipi </small><br> Apa nama anggota tubuh tersebut …<br>

                a. Pipi  &nbsp &nbsp b. Dagu &nbsp &nbsp c. Dahi  
                <div id="infol10b" style="visibility:hidden;">a. Pipi</div>

                <button id="l10b" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
                </li>	 

							<li>Saat makan menggunakan tangan …
							<br>
					   a. Kanan Kiri  &nbsp &nbsp b. Kanan  &nbsp &nbsp c. Kiri 
					   <div id="infol6b" style="visibility:hidden;">b. Kanan</div> 
					   	 	

						<button id="l6b" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>
							<li>Yang harus dilakukan atas pemberian Tuhan adalah …
							 <br>
					   a. Kesal   &nbsp &nbsp b. Biasa saja  &nbsp &nbsp c. Bersyukur    <!--7-->
					   		<div id="infol7b" style="visibility:hidden;">c. Bersyukur</div>

						<button id="l7b" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>	
							<li>Hal yang harus dilakukan sebelum makan adalah …
							<br>
					   a. Berdoa   &nbsp &nbsp b. Mengaji &nbsp &nbsp c. Sholat
		<div id="infol8b" style="visibility:hidden;">a. Berdoa </div> 
					   
						<button id="l8b" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>	
							<li>Aku berjumlah dua <br>
                Aku terletak di kanan dan di kiri  <br>
                Aku bisa mendengar jika ibu guru memanggil namaku  <br>
                Aku adalah …
							 <br>
					   a. Mata   &nbsp &nbsp b. Telinga &nbsp &nbsp c. Kaki  
					   		<div id="infol9b" style="visibility:hidden;">b. Telinga</div>

						<button id="l9b" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>	
							
					</ol> 
                    </p>
				  </div> 
				</div> 
              </div>
              <div class="icon">
                <i class="ion-clipboard"></i>
              </div>
              <a href="#" id="myBtn" class="small-box-footer myBtn_multi"> <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
 <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
               <h6>Tema 1 Subtema 2 Pembelajaran 3</h6>
<!-- The Modal -->
				<div id="myModal" class="modal modal_multi"> 
				  <!-- Modal content -->
				  <div class="modal-content" style="color: black">
					<span class="close close_multi">&times;</span> 
					<p> 
					<ol style="text-align: left;">  	
					<li>
						Dengan membaca dapat menambah…<br>
					   a. Makanan  &nbsp &nbsp b. Minuman &nbsp &nbsp c. Pengetahuan   
						<div id="infol21b" style="visibility:hidden;">c. Pengetahuan </div> 
						<button id="l21b" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
					</li>
					<li>Mata merupakan panca indera untuk…<br>
					    a. Mendengar  &nbsp &nbsp b. Melihat c. Merasakan  
						<div id="infol22b" style="visibility:hidden;">b. Melihat</div> 
						<button id="l22b" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
					</li>
					<li>Jumlah mata kita ada…<br>
						  a. Satu  &nbsp &nbsp b. Dua  &nbsp &nbsp c. Tiga  
								<div id="infol23b" style="visibility:hidden;">b. Dua</div>     
								<button id="l23b" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
					</li>
					<li>Jarak mata kita saat membaca yaitu sekitar…<br>
							a. 30 cm  &nbsp &nbsp b. 50 cm &nbsp &nbsp c. 100 cm
						<div id="infol24b" style="visibility:hidden;">a. 30 cm</div> 
						<button id="l24b" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
					</li>	
					<li>Posisi badan kita saat duduk yang benar yaitu…<br>
					   a. Tegak  &nbsp &nbsp b. Miring &nbsp &nbsp c. Membungkuk  
					   <div id="infol25b" style="visibility:hidden;">a. Tegak</div> 
						<button id="l25b" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
					</li>	
					<li>Dengan duduk tegak dan mengatur jarak saat membaca dapat membuat badan dan mata kita menjadi…<br>
					   a. Sakit  &nbsp &nbsp b. Lelah &nbsp &nbsp c. Sehat
					   <div id="infol26b" style="visibility:hidden;">c. Sehat</div> 
					    <button id="l26b" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
					</li>
					<li>Momo dan Cici bermain tebak angka. <br>
            Momo menunjukan jarinya. <br>
            <img src="aset/gambar/tangan1.png"><br>
            Berapakah jumlah jari yang ditunjukan oleh Momo? <br>
					   a. 4  &nbsp &nbsp b. 5 &nbsp &nbsp c. 6   
					   		<div id="infol27b" style="visibility:hidden;">b. 5</div>

						<button id="l27b" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
					</li>	
					<li>Berapakah jumlah jari yang ditunjukan oleh Cici sesuai berdasarkan gambar tersebut?<br>
            <img src="aset/gambar/tangan2.png"> + <img src="aset/gambar/tangan3.png"><br><br>
					   a. 6  &nbsp &nbsp b. 5 &nbsp &nbsp c. 4 
						<div id="infol28b" style="visibility:hidden;">b. 5</div> 
					   
						<button id="l28b" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
					</li>	
					<li>Angka 6 jika ditulis, menjadi
							 <br>
					   a. Tujuh  &nbsp &nbsp b. Enam &nbsp &nbsp c. Lima
					   		<div id="infol29b" style="visibility:hidden;">b. Enam</div>

						<button id="l29b" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>	
							<li>Nama bilangan Sembilan merupakan lambang bilangan dari
                                <br>
                          a. 9 &nbsp &nbsp b. 8 &nbsp &nbsp c. 7
                                  <div id="infol30b" style="visibility:hidden;">a. 9</div>
   
                           <button id="l30b" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
					</ol> 
                    </p>
				 
						
				  </div>

				</div>
              </div>
              <div class="icon">
                <i class="ion-clipboard"></i>
              </div>
              <a href="#" class="small-box-footer myBtn_multi" > <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
 
 <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner"> 
				<!-- Trigger/Open The Modal -->
				<h6>Tema 1 Subtema 2 Pembelajaran 4</h6> 
				<div id="myModal" class="modal modal_multi"> 
				  <!-- Modal content -->
				  <div class="modal-content" style="color: black">
					<span class="close close_multi">&times;</span> 
					<p> 
					<ol style="text-align: left;">  	
					<li>Bagian tubuh depan yang tidak boleh disentuh adalah…<br>
					   a. Tangan  &nbsp &nbsp b. Dada &nbsp &nbsp c. Kepala   
					<div id="infol51b" style="visibility:hidden;">b. Dada</div> 
						<button id="l51b" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
					</li>
							<li>Bagian tubuh belakang yang tidak boleh disentuh adalah…<br>
					   a. Tangan  &nbsp &nbsp b. Pundak &nbsp &nbsp c. Pantat 
							<div id="infol52b" style="visibility:hidden;">c. Pantat</div> 
							<button id="l52b" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>	
							</li>
							<li>Salah satu cara menjaga kebersihan tubuh adalah…<br>
								 
								  a. Selalu mencuci tangan dan kaki  &nbsp &nbsp b. Malas menggosok gigi &nbsp &nbsp c. Malas mandi
								<div id="infol53b" style="visibility:hidden;">a. Selalu mencuci tangan dan kaki</div> 
					   
						<button id="l53b" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
								</li>
							<li>Anggota tubuh yang biasa kita gerakkan saat menari misalnya…<br>
							  
							a. Hidung  &nbsp &nbsp b. Telinga &nbsp &nbsp c. Kepala
						<div id="infol54b" style="visibility:hidden;">c. Kepala</div>
					   
						<button id="l54b" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button></li>	
							<li>Mata digunakan untuk…<br>
					   a. Berjalan &nbsp &nbsp b. Melihat &nbsp &nbsp c. Menghirup  
					   <div id="infol55b" style="visibility:hidden;">b. Melihat</div> 
						<button id="l55b" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>	
							<li>Beni berlari menggunakan…<br>

					   a. Tangan  &nbsp &nbsp b. Kaki &nbsp &nbsp c. Kepala  
					   <div id="infol56b" style="visibility:hidden;">b. Kaki</div>  
						<button id="l56b" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>
							<li>Salah satu fungsi tangan adalah…<br>
                a. Menendang &nbsp &nbsp b. Berlari &nbsp &nbsp c. Memegang 
					   		<div id="infol57b" style="visibility:hidden;">c. Memegang </div>

						<button id="l57b" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>	
							<li>Kita merasakan bau menggunakan…<br>
					   a. Mulut  &nbsp &nbsp b. Telinga &nbsp &nbsp c. Hidung
							<div id="infol58b" style="visibility:hidden;">c. Hidung</div> 
					   
						<button id="l58b" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>	

            </li>	
            <li>Kita harus merawat tubuh agar…
             <br>
             a. Sehat  &nbsp &nbsp b. Sakit &nbsp &nbsp c. Lemas
               <div id="infol510b" style="visibility:hidden;">a. Sehat</div>

          <button id="l510b" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
            </li>	 

							<li>Membaca sambil tiduran dapat merusak…<br>
                a. Hidung  &nbsp &nbsp b. Mata &nbsp &nbsp c. Telinga
					   		<div id="infol59b" style="visibility:hidden;">b. Mata </div>

						<button id="l59b" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>

					</ol> 
                    </p>
				  </div> 
				</div> 
              </div>
              <div class="icon">
                <i class="ion-clipboard"></i>
              </div>
              <a href="#" id="myBtn" class="small-box-footer myBtn_multi"> <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
 
 
 <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner"> 
				<!-- Trigger/Open The Modal -->
				<h6>Tema 1 Subtema 2 Pembelajaran 5</h6> 
				<div id="myModal" class="modal modal_multi"> 
				  <!-- Modal content -->
				  <div class="modal-content" style="color: black">
					<span class="close close_multi">&times;</span> 
					<p> 
					<ol style="text-align: left;">  	
					<li>a - a - t - m<br>
            Jika huruf tersebut disusun maka akan menjadi kata .. <br>
					   a. Mata  &nbsp &nbsp b. Hidung  &nbsp &nbsp c. Mulut  
					<div id="infol61b" style="visibility:hidden;">a. Mata</div> 
						<button id="l61b" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
					</li>
          <li>e - l - t -i - n - a - g<br>
            Jika huruf tersebut disusun maka akan menjadi kata .. <br>

            a. Mata  &nbsp &nbsp b. Telinga   &nbsp &nbsp c. Mulut 
               <div id="infol69b" style="visibility:hidden;">b. Telinga </div>

          <button id="l69b" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
            </li>	
            <li>u - b - a - h <br>
              Jika huruf tersebut disusun maka akan menjadi kata ..<br>
              a. Mata  &nbsp &nbsp b. Telinga   &nbsp &nbsp c. Bahu 
               <div id="infol610b" style="visibility:hidden;">c. Bahu</div>

          <button id="l610b" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
            </li>
							<li>6 jika dibaca adalah ..<br> 
					   a. Lima  &nbsp &nbsp b. Enam  &nbsp &nbsp c. Tujuh    
							<div id="infol62b" style="visibility:hidden;">b. Enam </div> 
							<button id="l62b" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>	
							</li>
							<li>10 jika dibaca adalah …<br> 
								  a. Sepuluh   &nbsp &nbsp b. Sembilan  &nbsp &nbsp c. Sebelas
								<div id="infol63b" style="visibility:hidden;"> a. Sepuluh </div> 
					   
						<button id="l63b" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
								</li>
							<li>MULUT<br> 
                Ada berapa huruf di kata tersebut ... <br>
							a. Lima   &nbsp &nbsp b. Enam  &nbsp &nbsp c. Tujuh 
						<div id="infol64b" style="visibility:hidden;">	a. Lima</div>
					   
						<button id="l64b" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button></li>	
							<li>JARI <br>
                Ada berapa huruf di kata tersebut ... <br>
					   a. Lima   &nbsp &nbsp b. Empat  &nbsp &nbsp c. Tiga 
					   <div id="infol65b" style="visibility:hidden;">b. Empat</div> 
						<button id="l65b" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>	
							<li>SEMBILAN <br>
                Ada berapa huruf di kata tersebut ... <br>
					   a. Enam  &nbsp &nbsp b. Tujuh &nbsp &nbsp c. Delapan 
					   <div id="infol66b" style="visibility:hidden;">c. Delapan </div>  
						<button id="l66b" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>
							<li>DUA TELINGA <br>  
                Ada berapa huruf di kata tersebut ... <br>
					   a. Sebelas   &nbsp &nbsp b. Sepuluh   &nbsp &nbsp c. Sembilan 
					   		<div id="infol67b" style="visibility:hidden;">b. Sepuluh</div>

						<button id="l67b" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>	
							<li>Sepuluh <br>
                Jika kata tersebut di tulisakan menggunakan lambang angka, <br>
                angka berapakah yang cocok dengan kata tersebut <br>
					   a. 11  &nbsp &nbsp b. 12 &nbsp &nbsp c. 10 
							<div id="infol68b" style="visibility:hidden;">c. 10</div> 
					   
						<button id="l68b" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>	
								 
					</ol> 
                    </p>
				  </div> 
				</div> 
              </div>
              <div class="icon">
                <i class="ion-clipboard"></i>
              </div>
              <a href="#" id="myBtn" class="small-box-footer myBtn_multi"> <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
 

<!-- subtema 3 -->

		  <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner"> 
				<!-- Trigger/Open The Modal -->
				<h6>Tema 1 Subtema 3 Pembelajaran 1</h6> 
				<div id="myModal" class="modal modal_multi"> 
				  <!-- Modal content -->
				  <div class="modal-content" style="color: black">
					<span class="close close_multi">&times;</span> 
					<p> 
					<ol style="text-align: left;">  	
					<li>Agar tubuh selalu sehat maka kita harus menjaga…<br>
					   a. Rumah  &nbsp &nbsp b. Kesehatan &nbsp &nbsp c. Sekolah  
					<div id="infol1c" style="visibility:hidden;">b. Kesehatan</div> 
						<button id="l1c" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
					</li>
							<li>Jika kita tidak menjaga dan merawat tubuh maka tubuh menjadi…<br>
					   a. Sehat &nbsp &nbsp b. Bugar &nbsp &nbsp c. Sakit  
								 
		
							<div id="infol2c" style="visibility:hidden;">c. Sakit</div> 
							<button id="l2c" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>	
							</li>
							<li>Pandemi Covid-19 saat ini menuntut kita untuk selalu …….. tangan sebelum dan sesudah melakukan aktivitas<br>
								  a. Memakai  &nbsp &nbsp b. Bertepuk &nbsp &nbsp c. Mencuci  
								<div id="infol3c" style="visibility:hidden;">c. Mencuci </div> 
					   
						<button id="l3c" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
								</li>
							<li>Cara mencuci tangan yang baik yaitu menggunakan…
							 <br>
							a. Sabun  &nbsp &nbsp b. Sapu tangan &nbsp &nbsp c. Tisu  
						<div id="infol4c" style="visibility:hidden;">a. Sabun</div>
					   
						<button id="l4c" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button></li>	
							<li>Supaya tubuh kita tetap sehat kita harus menulis dengan posisi yang…<br>
					   a. Salah  &nbsp &nbsp b. Benar &nbsp &nbsp c. Lurus   
					   <div id="infol5c" style="visibility:hidden;">b. Benar</div> 
						<button id="l5c" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>	
							<li>Supaya tubuh kita tetap sehat kita harus menulis dengan posisi…
							<br>
					   a. Membungkuk  &nbsp &nbsp b. Miring &nbsp &nbsp c. Tegap 
					   <div id="infol6c" style="visibility:hidden;">c. Tegap </div> 
					   	 	

						<button id="l6c" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>
							<li>Saat membaca buku sebaiknya posisi tubuh kita sambil…
							 <br>
					   a. Tidur  &nbsp &nbsp b. Berlari &nbsp &nbsp c. Duduk 
					   		<div id="infol7c" style="visibility:hidden;">c. Duduk</div>

						<button id="l7c" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>	
							<li>Dengan merawat tubuh hal tersebut termasuk salah satu cara … kepada Tuhan
							<br>
					   a. Berdoa &nbsp &nbsp b. Bersyukur &nbsp &nbsp c. Berteduh 
		<div id="infol8c" style="visibility:hidden;">b. Bersyukur</div> 
					   
						<button id="l8c" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>	
							<li>Tubuh yang sakit membuat kita menjadi…
							 <br>
					   a. Semangat &nbsp &nbsp b. Bahagia &nbsp &nbsp c. Lemah
					   		<div id="infol9c" style="visibility:hidden;">c. Lemah</div>

						<button id="l9c" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>	
							<li>Tangan yang kotor dapat dibersihkan dengan…
							 <br>
					   a. Mandi  &nbsp &nbsp b. Berenang &nbsp &nbsp c. Mencuci tangan 
					   		<div id="infol10c" style="visibility:hidden;">c. Mencuci tangan</div>

						<button id="l10c" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>	 
					</ol> 
                    </p>
				  </div> 
				</div> 
              </div>
              <div class="icon">
                <i class="ion-clipboard"></i>
              </div>
              <a href="#" id="myBtn" class="small-box-footer myBtn_multi"> <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
 <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
               <h6>Tema 1 Subtema 3 Pembelajaran 3</h6>
<!-- The Modal -->
				<div id="myModal" class="modal modal_multi"> 
				  <!-- Modal content -->
				  <div class="modal-content" style="color: black">
					<span class="close close_multi">&times;</span> 
					<p> 
					<ol style="text-align: left;">  	
					<li>Siti mandi menggunakan ... <br>
					   a. Sampo &nbsp &nbsp b. Pasta gigi &nbsp &nbsp c. Sabun  
						<div id="infol21c" style="visibility:hidden;">c. Sabun  </div> 
						<button id="l21c" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
					</li>
					<li>Perhatikan gambar berikut!   <br>
						<img src=""><br><small>Gambar 3 Sampo + 5 Sampo</small><br>
						Berapa jumlah sampo tersebut … <br>
					    a. 8 Sampo &nbsp &nbsp b. 7 Sampo &nbsp &nbsp c.  6 sampo
						<div id="infol22c" style="visibility:hidden;"> a. 8 Sampo</div> 
						<button id="l22c" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
					</li>
					<li>Nina keramas menggunakan …<br>
						  a. Pasta gigi   &nbsp &nbsp b. Sabun  &nbsp &nbsp c. Sampo  
								<div id="infol23c" style="visibility:hidden;">c. Sampo </div>     
								<button id="l23c" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
					</li>
					<li>Sabun, sampo, sikat gigi dan pasta gigi adalah alat untuk merawat …<br>
							a. Tumbuhan   &nbsp &nbsp b. Tubuh  &nbsp &nbsp c. Tanaman   
						<div id="infol24c" style="visibility:hidden;">b. Tubuh</div> 
						<button id="l24c" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
					</li>	
					<li>Menggosok gigi menggunakan …<br>
					   a. Sikat gigi   &nbsp &nbsp b. Sikat &nbsp &nbsp c. Sabun  
					   <div id="infol25c" style="visibility:hidden;"> a. Sikat gigi</div> 
						<button id="l25c" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
					</li>	
					<li>Perhatikan gambar berikut!    <br>                             
							<img src=""><br><small>Gambar 4 Sabun dan 2 Sabun</small><br>4 Sabun … 2 Sabun <br>
					   a. Lebih sedikit dari  &nbsp &nbsp b. Sama dengan  &nbsp &nbsp c.Lebih banyak dari  
					   <div id="infol26c" style="visibility:hidden;">c. Lebih banyak dari</div> 
					    <button id="l26c" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
					</li>
					<li>Perhatikan gambar berikut. <br>
						<img src=""><br><small>Gambar 3 Pasta gigi dan 7 Pasta gigi </small><br>3 Pasta gigi … 7 Pasta gigi  <br>
						a. Lebih sedikit dari  &nbsp &nbsp b. Sama dengan  &nbsp &nbsp c.Lebih banyak dari 
					   		<div id="infol27c" style="visibility:hidden;">a. Lebih sedikit dari</div>

						<button id="l27c" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
					</li>	
					<li>Perhatikan gambar berikut. <br>
						<img src=""><br><small>Gambar 5 Sampo dan 5 Sampo  </small><br>5 Sampo … 5 Sampo <br>
						a. Lebih sedikit dari  &nbsp &nbsp b. Sama dengan  &nbsp &nbsp c.Lebih banyak dari 
						<div id="infol28c" style="visibility:hidden;">b. Sama dengan</div> 
					   
						<button id="l28c" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
					</li>	
					<li>Perhatikan gambar berikut. <br>
						<img src=""><br><small>Gambar 7 Pasta gigi </small><br>Berapa jumlah pasta gigi tersebut …<br>
					   a. 7 Pasta gigi   &nbsp &nbsp b. 8 Pasta gigi  &nbsp &nbsp c. 9 Pasta gigi   
					   		<div id="infol29c" style="visibility:hidden;"> a. 7 Pasta gigi</div>

						<button id="l29c" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>	
							<li>Perhatikan gambar berikut. <br>
								<img src=""><br><small>Gambar 5 Sabun dan 6 Sabun  </small><br>5 Sabun … 6 Sabun <br>
						   a. Lebih dari  &nbsp &nbsp b. Sama  &nbsp &nbsp c. Kurang dari  
								<div id="infol210c" style="visibility:hidden;">c. Kurang dari </div>

							<button id="l210c" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>	 
					</ol> 
                    </p>
				 
						
				  </div>

				</div>
              </div>
              <div class="icon">
                <i class="ion-clipboard"></i>
              </div>
              <a href="#" class="small-box-footer myBtn_multi" > <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner"> 
				<!-- Trigger/Open The Modal -->
				<h6>Tema 1 Subtema 3 Pembelajaran 5</h6> 
				<div id="myModal" class="modal modal_multi"> 
				  <!-- Modal content -->
				  <div class="modal-content" style="color: black">
					<span class="close close_multi">&times;</span> 
					<p> 
					<ol style="text-align: left;">  	
					<li>Selain kita harus menjaga kesehatan tubuh kita juga harus menjaga…<br>
					   a. Lingkungan  &nbsp &nbsp b. Makanan &nbsp &nbsp c. Mainan 
					<div id="infol1d" style="visibility:hidden;">a. Lingkungan </div> 
						<button id="l1d" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
					</li>
							<li>Kegiatan yang termasuk kesehatan menjaga tubuh yaitu…<br>
					   a. Mandi  &nbsp &nbsp b. Bemain &nbsp &nbsp c. Memanjat  
							<div id="infol2d" style="visibility:hidden;">a. Mandi</div> 
							<button id="l2d" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>	
							</li>
							<li>Saat menyikat gigi kita memerlukan … agar gigi menjadi bersih<br> 
								  a. Sabun &nbsp &nbsp b. Sampo  &nbsp &nbsp c. Pasta gigi
								<div id="infol3d" style="visibility:hidden;">c. Pasta gigi</div> 
					   
						<button id="l3d" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
								</li>
							<li>Jika rambut kita kotor, kita harus mencucinyanya menggunakan …<br>
							a. Sapu tangan  &nbsp &nbsp b. Salep &nbsp &nbsp c. Sampo
						<div id="infol4d" style="visibility:hidden;">c. Sampo</div>
					   
						<button id="l4d" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button></li>	
							<li>Jika tidak dirawat gigi menjadi…<br>
					   a. Putih  &nbsp &nbsp b. Bersih D &nbsp &nbsp c. Berlubang  
					   <div id="infol5d" style="visibility:hidden;">c. Berlubang  </div> 
						<button id="l5d" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>	
							<li>Huruf vokal dari kata BERSIH yaitu…<br>
					   a. B, R, dan H &nbsp &nbsp b. E dan I  &nbsp &nbsp c. B dan I
					   <div id="infol6d" style="visibility:hidden;">b. E dan I</div> 
					   	 	

						<button id="l6d" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>
							<li>Huruf konsonan dari kata KOTOR yaitu…<br>
					   a. K, T, dan R  &nbsp &nbsp b. O dan O &nbsp &nbsp c. K dan R  
					   		<div id="infol7d" style="visibility:hidden;">a. K, T, dan R</div>

						<button id="l7d" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>	
							<li>Tangan yang kotor dapat dibersihkan dengan…<br>
               
					   a. Mandi  &nbsp &nbsp b. Berenang  &nbsp &nbsp c. Mencuci tangan
		<div id="infol8d" style="visibility:hidden;">c. Mencuci tangan</div> 
					   
						<button id="l8d" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>		
							<li>Angka 3 … dari 6 <br>
					   a. Kurang &nbsp &nbsp b. Lebih  &nbsp &nbsp c. Sama
					   		<div id="infol10d" style="visibility:hidden;">a. Kurang</div>

						<button id="l10d" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							</li>	 
							<li>Perhatikan gambar berikut. <br>
								<img src="aset/gambar/sabun.png"><br> Pernyataan yang sesuai dengan gambar diatas yaitu…"
							<br>
						  a. Sabun yang kiri lebih banyak dari sabun yang kanan <br> b. Sabun yang kanan lebih banyak dari sabun yang kiri <br> c. Sabun kanan dan kiri memiliki jumlah yang sama 
								  <div id="infol9d" style="visibility:hidden;"> b. Sabun yang kanan lebih banyak dari sabun yang kiri </div>
   
						   <button id="l9d" class="btn btn-info" onclick="cek(this.id)" >Lihat Jawaban</button>
							   </li>
					</ol> 
                    </p>
				  </div> 
				</div> 
              </div>
              <div class="icon">
                <i class="ion-clipboard"></i>
              </div>
              <a href="#" id="myBtn" class="small-box-footer myBtn_multi"> <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
 


        </div>
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 
  <?php $this->load->view('src/footer');?>


</div>
<!-- ./wrapper -->

<?php $this->load->view('src/bottom');?>
</body>
</html>
