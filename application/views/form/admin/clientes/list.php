 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <h1>
             Clientes
             <small>Listado</small>
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


                 <form method="POST" action="<?php echo base_url(); ?>Mantenimiento/Clientes/guardarClientes" id="clientes" class="form-horizontal form-label-left">
                     <div class="form-group">
                         <label for="nombre" class="control-label col-md-3 col-sm-3 col-xs-12">Nombre <span class="required">*</span></label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                             <input type="text" name="nombres" id="nombres" required="required" class="form-group col-md-7 col-xs-12" placeholder="Escriba el nombre">

                         </div>
                     </div>
                     <div class="form-group">
                         <label for="apellido" class="control-label col-md-3 col-sm-3 col-xs-12">Apellido <span class="required">*</span></label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                             <input type="text" name="apellidos" id="apellidos" required="required" class="form-group col-md-7 col-xs-12" placeholder="Escriba el apellido">

                         </div>
                     </div>
                     <div class="form-group">
                         <label for="telefono" class="control-label col-md-3 col-sm-3 col-xs-12">Telefono <span class="required">*</span></label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                             <input type="text" name="telefono" id="telefono" required="required" class="form-group col-md-7 col-xs-12" placeholder="Escriba el telefono">

                         </div>
                     </div>
                     <div class="form-group">
                         <label for="direccion" class="control-label col-md-3 col-sm-3 col-xs-12">Direccion <span class="required">*</span></label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                             <input type="text" name="direccion" id="direccion" required="required" class="form-group col-md-7 col-xs-12" placeholder="Escriba la direccion">

                         </div>
                     </div>
                     <div class="form-group">
                         <label for="nit" class="control-label col-md-3 col-sm-3 col-xs-12">Nit <span class="required">*</span></label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                             <input type="text" name="nit" id="nit" required="required" class="form-group col-md-7 col-xs-12" placeholder="Escriba el nit">

                         </div>
                     </div>
                     <div class="form-group">
                         <label for="empresa" class="control-label col-md-3 col-sm-3 col-xs-12">Empresa <span class="required">*</span></label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                             <input type="text" name="empresa" id="empresa" required="required" class="form-group col-md-7 col-xs-12" placeholder="Escriba el nombre de la empresa">

                         </div>
                     </div>



             </div>

             <div class="form-group">

                 <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                     <button class="btn btn-primary btn-flat" type="reset">Borrar</button>
                     <button type="submit" id="guardar" class="btn btn-success">Guardar</button>

                 </div>
             </div>

             </form>

             <hr>
             <div class="row">
                 <div class="col-md-12">
                     <table id="example1" class="table table-bordered btn-hover">
                         <thead>
                             <tr>
                                 <th>#</th>
                                 <th>Nombres</th>
                                 <th>Apellidos</th>
                                 <th>Telefonos</th>
                                 <th>Direccion</th>
                                 <th>Nit</th>
                                 <th>Empresa</th>
                                 <th>Opciones</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php if (!empty($clientes)) : ?>
                                 <?php foreach ($clientes as $cliente) : ?>

                                     <tr>
                                         <td><?php echo $cliente->id_clientes; ?></td>
                                         <td><?php echo $cliente->nombres; ?></td>
                                         <td><?php echo $cliente->apellidos; ?></td>
                                         <td><?php echo $cliente->telefono; ?></td>
                                         <td><?php echo $cliente->direccion; ?></td>
                                         <td><?php echo $cliente->nit; ?></td>
                                         <td><?php echo $cliente->empresa; ?></td>
                                         
                                             
                                         </div>
                                         <td>
                                             <div class="btn-group">
                                                 <button type="button" class="btn btn-info btn-vista-cliente" data-toggle="modal" data-target="modal-default" value="<?php echo $cliente->id_clientes ?>"><span class="fa fa-search"></span></button>
                                                 <a href="<?php echo base_url() ?>Mantenimiento/Clientes/editar/<?php echo $cliente->id_clientes; ?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                                 <a href="<?php echo base_url(); ?>Mantenimiento/Clientes/borrar/<?php echo $cliente->id_clientes; ?>" class="btn btn-danger btn-borrar"><span class="fa fa-remove"></span></a>
                                             </div>
                                         </td>
                                     </tr>
                                 <?php endforeach; ?>
                             <?php endif; ?>

                         </tbody>
                     </table>
                 </div>
             </div>
             <!-- /.box -->

     </section>
     <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->
 <div class="modal fade" id="modal-default">

     <div class="modal-dialog">

         <div class="modal-content">

             <div class="modal-header">

                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                     <span aria-hidden="true">&times;</span></button>

                 <h4 class="modal-title">Informacion del cliente</h4>

             </div>

             <div class="modal-body">



             </div>

             <div class="modal-footer">

                 <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>



             </div>

         </div>

         <!-- /.modal-content -->

     </div>

     <!-- /.modal-dialog -->

 </div>

 <!-- /.modal -->