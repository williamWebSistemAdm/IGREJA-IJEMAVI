
		<div class="container">
		</h2>Editar Dia de Culto</h2>

          <form method="post" action="proc_cad_diaculto.php">
						<h4>Endereço</h4>
             <div class="row">
              <div >
                <label>Domingo:</label><br>
                	<input type="hidden" value="Domingo" name="dia_culto_dom">
								</div>
								<div class="col-md-4">
                <label>local:</label>
                	<input class="form-control" type="text" name="local_dom" placeholder="Ex: Templo Sede" required>
								</div>
								<div class="col-md-5">
                <label>Tema do Culto:</label>
                	<input class="form-control" type="text" name="tema_dom" placeholder="Ex: Culto da Faília" required>
								</div>
								<div class="col-md-2">
                <label>Horário:</label>
                	<input class="form-control" type="time" name="hora_dom" placeholder="Ex: 19:30h" required>
              	</div>
             	</div><br>

            <div class="row">
             <div class="col-md-3">
                <label>Segunda-Feira:</label>
                <input class="form-control" type="hidden" value="Segunda" name="dia_culto_seg">
                <label>local:</label>
                <input class="form-control" type="text" name="local_seg" placeholder="Ex: Templo Sede" required>
                <label>Tema do Culto:</label>
                <input class="form-control" type="text" name="tema_seg" placeholder="Ex: Culto Evangelístico" required>
                <label>Horário:</label>
                <input class="form-control" type="date" name="hora_seg" placeholder="Ex: 19:30h" required>
              </div>
             </div>

            <div class="row">
              <div class="col-md-3">
                <label>Terça-Feira</label>
                <input class="form-control" type="hidden" value="Terça" name="terca">
                <label>local:</label>
                <input class="form-control" type="text" name="local_ter" placeholder="Ex: Templo Sede" required>
                <label>Tema do Culto:</label>
                <input class="form-control" type="text" name="tema_ter" placeholder="Ex: Culto de Ação Social" required>
                <label>Horário:</label>
                <input class="form-control" type="date" name="hora_ter" placeholder="Ex: 19:30h" required>
              </div>
             </div>

            <div class="row">
              <div class="col-md-3">
                <label>Quarta-Feira:</label>
                <input class="form-control" type="hidden" value="Quarta" name="quarta">
                <label>local:</label>
                <input class="form-control" type="text" name="local_qua" placeholder="Ex: Templo Sede" required>
                <label>Tema do Culto:</label>
                <input class="form-control" type="text" name="tema_qua" placeholder="Ex: Culto dos obreiros" required>
                <label>Horário:</label>
                <input class="form-control" type="date" name="hora_qua" placeholder="Ex: 19:30h" required>
              </div>
             </div>


            <div class="row">
              <div class="col-md-3">
                <label>Quinta-Feira:</label>
                <input class="form-control" type="hidden" value="Quinta" name="quinta">
                <label>local:</label>
                <input class="form-control" type="text" name="local_qui" placeholder="Ex: Templo Sede" required>
                <label>Tema do Culto:</label>
                <input class="form-control" type="text" name="tema_qui" placeholder="Ex: Culto da Vitória" required>
                <label>Horário:</label>
                <input class="form-control" type="date" name="hora_qui" placeholder="Ex: 19:30h" required>
              </div>
             </div>


            <div class="row">
              <div class="col-md-3">
                <label>Sexta-Feira:</label>
                <input class="form-control" type="hidden" value="Sexta" name="sexta">
                <label>local:</label>
                <input class="form-control" type="text" name="local_sex" placeholder="Ex: Templo Sede" required>
                <label>Tema do Culto:</label>
                <input class="form-control" type="text" name="tema_sex" placeholder="Ex: Culto das Rebecas" required>
                <label>Horário:</label>
                <input class="form-control" type="date" name="hora_sex" placeholder="Ex: 19:30h" required>
              </div>
             </div>


            <div class="row">
              <div class="col-md-3">
                <label>Sabado:</label>
                <input class="form-control" type="hidden" value="Sabado" name="sabado">
                <label>local:</label>
                <input class="form-control" type="text" name="local_sab" placeholder="Ex: Templo Sede" required>
                <label>Tema do Culto:</label>
                <input class="form-control" type="text" name="tema_sab" placeholder="Ex: Culto dos Jovens" required>
                <label>Hor�rio:</label>
                <input class="form-control" type="date" name="hora_sab" placeholder="Ex: 19:30h" required>
              </div>
             </div>


            <div class="row">
            <button class="btn btn-default" type="submit">Cadastrar</button>
          </div>
        </form>
      </div>
