<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"></h1>
      </div>

			<div class="col-md-12">
					<?php if(isset($email)) : ?>
						<form action="<?= base_url() ?>cadastros/update/<?=$email['id'] ?>" method="post">
					<?php else : ?>
						<form action="<?= base_url() ?>cadastros/store" method="post">
					<?php endif; ?> 

					<div class="col-md-6">
						<div class="form-group">
							<label for="nome">Nome</label>
							<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required value="<?= isset($email) ? $email["nome"] : "" ?>">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="email">E-mail</label>
							<input type="text" class="form-control" name="email" id="email" placeholder="Email"  required value="<?= isset($email) ? $email["email"] : "" ?>">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="senha">Senha</label>
							<input type="text" class="form-control" name="senha" id="senha" placeholder="Senha"  required value="<?= isset($email) ? $email["senha"] : "" ?>">
						</div>
					</div>

					<div class="col-md-6">
							<button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i> Save</button>
							<a href="<?= base_url()?>cadastros" class="btn btn-danger btn-xs"><i class="fas fa-times"></i> Cancel</a>
						</div>
					</div>
				</form>
			</div>

    </main>
  </div>
</div>
