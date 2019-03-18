<h1>Checkout Transparente - Pagseguro</h1>
<div class="row">
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
	<h3 class="h3">Informações de Pagamento</h3>
	<div class="linha"></div>
	<div class="col-sm-6">
	<label>Titular do cartão:</label>
	<input type="text" class="form-control" name="cartao_titular" value="Igor Simoes da Silveira" />
	</div>
	<div class="col-sm-6">
	<label>CPF do Titular do cartão:</label>
	<input type="text" class="form-control" name="cartao_cpf" value="60071473041" />
	</div>
	<div class="col-sm-6">
	<label>Número do cartão:</label>
	<input type="text" class="form-control" name="cartao_numero" />
	</div>
	<div class="col-sm-6">
	<label>Código de Segurança:</label>
	<input type="text" class="form-control" name="cartao_cvv" value="123" />
	</div>
	<div class="col-sm-3">
	<label>Validade:</label>
	<select class="form-control" name="cartao_mes">
		<?php for($q=1;$q<=12;$q++): ?>
		<option><?php echo ($q<10)?'0'.$q:$q; ?></option>
		<?php endfor; ?>
	</select>
	</div>
	<div class="col-sm-3">
		<label></label>
	<select class="form-control" name="cartao_ano">
		<?php $ano = intval(date('Y')); ?>
		<?php for($q=$ano;$q<=($ano+20);$q++): ?>
		<option><?php echo $q; ?></option>
		<?php endfor; ?>
	</select>
	</div>
	<div class="col-sm-6">
	<label>Parcelas:</label>
	<select class="form-control" name="parc"></select>
	</div>
</div>
<input type="hidden" name="total" value="<?php echo $total; ?>" />

<button class="button_pg2 efetuarCompra">Efetuar Compra</button>


<script type="text/javascript" src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/psckttransparente.js"></script>
<script type="text/javascript">
PagSeguroDirectPayment.setSessionId("<?php echo $sessionCode; ?>");
</script>