<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Cadastro</h1>
		<div class="btn-group mr-2">
			<a href="<?= base_url() ?>cadastros/new" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i>Cadastrar</a>
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nome</th>
					<th>E-mail</th>
					<th>Senha</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
                <?php foreach($email as $email) : ?>
                        <tr>
                            <td><?= $email['id']?></td>
                            <td><?= $email['nome']?></td>
                            <td><?= $email['email']?></td>
                            <td><?= $email['senha']?></td>
							<td>
								<a href="<?= base_url()?>cadastros/edit/<?= $email['id'] ?>" class="btn-sm btn-warning">
								<i class="fas fa-pencil-alt"></i></a>
								<a href="javascript:goDelete(<?= $email['id'] ?>)" class="btn-sm btn-danger">
								<i class="fas fa-trash-alt"></i></a>
							</td>
                        </tr>
                    <?php endforeach;?>
			</tbody>
		</table>
	</div>
</main>

<script>
	function goDelete(id) {
		
		var myUrl = 'cadastros/delete/'+id
		if(confirm("Deseja apagar este registro?")) {
			window.location.href = myUrl;
		} 
		else {
			alert("Registro não alterado");
			return false;
		}
	}
</script>