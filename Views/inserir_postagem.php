<?php if (!isset($_GET['editar'])){ ?>
<h1>Inserir nova postagem :D</h1>
<form method="post" action="processa_postagem.php">
	<input type="text" name="title" placeholder="Título da postagem">
	<br><br>
	<input type="text" name="description" placeholder="No que está pensando?">
	<br><br>
	<input type="text" name="img_url" placeholder="URL da imagem">
	<br><br>
	<input type="submit" value="Publicar">
</form>

<?php } else { ?>
	<?php while($linha = mysqli_fetch_array($consulta)){ ?>
		<?php if ($linha['id_postagem'] == $_GET['editar']){ ?>
	
			<h1>Editar postagem</h1>
			<form method="post" action="edita_postagem.php">
				<input type="hidden" name="id_postagem" value=" <?php echo $linha['id_postagem']; ?>">
				<input type="text" name="title" placeholder="Título da postagem" value="<?php echo $linha ['title']; ?>">
				<br><br>
				<input type="text" name="description" placeholder="No que está pensando?" value="<?php echo $linha ['description']; ?>">
				<br><br>
				<input type="text" name="img_url" placeholder="URL da imagem" value="<?php echo $linha ['img_url']; ?>">
				<br><br>
				<input type="submit" value="Editar curso">
			</form>

		<?php } ?>
	<?php } ?>
<?php } ?>
	