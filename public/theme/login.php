<?php
require_once ('class/connection.php');?>
<!DOCTYPE html>
<html lang="en"><head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Eco web-app</title>
        <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
        <link rel="manifest"  href="img/favicon/site.webmanifest">
        <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="../dist/bootstrap/bootstrap.min.css" />
		<link rel="stylesheet" href="../dist/css/font-awesome/css/font-awesome.min.css" />
		<link rel="stylesheet" href="../dist/css/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="../dist/css/animate.min.css" />
		<link rel="stylesheet" href="../dist/css/fonts.googleapis.com.css" />

        <!-- bootstrap-colorpicker -->
        <link href="../dist/js/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet"/>

        <!-- bootstrap-colorpicker -->
        <link href="../dist/js/selectpicker/bootstrap-select.css" rel="stylesheet"/>
        

        <!-- bootstrap-datepicker -->
        <link href="../dist/js/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" />
        
        <!-- bootstrap-daterangepicker -->
        <link href="../dist/js/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet"/>
        
		<!-- ace styles -->
		<link rel="stylesheet" href="../dist/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
       

		<!-- ace settings handler -->
		<script src="../dist/js/ace-extra.min.js"></script>

 		<!--[if lte IE 8]>
		<script src="dist/lib/html5shiv.min.js"></script>
		<script src="dist/lib/respond.min.js"></script>
		<![endif]-->
        
        <style>
		#datatable th{border:1px solid;}
		#datatable td{border:1px solid;}

        input[type=text]:focus { background-color:#ffedad;}		
		@media print{
		.btn{display:none;}	
		}
		
		</style></head>
	<body class="login-layout">
		<div class="main-container">
			<div class="main-content">
        				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
                                <div class='space-6'></div>
                                <div class='space-6'></div>
                                <div class='space-6'></div>
                                <div class='space-6'></div>
								<div class='space-6'></div>
                                <div class='space-6'></div>
                                <h4 class="blue" id="id-company-text">
                                <img src="img/logo2.jpg" class="img img-thumbnail"/>
                                <div class='space-6'></div>
                                HR Web Dynamics
                                
                                </h4>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger text-center">
 											
                                                											</h4>

											<div class="space-6"></div>
                                            												<form method="post" action="login_check.php">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" id="usr_username" name="usr_username" placeholder="Username corrisponde alla mail"/>
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" name="usr_password" placeholder="Password" value="Lavoro01" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>
													<input type="submit" name="login" value="login"></input>

												    <div id='codice_azienda_load'></div>

													

													<div class="space-4"></div>
												</fieldset>
											</form>


										</div><!-- /.widget-main -->

										<div class="toolbar clearfix">
											<div>
                                                <a href="#" data-toggle='modal' data-target="#forgot-pws" class="forgot-password-link">Password dimenticata?</a>
											</div>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->

								</div><!-- /.signup-box -->
							</div><!-- /.position-relative -->

							<div class="navbar-fixed-top align-right hidden">
								<br />
								&nbsp;
								<a id="btn-login-dark" href="#">Dark</a>
								&nbsp;
								<span class="blue">/</span>
								&nbsp;
								<a id="btn-login-blur" href="#">Blur</a>
								&nbsp;
								<span class="blue">/</span>
								&nbsp;
								<a id="btn-login-light" href="#">Light</a>
								&nbsp; &nbsp; &nbsp;
							</div>
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
                
                
                
                
                <!--password dimenticata-->
                
<div id="forgot-pws" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-body">
 	<div class="widget-body">
        <div class="widget-main">
        <h4 class="header red lighter bigger"><i class="ace-icon fa fa-key"></i>Richiedi password.</h4>
        <div class="space-6"></div>
        <p>Digita la tua email , ti invieremo le istruzioni.</p>
        <form>
        <fieldset>
        <label class="block clearfix">
        <span class="block input-icon input-icon-right">
        <input type="email" class="form-control" placeholder="Email" id='eml_pws_forgot' />
        <i class="ace-icon fa fa-envelope"></i>
        </span>
        </label>
        <div class="clearfix">
        <button type="button" class="width-35 pull-right btn btn-sm btn-danger" id="btn_pws_forgot_send">
        <i class="ace-icon fa fa-lightbulb-o"></i>
        <span class="bigger-110">Invia!</span>
        </button>
        <div id="risposta"></div>
        </div>
        </fieldset>
        </form>
        </div><!-- /.widget-main -->
        <div class="toolbar center">
        <a href="#" data-dismiss="modal" class="back-to-login-link">Torna alla pagina di login.</a>
        </div>
        </div><!-- /.widget-body -->
   </div>
  </div>
 </div>
</div>
      
                
                
                
                            </div>
		</div><!-- /.main-container -->
        <script src="../dist/lib/jquery-3.1.0.min.js"></script>
 <script src="../dist/js/jquery.cookie.js"></script>
<script type="text/javascript">
	if('ontouchstart' in document.documentElement) document.write("<script src='dist/lib/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="../dist/bootstrap/bootstrap.min.js"></script>
<!-- Validator form-->
<script src="../dist/js/validator.min.js"></script>

<!--textarea che si allunga in base a inserimento-->
<script src="../dist/js/autosize.min.js"></script>

<!-- bootstrap-datepicker -->
<script src="../dist/js/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="../dist/js/bootstrap-datepicker/js/bootstrap-datepicker.it.min.js"></script>
 
<!--select picker-->
<script src="../dist/js/selectpicker/bootstrap-select.js"></script> 
 
<!--copia e incolla-->
<script src="../dist/js/clipboard.min.js"></script> 
 
<!-- bootstrap-datatable -->
<script src="../dist/js/datatable/jquery.dataTables.min.js"></script>
<script src="../dist/js/datatable/dataTables.bootstrap.min.js"></script>
 
 
<!--notifiche-->
<script src="../dist/js/bootstrap-notify.min.js"></script>
 
 
<!-- ace scripts -->
<script src="../dist/js/ace-elements.min.js"></script>
<script src="../dist/js/ace.min.js"></script>




<script>
$(document).ready(function() {
	  //tooltip
	  $('[data-tooltip="tooltip"]').tooltip(); 
      //textarea ch si allunga in base inserimento 
	   autosize($('textarea'));
	  //clipboard.js x copia e incolla



 
//end ready
});


    //clipboard copia 
		var clipboard = new ClipboardJS('.clipboard_copy_from');
		clipboard.on('success', function(e) {
			console.info('Action:', e.action);
			console.info('Text:', e.text);
			console.info('Trigger:', e.trigger);
		
			e.clearSelection();
		});
		clipboard.on('error', function(e) {
			console.error('Action:', e.action);
			console.error('Trigger:', e.trigger);
		});


	//data table
        $('#datatable').DataTable( {
        scrollY:        400,
        scrollCollapse: true,
        paging:         false,
           "language": {
               "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Italian.json"
                       } 
           });

    //se seleziono azienda al volo
		$("#idazn").change(function() {
		var idazn=$("#idazn").val();	
		   if(idazn=="00"){
			$("#mese_mm,#anno_yy").hide();   
		   }else{
           $("#anno").load("navbar_files/ajax/header_change_yyyy.php?idazn="+idazn);
		   }
		
		
		   
		});
		
		
		
		
		

   $(".input-selectpicker").selectpicker({
		style:"btn-inverse",
        noneSelectedText : 'Seleziona un valore' // by this default 'Nothing selected' -->will change to Please Select
    });


    //datepicker
			$('.input-datepicker').datepicker({
			format: "dd/mm/yyyy",
			todayBtn: "linked",
			clearBtn: true,
			language: "it",
			multidateSeparator: "-",
			calendarWeeks: true,
			autoclose: true,
			todayHighlight: true
		});

	//mi permette di contare i checkbox selezionati e avvisare utente di selezionare almeno 1
			$("#checkbox_box").click(function() {
				var contaselezionati = $('#checkbox_box :input[type="checkbox"]:checked').length;
				
				if(contaselezionati>0){
				$("#checkbox_box_label").html("Selezionati <span class='badge badge-primary'> "+contaselezionati+" </span>");
				$("#checkbox_box_btn").show();
				}else{
				$("#checkbox_box_label").html("<div class='alert alert-danger'>Seleziona almeno 1</div>");
				$("#checkbox_box_btn").hide();
			
				}
				
			 });
			 
			 
	//creo il cookie x il menu		 
$(".menu_sidebar"). click(function(){
 var mnu = $(this).attr("data-mnu");
 var lbl = $(this).attr("data-mnu-lbl");
   $.cookie('mnu', mnu, { expires: 1 });
   $.cookie('lbl', lbl, { expires: 1 });
});


 $('.check_del').change(function() {
        if ($(this).prop('checked')) {
            $("button").removeClass("btn-success" ).addClass("btn-danger").html("<i class='fa fa-trash'></i> Cancella | operazione irreversibile");
        }
        else {
            $("button").removeClass("btn-danger" ).addClass("btn-success").html("<i class='fa fa-save'></i> Salva");
        }
    });
	
	
 $("input[name=check_del]").change(function() {
        if ($(this).prop('checked')) {
            $("button").removeClass("btn-success" ).addClass("btn-danger").html("<i class='fa fa-trash'></i> Cancella | operazione irreversibile");
        }
        else {
            $("button").removeClass("btn-danger" ).addClass("btn-success").html("<i class='fa fa-save'></i> Salva");
        }
 });

		
	//quando premo sul menu seleziona da elenco
	$(".btn-link").click(function() {
		$("#modal_seleziona_da_elenco").modal('show'); 
		var fld_nme = $(this).attr("data-fld-nme");
		var fld_id  = $(this).attr("data-fld-id");
		$(".modal-body-elenco").html("<h4><i class='fas fa-spinner fa-spin'></i> Caricamento dati in corso...</h4>");
		$(".modal-body-elenco").load("HrRum_files/prp_files/ajax/sql_seleziona_da_elenco.php?fld_nme="+fld_nme+"&fld_id="+fld_id);
	});

</script>
    <script>
	$(document).ready(function() {
	  $("#codice_azienda_load").load("login_files/codice_azienda_load.php?usr_username="+$("#usr_username").val());
	  // end ready
	});




   $("#btn_pws_forgot_send").click(function() {
   
   //indirizzo email
   var eml_pws_forgot =$("#eml_pws_forgot").val();

		$.ajax({
		  type: "POST",
		  url : "login_files/ajax/forgot_pws_eml_snd.php",
		  data: "eml_pws_forgot="+eml_pws_forgot,
		  dataType: "html",
		  success: function(risposta){
			$("#risposta").html(risposta);
		  },
		  error: function(){
			$("#risposta").html("<code>Errore del server</code>");
		  }
		})   
   
   });    

	</script>
	</body>
</html>
