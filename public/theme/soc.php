
 <?php require_once('class/session.php');
	   require_once('class/connection.php');	?>
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
	<body class="no-skin">
		<div id="navbar" class="navbar navbar-fixed-top"> <!--originale navbar-default-->
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="logon.php" class="navbar-brand">
						<small>
                            <img src="img/favicon/favicon-32x32.png" class="img img-circle" style="width:24px; height:24px; background-color:#fff;" />
							HR-ECO  <span class='label label-warning arrowed arrowed-right'>Soc. attiva: ECO</span>						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
                                                                                						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
						     	<img class="nav-user-photo" src="img/favicon/favicon-32x32.png" style=" background-color:#fff; width:24px; height:24px;" alt="" />
								<span class="user-info">
									<small>myPage</small>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="prf.php?spg=prf1" data-tooltip='tooltip' title='cambia la password'>
										<i class="ace-icon fa fa-user-o green"></i>
										Password
									</a>
								</li>
								<li>
									<a href="prf.php?spg=prf2"data-tooltip='tooltip' title='Centri di costo abilitati'>
										<i class="ace-icon fa fa-creative-commons blue"></i>
										Centri di costo
									</a>
								</li>
                                
								<li class="divider"></li>

								<li>
									<a href="logout.php" data-tooltip='tooltip' title='esci dal programma'>
										<i class="ace-icon fa fa-sign-out red"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>


		<div class="main-container" id="main-container">
<script type="text/javascript">try{ace.settings.check('main-container' , 'fixed')}catch(e){}</script>
<div id="sidebar" class="sidebar sidebar-fixed responsive"> <!--orifinale togliere sidebar-fixed -->
<script type="text/javascript">try{ace.settings.check('sidebar' , 'fixed')}catch(e){}</script>
<div class="sidebar-shortcuts" id="sidebar-shortcuts">
	<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
	Your IP <?php if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
echo $ip ?>   </div>

<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
<span class="btn btn-success"></span>
<span class="btn btn-info"></span>
<span class="btn btn-warning"></span>
<span class="btn btn-danger"></span>
</div>
</div><!-- /.sidebar-shortcuts -->

<ul class="nav nav-list">
	<li class="">
<a href="dsb.php?spg=dsb0">
	<i class="menu-icon fa fa-tachometer green"></i>
	<span class="menu-text"> società </span>
</a>

<b class="arrow"></b>
</li>
 

 
</ul><!-- /.nav-list -->

<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
	<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
</div>

<script type="text/javascript">
	try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
</script>
	</div>

			<div class="main-content">
				<div class="main-content-inner">
					 <div class="breadcrumbs" id="breadcrumbs">
<script type="text/javascript">
	try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
</script>

    <ul class="breadcrumb">
               <li><a href="#"><i class='fa fa-calendar'></i> Agosto 2019</a></li>
               <li><a href="#">De Gennaro Andrea</a></li>
            
                   </ul><!-- /.breadcrumb -->
</div>
   
                
<div id="modal_azienda" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <h4 class="modal-title blue"><i class="fa fa-refresh"></i> Cambio versione attiva</h4>
   </div>
   <div class="modal-body">
      <form>
      <div class="form-group">
      <select class="form-control" id="idazn">
      <option value="00">Seleziona azienda</option>
	        <option value="ALFARE">ALFARE</option>
            <option value="BIOSUD">BIOSUD</option>
            <option value="E2SRL">E2SRL</option>
            <option value="ECMSTR">ECMSTR</option>
            <option value="ECO">ECO</option>
            <option value="ECOMED">ECOMED</option>
            <option value="ECOPHA">ECOPHA</option>
            <option value="ECTMAR">ECTMAR</option>
            <option value="ECTRAV">ECTRAV</option>
            <option value="MAIOS1">MAIOS1</option>
            <option value="MAIOSR">MAIOSR</option>
            <option value="MENGOZ">MENGOZ</option>
            <option value="PADENE">PADENE</option>
            <option value="PETICO">PETICO</option>
            <option value="TCA">TCA</option>
            </select>
      </div>
      <div class="form-group">
      <div id="anno"></div>
      </div>
      <div class="form-group">
      <div id="mese"></div>
      </div>
    </form>
   </div>
   <div class="modal-footer">
    <span class="btn btn-primary btn-xs" data-dismiss="modal"><i class="fa fa-times"></i> Chiudi</span>
   </div>
  </div>
 </div>
</div>                    						<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
													 <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn" style="display:none;">
							<i class="ace-icon fa fa-cog bigger-130"></i>
						 </div>
                            
                          <div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Seleziona Skin</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
										<label class="lbl" for="ace-settings-navbar"> Menu sup. fisso</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
										<label class="lbl" for="ace-settings-sidebar"> Menu lat. fisso</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Intestazione fissa.</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
										<label class="lbl" for="ace-settings-rtl"> da destra a sinistra (rtl)</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
										<label class="lbl" for="ace-settings-add-container">
											Contenuto centrato
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" />
										<label class="lbl" for="ace-settings-hover"> Sotto menu passaggio mouse</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" />
										<label class="lbl" for="ace-settings-compact"> Compatta menu laterale</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="page-header"><h1><i class="menu-icon fa fa-tachometer green"></i> Società</h1></div>
<div class="space-2"></div>

            <div class="space-2"></div>
            <div id="anadiplstLoad">
			<table class="display table table-striped table-bordered table-hover table-condensed" cellspacing="0" width="100%">
<thead>
<tr>
<th class="text-left">NOME</th>
<th class="text-center">ACCESSO</th>


</tr>
</thead>
<tbody>	

<?php 
$query1="select * from user where login='".$_SESSION['usr_username']."'";
$result1=mysqli_query($con,$query1);
while($row= mysqli_fetch_assoc($result1))
{$usr=$row['id_soc'];}
$queryy="select * from soc where soc_madre='".$usr."'";
$result=mysqli_query($con,$queryy);
while($row= mysqli_fetch_assoc($result))
{
 
echo "<tr><td>{$row['code_soc']}";?><span class="pull-right"></span></td>
<td><center><a href="logon.php" ><input type="submit" name="sub" value="accedo"/></center></a>
</td>
<?php echo "</tr>"; }?>

</tbody>
</table> 
			</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			            <div class="footer hidden-print hidden">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">hrwebdynamics.it</span>
							Application &copy; 2019						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a target="_blank" href="">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a target="_blank" href="">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>






<!--modal x la selezione da elenco-->
<div id="modal_seleziona_da_elenco" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <span class="btn btn-primary btn-xs pull-right" data-dismiss="modal">Chiudi</span>
    <h4 class="modal-title">Premi sulla voce interessata</h4>
   </div>
   <div class="modal-body modal-body-elenco" id='modal-body'></div>
   <div class="modal-footer">
    <span class="btn btn-primary btn-xs" data-dismiss="modal">Chiudi</span>
   </div>
  </div>
 </div>
</div>		</div><!-- /.main-container -->
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
      
		
        </body>
</html>
