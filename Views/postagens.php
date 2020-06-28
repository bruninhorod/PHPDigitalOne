<table style="border: 2px solid #ccc; width: 100%">
	<tr>
		<th> Título Postagem </th>
		<th> Descrição</th>
		<th> Imagem URL</th>
		<th> Criado em </th>
		<th> Author </th>
	</tr>

	<?php
		while($linha = mysqli_fetch_array($consulta)){
			echo '<tr><td>'.$linha['title'].'</td>';
			echo '<td>'.$linha['description'].'</td>';
			echo '<td>'.$linha['img_url'].'</td>';
			echo '<td>'.$linha['created_at'].'</td>';
			echo '<td>'.$linha['id_user'].'</td></tr>';


		}
	?>
</table>