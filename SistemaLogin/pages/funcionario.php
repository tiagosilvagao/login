<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Sistema de Login </title>

        <!-- Bootstrap Core CSS -->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

        <!-- DataTables CSS -->
        <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
<?php
require_once('../functions/Funcionario.php');
?>
    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">

                    <a class="navbar-brand" href="home.php">Sistema de Login</a>
                </div>


                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <h4>Painel de Controle</h4>

                            <li>
                                <a href="funcionario.php">
                                    <i class="fa  fa-user fa-fw"></i> Funcionario</a>
                            </li>
                            <li>
                                <a href="../../index.php"><i class="fa fa-power-off fa-fw"></i>Sair</a>
                        </li>
                        </ul>
                        <!-- /.sidebar-collapse -->
                    </div>
                    <!-- /.navbar-static-side -->
            </nav>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">Lista de Funcionários</h2>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div style="padding: 5px 0px 5px; text-align: right;">
                            <button id="bntNovoUsuario" type="button" class="btn btn-info"  data-toggle="modal" data-target="#myModalCadastrar"><i class="icon-plus-sign"></i> Novo Funcionário</button>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Funcionários
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                
                                 <?php
                                    try {
                                    $dados = listarAll();
                                    $d = new ArrayIterator($dados);
                                ?>
                                
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Código</th>
                                            <th>Nome</th>
                                            <th>Login</th>
                                            <th>Senha</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php while ($d->valid()) { ?>

                                        <tr>
                                            <td><?php echo $d->current()->idfuncionario ?></td>
                                            <td><?php echo $d->current()->nome ?></td>
                                            <td><?php echo $d->current()->login ?></td>
                                            <td><?php echo $d->current()->senha ?></td>
                                            <td>
                                                <button type="button" data-toggle="modal" data-target="#myModalEditar"
                                                        data-whateverid="<?php echo $d->current()->idfuncionario ?>"
                                                        data-whatevernome="<?php echo $d->current()->nome ?>"
                                                        data-whateverlogin="<?php echo $d->current()->login ?>"
                                                        data-whateversenha="<?php echo $d->current()->senha   ?>"
                                                        class="btn btn-sm btn-primary bs-tooltip">Editar</button>

                                                <button type="button" data-toggle="modal" data-target="#myModalDeletar"
                                                        data-whateverid="<?php echo $d->current()->idfuncionario ?>"
                                                        data-whatevernome="<?php echo $d->current()->nome ?>"  
                                                        class="btn btn-sm btn-danger bs-tooltip">Excluir</button>
                                            </td>
                                        </tr>
                                        
                                <?php
                                            $d->next();
                                      }
                                  } catch (Exception $e) {
                                      echo $e->getMessage();
                                  }
                                ?>
                                        </tbody>
                                </table>
                                <!-- /.table-responsive -->

                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        
        <!-- Modal Cadastrar-->
<div class="modal fade" id="myModalCadastrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Novo Funcionário</h4>
            </div>
            <div class="modal-body">
                <form action="acaoCadastrarFuncionario.php" method="get">                                                                     
                    <div class="form-group">                       
                        <label for="recipient-name" class="control-label">Nome:</label>
                        <input type="text" class="form-control" required="" name="txtNome">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Login:</label>
                        <input type="text" name="txtLogin" class="form-control" required >
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Senha:</label>
                        <input type="password" name="txtSenha" class="form-control" required>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-info">Salvar</button>
                    </div>       
                </form>
            </div>

        </div>
    </div>
</div>	
        
<!-- Modal Editar-->
<div class="modal fade" id="myModalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">New message</h4>
            </div>
            <div class="modal-body">

                <form action="acaoEditarFuncionario.php" method="get">                                                                     
                    <div class="form-group">                       
                        <label for="recipient-name" class="control-label">Código:</label>
                        <input type="text" class="form-control" id="recipient-codigo" name="txtCodigo" readonly>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Nome:</label>
                        <input type="text" name="txtNome" class="form-control" required id="recipient-nome" >
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Login:</label>
                        <input type="text" name="txtLogin" class="form-control" required id="recipient-login" >
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Senha:</label>
                        <input type="text" name="txtSenha" class="form-control" required id="recipient-senha" >
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-info">Editar</button>
                    </div>       
                </form>

            </div>

        </div>
    </div>
</div>

<!-- Modal Deletar-->
<div class="modal fade" id="myModalDeletar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">New message</h4>
            </div>
            <div class="modal-body">
                <form action="acaoDeletarFuncionario.php" method="get">                                                                     
                    <div class="form-group">                       
                        <label for="recipient-name" class="control-label">Código:</label>
                        <input type="text" class="form-control" id="recipient-codigo" name="txtCodigo" readonly>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Nome:</label>
                        <input type="text" name="txtNome" class="form-control" required id="recipient-nome" readonly>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                        <button type="submit" class="btn btn-info">Sim</button>
                    </div>       
                </form>
            </div>

        </div>
    </div>
</div>	        
        
        
        <!-- jQuery -->
        <script src="../vendor/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../vendor/metisMenu/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
        <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../dist/js/sb-admin-2.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
                        $(document).ready(function () {
                            $('#dataTables-example').DataTable({
                                responsive: true
                            });
                        });
        </script>
<script type="text/javascript">
    $('#myModalEditar').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var recipientid = button.data('whateverid')
        var recipientnome = button.data('whatevernome')
        var recipientlogin = button.data('whateverlogin')
        var recipientsenha = button.data('whateversenha')

        var modal = $(this)
        modal.find('.modal-title').text('Editar Usuário ' /*+ recipientnome*/)
        modal.find('#recipient-codigo').val(recipientid)
        modal.find('#recipient-nome').val(recipientnome)
        modal.find('#recipient-login').val(recipientlogin)
        modal.find('#recipient-senha').val(recipientsenha)

    })
</script>

<script>
    $('#myModalDeletar').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var recipientid = button.data('whateverid')
        var recipientnome = button.data('whatevernome')

        var modal = $(this)
        modal.find('.modal-title').text('Tem certeza que deseja excluir este usuário?')
        modal.find('#recipient-codigo').val(recipientid)
        modal.find('#recipient-nome').val(recipientnome)
    })
</script>
    </body>

</html>