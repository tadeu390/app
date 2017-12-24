<script type='text/javascript'>
	window.onload = function(){
		
		//document.getElementById('menu_obj').className = "active";
	}
</script>
<div class='row' style='padding: 30px;'>
		<div class='col-lg-8 offset-lg-2'>
		<p><?php if(isset($obj['id'])) echo"Editar módulo"; else echo"Novo módulo";  ?></p><br />
		<?php
			$atr = array('id' => 'form_cadastro_modulo','name' => 'form_cadastro');
			echo form_open('Modulo/store',$atr);
		?>
			<br />
				<input type='hidden' id='id' name='id' value='<?php if(!empty($obj['id'])) echo $obj['id']; ?>'/>
				<input type='hidden' id='controller' value='<?php echo $controller; ?>'/>
				<div class='form-group'>
					<div class='input-group mb-2 mb-sm-0'>
						<div class='input-group-addon' style="width: 180px;">Nome</div>
						<input name='nome' id='nome' value='<?php echo (!empty($obj['nome_modulo']) ? $obj['nome_modulo']:''); ?>' type='text' class='form-control' autofocus />
					</div>
					<div class='input-group mb-2 mb-sm-0 text-danger' id='error-nome'></div>
				</div>
				<div class='form-group'>
					<div class='input-group mb-2 mb-sm-0'>
						<div class='input-group-addon' style="width: 180px;">Descrição</div>
						<input name='descricao' id='descricao' value='<?php echo (!empty($obj['descricao']) ? $obj['descricao']:''); ?>' type='text' class='form-control' autofocus />
					</div>
					<div class='input-group mb-2 mb-sm-0 text-danger' id='error-descricao'></div>
				</div>
				<div class='form-group'>
					<div class='input-group mb-2 mb-sm-0'>
						<div class='input-group-addon' style="width: 180px;">URL</div>
						<input name='url_modulo' id='url_modulo' value='<?php echo (!empty($obj['url_modulo']) ? $obj['url_modulo']:''); ?>' type='text' class='form-control' autofocus />
					</div>
					<div class='input-group mb-2 mb-sm-0 text-danger' id='error-url_modulo'></div>
				</div>
				<div class='form-group'>
					<div class='input-group mb-2 mb-sm-0'>
						<div class='input-group-addon' style="width: 180px;">Ordem</div>
						<input name='ordem' min="1" id='ordem' value='<?php echo (!empty($obj['ordem']) ? $obj['ordem']:''); ?>' type='number' class='form-control' />
					</div> 
					<div class='input-group mb-2 mb-sm-0 text-danger' id='error-ordem'></div>
				</div>
				<div class='form-group'>
					<div class='input-group mb-2 mb-sm-0'>
						<div class='input-group-addon' style="width: 180px;">Ícone</div>
						<input name='icone' id='icone' value='<?php echo (!empty($obj['icone']) ? $obj['icone']:''); ?>' type='text' class='form-control' autofocus />
					</div>
					<div class='input-group mb-2 mb-sm-0 text-danger' id='error-icone'></div>
				</div>
				<div class='form-group'>
					<div class='input-group mb-2 mb-sm-0'>
						<div class='input-group-addon' style="width: 180px;">Menu</span></div>
						<select name='menu_id' id='menu_id' class='form-control'>
							<option value='0'>Selecione</option>
							<?php
								for($i = 0; $i < count($lista_menus); $i++)
								{
									$selected = "";
									if($lista_menus[$i]['id'] == $obj['menu_id'])
										$selected = "selected";
									echo"<option $selected value='". $lista_menus[$i]['id'] ."'>".$lista_menus[$i]['nome']."</option>";
								}
							?>
						</select>
					</div>
					<div class='input-group mb-2 mb-sm-0 text-danger' id='error-menu_id'></div>
				</div>
				<div class='form-group'>
					<div class='checkbox checbox-switch switch-success custom-controls-stacked'>
						<?php
							$checked = "";
							if($obj['ativo'] == 1)
								$checked = "checked";
							
							echo"<label for='modulo_ativo'>";
								echo "<input type='checkbox' $checked id='modulo_ativo' name='modulo_ativo' value='1' /><span></span> Módulo ativo";
							echo"</label>";
						?>
					</div>
				</div>
				<?php
					if(empty($obj['id']))
						echo"<input type='submit' class='btn btn-danger btn-block' style='width: 200px;' value='Cadastrar'>";
					else
						echo"<input type='submit' class='btn btn-danger btn-block' style='width: 200px;' value='Atualizar'>";
				?>
			</form>
	</div>
</div>
