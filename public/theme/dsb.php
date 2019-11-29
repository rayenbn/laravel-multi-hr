
 <?php require_once('class/session.php')?>
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
		
		</style><style>
#chart_costi,#chart_forza_lavoro,#chart_assenteismo {width: 100%;height: 500px;}

.amcharts-export-menu-top-right {top: 10px;right: 0;}
 @media print{
	    .btn {display:none;}
		@page { 
        size: landscape;
		 a[href]:after { content: none !important; }
		 
		 
		}
</style>
<!-- Resources -->
<script src="../dist/js/amcharts/amcharts.js"></script>
<script src="../dist/js/amcharts/serial.js"></script>
<script src="../dist/js/amcharts/pie.js"></script>
<script src="../dist/js/amcharts/themes/light.js"></script>
</head>
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
	Your IP 196.178.1.95    </div>

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
	<span class="menu-text"> Dashboard </span>
</a>

<b class="arrow"></b>
</li>


<li class=''>
<a href='#' class='dropdown-toggle'>
<i class='menu-icon fa fa-table blue'></i>
<span class='menu-text'> Tabelle </span>
<b class='arrow fa fa-angle-down'></b>
</a><b class='arrow'></b>
<ul class='submenu'>
<li class=''>
<a style='cursor:pointer' name='usr' class='menu_sidebar pink' data-mnu='tab' href='usr.php?spg=usr0#usr0'>
<i class='menu-icon fa fa-caret-right'></i>
<i class='fa fa-table small'></i>
Utenti
</a>
<b class='arrow'></b>
</li>
            <li class="">
            <a style="cursor:pointer" name='"' class='menu_sidebar blue' data-mnu='tab' data-toggle='modal' data-target='#menuTabHrRum'>
            <i class="menu-icon fa fa-caret-right"></i>
            <i class="fa fa-table small"></i>
            Risorse umane
            </a>
            <b class="arrow"></b>
            </li>
	
<!--finestra modale menu tabelle-->
<div id="menuTabHrRum" class="modal fade">
<div class="modal-dialog modal-lg">
<div class="modal-content">    
<div class="modal-body">
            <h4 class="header blue">
            <i class="fa fa-table blue small"></i> Menu tabelle risorse umane
            <span class="btn btn-primary btn-xs pull-right" data-dismiss="modal"><i class="fa fa-times"></i> Chiudi</span>
            </h4>
            <table width="100%">
		    <tr>            <td>
            <a name='tabRum1"' class='' data-mnu='tb' data-mnu-lbl='Tipo infrazioni' href="tab.php?spg=tabRum1#tabRum1">
            <i class="menu-icon fa fa-caret-right"></i>
            Tipo infrazioni            </a>
            </td>
                        <td>
            <a name='tabRum30"' class='' data-mnu='tb' data-mnu-lbl='Tipo infrazioni crono' href="tab.php?spg=tabRum30#tabRum30">
            <i class="menu-icon fa fa-caret-right"></i>
            Tipo infrazioni crono            </a>
            </td>
                        <td>
            <a name='tabRum31"' class='' data-mnu='tb' data-mnu-lbl='Tipo sanzioni' href="tab.php?spg=tabRum31#tabRum31">
            <i class="menu-icon fa fa-caret-right"></i>
            Tipo sanzioni            </a>
            </td>
                        <td>
            <a name='tabRum32"' class='' data-mnu='tb' data-mnu-lbl='Tipo template' href="tab.php?spg=tabRum32#tabRum32">
            <i class="menu-icon fa fa-caret-right"></i>
            Tipo template            </a>
            </td>
            <tr><tr>            <td>
            <a name='tabRum35"' class='' data-mnu='tb' data-mnu-lbl='Moduli tag' href="tab.php?spg=tabRum35#tabRum35">
            <i class="menu-icon fa fa-caret-right"></i>
            Moduli tag            </a>
            </td>
                        <td>
            <a name='tabRum28"' class='' data-mnu='tb' data-mnu-lbl='Tipo contratti' href="tab.php?spg=tabRum28#tabRum28">
            <i class="menu-icon fa fa-caret-right"></i>
            Tipo contratti            </a>
            </td>
                        <td>
            <a name='tabRum2"' class='' data-mnu='tb' data-mnu-lbl='Tipo materiali in affidamento' href="tab.php?spg=tabRum2#tabRum2">
            <i class="menu-icon fa fa-caret-right"></i>
            Tipo materiali in affidamento            </a>
            </td>
                        <td>
            <a name='tabRum34"' class='' data-mnu='tb' data-mnu-lbl='Comunicazioni domini' href="tab.php?spg=tabRum34#tabRum34">
            <i class="menu-icon fa fa-caret-right"></i>
            Comunicazioni domini            </a>
            </td>
            <tr><tr>            <td>
            <a name='tabRum33"' class='' data-mnu='tb' data-mnu-lbl='Corsi materiali e costi' href="tab.php?spg=tabRum33#tabRum33">
            <i class="menu-icon fa fa-caret-right"></i>
            Corsi materiali e costi            </a>
            </td>
                        <td>
            <a name='tabRum3"' class='' data-mnu='tb' data-mnu-lbl='Formato moduli stampa unione' href="tab.php?spg=tabRum3#tabRum3">
            <i class="menu-icon fa fa-caret-right"></i>
            Formato moduli stampa unione            </a>
            </td>
                        <td>
            <a name='tabRum4"' class='' data-mnu='tb' data-mnu-lbl='Frequenze eventi' href="tab.php?spg=tabRum4#tabRum4">
            <i class="menu-icon fa fa-caret-right"></i>
            Frequenze eventi            </a>
            </td>
                        <td>
            <a name='tabRum5"' class='' data-mnu='tb' data-mnu-lbl='Intestazione documenti' href="tab.php?spg=tabRum5#tabRum5">
            <i class="menu-icon fa fa-caret-right"></i>
            Intestazione documenti            </a>
            </td>
            <tr><tr>            <td>
            <a name='tabRum6"' class='' data-mnu='tb' data-mnu-lbl='Template moduli' href="tab.php?spg=tabRum6#tabRum6">
            <i class="menu-icon fa fa-caret-right"></i>
            Template moduli            </a>
            </td>
                        <td>
            <a name='tabRum7"' class='' data-mnu='tb' data-mnu-lbl='Tipo allegati' href="tab.php?spg=tabRum7#tabRum7">
            <i class="menu-icon fa fa-caret-right"></i>
            Tipo allegati            </a>
            </td>
                        <td>
            <a name='tabRum8"' class='' data-mnu='tb' data-mnu-lbl='Tipo corsi formazione' href="tab.php?spg=tabRum8#tabRum8">
            <i class="menu-icon fa fa-caret-right"></i>
            Tipo corsi formazione            </a>
            </td>
                        <td>
            <a name='tabRum9"' class='' data-mnu='tb' data-mnu-lbl='Tipo visite mediche' href="tab.php?spg=tabRum9#tabRum9">
            <i class="menu-icon fa fa-caret-right"></i>
            Tipo visite mediche            </a>
            </td>
            <tr><tr>            <td>
            <a name='tabRum10"' class='' data-mnu='tb' data-mnu-lbl='Tipo mezzi affidati' href="tab.php?spg=tabRum10#tabRum10">
            <i class="menu-icon fa fa-caret-right"></i>
            Tipo mezzi affidati            </a>
            </td>
                        <td>
            <a name='tabRum11"' class='' data-mnu='tb' data-mnu-lbl='Tipo eventi' href="tab.php?spg=tabRum11#tabRum11">
            <i class="menu-icon fa fa-caret-right"></i>
            Tipo eventi            </a>
            </td>
                        <td>
            <a name='tabRum29"' class='' data-mnu='tb' data-mnu-lbl='Tipo idoneit&aacute;' href="tab.php?spg=tabRum29#tabRum29">
            <i class="menu-icon fa fa-caret-right"></i>
            Tipo idoneit&aacute;            </a>
            </td>
                        <td>
            <a name='tabRum12"' class='' data-mnu='tb' data-mnu-lbl='Tipo documenti personali' href="tab.php?spg=tabRum12#tabRum12">
            <i class="menu-icon fa fa-caret-right"></i>
            Tipo documenti personali            </a>
            </td>
            <tr><tr>            <td>
            <a name='tabRum13"' class='' data-mnu='tb' data-mnu-lbl='Responsabili' href="tab.php?spg=tabRum13#tabRum13">
            <i class="menu-icon fa fa-caret-right"></i>
            Responsabili            </a>
            </td>
                        <td>
            <a name='tabRum15"' class='' data-mnu='tb' data-mnu-lbl='Mansioni e job description' href="tab.php?spg=tabRum15#tabRum15">
            <i class="menu-icon fa fa-caret-right"></i>
            Mansioni e job description            </a>
            </td>
                        <td>
            <a name='tabRum16"' class='' data-mnu='tb' data-mnu-lbl='Percorso formativo' href="tab.php?spg=tabRum16#tabRum16">
            <i class="menu-icon fa fa-caret-right"></i>
            Percorso formativo            </a>
            </td>
                        <td>
            <a name='tabRum17"' class='' data-mnu='tb' data-mnu-lbl='Protocollo sorveglianza sanitaria' href="tab.php?spg=tabRum17#tabRum17">
            <i class="menu-icon fa fa-caret-right"></i>
            Protocollo sorveglianza sanitaria            </a>
            </td>
            <tr><tr>            <td>
            <a name='tabRum18"' class='' data-mnu='tb' data-mnu-lbl='Medici' href="tab.php?spg=tabRum18#tabRum18">
            <i class="menu-icon fa fa-caret-right"></i>
            Medici            </a>
            </td>
                        <td>
            <a name='tabRum20"' class='' data-mnu='tb' data-mnu-lbl='Laboratori analisi' href="tab.php?spg=tabRum20#tabRum20">
            <i class="menu-icon fa fa-caret-right"></i>
            Laboratori analisi            </a>
            </td>
                        <td>
            <a name='tabRum21"' class='' data-mnu='tb' data-mnu-lbl='Alert nuove assunzioni' href="tab.php?spg=tabRum21#tabRum21">
            <i class="menu-icon fa fa-caret-right"></i>
            Alert nuove assunzioni            </a>
            </td>
                        <td>
            <a name='tabRum22"' class='' data-mnu='tb' data-mnu-lbl='Alert dimissioni' href="tab.php?spg=tabRum22#tabRum22">
            <i class="menu-icon fa fa-caret-right"></i>
            Alert dimissioni            </a>
            </td>
            <tr><tr>            <td>
            <a name='tabRum23"' class='' data-mnu='tb' data-mnu-lbl='Tabella DPI' href="tab.php?spg=tabRum23#tabRum23">
            <i class="menu-icon fa fa-caret-right"></i>
            Tabella DPI            </a>
            </td>
                        <td>
            <a name='tabRum24"' class='' data-mnu='tb' data-mnu-lbl='Profili di rischio per mansione' href="tab.php?spg=tabRum24#tabRum24">
            <i class="menu-icon fa fa-caret-right"></i>
            Profili di rischio per mansione            </a>
            </td>
                        <td>
            <a name='tabRum25"' class='' data-mnu='tb' data-mnu-lbl='Codifica rischi' href="tab.php?spg=tabRum25#tabRum25">
            <i class="menu-icon fa fa-caret-right"></i>
            Codifica rischi            </a>
            </td>
                        <td>
            <a name='tabRum26"' class='' data-mnu='tb' data-mnu-lbl='Abbinamento mansioni/rischi' href="tab.php?spg=tabRum26#tabRum26">
            <i class="menu-icon fa fa-caret-right"></i>
            Abbinamento mansioni/rischi            </a>
            </td>
            <tr><tr>            <td>
            <a name='tabRum27"' class='' data-mnu='tb' data-mnu-lbl='Applicativi' href="tab.php?spg=tabRum27#tabRum27">
            <i class="menu-icon fa fa-caret-right"></i>
            Applicativi            </a>
            </td>
                        </table> 
</div>
</div>
</div>
</div>	


            <li class="">
            <a style="cursor:pointer" name='tabRum27"' class='menu_sidebar blue' data-mnu='tab' data-toggle='modal' data-target='#menuTabHrResp'>
            <i class="menu-icon fa fa-caret-right"></i>
            <i class="fa fa-table small"></i>
            Contestazioni
            </a>
            <b class="arrow"></b>
            </li>


<!--finestra modale menu tabelle-->
<div id="menuTabHrResp" class="modal fade">
<div class="modal-dialog modal-lg">
<div class="modal-content">    
<div class="modal-body">
            <h4 class="header blue">
            <i class="fa fa-table blue small"></i> Menu tabelle responsabilities
            <span class="btn btn-primary btn-xs pull-right" data-dismiss="modal"><i class="fa fa-times"></i> Chiudi</span>
            </h4>
            <table width="100%">
		    <tr>            <td>
            <a name='tabRspA"' class='' data-mnu='tb' data-mnu-lbl='Responsabili' href="tab.php?spg=tabRspA#tabRspA">
            <i class="menu-icon fa fa-caret-right"></i>
            Responsabili            </a>
            </td>
                        <td>
            <a name='tabRspB"' class='' data-mnu='tb' data-mnu-lbl='Tipologie contestazioni' href="tab.php?spg=tabRspB#tabRspB">
            <i class="menu-icon fa fa-caret-right"></i>
            Tipologie contestazioni            </a>
            </td>
                        <td>
            <a name='tabRspC"' class='' data-mnu='tb' data-mnu-lbl='Tipologie provvedimenti' href="tab.php?spg=tabRspC#tabRspC">
            <i class="menu-icon fa fa-caret-right"></i>
            Tipologie provvedimenti            </a>
            </td>
                        <td>
            <a name='tabRspD"' class='' data-mnu='tb' data-mnu-lbl='Testi fissi' href="tab.php?spg=tabRspD#tabRspD">
            <i class="menu-icon fa fa-caret-right"></i>
            Testi fissi            </a>
            </td>
            <tr><tr>            <td>
            <a name='tabRspE"' class='' data-mnu='tb' data-mnu-lbl='Filiali' href="tab.php?spg=tabRspE#tabRspE">
            <i class="menu-icon fa fa-caret-right"></i>
            Filiali            </a>
            </td>
                        <td>
            <a name='tabRspF"' class='' data-mnu='tb' data-mnu-lbl='Non Conformit&aacute;' href="tab.php?spg=tabRspF#tabRspF">
            <i class="menu-icon fa fa-caret-right"></i>
            Non Conformit&aacute;            </a>
            </td>
                        </table> 
</div>
</div>
</div>
</div></ul>
</li>


 
<li class="">
 <a href="#" class="dropdown-toggle">
	<i class="menu-icon fa fa-address-card-o blue"></i>
	<span class="menu-text"> Risorse Umane </span>
	<b class="arrow fa fa-angle-down"></b>
</a>

<b class="arrow"></b>

<ul class="submenu">
 
	<li class="navbar_sidebar_filtro_show ">
	<a name='rum1' href="rum.php?spg=rum1&btn=btn_rum_attivi_cessati#rum1" class='menu_sidebar' data-mnu="rum1" data-mnu-lbl="<i class='fa fa-id-card-o orange'></i> Dipendenti tutti">
	<i class="menu-icon fa fa-caret-right"></i>
	<i class='fa fa-id-card-o orange'></i> Dipendenti tutti	</a>
	<b class="arrow"></b>
	</li>
	 
	<li class="navbar_sidebar_filtro_show ">
	<a name='rum2' href="rum.php?spg=rum2&btn=btn_rum_attivi_cessati#rum2" class='menu_sidebar' data-mnu="rum2" data-mnu-lbl="<i class='fa fa-id-card-o green'></i> Dipendenti attivi">
	<i class="menu-icon fa fa-caret-right"></i>
	<i class='fa fa-id-card-o green'></i> Dipendenti attivi	</a>
	<b class="arrow"></b>
	</li>
	 
	<li class="navbar_sidebar_filtro_show ">
	<a name='rum3' href="rum.php?spg=rum3&btn=btn_rum_attivi_cessati#rum3" class='menu_sidebar' data-mnu="rum3" data-mnu-lbl="<i class='fa fa-id-card-o red'></i> Dipendenti cessati">
	<i class="menu-icon fa fa-caret-right"></i>
	<i class='fa fa-id-card-o red'></i> Dipendenti cessati	</a>
	<b class="arrow"></b>
	</li>
	 
	<li class="navbar_sidebar_filtro_show ">
	<a name='rum4' href="rum.php?spg=rum4&btn=btn_rum_attivi_cessati#rum4" class='menu_sidebar' data-mnu="rum4" data-mnu-lbl="<i class='fa fa-filter blue'></i> Filtra">
	<i class="menu-icon fa fa-caret-right"></i>
	<i class='fa fa-filter blue'></i> Filtra	</a>
	<b class="arrow"></b>
	</li>
	 
	





    <li class="">
    <a href="#" class="dropdown-toggle">
    <i class="menu-icon fa fa-caret-right"></i>
    <span class="menu-text"><i class="fa fa-envelope orange"></i> Comunicazioni</span>
    <b class="arrow fa fa-angle-down"></b>
    </a>
    <b class="arrow"></b>
    <ul class="submenu">
        
     <li class="">
     <a name='cmz1' href="cmz.php?spg=cmz1#cmz1" class='menu_sidebar' data-mnu="cmz1" data-mnu-lbl="Elenco ">
     <i class="menu-icon fa fa-caret-right"></i>
     Elenco      </a>
     <b class="arrow"></b>
	 </li>
         
     <li class="">
     <a name='cmz2' href="cmz.php?spg=cmz2#cmz2" class='menu_sidebar' data-mnu="cmz2" data-mnu-lbl="Nuovo">
     <i class="menu-icon fa fa-caret-right"></i>
     Nuovo     </a>
     <b class="arrow"></b>
	 </li>
         </ul>
    </li>





<li class="">
<a href="#" class="dropdown-toggle">
<i class="menu-icon fa fa-caret-right"></i>
<span class="menu-text"><i class="fa fa-handshake-o blue"></i> Prop. Assunzione</span>
<b class="arrow fa fa-angle-down"></b>
</a>
<b class="arrow"></b>
<ul class="submenu">

 <li class="">
 <a name='prp1' href="prp.php?spg=prp1#prp1" class='menu_sidebar' data-mnu="prp1" data-mnu-lbl="Elenco <span class='badge badge-yellow'>4</span>">
 <i class="menu-icon fa fa-caret-right"></i>
 Elenco <span class='badge badge-yellow'>4</span> </a>
 <b class="arrow"></b>
 </li>
 
 <li class="">
 <a name='prp2' href="prp.php?spg=prp2#prp2" class='menu_sidebar' data-mnu="prp2" data-mnu-lbl="Nuovo">
 <i class="menu-icon fa fa-caret-right"></i>
 Nuovo </a>
 <b class="arrow"></b>
 </li>
 </ul>
</li>




<li class="">
<a href="#" class="dropdown-toggle">
<i class="menu-icon fa fa-caret-right"></i>
<span class="menu-text"><i class="fa fa-cubes blue"></i> Cons. Corsi</span>
<b class="arrow fa fa-angle-down"></b>
</a>
<b class="arrow"></b>
<ul class="submenu">

 <li class="">
 <a name='crs1' href="crs.php?spg=crs1#crs1" class='menu_sidebar' data-mnu="crs1" data-mnu-lbl="Elenco <span class='badge badge-yellow'>2</span>">
 <i class="menu-icon fa fa-caret-right"></i>
 Elenco <span class='badge badge-yellow'>2</span> </a>
 <b class="arrow"></b>
 </li>
 
 <li class="">
 <a name='crs2' href="crs.php?spg=crs2#crs2" class='menu_sidebar' data-mnu="crs2" data-mnu-lbl="Nuovo">
 <i class="menu-icon fa fa-caret-right"></i>
 Nuovo </a>
 <b class="arrow"></b>
 </li>
 </ul>
</li>
 
 
 
<li class="">
<a href="#" class="dropdown-toggle">
<i class="menu-icon fa fa-caret-right"></i>
<span class="menu-text"><i class="fa fa-user-md pink"></i> Cons. Visite</span>
<b class="arrow fa fa-angle-down"></b>
</a>
<b class="arrow"></b>
<ul class="submenu">

 <li class="">
 <a name='vst1' href="vst.php?spg=vst1#vst1" class='menu_sidebar' data-mnu="vst1" data-mnu-lbl="Elenco <span class='badge badge-yellow'>4</span>">
 <i class="menu-icon fa fa-caret-right"></i>
 Elenco <span class='badge badge-yellow'>4</span> </a>
 <b class="arrow"></b>
 </li>
 
 <li class="">
 <a name='vst2' href="vst.php?spg=vst2#vst2" class='menu_sidebar' data-mnu="vst2" data-mnu-lbl="Nuovo">
 <i class="menu-icon fa fa-caret-right"></i>
 Nuovo </a>
 <b class="arrow"></b>
 </li>
 </ul>
</li>

<li class="">
<a href="#" class="dropdown-toggle">
<i class="menu-icon fa fa-caret-right"></i>
<span class="menu-text"><i class="fa fa-medkit red"></i> Cons. Vaccinazioni</span>
<b class="arrow fa fa-angle-down"></b>
</a>
<b class="arrow"></b>
<ul class="submenu">

 <li class="">
 <a name='vcn1' href="vcn.php?spg=vcn1#vcn1" class='menu_sidebar' data-mnu="vcn1" data-mnu-lbl="Elenco <span class='badge badge-yellow'>1</span>">
 <i class="menu-icon fa fa-caret-right"></i>
 Elenco <span class='badge badge-yellow'>1</span> </a>
 <b class="arrow"></b>
 
 <li class="">
 <a name='vcn2' href="vcn.php?spg=vcn2#vcn2" class='menu_sidebar' data-mnu="vcn2" data-mnu-lbl="Nuovo">
 <i class="menu-icon fa fa-caret-right"></i>
 Nuovo </a>
 <b class="arrow"></b>
 </ul>
</li>


<li class="">
<a href="#" class="dropdown-toggle">
<i class="menu-icon fa fa-caret-right"></i>
<span class="menu-text"><i class="fa fa-car pink"></i> Cons. Multe</span>
<b class="arrow fa fa-angle-down"></b>
</a>
<b class="arrow"></b>
<ul class="submenu">

 <li class="">
 <a name='mlt1' href="mlt.php?spg=mlt1#mlt1" class='menu_sidebar' data-mnu="mlt1" data-mnu-lbl="Elenco <span class='badge badge-yellow'>4</span>">
 <i class="menu-icon fa fa-caret-right"></i>
 Elenco <span class='badge badge-yellow'>4</span> </a>
 <b class="arrow"></b>
 </li>
 
 <li class="">
 <a name='mlt2' href="mlt.php?spg=mlt2#mlt2" class='menu_sidebar' data-mnu="mlt2" data-mnu-lbl="Nuovo">
 <i class="menu-icon fa fa-caret-right"></i>
 Nuovo </a>
 <b class="arrow"></b>
 </li>
 </ul>
</li>


<li class="">
<a href="#" class="dropdown-toggle">
<i class="menu-icon fa fa-caret-right"></i>
<span class="menu-text"><i class="fa fa-street-view purple"></i> Cons. Crono</span>
<b class="arrow fa fa-angle-down"></b>
</a>
<b class="arrow"></b>
<ul class="submenu">

 <li class="">
 <a name='crn1' href="crn.php?spg=crn1#crn1" class='menu_sidebar' data-mnu="crn1" data-mnu-lbl="Elenco <span class='badge badge-yellow'>84</span>">
 <i class="menu-icon fa fa-caret-right"></i>
 Elenco <span class='badge badge-yellow'>84</span> </a>
 <b class="arrow"></b>
 </li>
 
 <li class="">
 <a name='crn2' href="crn.php?spg=crn2#crn2" class='menu_sidebar' data-mnu="crn2" data-mnu-lbl="Nuovo">
 <i class="menu-icon fa fa-caret-right"></i>
 Nuovo </a>
 <b class="arrow"></b>
 </li>
 </ul>
</li>





<li class=" hidden ">
<a href="#" class="dropdown-toggle">
<i class="menu-icon fa fa-caret-right"></i>
<span class="menu-text"><i class="fa fa-credit-card pink"></i> Ril. presenze</span>
<b class="arrow fa fa-angle-down"></b>
</a>
<b class="arrow"></b>
<ul class="submenu">

 <li class="">
 <a name='rlp1' href="rlp.php?spg=rlp1#rlp1" class='menu_sidebar' data-mnu="rlp1" data-mnu-lbl="Elenco ">
 <i class="menu-icon fa fa-caret-right"></i>
 Elenco  </a>
 <b class="arrow"></b>
 </li>
 
 <li class="">
 <a name='rlp2' href="rlp.php?spg=rlp2#rlp2" class='menu_sidebar' data-mnu="rlp2" data-mnu-lbl="Nuovo">
 <i class="menu-icon fa fa-caret-right"></i>
 Nuovo </a>
 <b class="arrow"></b>
 </li>
 
 <li class="">
 <a name='rlp3' href="rlp.php?spg=rlp3#rlp3" class='menu_sidebar' data-mnu="rlp3" data-mnu-lbl="Filtra">
 <i class="menu-icon fa fa-caret-right"></i>
 Filtra </a>
 <b class="arrow"></b>
 </li>
 
 <li class="">
 <a name='rlp4' href="rlp.php?spg=rlp4#rlp4" class='menu_sidebar' data-mnu="rlp4" data-mnu-lbl="Tabelle/parametri">
 <i class="menu-icon fa fa-caret-right"></i>
 Tabelle/parametri </a>
 <b class="arrow"></b>
 </li>
 
 <li class="">
 <a name='rlp5' href="rlp.php?spg=rlp5#rlp5" class='menu_sidebar' data-mnu="rlp5" data-mnu-lbl="Cartellino mensile">
 <i class="menu-icon fa fa-caret-right"></i>
 Cartellino mensile </a>
 <b class="arrow"></b>
 </li>
 
 <li class="">
 <a name='rlp6' href="rlp.php?spg=rlp6#rlp6" class='menu_sidebar' data-mnu="rlp6" data-mnu-lbl="Turnazione">
 <i class="menu-icon fa fa-caret-right"></i>
 Turnazione </a>
 <b class="arrow"></b>
 </li>
 
 <li class="">
 <a name='rlp7' href="rlp.php?spg=rlp7#rlp7" class='menu_sidebar' data-mnu="rlp7" data-mnu-lbl="Elaborazioni e stampe">
 <i class="menu-icon fa fa-caret-right"></i>
 Elaborazioni e stampe </a>
 <b class="arrow"></b>
 </li>
 
 <li class="">
 <a name='rlp8' href="rlp.php?spg=rlp8#rlp8" class='menu_sidebar' data-mnu="rlp8" data-mnu-lbl="Interfaccia paghe">
 <i class="menu-icon fa fa-caret-right"></i>
 Interfaccia paghe </a>
 <b class="arrow"></b>
 </li>
 </ul>
</li>







<li class="hidden ">
<a href="#" class="dropdown-toggle">
<i class="menu-icon fa fa-caret-right"></i>
<span class="menu-text"><i class="fa fa-calendar pink"></i> Turnazione</span>
<b class="arrow fa fa-angle-down"></b>
</a>
<b class="arrow"></b>
<ul class="submenu">

 <li class="">
 <a name='tnr1' href="tnr.php?spg=tnr1#tnr1" class='menu_sidebar' data-mnu="tnr1" data-mnu-lbl="Elenco ">
 <i class="menu-icon fa fa-caret-right"></i>
 Elenco  </a>
 <b class="arrow"></b>
 
 <li class="">
 <a name='tnr2' href="tnr.php?spg=tnr2#tnr2" class='menu_sidebar' data-mnu="tnr2" data-mnu-lbl="Nuovo">
 <i class="menu-icon fa fa-caret-right"></i>
 Nuovo </a>
 <b class="arrow"></b>
 </ul>
</li>






<li class="hidden ">
<a href="#" class="dropdown-toggle">
<i class="menu-icon fa fa-caret-right"></i>
<span class="menu-text"><i class="fa fa-file-text-o pink"></i> Doc. pubblicati</span>
<b class="arrow fa fa-angle-down"></b>
</a>
<b class="arrow"></b>
<ul class="submenu">

 <li class="">
 <a name='doc1' href="doc.php?spg=doc1#doc1" class='menu_sidebar' data-mnu="doc1" data-mnu-lbl="Elenco ">
 <i class="menu-icon fa fa-caret-right"></i>
 Elenco  </a>
 <b class="arrow"></b>
 
 <li class="">
 <a name='doc2' href="doc.php?spg=doc2#doc2" class='menu_sidebar' data-mnu="doc2" data-mnu-lbl="Nuovo">
 <i class="menu-icon fa fa-caret-right"></i>
 Nuovo </a>
 <b class="arrow"></b>
 </ul>
</li>


<li class="">
<a href="#" class="dropdown-toggle">
<i class="menu-icon fa fa-caret-right"></i>
<span class="menu-text"><i class="fa fa-file-text blue"></i> Moduli predefiniti</span>
<b class="arrow fa fa-angle-down"></b>
</a>
<b class="arrow"></b>
<ul class="submenu">

 <li class="">
 <a name='mdl1' href="mdl.php?spg=mdl1#mdl1" class='menu_sidebar' data-mnu="mdl1" data-mnu-lbl="Elenco">
 <i class="menu-icon fa fa-caret-right"></i>
 Elenco </a>
 <b class="arrow"></b>
 
 <li class="">
 <a name='mdl2' href="mdl.php?spg=mdl2#mdl2" class='menu_sidebar' data-mnu="mdl2" data-mnu-lbl="Nuovo">
 <i class="menu-icon fa fa-caret-right"></i>
 Nuovo </a>
 <b class="arrow"></b>
 
 <li class="">
 <a name='mdl3' href="mdl.php?spg=mdl3#mdl3" class='menu_sidebar' data-mnu="mdl3" data-mnu-lbl="Lancio">
 <i class="menu-icon fa fa-caret-right"></i>
 Lancio </a>
 <b class="arrow"></b>
 
 <li class="">
 <a name='mdl6' href="mdl.php?spg=mdl6#mdl6" class='menu_sidebar' data-mnu="mdl6" data-mnu-lbl="Lanciati">
 <i class="menu-icon fa fa-caret-right"></i>
 Lanciati </a>
 <b class="arrow"></b>
 
 <li class="">
 <a name='mdl4' href="mdl.php?spg=mdl4#mdl4" class='menu_sidebar' data-mnu="mdl4" data-mnu-lbl="Tag">
 <i class="menu-icon fa fa-caret-right"></i>
 Tag </a>
 <b class="arrow"></b>
 </ul>
</li>



</ul>
</li> 
<li class=''>
<a href='#' class='dropdown-toggle'>
<i class='menu-icon fa fa-pie-chart blue'></i>
<span class='menu-text'>Statistiche </span>
<b class='arrow fa fa-angle-down'></b>
</a><b class='arrow'></b>
<ul class='submenu'>
<li class=''>
<a style='cursor:pointer' name='chr1' class='menu_sidebar blue' data-mnu='chr' href='chr.php?spg=chr1#chr1'>
<i class='menu-icon fa fa-caret-right'></i>
<i class='fa fa-pie-chart small'></i>
Malattia
</a>
<b class='arrow'></b>
</li>
<li class=''>
<a style='cursor:pointer' name='chr2' class='menu_sidebar blue' data-mnu='chr' href='chr.php?spg=chr2#chr2'>
<i class='menu-icon fa fa-caret-right'></i>
<i class='fa fa-pie-chart small'></i>
Ferie/permessi
</a>
<b class='arrow'></b>
</li>
<li class=''>
<a style='cursor:pointer' name='chr3' class='menu_sidebar blue' data-mnu='chr' href='chr.php?spg=chr3#chr3'>
<i class='menu-icon fa fa-caret-right'></i>
<i class='fa fa-pie-chart small'></i>
Multe
</a>
<b class='arrow'></b>
</li>
</ul>
</li>


<li class=''>
<a href='#' class='dropdown-toggle'>
<i class='menu-icon fa fa-calendar orange'></i>
<span class='menu-text'>Monitor scadenze</span>
<b class='arrow fa fa-angle-down'></b>
</a><b class='arrow'></b>
<ul class='submenu'>
<li class=''>
<a style='cursor:pointer' name='msc1' class='menu_sidebar blue' data-mnu='msc' href='msc.php?spg=msc1#msc1'>
<i class='menu-icon fa fa-caret-right'></i>
<i class='fa fa-calendar small'></i>

</a>
<b class='arrow'></b>
</li>
<li class=''>
<a style='cursor:pointer' name='msc2' class='menu_sidebar blue' data-mnu='msc' href='msc.php?spg=msc2#msc2'>
<i class='menu-icon fa fa-caret-right'></i>
<i class='fa fa-calendar small'></i>

</a>
<b class='arrow'></b>
</li>
<li class=''>
<a style='cursor:pointer' name='msc3' class='menu_sidebar blue' data-mnu='msc' href='msc.php?spg=msc3#msc3'>
<i class='menu-icon fa fa-caret-right'></i>
<i class='fa fa-calendar small'></i>

</a>
<b class='arrow'></b>
</li>
</ul>
</li>



<li class=''>
<a href='#' class='dropdown-toggle'>
<i class='menu-icon fa fa-ticket pink'></i>
<span class='menu-text'>Consuntivo budget</span>
<b class='arrow fa fa-angle-down'></b>
</a><b class='arrow'></b>
<ul class='submenu'>
<li class=''>
<a style='cursor:pointer' name='bdg1' class='menu_sidebar blue' data-mnu='bdg' data-toggle='modal' data-target='#modalbdgTab'>
<i class='menu-icon fa fa-caret-right'></i>
<i class='fa fa-table small'></i> Tabelle
</a>
<b class='arrow'></b>
</li>
<li class=''>
<a style='cursor:pointer' name='bdg40' class='menu_sidebar blue' data-mnu='bdg' href='bdg.php?spg=bdg40#bdg40'>
<i class='menu-icon fa fa-caret-right'></i>
<i class='fa fa-address-card-o small'></i> Anagrafiche
</a>
<b class='arrow'></b>
</li>
<li class=''>
<a style='cursor:pointer' name='bdg50' class='menu_sidebar blue' data-mnu='bdg' href='bdg.php?spg=bdg50#bdg50'>
<i class='menu-icon fa fa-caret-right'></i>
<i class='fa fa-gears small'></i> Elaborazioni
</a>
<b class='arrow'></b>
</li>
<li class=''>
<a style='cursor:pointer' name='bdg60' class='menu_sidebar blue' data-mnu='bdg' href='bdg.php?spg=bdg60#bdg60'>
<i class='menu-icon fa fa-caret-right'></i>
<i class='fa fa-print small'></i> Stampe
</a>
<b class='arrow'></b>
</li>
<li class=''>
<a style='cursor:pointer' name='bdg70' class='menu_sidebar blue' data-mnu='bdg' href='bdg.php?spg=bdg70#bdg70'>
<i class='menu-icon fa fa-caret-right'></i>
<i class='fa fa-bar-chart small'></i> Grafici
</a>
<b class='arrow'></b>
</li>
</ul>
</li>
<div id='modalbdgTab' class='modal fade'>
<div class='modal-dialog modal-lg'>
<div class='modal-content'>
<div class='modal-header'>
<h4 class='modal-title blue'><i class='fa fa-table'></i> Consuntivo budget tabelle</h4>
</div>
<div class='modal-body'>
<h5 class='header blue'><strong>Generali</strong>
<table class='table-condensed' width='100%'><tr><td width='25%'><a name='bdg2' class='' data-mnu='bdg' href='bdg.php?spg=bdg2'>
<i class='fa fa-table'></i> Generali</a></td><td width='25%'><a name='bdg3' class='' data-mnu='bdg' href='bdg.php?spg=bdg3'>
<i class='fa fa-table'></i> </a></td></table></h5>
<h5 class='header blue'><strong>Tabulati</strong>
<table class='table-condensed' width='100%'><tr><td width='25%'><a name='bdg16' class='' data-mnu='bdg' href='bdg.php?spg=bdg16'>
<i class='fa fa-table'></i> Intestazione tabulati</a></td><td width='25%'><a name='bdg17' class='' data-mnu='bdg' href='bdg.php?spg=bdg17'>
<i class='fa fa-table'></i> </a></td></table></h5>
<h5 class='header blue'><strong>Versione di budget</strong>
<table class='table-condensed' width='100%'><tr><td width='25%'><a name='bdg26' class='' data-mnu='bdg' href='bdg.php?spg=bdg26'>
<i class='fa fa-table'></i> Versioni di budget</a></td><td width='25%'><a name='bdg27' class='' data-mnu='bdg' href='bdg.php?spg=bdg27'>
<i class='fa fa-table'></i> </a></td></table></h5>
</div>
<div class='modal-footer'>
<span class='btn btn-primary btn-sm' data-dismiss='modal'><i class='fa fa-times'></i> Chiudi</span>
</div>
</div>
</div>
</div>




 
 
 
 
 
<li class="">
<a href="#" class="dropdown-toggle">
	<i class="menu-icon fa fa-list green"></i>
	<span class="menu-text"> Reportistica </span>
	<b class="arrow fa fa-angle-down"></b>
</a>
<b class="arrow"></b>
<ul class="submenu">
   
  <li class=""><a href="logon.php?mnu=rp&spg=A" class="dropdown-toggle"><i class="menu-icon fa fa-caret-right"></i><i class="fa fa-list green small"></i>Tabelle<b class="arrow fa fa-angle-down"></b></a><b class="arrow"></b>
 <ul class="submenu">
	   <li class=""><a href="logon.php?mnu=rp&spg=A"><i class="menu-icon fa fa-caret-right"></i><i class="fa fa-list green small"></i>Utenti</a><b class="arrow"></b></li>
 <li class=""><a href="logon.php?mnu=rp&spg=B"><i class="menu-icon fa fa-caret-right"></i><i class="fa fa-list green small"></i>Password</a><b class="arrow"></b></li>
 <li class=""><a href="logon.php?mnu=rp&spg=C"><i class="menu-icon fa fa-caret-right"></i><i class="fa fa-list green small"></i>Societ&aacute;</a><b class="arrow"></b></li>
 <li class=""><a href="logon.php?mnu=rp&spg=D"><i class="menu-icon fa fa-caret-right"></i><i class="fa fa-list green small"></i>Filtri Utilizzabili</a><b class="arrow"></b></li>
 <li class=""><a href="logon.php?mnu=rp&spg=E"><i class="menu-icon fa fa-caret-right"></i><i class="fa fa-list green small"></i>Dati Variabili</a><b class="arrow"></b></li>
 <li class=""><a href="logon.php?mnu=rp&spg=F"><i class="menu-icon fa fa-caret-right"></i><i class="fa fa-list green small"></i>% Riv. Tfr</a><b class="arrow"></b></li>
 <li class=""><a href="logon.php?mnu=rp&spg=2"><i class="menu-icon fa fa-caret-right"></i><i class="fa fa-list green small"></i>Definizione Tabulati</a><b class="arrow"></b></li>
 <li class=""><a href="logon.php?mnu=rp&spg=3"><i class="menu-icon fa fa-caret-right"></i><i class="fa fa-list green small"></i>Definizione Righe di Output</a><b class="arrow"></b></li>
 <li class=""><a href="logon.php?mnu=rp&spg=I"><i class="menu-icon fa fa-caret-right"></i><i class="fa fa-list green small"></i>Condizioni</a><b class="arrow"></b></li>
 <li class=""><a href="logon.php?mnu=rp&spg=4"><i class="menu-icon fa fa-caret-right"></i><i class="fa fa-list green small"></i>Formule</a><b class="arrow"></b></li>
 <li class=""><a href="logon.php?mnu=rp&spg=M"><i class="menu-icon fa fa-caret-right"></i><i class="fa fa-list green small"></i>% spaccatura</a><b class="arrow"></b></li>
   </ul>
 </li>       
    
   <li class="">
      <a href="logon.php?mnu=rp&spg=6">
	<i class="menu-icon fa fa-caret-right"></i>
	<i class="fa fa-list green small"></i>
	Anagrafiche</a>
<b class="arrow"></b>
	</li>                         
    
   <li class="">
      <a href="logon.php?mnu=rp&spg=10">
	<i class="menu-icon fa fa-caret-right"></i>
	<i class="fa fa-list green small"></i>
	Elaborazioni</a>
<b class="arrow"></b>
	</li>                         
    
  <li class=""><a href="logon.php?mnu=rp&spg=D" class="dropdown-toggle"><i class="menu-icon fa fa-caret-right"></i><i class="fa fa-list green small"></i>Wizard<b class="arrow fa fa-angle-down"></b></a><b class="arrow"></b>
 <ul class="submenu">
	<li class=""><a href="logon.php?mnu=rp&spg=A"><i class="menu-icon fa fa-caret-right"></i><i class="fa fa-list green small"></i>Spool</a><b class="arrow"></b></li>
 <li class=""><a href="logon.php?mnu=rp&spg=B"><i class="menu-icon fa fa-caret-right"></i><i class="fa fa-list green small"></i>Utilit&aacute;</a><b class="arrow"></b></li>
 <li class=""><a href="logon.php?mnu=rp&spg=C"><i class="menu-icon fa fa-caret-right"></i><i class="fa fa-list green small"></i>Manuale</a><b class="arrow"></b></li>
 <li class=""><a href="logon.php?mnu=rp&spg=D"><i class="menu-icon fa fa-caret-right"></i><i class="fa fa-list green small"></i>Wizard</a><b class="arrow"></b></li>
   </ul>
 </li>  
 
    
   <li class="">
      <a href="logon.php?mnu=rp&spg=E">
	<i class="menu-icon fa fa-caret-right"></i>
	<i class="fa fa-list green small"></i>
	Uscita</a>
<b class="arrow"></b>
	</li>                         
   

</ul>
	</li>
 
  
 	                     
 
 
 
 
<li class="">
 <a href="#" class="dropdown-toggle">
	<i class="menu-icon fa fa-plus purple"></i>
	<span class="menu-text"> Nota contabile </span>
	<b class="arrow fa fa-angle-down"></b>
</a>

<b class="arrow"></b>

<ul class="submenu">

 

        
        <li class="">
              <a href="#" class="dropdown-toggle active">
                  <i class="menu-icon fa fa-caret-right"></i>
                  Accessi                  <b class="arrow fa fa-angle-down"></b>
              </a>
        <b class="arrow"></b>
        <ul class="submenu">
                <li class="">
        <a href="ntc.php?spg=ntc1a&idana=0&lbl= Accessi">
        <i class="fa fa-plus purple small"></i>
        Tabella utenti        </a>
        <b class="arrow"></b>
        </li>
                <li class="">
        <a href="ntc.php?spg=ntc1b&idana=0&lbl= Accessi">
        <i class="fa fa-plus purple small"></i>
        Tabella password        </a>
        <b class="arrow"></b>
        </li>
                <li class="">
        <a href="ntc.php?spg=ntc1c&idana=0&lbl= Accessi">
        <i class="fa fa-plus purple small"></i>
        Definizione societ&aacute;        </a>
        <b class="arrow"></b>
        </li>
          
        </ul>
        </li>
       
    
  

        
        <li class="">
              <a href="#" class="dropdown-toggle active">
                  <i class="menu-icon fa fa-caret-right"></i>
                  Formule                  <b class="arrow fa fa-angle-down"></b>
              </a>
        <b class="arrow"></b>
        <ul class="submenu">
                <li class="">
        <a href="ntc.php?spg=ntc2d&idana=0&lbl= Formule">
        <i class="fa fa-plus purple small"></i>
        Funzioni generali        </a>
        <b class="arrow"></b>
        </li>
          
        </ul>
        </li>
       
    
  

        
        <li class="">
              <a href="#" class="dropdown-toggle active">
                  <i class="menu-icon fa fa-caret-right"></i>
                  Tabelle                  <b class="arrow fa fa-angle-down"></b>
              </a>
        <b class="arrow"></b>
        <ul class="submenu">
                <li class="">
        <a href="ntc.php?spg=ntc3e&idana=0&lbl= Tabelle">
        <i class="fa fa-plus purple small"></i>
        Spaccature        </a>
        <b class="arrow"></b>
        </li>
                <li class="">
        <a href="ntc.php?spg=ntc3f&idana=0&lbl= Tabelle">
        <i class="fa fa-plus purple small"></i>
        Definizione file dinamico        </a>
        <b class="arrow"></b>
        </li>
                <li class="">
        <a href="ntc.php?spg=ntc3g&idana=0&lbl= Tabelle">
        <i class="fa fa-plus purple small"></i>
        Tabella Istat        </a>
        <b class="arrow"></b>
        </li>
                <li class="">
        <a href="ntc.php?spg=ntc3h&idana=0&lbl= Tabelle">
        <i class="fa fa-plus purple small"></i>
        Tabella filiali        </a>
        <b class="arrow"></b>
        </li>
                <li class="">
        <a href="ntc.php?spg=ntc3i&idana=0&lbl= Tabelle">
        <i class="fa fa-plus purple small"></i>
        Ragg. societ&aacute;        </a>
        <b class="arrow"></b>
        </li>
                <li class="">
        <a href="ntc.php?spg=ntc3l&idana=0&lbl= Tabelle">
        <i class="fa fa-plus purple small"></i>
        Tabella condizioni        </a>
        <b class="arrow"></b>
        </li>
                <li class="">
        <a href="ntc.php?spg=ntc3m&idana=0&lbl= Tabelle">
        <i class="fa fa-plus purple small"></i>
        Tabella spaccature        </a>
        <b class="arrow"></b>
        </li>
          
        </ul>
        </li>
       
    
  

        
        <li class="">
              <a href="#" class="dropdown-toggle active">
                  <i class="menu-icon fa fa-caret-right"></i>
                  Anagrafiche                  <b class="arrow fa fa-angle-down"></b>
              </a>
        <b class="arrow"></b>
        <ul class="submenu">
                <li class="">
        <a href="ntc.php?spg=ntc4n&idana=0&lbl= Anagrafiche">
        <i class="fa fa-plus purple small"></i>
        Anagrafiche dipendenti        </a>
        <b class="arrow"></b>
        </li>
                <li class="">
        <a href="ntc.php?spg=ntc4o&idana=0&lbl= Anagrafiche">
        <i class="fa fa-plus purple small"></i>
        Piano dei conti        </a>
        <b class="arrow"></b>
        </li>
          
        </ul>
        </li>
       
    
  

     
        <li class="">
              <a href="ntc.php?spg=ntc5&idana=0&lbl= Elaborazione">
                  <i class="menu-icon fa fa-caret-right"></i>
                  <i class="fa fa-plus purple small"></i> Elaborazione              </a>
             <b class="arrow"></b>
        </li>
          
    
   

</ul>
</li>
 

                     <li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-bolt red"></i>
							<span class="menu-text" title="Contestazioni e provvedimenti disciplinari">
								Contestazioni
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							
							<li class="">
                               <a name='mnuRspA' href="znp.php?spg=mnuRspA#mnuRspA" 
                                  class='menu_sidebar' data-mnu="mnuRspA" data-mnu-lbl="<i class='fa fa-plus-circle blue'></i> Crea nuovo">
									<i class="menu-icon fa fa-caret-right"></i>
									<i class='fa fa-plus-circle blue'></i> Crea nuovo								</a>
								<b class="arrow"></b>
							</li>
							
							<li class="">
                               <a name='mnuRspB' href="znp.php?spg=mnuRspB#mnuRspB" 
                                  class='menu_sidebar' data-mnu="mnuRspB" data-mnu-lbl="<i class='fa fa-list-ol blue'></i> Tutti <span id='mnuRspB_conteggio' class='badge badge-yellow'>4</span>">
									<i class="menu-icon fa fa-caret-right"></i>
									<i class='fa fa-list-ol blue'></i> Tutti <span id='mnuRspB_conteggio' class='badge badge-yellow'>4</span>								</a>
								<b class="arrow"></b>
							</li>
							
							<li class="">
                               <a name='mnuRspC' href="znp.php?spg=mnuRspC#mnuRspC" 
                                  class='menu_sidebar' data-mnu="mnuRspC" data-mnu-lbl="<i class='fa fa-circle blue'></i> Convalida/Nega<br><small>responsabile<span id='mnuRspC_conteggio' class='badge badge-yellow'>3</span></small>">
									<i class="menu-icon fa fa-caret-right"></i>
									<i class='fa fa-circle blue'></i> Convalida/Nega<br><small>responsabile<span id='mnuRspC_conteggio' class='badge badge-yellow'>3</span></small>								</a>
								<b class="arrow"></b>
							</li>
							
							<li class="">
                               <a name='mnuRspD' href="znp.php?spg=mnuRspD#mnuRspD" 
                                  class='menu_sidebar' data-mnu="mnuRspD" data-mnu-lbl="<i class='fa fa-flag blue'></i> Convalida/Nega<br><small>ufficio personale</small>">
									<i class="menu-icon fa fa-caret-right"></i>
									<i class='fa fa-flag blue'></i> Convalida/Nega<br><small>ufficio personale</small>								</a>
								<b class="arrow"></b>
							</li>
							
							<li class="">
                               <a name='mnuRspE' href="znp.php?spg=mnuRspE#mnuRspE" 
                                  class='menu_sidebar' data-mnu="mnuRspE" data-mnu-lbl="<i class='fa fa-flag orange'></i> Convalidate<br><small>fasi iter contestazioni<span id='mnuRspE_conteggio' class='badge badge-yellow'>1</span></small>">
									<i class="menu-icon fa fa-caret-right"></i>
									<i class='fa fa-flag orange'></i> Convalidate<br><small>fasi iter contestazioni<span id='mnuRspE_conteggio' class='badge badge-yellow'>1</span></small>								</a>
								<b class="arrow"></b>
							</li>
							
							<li class="">
                               <a name='mnuRspF' href="znp.php?spg=mnuRspF#mnuRspF" 
                                  class='menu_sidebar' data-mnu="mnuRspF" data-mnu-lbl="<i class='fa fa-flag green'></i> Chiusura contestazione<br><small>passaggio a provvedimento<span id='mnuRspF_conteggio' class='badge badge-yellow'>1</span></small>">
									<i class="menu-icon fa fa-caret-right"></i>
									<i class='fa fa-flag green'></i> Chiusura contestazione<br><small>passaggio a provvedimento<span id='mnuRspF_conteggio' class='badge badge-yellow'>1</span></small>								</a>
								<b class="arrow"></b>
							</li>
							
							<li class="">
                               <a name='mnuRspG' href="znp.php?spg=mnuRspG#mnuRspG" 
                                  class='menu_sidebar' data-mnu="mnuRspG" data-mnu-lbl="<i class='fa fa-lock green'></i> Chiuse<br><small>con provvedimento</small>">
									<i class="menu-icon fa fa-caret-right"></i>
									<i class='fa fa-lock green'></i> Chiuse<br><small>con provvedimento</small>								</a>
								<b class="arrow"></b>
							</li>
							
							<li class="">
                               <a name='mnuRspH' href="znp.php?spg=mnuRspH#mnuRspH" 
                                  class='menu_sidebar' data-mnu="mnuRspH" data-mnu-lbl="<i class='fa fa-lock purple'></i> Chiuse<br><small>senza provvedimento</small>">
									<i class="menu-icon fa fa-caret-right"></i>
									<i class='fa fa-lock purple'></i> Chiuse<br><small>senza provvedimento</small>								</a>
								<b class="arrow"></b>
							</li>
							
						</ul>
					</li>





 













 

<li class=''>
<a href='#' class='dropdown-toggle'>
<i class='menu-icon fa fa-pencil orange'></i>
<span class='menu-text'>Formazione</span>
<b class='arrow fa fa-angle-down'></b>
</a><b class='arrow'></b>
<ul class='submenu'>
<li class=''>
<a style='cursor:pointer' name='frm1' class='menu_sidebar blue' data-mnu='frm' href='frm.php?spg=frm1#frm1'>
<i class='menu-icon fa fa-caret-right'></i>
<i class='fa fa-pencil small'></i>
Attivit&aacute; formative
</a>
<b class='arrow'></b>
</li>
<li class=''>
<a style='cursor:pointer' name='frm2' class='menu_sidebar blue' data-mnu='frm' href='frm.php?spg=frm2#frm2'>
<i class='menu-icon fa fa-caret-right'></i>
<i class='fa fa-pencil small'></i>
Abbinamento necessit&aacute; formative
</a>
<b class='arrow'></b>
</li>
<li class=''>
<a style='cursor:pointer' name='frm3' class='menu_sidebar blue' data-mnu='frm' href='frm.php?spg=frm3#frm3'>
<i class='menu-icon fa fa-caret-right'></i>
<i class='fa fa-pencil small'></i>
Calcolo pianificazione formazione
</a>
<b class='arrow'></b>
</li>
<li class=''>
<a style='cursor:pointer' name='frm4' class='menu_sidebar blue' data-mnu='frm' href='frm.php?spg=frm4#frm4'>
<i class='menu-icon fa fa-caret-right'></i>
<i class='fa fa-pencil small'></i>
Inserimento consuntivo
</a>
<b class='arrow'></b>
</li>
</ul>
</li>

 
 
<li class=''>
<a href='#' class='dropdown-toggle'>
<i class='menu-icon fa fa-warning red'></i>
<span class='menu-text'>Rsp.Organizz.(ROF)</span>
<b class='arrow fa fa-angle-down'></b>
</a><b class='arrow'></b>
<ul class='submenu'>
<li class=''>
<a style='cursor:pointer' name='rof1' class='menu_sidebar blue' data-mnu='rof' href='rof.php?spg=rof1#rof1'>
<i class='menu-icon fa fa-caret-right'></i>
<i class='fa fa-warning small'></i>
d
</a>
<b class='arrow'></b>
</li>
<li class=''>
<a style='cursor:pointer' name='rof2' class='menu_sidebar blue' data-mnu='rof' href='rof.php?spg=rof2#rof2'>
<i class='menu-icon fa fa-caret-right'></i>
<i class='fa fa-warning small'></i>
d
</a>
<b class='arrow'></b>
</li>
<li class=''>
<a style='cursor:pointer' name='rof3' class='menu_sidebar blue' data-mnu='rof' href='rof.php?spg=rof3#rof3'>
<i class='menu-icon fa fa-caret-right'></i>
<i class='fa fa-warning small'></i>
d
</a>
<b class='arrow'></b>
</li>
</ul>
</li>

 

 <li class=''>
<a href='#' class='dropdown-toggle'>
<i class='menu-icon fa fa-magic red'></i>
<span class='menu-text'>Utility</span>
<b class='arrow fa fa-angle-down'></b>
</a><b class='arrow'></b>
<ul class='submenu'>
<li class=''>
<a style='cursor:pointer' name='utl0' class='menu_sidebar blue' data-mnu='utl' href='utl.php?spg=utl0#utl0'>
<i class='menu-icon fa fa-caret-right'></i>
<i class='fa fa-magic small'></i>
Server
</a>
<b class='arrow'></b>
</li>
<li class=''>
<a style='cursor:pointer' name='utl1' class='menu_sidebar blue' data-mnu='utl' href='utl.php?spg=utl1#utl1'>
<i class='menu-icon fa fa-caret-right'></i>
<i class='fa fa-magic small'></i>
Prf.Sic. allinea
</a>
<b class='arrow'></b>
</li>
<li class=''>
<a style='cursor:pointer' name='utl2' class='menu_sidebar blue' data-mnu='utl' href='utl.php?spg=utl2#utl2'>
<i class='menu-icon fa fa-caret-right'></i>
<i class='fa fa-magic small'></i>
Prf.Sic. xls
</a>
<b class='arrow'></b>
</li>
<li class=''>
<a style='cursor:pointer' name='utl3' class='menu_sidebar blue' data-mnu='utl' href='utl.php?spg=utl3#utl3'>
<i class='menu-icon fa fa-caret-right'></i>
<i class='fa fa-magic small'></i>
Svuota tabelle
</a>
<b class='arrow'></b>
</li>
<li class=''>
<a style='cursor:pointer' name='utl4' class='menu_sidebar blue' data-mnu='utl' href='utl.php?spg=utl4#utl4'>
<i class='menu-icon fa fa-caret-right'></i>
<i class='fa fa-magic small'></i>
Acq.ne unilav
</a>
<b class='arrow'></b>
</li>
<li class=''>
<a style='cursor:pointer' name='utl5' class='menu_sidebar blue' data-mnu='utl' href='utl.php?spg=utl5#utl5'>
<i class='menu-icon fa fa-caret-right'></i>
<i class='fa fa-magic small'></i>
Acq.ne anadip
</a>
<b class='arrow'></b>
</li>
<li class=''>
<a style='cursor:pointer' name='utl6' class='menu_sidebar blue' data-mnu='utl' href='utl.php?spg=utl6#utl6'>
<i class='menu-icon fa fa-caret-right'></i>
<i class='fa fa-magic small'></i>
Acq.ne CV
</a>
<b class='arrow'></b>
</li>
<li class=''>
<a style='cursor:pointer' name='utl7' class='menu_sidebar blue' data-mnu='utl' href='utl.php?spg=utl7#utl7'>
<i class='menu-icon fa fa-caret-right'></i>
<i class='fa fa-magic small'></i>
Acq.ne Formazione
</a>
<b class='arrow'></b>
</li>
<li class=''>
<a style='cursor:pointer' name='utl8' class='menu_sidebar blue' data-mnu='utl' href='utl.php?spg=utl8#utl8'>
<i class='menu-icon fa fa-caret-right'></i>
<i class='fa fa-magic small'></i>
Acq.ne Scadenze visite
</a>
<b class='arrow'></b>
</li>
<li class=''>
<a style='cursor:pointer' name='utl9' class='menu_sidebar blue' data-mnu='utl' href='utl.php?spg=utl9#utl9'>
<i class='menu-icon fa fa-caret-right'></i>
<i class='fa fa-magic small'></i>
Azzera contatori primary key
</a>
<b class='arrow'></b>
</li>
<li class=''>
<a style='cursor:pointer' name='utl10' class='menu_sidebar blue' data-mnu='utl' href='utl.php?spg=utl10#utl10'>
<i class='menu-icon fa fa-caret-right'></i>
<i class='fa fa-magic small'></i>
Acq.ne dbs Allegati
</a>
<b class='arrow'></b>
</li>
</ul>
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
               <li><a href='#' data-toggle='modal' data-target='#modal_azienda'><i class="fa fa-refresh"></i> cambia societ&aacute; attiva</a></li>
                              <li>
               <span class='hidden-print green' id='btn_chart_main_change_v'><i class='fa fa-bar-chart'></i> Vedi grafici affiancati</span>
               <span class='hidden-print green' id='btn_chart_main_change_o' style="display:none;"><i class='fa fa-bar-chart'></i> Vedi grafici elenco</span>
               </li>
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
								 <div class="space-6"></div>
 <div class="row">
  <div id='chart_main_1' class="col-xs-4">
    <div style="border:1px solid #CCC; padding:5px 5px 5px 5px;background-color:#f3f3f3; box-shadow:2px 2px #438EB9;">
    <h2 class="header white bolder text-center" style="background-color:#438EB9">Costi</h2>
    <!-- Chart code -->
<script>
var chart = AmCharts.makeChart("chart_costi", {
    "type": "serial",
    "theme": "light",
    "marginRight": 80,
    "marginTop": 17,
    "autoMarginOffset": 20,
    "dataProvider": [{
        "date": "2012-03-01",
        "price": 20
    }, {
        "date": "2012-03-02",
        "price": 75
    }, {
        "date": "2012-03-03",
        "price": 15
    }, {
        "date": "2012-03-04",
        "price": 75
    }, {
        "date": "2012-03-05",
        "price": 158
    }, {
        "date": "2012-03-06",
        "price": 57
    }, {
        "date": "2012-03-07",
        "price": 107
    }, {
        "date": "2012-03-08",
        "price": 89
    }, {
        "date": "2012-03-09",
        "price": 75
    }, {
        "date": "2012-03-10",
        "price": 132
    }, {
        "date": "2012-03-11",
        "price": 158
    }, {
        "date": "2012-03-12",
        "price": 56
    }, {
        "date": "2012-03-13",
        "price": 169
    }, {
        "date": "2012-03-14",
        "price": 24
    }, {
        "date": "2012-03-15",
        "price": 147
    }],
    "valueAxes": [{
        "logarithmic": true,
        "dashLength": 1,
        "guides": [{
            "dashLength": 6,
            "inside": true,
            "label": "average",
            "lineAlpha": 1,
            "value": 90.4
        }],
        "position": "left"
    }],
    "graphs": [{
        "bullet": "round",
        "id": "g1",
        "bulletBorderAlpha": 1,
        "bulletColor": "#FFFFFF",
        "bulletSize": 7,
        "lineThickness": 2,
        "title": "Price",
        "type": "smoothedLine",
        "useLineColorForBulletBorder": true,
        "valueField": "price"
    }],
    "chartScrollbar": {},
    "chartCursor": {
        "valueLineEnabled": true,
        "valueLineBalloonEnabled": true,
        "valueLineAlpha": 0.5,
        "fullWidth": true,
        "cursorAlpha": 0.05
    },
    "dataDateFormat": "YYYY-MM-DD",
    "categoryField": "date",
    "categoryAxis": {
        "parseDates": true
    },
    "export": {
        "enabled": true
    }
});

chart.addListener("dataUpdated", zoomChart);

function zoomChart() {
    chart.zoomToDates(new Date(2012, 2, 2), new Date(2012, 2, 10));
}
</script>

<!-- HTML -->
<div id="chart_costi"></div>	    </div> 
  </div>
  <div id='chart_main_2' class="col-xs-4">
    <div style="border:1px solid #CCC; padding:5px 5px 5px 5px;background-color:#f3f3f3; box-shadow:2px 2px #438EB9;">
    <h2 class="header white bolder text-center" style="background-color:#438EB9">Assenteismo</h2>
    <!-- Chart code -->
<script>
var chart = AmCharts.makeChart( "chart_assenteismo", {
    "type": "serial",
	"theme": "light",
    "legend": {
        "horizontalGap": 10,
        "maxColumns": 1,
        "position": "right",
		"useGraphSettings": true,
		"markerSize": 10
    },
    "dataProvider": [{
        "year": 2003,
        "Malattia": 2.5,
        "Infortunio": 2.5,
        "Pnr": 2.1
    }, {
        "year": 2004,
        "Malattia": 2.6,
        "Infortunio": 2.7,
        "Pnr": 2.2
    }, {
        "year": 2005,
        "Malattia": 2.8,
        "Infortunio": 2.9,
        "Pnr": 2.4
    }],
    "valueAxes": [{
        "stackType": "regular",
        "axisAlpha": 0.3,
        "gridAlpha": 0
    }],
    "graphs": [{
        "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
        "fillAlphas": 0.8,
        "labelText": "[[value]]",
        "lineAlpha": 0.3,
        "title": "Malattia",
        "type": "column",
		"color": "#000000",
        "valueField": "Malattia"
    }, {
        "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
        "fillAlphas": 0.8,
        "labelText": "[[value]]",
        "lineAlpha": 0.3,
        "title": "Infortunio",
        "type": "column",
		"color": "#000000",
        "valueField": "Infortunio"
    }, {
        "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
        "fillAlphas": 0.8,
        "labelText": "[[value]]",
        "lineAlpha": 0.3,
        "title": "Pnr",
        "type": "column",
		"color": "#000000",
        "valueField": "Pnr"
    }],
    "categoryField": "year",
    "categoryAxis": {
        "gridPosition": "start",
        "axisAlpha": 0,
        "gridAlpha": 0,
        "position": "left"
    },
    "export": {
    	"enabled": true
     }

});
</script>

<!-- HTML -->
<div id="chart_assenteismo"></div>
    </div>
  </div>
  <div id='chart_main_3' class="col-xs-4">
    <div style="border:1px solid #CCC; padding:5px 5px 5px 5px;background-color:#f3f3f3; box-shadow:2px 2px #438EB9;">
    <h2 class="header white bolder text-center" style="background-color:#438EB9">Forza Lavoro</h2>
    <!-- Chart code -->
<script>
var chart = AmCharts.makeChart("chart_forza_lavoro", {
"type": "serial",
  "theme": "light",
  "marginRight": 70,
  "dataProvider": [{
    "country": "Produzione",
    "visits": 3025,
    "color": "#FF0F00"
  }, {
    "country": "Magazzini",
    "visits": 1882,
    "color": "#FF6600"
  }, {
    "country": "Uffici",
    "visits": 1809,
    "color": "#FF9E01"
  }],
  "valueAxes": [{
    "axisAlpha": 0,
    "position": "left",
    "title": ""
  }],
  "startDuration": 1,
  "graphs": [{
    "balloonText": "<b>[[category]]: [[value]]</b>",
    "fillColorsField": "color",
    "fillAlphas": 0.9,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "visits"
  }],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "country",
  "categoryAxis": {
    "gridPosition": "start",
    "labelRotation": 45
  },
  "export": {
    "enabled": true
  }

});</script>

<!-- HTML -->
<div id="chart_forza_lavoro"></div>    </div>
  </div>
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
        <script>
 		$("#btn_chart_main_change_v").click(function() {
				 $("#btn_chart_main_change_v").hide();
				 $("#btn_chart_main_change_o").show();
			     $('#chart_main_1,#chart_main_2,#chart_main_3').removeClass('col-xs-4').addClass('col-xs-12');
		});		
		$("#btn_chart_main_change_o").click(function() {
				 $("#btn_chart_main_change_o").hide();
				 $("#btn_chart_main_change_v").show();
			     $('#chart_main_1,#chart_main_2,#chart_main_3').removeClass('col-xs-12').addClass('col-xs-4');
		});		
 	    </script>        
        </body>
</html>
