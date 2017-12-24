<script type='text/javascript'>
	window.onload = function(){
		
		//document.getElementById('menu_obj').className = "active";
	}
</script>
<div class='row' style='padding: 30px;'>
		<div class='col-lg-8 offset-lg-2'>
		<p><?php if(isset($obj['id'])) echo"Editar usuário"; else echo"Novo usuário";  ?></p><br />
		<?php
			$atr = array('id' => 'form_cadastro_usuario','name' => 'form_cadastro');
			echo form_open('Usuario/store',$atr);
		?>
			<br />
				<input type='hidden' id='id' name='id' value='<?php if(!empty($obj['id'])) echo $obj['id']; ?>'/>
				<input type='hidden' id='controller' value='<?php echo $controller; ?>'/>
				<div class='form-group'>
					<div class='input-group mb-2 mb-sm-0'>
						<div class='input-group-addon' style="width: 180px;">Nome</div>
						<input name='nome' id='nome' value='<?php echo (!empty($obj['nome_usuario']) ? $obj['nome_usuario']:''); ?>' type='text' class='form-control' autofocus />
					</div>
					<div class='input-group mb-2 mb-sm-0 text-danger' id='error-nome'></div>
				</div>
				<div class='form-group'>
					<div class='input-group mb-2 mb-sm-0'>
						<div class='input-group-addon' style="width: 180px;">E-mail</div>
						<input name='email' id='email' value='<?php echo (!empty($obj['email']) ? $obj['email']:''); ?>' type='text' class='form-control' />
					</div> 
					<div class='input-group mb-2 mb-sm-0 text-danger' id='error-email'></div>
				</div>
				<div class='form-group'>
					<div class='input-group mb-2 mb-sm-0'>
						<div class='input-group-addon' style="width: 180px;">Senha</div>
						<input name='senha' id='senha' <?php echo $read; ?> value='<?php echo (!empty($obj['senha']) ? $obj['senha']:''); ?>' type='password' class='form-control' />
					</div>
					<div class='input-group mb-2 mb-sm-0 text-danger' id='error-senha'></div>
				</div>
				<?php 
					if(empty($obj['id']))
					{
						echo"<div class='form-group'>";
							echo"<div class='input-group mb-2 mb-sm-0'>";
								echo"<div class='input-group-addon' style='width: 180px;'>Confirmar Senha</div>";
								echo"<input name='confirmar_senha' id='confirmar_senha' value='".(!empty($obj['senha']) ? $obj['senha']:'')."' type='password' class='form-control' />";
							echo"</div>";
							echo"<div class='input-group mb-2 mb-sm-0 text-danger' id='error-confirmar_senha'></div>";
						echo"</div>";
					}
				?>
				<div class='form-group'>
					<div class='input-group mb-2 mb-sm-0'>
						<div class='input-group-addon' style="width: 180px;">Tipo de usuário</span></div>
						<select name='grupo_id' id='grupo_id' class='form-control'>
							<option value='0'>Selecione</option>
							<?php
								for($i = 0; $i < count($grupos_usuario); $i++)
								{
									$selected = "";
									if($grupos_usuario[$i]['id'] == $obj['grupo_id'])
										$selected = "selected";
									echo"<option $selected value='". $grupos_usuario[$i]['id'] ."'>".$grupos_usuario[$i]['nome_grupo']."</option>";
								}
							?>
						</select>
					</div>
					<div class='input-group mb-2 mb-sm-0 text-danger' id='error-grupo_id'></div>
				</div>
				
				<?php 
					if(!empty($obj['id']))
					{
						echo"<fieldset>";
							echo"<legend>Alterar senha</legend>";
							echo"<div class='form-group'>";
								echo"<div class='input-group mb-2 mb-sm-0'>";
									echo"<div class='input-group-addon' style='width: 180px;'>Nova senha</div>";
									echo"<input name='nova_senha' id='nova_senha' value='' type='password' class='form-control' />";
								echo"</div>";
								echo"<div class='input-group mb-2 mb-sm-0 text-danger' id='error-nova_senha'></div>";
							echo"</div>";
							echo"<div class='form-group'>";
								echo"<div class='input-group mb-2 mb-sm-0'>";
									echo"<div class='input-group-addon' style='width: 180px;'>Confirmar senha</div>";
									echo"<input name='confirmar_senha' id='confirmar_nova_senha' value='' type='password' class='form-control' />";
								echo"</div>";
								echo"<div class='input-group mb-2 mb-sm-0 text-danger' id='error-confirmar_nova_senha'></div>";
							echo"</div>";
						echo"</fieldset>";
					}
				?>
				
				<div class='form-group'>
					<div class='checkbox checbox-switch switch-success custom-controls-stacked'>
						<?php
							$checked = "";
							if($obj['ativo'] == 1)
								$checked = "checked";
							
							echo"<label for='conta'>";
								echo "<input type='checkbox' $checked id='conta' name='conta_ativa' value='1' /><span></span> Conta ativa";
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
