<div class="login-page">
	<div class="container d-flex align-items-center">
	<div class="form-holder has-shadow">
		<div class="row">
			<div class="col-lg-6 bg-white shadow-basic">
				<div class="form d-flex align-items-center">
					<div class="content">
					  <?php
							$atr = array('id' => 'form_login','name' => 'form_login');
							echo form_open('login/validar',$atr);
						?>
							<div class="form-group">
								<input id="email-login" name="email-login" type="text" class="input-material">
								<label for="email-login" class="label-material">E-mail</label>
								<div class='input-group mb-2 mb-sm-0 text-danger' id='error-email-login'></div>
							</div>
							<div class="form-group">
								<input id="senha-login" name="senha-login" type="password" class="input-material">
								<label for="senha-login" class="label-material">Senha</label>
								<div class='input-group mb-2 mb-sm-0 text-danger' id='error-senha-login'></div>
							</div>
							<button type="submit" class="btn btn-primary">Login</button>
						</form>
						<a href="#" class="forgot-pass">Esquece sua senha?</a><br><small>Não tem uma conta? </small><a href="register.html" class="signup">Crie aqui</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<div class="copyrights text-center">
		<p> <?php echo date("Y");?>  - Developer by Tadeu R. Torres</p>
	</div>
</div>