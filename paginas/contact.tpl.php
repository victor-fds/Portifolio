<script>
$(function () {
  $('[data-toggle="disabled"]').popover()
});
</script>

<div class="container text-center">
    <div class="row">
        <div class="col-md-12 bg-dark border rounded my-4">
            <h3 class="text-light mt-2">Contato</h3>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-md-6">
            <h3>Deixe sua Mensagem</h3>
            <form class="text-left mt-2 border rounded p-2" action="">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input id="nome" class="form-control" type="text" placeholder="Digite seu nome" />
                </div>
                <div class="form-group">
                    <label for="nome">E-mail</label>
                    <input id="nome" class="form-control" type="email" placeholder="Digite seu e-mail" />
                </div>
                <div class="form-group">
                    <label for="mensagem">Sua Mensagem</label>
                    <textarea class="form-control" id="mensagem" rows="3"></textarea>
                </div>
                <a tabindex="0" class="btn btn-primary" role="button" data-toggle="disabled" data-trigger="focus" title="Indisponível" data-content="Esta função ainda não está habilitada em nosso servidor.">Enviar</a>
            </form>
        </div>        
        <div class="mt-4 mt-md-0 col-md-6">
            <h3>Redes Sociais</h3>
            <ul class="nav flex-column border rounded">
              <li class="nav-item">
                <a class="nav-link mb-1 text-primary" href="#"><i class="fab fa-facebook-square"></i> Victor Fernandes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mb-1 text-warning" href="#"><i class="fab fa-instagram"></i> victorfds_</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-info" href="#"><i class="fab fa-github-square"></i> victor-fds</a>
              </li>
            </ul>
        </div>
    </div>
</div>