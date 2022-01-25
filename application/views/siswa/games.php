

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="aset/gambar/logo.png"   height="120" width="200">
  </div>
   -->
    <!-- Content Header (Page header) -->
   
    <!-- /.content-header -->

    <!-- Main content -->
    
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 2000; /* Sit on top */
  padding-top: 100px; /* Location of the box */
 
  width: 80%;
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  
 
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
 
  position: relative;
}

/* The Close Button */


a .close , #waktu{
  color: #aaaaaa;
  float: left;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}


 
  
</style>
<?php for($i=1;$i<=9;$i++){ ?>
 <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner"> 
				<!-- Trigger/Open The Modal -->
				<h6>Level <?= $i;?></h6> 
				<div id="myModal" class="modal modal_multi" > 
				  <!-- Modal content -->
				  <div class="modal-content" style="color: black">
				  <a href="<?= base_url('siswa/games')?>">
					  <span class="close close_multi" id="close<?= $i;?>">&times; 
					  <br>
						<div>Waktu Pengerjaan 1 Menit</div>
					<div><span id="waktu"><label id="minutes<?= $i;?>">00</label>:<label id="seconds<?= $i;?>">00</label>
				</span></a>
					 </div>
					</span> 
					 <p style="word-spacing: 1em;" > 
			<!--		<input type="text" id="member" name="member" value="">-->
			  <a href="#" id="filldetails" class="btn btn-info" onclick="addFields(<?= $i;?>)">Mulai !!</a> 
                  
					<div id="anak<?= $i;?>" style="text-align: right;"> 
						
					</div> <br>
					<div id="button<?= $i;?>" style="visibility:hidden;"   > 
					<form method="post" action="<?php echo base_url();?>siswa/tambahGames"  >
					<input type="hidden" id="level<?= $i;?>" name="level">
					<input type="hidden" id="id_user<?= $i;?>" name="id_user">
					<input type="hidden" id="skor<?= $i;?>" name="skor">
					<input type="hidden" id="lama_pengerjaan<?= $i;?>" name="lama_pengerjaan">
					<input type="hidden" id="waktu_pengerjaan<?= $i;?>" name="waktu_pengerjaan">
					<button onclick="cekFields(<?= $i;?>)"  type="submit" class="btn btn-primary" >Proses</button>
					</form>
						
					 
					</div><br><span id="skormax<?= $i;?>"></span>
					 </p>
				  </div> 
				</div> 
              </div>
              <div class="icon">
                <i class="ion-clipboard"></i>
              </div>
              <a href="#" id="myBtn"   class="small-box-footer myBtn_multi"> <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
 
 <?php } ?>
<script>
function jvclose(){
 window.location.reload();
}
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
for(var j=1;j<=9;j++){
var spans = document.getElementById("close"+j);
}



// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
	modal.style.width = "auto";
   
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
   window.location.reload();
   modal.style.display = "none";
  
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    	 window.location.reload();
		 modal.style.display = "none";

  }
}
</script>

    <script>
        // Get the modal

        var modalparent = document.getElementsByClassName("modal_multi");

        // Get the button that opens the modal

        var modal_btn_multi = document.getElementsByClassName("myBtn_multi");

        // Get the <span> element that closes the modal
        var span_close_multi = document.getElementsByClassName("close_multi");

        // When the user clicks the button, open the modal
        function setDataIndex() {

            for (i = 0; i < modal_btn_multi.length; i++)
            {
                modal_btn_multi[i].setAttribute('data-index', i);
                modalparent[i].setAttribute('data-index', i);
                span_close_multi[i].setAttribute('data-index', i);
            }
        }



        for (i = 0; i < modal_btn_multi.length; i++)
        {
            modal_btn_multi[i].onclick = function() {
                var ElementIndex = this.getAttribute('data-index');
                modalparent[ElementIndex].style.display = "block";
            };

            // When the user clicks on <span> (x), close the modal
            span_close_multi[i].onclick = function() {
                var ElementIndex = this.getAttribute('data-index');
                modalparent[ElementIndex].style.display = "none";
				 window.location.href = "game.html";
            };

        }

        window.onload = function() {

            setDataIndex();
        };

        window.onclick = function(event) {
            if (event.target === modalparent[event.target.getAttribute('data-index')]) {
                modalparent[event.target.getAttribute('data-index')].style.display = "none";
            }

            // OLD CODE
            if (event.target === modal) {
               
				modal.style.display = "none";
				 
            }
        };

