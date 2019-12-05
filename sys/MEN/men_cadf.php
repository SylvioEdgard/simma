<?php include '../cofi/cabec.php'; ?>
<title>Módulo de Menu</title>
</head>
<body class="hold-transition sidebar-mini">

  <div class="container">
    <div class="col-sm-6">

            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Cadastro de Menu</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">

                  <div class="form-group row">
                    <label for="fnome:" class="col-sm-3 col-form-label">Nome</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="fnome" placeholder="Nome">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="fsup" class="col-sm-3 col-form-label">Link Superior</label>
                    <div class="col-sm-9">
                      <select name="fsup" class="form-control">
                        <option value="0">Nenhum</option>
                        <!-- Incluir registrados em banco de dados: Nome (Nível) -->
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="fniva" class="col-sm-3 col-form-label">Nível de Acesso</label>
                    <div class="col-sm-9">
                      <select name="fniva" class="form-control">
                        <option value="10">Desenvolvedor</option>
                        <option value="100">Gerente do Sistema</option>
                        <option value="200">Responsável pela Carga</option>
                        <option value="300">Gerente do Cliente</option>
                        <option value="500">Público</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="flink:" class="col-sm-3 col-form-label">Link</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="flink" placeholder="Link">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="fimg:" class="col-sm-3 col-form-label">Imagem</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="fimg" placeholder="Font Awesome">
                    </div>
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Sign in</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
                <!-- /.card-footer -->
              </form>

    </div>
  </div>
</body>
</html>