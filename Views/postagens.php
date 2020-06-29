<a class="btn btn-success" href="?pagina=inserir_postagem"> Criar uma nova postagem</a><br><br>
<table class="table"style="border: 2px solid #ccc; width: 100%">
	<tr>
		<th> Título Postagem </th>
		<th> Descrição </th>
		<th> Imagem URL </th>
		<th> Criado em </th>
		<th> Author </th>
		<th> Editar </th>
		<th> Deletar </th>
	</tr>

	<?php
		while($linha = mysqli_fetch_array($consulta)){
			echo '<tr><td>'.$linha['title'].'</td>';
			echo '<td>'.$linha['description'].'</td>';
			echo '<td>'.$linha['img_url'].'</td>';
			echo '<td>'.$linha['created_at'].'</td>';
			echo '<td>'.$linha['id_user'].'</td>';
	?>

		<td><a href="?pagina=inserir_postagem&editar=<?php echo $linha['id_postagem']; ?>">Editar</a></td>

		<td><a href="deleta_postagem.php?id_postagem=<?php echo $linha['id_postagem']; ?>">Deletar</a></td></tr>




		<?php

		}
	?>
</table>