<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Clientes
            <small>Editar</small>
        </h1>

    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Title</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">

                <?php if ($this->session->flashdata("error")) : ?>
                    <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dissmiss="alert" aria-hidden="true">$times;</button>
                        <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>

                    </div>
                <?php endif; ?>


                <form method="POST" action="<?php echo base_url(); ?>Mantenimiento/Clientes/actualizarCliente" id="clientes" class="form-horizontal form-label-left">
                    <input type="hidden" name="id_clientes" value="<?php echo $cliente->id_clientes; ?>">

                    <div class="form-group">
                        <label for="nombre" class="control-label col-md-3 col-sm-3 col-xs-12">Nombre <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="nombres" id="nombres" required="required" class="form-group col-md-7 col-xs-12" placeholder="Escriba el nombre" value="<?php echo $cliente->nombres; ?>">

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="apellido" class="control-label col-md-3 col-sm-3 col-xs-12">Apellido <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="apellidos" id="apellidos" required="required" class="form-group col-md-7 col-xs-12" placeholder="Escriba el apellido" value="<?php echo $cliente->apellidos; ?>">

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="telefono" class="control-label col-md-3 col-sm-3 col-xs-12">Telefono <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="telefono" id="telefono" required="required" class="form-group col-md-7 col-xs-12" placeholder="Escriba el telefono" value="<?php echo $cliente->telefono; ?>">

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="direccion" class="control-label col-md-3 col-sm-3 col-xs-12">Direccion <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="direccion" id="direccion" required="required" class="form-group col-md-7 col-xs-12" placeholder="Escriba la direccion" value="<?php echo $cliente->direccion; ?>">

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nit" class="control-label col-md-3 col-sm-3 col-xs-12">Nit <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="nit" id="nit" required="required" class="form-group col-md-7 col-xs-12" placeholder="Escriba el nit" value="<?php echo $cliente->nit; ?>">

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="empresa" class="control-label col-md-3 col-sm-3 col-xs-12">Empresa <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="empresa" id="empresa" required="required" class="form-group col-md-7 col-xs-12" placeholder="Escriba el nombre de la empresa" value="<?php echo $cliente->empresa; ?>">

                        </div>
                    </div>



            </div>

            <div class="form-group">

                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <button class="btn btn-primary btn-flat" type="reset">Volver</button>
                    <button type="submit" id="editar" class="btn btn-success">Editar</button>

                </div>
            </div>

            </form>


        </div>
</div>
<!-- /.box -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->