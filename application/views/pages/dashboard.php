

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Dados Cadastrados</h1>
		<div class="btn-toolbar mb-2 mb-md-0">
		</div>
	</div>

	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h2 class="h2">E-mails Cadastrados</h2>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
                    <th>ID</th>
                    <th>Nome</th>
					<th>E-mail</th>
					<th>Senha</th>
				</tr>
			</thead>
			<tbody>
                <?php foreach($email as $email) : ?><!-- Tabela da página Dashboard-->
                    <tr>
                        <td><?= $email['id']?></td> <!--Coloquei o neme da variável de email, mas atende a todos os campos da tabela-->
                        <td><?= $email['nome']?></td>
                        <td><?= $email['email']?></td>
                        <td><?= $email['senha']?></td>
                    </tr>
                <?php endforeach;?>    
			</tbody>
		</table>
	</div>

</main>
	

