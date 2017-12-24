<script type='text/javascript'>
	window.onload = function(){
		
		//document.getElementById('menu_obj').className = "active";
	}
</script>
<div class='row' style='padding: 30px;'>
		<div class='col-lg-8 offset-lg-2'>
		<p><?php if(isset($obj['id'])) echo"Editar menu"; else echo"Novo menu";  ?></p><br />
		<?php
			$atr = array('id' => 'form_cadastro_menu','name' => 'form_cadastro');
			echo form_open("$controller/store",$atr);
		?>
			<br />
				<input type='hidden' id='id' name='id' value='<?php if(!empty($obj['id'])) echo $obj['id']; ?>'/>
				<input type='hidden' id='controller' value='<?php echo $controller; ?>'/>
				<div class='form-group'>
					<div class='input-group mb-2 mb-sm-0'>
						<div class='input-group-addon' style="width: 180px;">Nome</div>
						<input name='nome' id='nome' value='<?php echo (!empty($obj['nome']) ? $obj['nome']:''); ?>' type='text' class='form-control' autofocus />
					</div>
					<div class='input-group mb-2 mb-sm-0 text-danger' id='error-nome'></div>
				</div>
				<div class='form-group'>
					<div class='input-group mb-2 mb-sm-0'>
						<div class='input-group-addon' style="width: 180px;">Ordem</div>
						<input name='ordem' min="1" id='ordem' value='<?php echo (!empty($obj['ordem']) ? $obj['ordem']:''); ?>' type='number' class='form-control' />
					</div> 
					<div class='input-group mb-2 mb-sm-0 text-danger' id='error-ordem'></div>
				</div>
				<div class='form-group'>
					<div class='checkbox checbox-switch switch-success custom-controls-stacked'>
						<?php
							$checked = "";
							if($obj['ativo'] == 1)
								$checked = "checked";
							
							echo"<label for='menu_ativo'>";
								echo "<input type='checkbox' $checked id='menu_ativo' name='menu_ativo' value='1' /><span></span> Menu ativo";
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
