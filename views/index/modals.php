<div id="addUser" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Agregar nuevo Pedido</h4>
			</div>
			<div class="modal-body">
				<form name="formUser" onsubmit="register(); return false">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input id="idPedido" type="number" class="form-control" name="idPedido" placeholder="Generado automaticamente"
							required autocomplete="off" disabled>
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input id="idCliente" type="number" class="form-control" name="idCliente"
							placeholder="idCliente" required autocomplete="off">
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
						<input id="fecha" type="date" class="form-control" name="fecha" placeholder="fecha" required
							autocomplete="off">
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
						<input id="total" type="number" class="form-control" name="total" placeholder="total" required
							autocomplete="off">
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
						<select id="metodoDePago" class="form-control" name="metodoDePago" required>
							<option value="" disabled selected>Seleccione un método de pago</option>
							<option value="Tarjeta de crédito">Tarjeta de crédito</option>
							<option value="PayPal">PayPal</option>
							<option value="Transferencia bancaria">Transferencia bancaria</option>
							<option value="Efectivo">Efectivo</option>
							<!-- Metodos -->
						</select>
					</div>

					<br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
						<input id="direccion" type="text" class="form-control" name="direccion" placeholder="direccion"
							required autocomplete="off">
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
						<input id="numeroDeSeguimiento" type="text" class="form-control" name="numeroDeSeguimiento"
							placeholder="numeroDeSeguimiento" required autocomplete="off">
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
						<input id="fechaDeEntrega" type="date" class="form-control" name="fechaDeEntrega"
							placeholder="fechaDeEntrega" required autocomplete="off">
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
						<input id="idEmpleado" type="number" class="form-control" name="idEmpleado"
							placeholder="idEmpleado" required autocomplete="off">
					</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-success">Registrar</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
				</form>
			</div>
		</div>
	</div>
</div>


<div id="updatePedido" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Actualizar informacion del Pedido </h4>
			</div>
			<div class="modal-body">
				<form name="formUserUpdate" onsubmit="update(); return false">
					<input type="text" name="idPedido" id="idPedido" style="display: none;">

					<br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input id="idCliente" type="number" class="form-control" name="idCliente"
							placeholder="idCliente" required autocomplete="off">
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
						<input id="fecha" type="date" class="form-control" name="fecha" placeholder="fecha" required
							autocomplete="off">
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
						<input id="total" type="number" class="form-control" name="total" placeholder="total" required
							autocomplete="off">
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
						<select id="metodoDePago" class="form-control" name="metodoDePago" required>
							<option value="" disabled selected>Seleccione un método de pago</option>
							<option value="Tarjeta de crédito">Tarjeta de crédito</option>
							<option value="PayPal">PayPal</option>
							<option value="Transferencia bancaria">Transferencia bancaria</option>
							<option value="Efectivo">Efectivo</option>
							<!-- Metodos -->
						</select>
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
						<input id="direccion" type="text" class="form-control" name="direccion" placeholder="direccion"
							required autocomplete="off">
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
						<input id="numeroDeSeguimiento" type="text" class="form-control" name="numeroDeSeguimiento"
							placeholder="numeroDeSeguimiento" required autocomplete="off">
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
						<input id="fechaDeEntrega" type="date" class="form-control" name="fechaDeEntrega"
							placeholder="fechaDeEntrega" required autocomplete="off">
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
						<input id="idEmpleado" type="number" class="form-control" name="idEmpleado"
							placeholder="idEmpleado" required autocomplete="off">
					</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-success">Actualizar</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
				</form>
			</div>
		</div>
	</div>
</div>