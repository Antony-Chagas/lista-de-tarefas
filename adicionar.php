<h1> Novo usuario </h1>
<form method="post" action="salvar.php">
    <input type="hidden" name="acao" value="cadastrar">

    <div class="mb-3">
        <input type="text" name="nome" class="form-control" placeholder="Nome:"/> <br>
        <input type="text" name="email" placeholder="E-mail:"/>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn-primary">Enviar Agora!</button>
    </div>


</form>
<?php
