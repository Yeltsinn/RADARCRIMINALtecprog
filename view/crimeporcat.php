<?php 
include 'header.php';
include_once('../views/CrimeView.php');
include_once('../views/TempoView.php');
include_once('../views/NaturezaView.php');
include_once('../views/CategoriaView.php');
$crimeVW = new CrimeView();
$tempoVW = new TempoView();
$naturezaVW = new NaturezaView();
$categoriaVW = new CategoriaView();
$idCategoria = isset( $_GET['id'] ) ? $_GET['id'] : null;

$arrayCategorias = $categoriaVW->listarTodasAlfabeticamentePuro();
$auxCategoria = $arrayCategorias[$idCategoria];
$auxNatureza = $naturezaVW->consultarPorIdCategoria($auxCategoria->__getIdCategoria());
?>
<!-- start: Content -->
<div id="content" class="span10">

	<div class="row-fluid">

		<div class="box span12">
					<div class="box-header">
						<h2><a href="#" class="btn-minimize"><i class="icon-tasks"></i><?php echo $auxNatureza->__getNatureza(); ?></a></h2>
						<div class="box-icon">
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content" style="display: none;">
						<h3>$PorAno</h3>
							<p>AQUI VEM AS INFO POR ANO</p>

						<h3>$PorRA</h3>
							<p>AQUI VEM AS INFO POR RA</p>							

					</div>
		</div><!--/span-->

	</div>

	<div class="row-fluid">

		<div class="box span12">
					<div class="box-header">
						<h2><a href="#" class="btn-minimize"><i class="icon-tasks"></i>$Tipo</a></h2>
						<div class="box-icon">
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content" style="display: none;">
						<h3>$PorAno</h3>
							<p>AQUI VEM AS INFO POR ANO</p>

						<h3>$PorRA</h3>
							<p>AQUI VEM AS INFO POR RA</p>							

					</div>
		</div><!--/span-->

	</div>

	<div class="row-fluid">

		<div class="box span12">
					<div class="box-header">
						<h2><a href="#" class="btn-minimize"><i class="icon-tasks"></i>$Tipo</a></h2>
						<div class="box-icon">
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content" style="display: none;">
						<h3>$PorAno</h3>
							<p>AQUI VEM AS INFO POR ANO</p>

						<h3>$PorRA</h3>
							<p>AQUI VEM AS INFO POR RA</p>							

					</div>
		</div><!--/span-->

	</div>

</div>
<!-- end: Content -->

</div>
<!--/fluid-row-->

<?php 
include 'footer.php';
?>