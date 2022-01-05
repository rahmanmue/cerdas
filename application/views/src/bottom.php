<script>
		function cek(id) {
 
	  var x = document.getElementById('info'+id);
	  var y = document.getElementById('ja'+id);
	  if (x.style.display === "none" || x.style.visibility === "hidden" ) {
		x.style.visibility = "visible"; 
		x.style.display = "block";
		 
	  } else {
		x.style.display = "none";
	  }
	}  
	</script>


<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
   modal.style.width = "auto";
   
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
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
        var span = modal.getElementsByClassName("close")[0]; // Modified by dsones uk

// When the user clicks on the button, open the modal

        btn.onclick = function() {

            modal.style.display = "block";
        }

// When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

</script>
 
<!-- jQuery -->
<script src="<?php echo base_url()?>aset/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url()?>aset/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()?>aset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 
<!-- Sparkline -->
<script src="<?php echo base_url()?>aset/plugins/sparklines/sparkline.js"></script>
 
 <!-- daterangepicker -->
<script src="<?php echo base_url()?>aset/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url()?>aset/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url()?>aset/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url()?>aset/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url()?>aset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>aset/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>aset/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url()?>aset/dist/js/pages/dashboard.js"></script>
<script src="<?php echo base_url()?>aset/video-js.js"></script>
