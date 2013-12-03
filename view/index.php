<?php 
include 'header.php';
?>
<?php include_once('../views/CrimeView.php');
include_once('../views/TempoView.php');
include_once('../views/NaturezaView.php');
$crimeVW = new CrimeView();
$tempoVW = new TempoView();
$naturezaVW = new NaturezaView();
?>
<!-- start: Content -->
<div id="content" class="span10">


	<div class="row-fluid">

		<div class="span3 smallstat box mobileHalf" onTablet="span6"
			onDesktop="span3">
			<div class="boxchart-overlay radarGrey">
				<div class="boxchart">5,6,7,2,0,4,2,4,8,2,3,3,2</div>
			</div>
			<span class="title">Ocorrências</span> <span class="value"><?php echo number_format($crimeVW->_somarGeral(),0,',','.') ?>
			</span>
		</div>

		<div class="span3 smallstat box mobileHalf" onTablet="span6"
			onDesktop="span3">
			<div class="boxchart-overlay red">
				<div class="boxchart">1,2,6,4,0,8,2,4,5,3,1,7,5</div>
			</div>
			<span class="title">Homicídios</span> <span class="value"> <?php echo number_format($crimeVW->_somaTotalHomicidios(),0,',','.') ?>
			</span>
		</div>

		<div class="span3 smallstat box mobileHalf noMargin" onTablet="span6"
			onDesktop="span3">
			<i class="icon-search radarLightYellow"></i> <span class="title">Roubo</span> <span
				class="value"><?php echo  number_format($crimeVW->_somaTotalRoubo(),0,',','.') ?>
			</span>
		</div>

		<div class="span3 smallstat mobileHalf box" onTablet="span6"
			onDesktop="span3">
			<i class="icon-certificate radarYellow"></i> <span class="title">Furto</span>
			<span class="value"><?php echo number_format($crimeVW->_somaTotalFurtos(),0,',','.') ?>
			</span>
		</div>

	</div>

	<div class="row-fluid">
		<div class="box span12" ondesktop="span12" ontablet="span12">
			<div class="box-header">
				<h2><i class="icon-bar-chart"></i>Total de Ocorrencias por Ano</h2>
			</div>
			<div class="box-content">
				<div class="main-chart">
				<!--Impressão de gráfico em barras-->
				<?php echo $crimeVW->retornarDadosCrimeSomadoFormatoNovo() ?>
			</div>
		</div>
	</div>
		
	<div class="row-fluid">
		<div class="box span12">
			<div class="box-header">
				<h2><i class="icon-list-alt"></i><span class="break"></span>Ocorrecia de crimes por Categoria</h2>
				<div class="box-icon">
					<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
					<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="icon-remove"></i></a>
				</div>
			</div>
			<div class="box-content">
					<div id="piechart" style="height:300px"></div>
			</div>
		</div>

	</div><!--/row-->

	</div>

	<div class="row-fluid">

		<div class="box span12">
					<div class="box-header">
						<h2><i class="icon-tasks"></i>Crimes por Tipo</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<?php echo $naturezaVW->listarTodasAlfabicamente(); ?>
					</div>
		</div><!--/span-->

	</div>

	<div class="row-fluid">

		<div class="box span12">
					<div class="box-header">
						<h2><i class="icon-tasks"></i>Crimes por R.A.</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<h3>Taguatinga</h3>
							<div class="progress" title="70%">
								<div class="bar" style="width: 70%;"></div>
							</div>
							<div class="progress progress-success" style="margin-bottom: 9px;" title="40%">
								<div class="bar" style="width: 40%"></div>
							</div>
						<h3>Guara</h3>
							<div class="progress" title="60%">
								<div class="bar" style="width: 60%;"></div>
							</div>
							<div class="progress progress-success" style="margin-bottom: 9px;" title="80%">
								<div class="bar" style="width: 80%"></div>
							</div>
					</div>
		</div><!--/span-->

	</div>

	<!-- MAPA DO DF -->
	<div class="row-fluid">
		<style type="text/css">
			path:hover {fill: #000000;}
		</style>
		<div class="box span12" onTablet="span12" onDesktop="span12">
			<div class="box-header">
				<h2>Mapa do Distrito Federal</h2>
			</div>
			<div class="box-content">
				<div class="span12" style="width: 950px; height: 650px; margin: 0 auto;">
					<embed src='./img/regioes_administrativa.svg' width='950' height='650'/>
				</div>
			</div>
		</div>
	</div>
	<!-- /MAPA DO DF -->

</div>
<!-- end: Content -->

</div>
<!--/fluid-row-->

<?php 
	include 'footer.php';
?>