//XXXXXXXXXXXXXXXXXXXXXXX    Modified old code    XXXXXXXXXXXXXXXXXXXXXXXXXX

// Get the modal

        var modal = document.getElementById('myModal');

// Get the button that opens the modal
        var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
        var span = modal.getElementsByClassName("close"); // Modified by dsones uk

// When the user clicks on the button, open the modal

        btn.onclick = function() {

            modal.style.display = "block";
        }

// When the user clicks on <span> (x), close the modal
        span.onclick = function() {
           
			modal.style.display = "none";
			
        }



         
function randomNumber(min, max) {
	min = Math.ceil(min);
	max = Math.floor(max);
	return Math.floor(Math.random() * (max - min)) + min;
}
		
		/*level 1=tambah, 2=kurang, 3=tambah kurang, 4=kali, 5=bagi, 
				6=kali bagi, 7=tambah kurang kali bagi,8=akar, 9=pangkat, 
				10=akar (tambah kurang kali bagi) pangkat 
				untuk akar <span>&#8730;</span> 
				untuk pankat <sup> </span>
		*/
		function addFields(level){  
			//Timer

			var minutesLabel = document.getElementById("minutes"+level);
			var secondsLabel = document.getElementById("seconds"+level);
			var totalSeconds = 0;
			var coba = setInterval(setTime, 1000);

			function setTime() {
			++totalSeconds;
			secondsLabel.innerHTML = pad(totalSeconds % 60);
			minutesLabel.innerHTML = pad(parseInt(totalSeconds / 60));
			document.getElementById('lama_pengerjaan'+level).value=pad(totalSeconds % 60);

			if (totalSeconds / 60 == 1) {
			   // timer = duration;
				clearInterval(coba);
				document.getElementById("close" + level).click();
				
			}
			
			}

			

			function pad(val) {
			var valString = val + "";
			if (valString.length < 2) {
				return "0" + valString;
			} else {
				return valString;
			}
			}
			

			
			

			//
            var number = 10;//document.getElementById("member").value; 
            var container = document.getElementById("anak" + level); 
            while (container.hasChildNodes()) {
                container.removeChild(container.lastChild);
            }
			 
			//acak sesuai level 
			
            for (i=0;i<number;i++){ 
			X0= randomNumber(1,20)  ;
			X1= randomNumber(1,20)  ;	
            var input = document.createElement("input");
			 
			var input1 = document.createElement("input");
			if(level==1){
			   container.appendChild(document.createTextNode( X0 +" + "+X1 + " = ")); 
			   input1.value = X0 + X1; 
			}else if(level==2){ 
				//var temp=X0 + X1 ;
				if(X0<X1) { var temp=X0; X0=X1;X1=temp; }
			   container.appendChild(document.createTextNode( X0 +" - "+X1 + " = ")); 
			   input1.value = X0 - X1; 
			}else if(level==3){ 
				var temp = randomNumber(1,8); 
			   if(temp==1){
				    container.appendChild(document.createTextNode( X0 +" + "+X1 + " = ")); 
					 input1.value = X0 + X1; 
			   }else{
					container.appendChild(document.createTextNode( X0 +" - " + X1 + " = ")); 
					input1.value = X0 - X1; 
			   }
			}else if(level==4){ 
			X0= randomNumber(1,20)  ;
			X1= randomNumber(1,10)  ;				
			   container.appendChild(document.createTextNode( X0 +" x "+X1 + " = ")); 
			   input1.value = X0 * X1; 
			}else if(level==5){  
			X0= randomNumber(1,20)  ;
			X1= randomNumber(1,10)  ;
				var temp = X0 * X1;
			   container.appendChild(document.createTextNode( temp +" : "+X1 + " = ")); 
			   input1.value = temp / X1; 
			}else if(level==6){  
			X0= randomNumber(1,20)  ;
			X1= randomNumber(1,10)  ;
				var temp = randomNumber(1,2);   
			   if(temp==1){ 
					 container.appendChild(document.createTextNode( X0 +" x " + X1 + " = "));   
					 input1.value = X0 * X1; 
			   }else{
					var abc= X0 * X1;
					 container.appendChild(document.createTextNode( abc +" : " + X1 + " = ")); 
					 input1.value = abc / X1;  
			   }
			}else if(level==7){  
			X0= randomNumber(1,20)  ;
			X1= randomNumber(1,10)  ;
				var temp = randomNumber(1,4); 
			   if(temp==1){
				     container.appendChild(document.createTextNode( X0 + " + " + X1 + " = ")); 
					 input1.value = X0 + X1; 
			   }else if(temp==2){ 
					container.appendChild(document.createTextNode( X0 + " - " + X1 + " = "));
					input1.value = X0 - X1;  
			   }else if(temp==3){ 
			   container.appendChild(document.createTextNode( X0 + " x " + X1 + " = "));
			   input1.value = X0 * X1; 
			   }else if(temp==4){ 
			   	var abc = X0 * X1;
				container.appendChild(document.createTextNode( abc + " / " + X1 + " = "));
				input1.value = abc / X1; 
			   }			   
			}else if(level==8){
				
			//	int a=7; int b=8; int m=33; int X0 = i;  
				var acak; 
				  acak = ((randomNumber(1,level) *  5) + randomNumber(1,level) ) % 21  ;
			 	X0= randomNumber(1,acak)  ; 
			    X1 = Math.pow(acak, 2);
			   
			    const pan = document.createElement("span");
				const akar = document.createTextNode("\u221A");
				pan.appendChild(akar); 
				container.appendChild(pan); 
				
			   container.appendChild(document.createTextNode( X1 + " = ")); 
			   input1.value =  Math.sqrt(X1);
			}else if(level==9){
				X0= randomNumber(1,10)  ;
				X1= randomNumber(2,5)  ;
					if(X1==2)  
						container.appendChild(document.createTextNode(X0 + "\xB2" + " = ")); 
					else if(X1>2)  {
						X1=3;
						container.appendChild(document.createTextNode(X0 + "\xB3" + " = "));
					}
			   
			   
			   input1.value = Math.pow(X0, X1);
			} 							
			
			  container.appendChild(document.createElement("br"));
                input.type = "number"; input.size = "3"; input.width = "10";
                input.id = "soal" + i; 
                container.appendChild(input); 
                container.appendChild(document.createElement("br"));
				
			 
				//membuat text jawaban

                input1.type = "hidden"; input.size = "4";
                input1.id = "jawaban" + i; 
				
                container.appendChild(input1);  	
            } 
			document.getElementById("button" + level).style.visibility="visible";
        
				var fiveMinutes = 60;
				display =document.getElementById("time1" + level); 
				//display = document.querySelector('#time' + level);
				startTimer(fiveMinutes, display, level); 
				
		
		}
	 

	 function cekFields(level){  
	  let skor=0
           for(i=0;i<10;i++){
			let	soal = document.getElementById("soal" + i).value;
			let	jawaban = document.getElementById("jawaban" + i).value;
				if(soal==jawaban) {
					skor++; 
					document.getElementById("soal" + i).style.backgroundColor = "white"; 
				}else  
				{	document.getElementById("soal" + i).style.backgroundColor = "red"; 
				}
				
		   }
		   var skormax = document.getElementById("skormax" + level);
			   skormax.innerHTML = "Skor anda adalah " + skor;
			   var hasil = document.getElementById('skor'+level).value=skor;
			   document.getElementById('level'+level).value=level;
			   document.getElementById('id_user'+level).value="<?= $this->session->userdata('user_id');?>";
			   document.getElementById('lama_pengerjaan'+level).value;
		   var message = "Skor Anda Adalah "+skor+"\n";
		   var message1 = "Waktu Pengerjaan "+document.getElementById('lama_pengerjaan'+level).value+" detik";
		   	window.alert(message+message1);
      
		    
        }
        
	 
 function startTimer(duration, display,id) {
	let text = document.getElementById('time' + id).innerHTML;
	var span = text.trim();

	 
	if(span=="Menit!"){
		var timer = duration, minutes, seconds;
		 var myTimer=setInterval(function () {
			minutes = parseInt(timer / 60, 10)
			seconds = parseInt(timer % 60, 10);

			minutes = minutes < 10 ? "0" + minutes : minutes;
			seconds = seconds < 10 ? "0" + seconds : seconds;

			display.textContent = minutes + ":" + seconds;
			document.getElementById("time" + id).innerHTML = "    detik!";
			if (--timer < 0) {
			   // timer = duration;
			    document.getElementById('time' + id).innerHTML = " Menit!";
				clearInterval(myTimer);
				document.getElementById("close" + id).click();
			}
		}, 1000);
	}
}


 


    </script>
        </div>
        
     
    