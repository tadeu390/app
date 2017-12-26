<br /><br />
<div class='row' id='container' name='container'>
	<input type='hidden' id='controller' value='<?php echo $controller; ?>'/>
	<?php
		echo "<div class='col-lg-10 offset-lg-1 padding' style='background: #393836;'>";
			echo "<div class='table-responsive'>";
				echo "<table class='table table-striped table-hover' style='color: white;'>";
					echo "<thead>";
						echo"<tr>";
							echo"<td class='text-center' colspan='5'>";
								echo"<p style='color: white; margin-top: 10px;'>Todos os módulos</p>";
							echo"</td>";
						echo"</tr>";
						echo"<tr>";
							echo"<td class='text-right' colspan='6'>";
								echo"<a class='btn btn-success' href='".$url."index.php/$controller/create_edit/0/'>Novo módulo</a>";
							echo"</td>";
						echo"</tr>";
						echo "<tr>";
							echo "<td>Nome</td>";
							//echo "<td>Descrição</td>";
							echo "<td>Ativo</td>";
							//echo "<td>Ordem</td>";
							echo "<td>Menu</td>";
							echo "<td class='text-right'></td>";
						echo "</tr>";
					echo "</thead>";
					echo "<tbody>";
						for($i = 0; $i < count($lista_modulos); $i++)
						{
							$cor = "";
							if($lista_modulos[$i]['ativo'] == 0)
								$cor = "style='background-color: #dc3545;'";
							echo "<tr >";
								echo "<td $cor>".$lista_modulos[$i]['nome_modulo']."</td>";
								//echo "<td $cor>".$lista_modulos[$i]['descricao']."</td>";
								echo "<td $cor>".(($lista_modulos[$i]['ativo'] == 1) ? 'Sim' : 'Não')."</td>";
								//echo "<td $cor>".$lista_modulos[$i]['ordem']."</td>";
								echo "<td $cor>".$lista_modulos[$i]['nome_menu']."</td>";
								echo "<td class='text-right'>";
									echo "<a href='".$url."index.php/$controller/create_edit/".$lista_modulos[$i]['id']."' title='Editar' style='color: #dc3545; cursor: pointer;' class='glyphicon glyphicon-edit'></a> | ";
									echo "<a href='".$url."index.php/$controller/detalhes/".$lista_modulos[$i]['id']."' title='Detalhes' style='color: #dc3545; cursor: pointer;' class='glyphicon glyphicon-th'></a> | ";
									echo "<span onclick='Main.confirm_delete(". $lista_modulos[$i]['id'] .");' id='sp_lead_trash' name='sp_lead_trash' title='Apagar' style='color: #dc3545; cursor: pointer;' class='glyphicon glyphicon-trash'></span>";
								echo "</td>";
							echo "</tr>";
						}
					echo "</tbody>";
				echo "</table>";
			echo "</div>";
		echo "</div>";
	?>
</div>
