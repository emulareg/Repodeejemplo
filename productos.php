<?php
	$archivo = file_get_contents("productos.json");

	$productos = json_decode( $archivo );

?>
<div class="cat-product">
	<div class="w_content">
		<div class="women">
			<a href="#">
				<h4>Categoria #1 - <span><?php echo count($productos) ?> items</span></h4>
			</a>
			<ul class="w_nav">
				<li>Ordernar por: </li>
				<li><a class="active" href="#">Más recientes</a></li> |
				<li><a href="#">Menor precio</li> |
				<li><a href="#">Mayor precio</a></li> 
				<div class="clearfix"></div>	
			</ul>
			<div class="clearfix"></div>	
		</div>
	</div>
	<!-- grids_of_4 -->
	<div class="grid-product">

<?php foreach($productos as $producto){ ?>
	<div class="product-grid">
		<div class="content_box">
			<a href="?p=producto&id=<?php echo $producto->idProducto ?>">
				<div class="left-grid-view grid-view-left">
					<img src="images/productos/<?php echo $producto->Imagen ?>" class="img-responsive watch-right" alt=""/>
				</div>
			</a>
			<h4><a href="?p=producto&id=<?php echo $producto->idProducto ?>"><?php echo $producto->Nombre ?></a></h4>
			<p><?php echo $producto->Presentacion ?></p>
			<span><?php echo $producto->Precio ?></span>
		</div>
	</div>
<?php } ?>
		<div class="clearfix"></div>
	</div>
</div>