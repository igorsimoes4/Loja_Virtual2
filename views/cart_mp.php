<h1>Checkout Mercado Pago</h1>

<?php if(!empty($error)): ?>
	<div class="alert alert-danger">
		<?php echo $error; ?>
	</div>
<?php endif; ?>

<form method="POST">
	<h3 class="h3">Dados Pessoais</h3>
	<div class="col-sm-6">
		<label>Nome:</label>
		<input class="form-control" type="text" name="name" value="Igor Simoes da Silveira" />
	</div>
	<div class="col-sm-6">
	<label>CPF:</label>
	<input type="text" class="form-control" name="cpf" value="60071473041" />
	</div>
	<div class="col-sm-3">
	<label>Telefone:</label>
	<input type="text" class="form-control" name="telefone" value="51985455995" />
	</div>
	<div class="col-sm-6">
	<label>E-mail:</label>
	<input type="email" class="form-control" name="email" value="c09043967880040417382@sandbox.pagseguro.com.br" />
	</div>
	<div class="col-sm-3">
	<label>Senha:</label>
	<input type="password" class="form-control" name="password" value="yhXX70C4X7gj7t1U" />
	</div>
	<h3 class="h3">Informações de Endereço</h3>
	<div class="linha"></div>
	<div class="col-sm-6">
	<strong>CEP:</strong>
	<input type="text" name="cep" class="form-control" value="90020110" />
	</div>
	<div class="col-sm-6">
	<strong>Rua:</strong>
	<input type="text" name="rua" class="form-control" value="Rua Vigário José Inácio" />
	</div>
	<div class="col-sm-6">
	<strong>Número:</strong>
	<input type="text" name="numero" class="form-control" value="30" />
	</div>
	<div class="col-sm-6">
	<strong>Complemento:</strong>
	<input type="text" name="complemento" class="form-control" />
	</div>
	<div class="col-sm-6">
	<strong>Bairro:</strong>
	<input type="text" name="bairro" class="form-control" value="Centro Histórico" />
	</div>
	<div class="col-sm-3">
	<strong>Cidade:</strong>
	<input type="text" name="cidade" class="form-control" value="Proto Alegre" />
	</div>
	<div class="col-sm-3">
	<strong>Estado:</strong>
	<input type="text" name="estado" class="form-control" value="RS" />
	</div>
	<div class="col-sm-6"></div>
	<div class="col-sm-3"></div>
	<div class="col-sm-3">
	</br>
		<input type="submit" value="Efetuar Compra" class="button_pg3 efetuarCompra">
	</div>
</form>