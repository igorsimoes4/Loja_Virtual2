<h1><?php $this->lang->get('CART'); ?></h1>

<table border="0" width="100%" style="text-aling:center">
	<tr>
		<th  width="100"><?php $this->lang->get('IMAGE'); ?></th>
		<th><?php $this->lang->get('NAME'); ?></th>
		<th align="center" width="100"><?php $this->lang->get('QUANTITY'); ?></th>
		<th style="text-align:center" width="120"><?php $this->lang->get('PRICE'); ?></th>
		<th width="20"></th>
	</tr>
	<?php
	$subtotal = 0;
	?>
	<?php foreach($list as $item): ?>
	<?php
	$subtotal += (floatval($item['price']) * intval($item['qt']));
	?>
		<tr>
			<td><img src="<?php echo BASE_URL; ?>media/products/<?php echo $item['image']; ?>" width="80" /></td>
			<td><?php echo $item['name']; ?></td>
			<td align="center">
				<a href="<?php echo BASE_URL; ?>cart/delFor1Item/<?php echo $item['id']; ?>">
					<img src="<?php echo BASE_URL; ?>assets/images/remove.png" width="20" /></a>
					<?php echo $item['qt']; ?>
				<a href="<?php echo BASE_URL; ?>cart/addFor1Item/<?php echo $item['id']; ?>"><img src="<?php echo BASE_URL; ?>assets/images/plus.png" width="20" /></a>
			</td>
			<td align="center"><?php $this->lang->get('COIN'); ?> <?php echo number_format($item['price'], 2, ',', '.'); ?></td>
			<td><a href="<?php echo BASE_URL; ?>cart/del/<?php echo $item['id']; ?>"><img src="<?php echo BASE_URL; ?>assets/images/delete.png" width="20" /></a></td>
		</tr>
	<?php endforeach; ?>
	<tr>
		<td colspan="3" align="right"><b><?php $this->lang->get('SUBTOTAL'); ?>:</b></td>
		<td align="center"><strong><?php $this->lang->get('COIN'); ?> <?php echo number_format($subtotal, 2, ',', '.'); ?></strong></td>
	</tr>
	<tr>
		<td colspan="3" align="right"><b><?php $this->lang->get('FRETE'); ?>:</b></td>
		<td align="center"><strong><?php $this->lang->get('COIN'); ?> <?php  
		if(isset($shipping['price'])) {
			echo $shipping['price'];
		} else {
			echo "0";
		}
		 ?></strong></td>	
	</tr>
	<tr>
		<td colspan="3" align="right"><b><?php $this->lang->get('PRAZO'); ?>:</b></td>
		<td align="center"><strong><?php if(isset($shipping['date'])) { echo $shipping['date']; } ?> dia<?php if(isset($shipping['date'])) { echo ($shipping['date']=='1')?'':'s'; } ?></strong></td>
	</tr>
	<tr>
		<td colspan="3" align="right"><b><?php $this->lang->get('TOTAL'); ?>:</b></td>
		<td align="center"><strong><?php $this->lang->get('COIN'); ?> <?php
		if(isset($shipping['price'])) { 
			$frete = floatval(str_replace(',', '.', $shipping['price']));
			$total = $subtotal + $frete;
			echo number_format($total, 2, ',', '.');
		} else {
			echo number_format($subtotal, 2, ',', '.');
		}
		?></strong></td>
	</tr>
</table>
CEP DE ENTREGA: 
	<form method="POST">
		<div class="cep">
			<div class="col-sm-6">
				<input name="cep" placeholder="00000-000" type="text" value="" size="10" maxlength="9" class="form-control cep_campo" width="100" />
				<input type="submit" value="Calcular Frete" style="border-radius: 40px;" class="form-control button_pg"  width="150">
			</div>
			<div class="col-sm-6"></div>
		</div>
	</form>
</br></br></br></br>
<hr/>

<?php if(isset($frete) > 0): ?>
	
	<form method="POST" action="<?php echo BASE_URL; ?>cart/payment_redirect" float="right">
		
			<div class="col-sm-3">
				
			</div>
			<div class="col-sm-5">
				<h3>Escolha a Forma de Pagamento</h3>
				<select name="payment_type" class="form-control" style="border-radius: 40px;">
					<option value="checkout_transparente" class="form-control" style="border-radius: 40px;">
						Pagseguro Checkout Transparente
					</option>
					<option value="mp" class="form-control" style="border-radius: 40px;">
						Mercado Pago
					</option>
				</select>
			</div>
			<div class="col-sm-4">
			</br></br></br>
				<input type="submit" value="Finalizar Compra" class="form-control button_pg" style="border-radius: 40px;">
			</div>
	
	</form>
<?php endif; ?>