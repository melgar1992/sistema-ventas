<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <h1>
             Ventas
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


                 <form method="POST" action="<?php echo base_url(); ?>Movimientos/Ventas/guardarVentas" id="clientes" class="form-horizontal form-label-left">
                     <div class="form-group">
                         <label for="nombre" class="control-label col-md-3 col-sm-3 col-xs-12">Nombre <span class="required">*</span></label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                             <input type="text" name="nombres" id="nombres" required="required" class="form-group col-md-7 col-xs-12" placeholder="Escriba el nombre">

                         </div>
                     </div>
                     <div class="form-group">
                         <label for="tipocliente" class="control-label col-md-3 col-sm-3 col-xs-12">Tipo Clientes <span class="required">*</span></label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                             <select name="tipocliente" id="tipocliente" required="required" class="form-group col-md-7 col-xs-12" >
                            <?php foreach ($tipoclientes as $tipocliente):?>
                                <option value="<?php echo $tipocliente->id_tipo_cliente;?>"><?php echo $tipocliente->nombre; ?></option>
                            <?php endforeach; ?>
                             </select>
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="tipodocumento" class="control-label col-md-3 col-sm-3 col-xs-12">Tipo documento <span class="required">*</span></label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                             <select name="tipodocumento" id="tipodocumento" required="required" class="form-group col-md-7 col-xs-12" >
                            <?php foreach ($tipodocumentos as $tipodocumento):?>
                                <option value="<?php echo $tipodocumento->id_tipo_documento;?>"><?php echo $tipodocumento->nombre; ?></option>
                            <?php endforeach; ?>
                             </select>
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="numero_documento" class="control-label col-md-3 col-sm-3 col-xs-12">Numero del Documento <span class="required">*</span></label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                             <input type="text" name="numero_documento" id="numero_documento" required="required" class="form-group col-md-7 col-xs-12" placeholder="Escriba el numero del documento">
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
                                 <th>Tipo Clientes</th>
                                 <th>Tipo documento</th>
                                 <th>Numero documento</th>
                                 <th>Telefono</th>
                                 <th>Direccion</th>
                                 <th>Opciones</th>
                             </tr>
                         </thead>
                         <tbody>
                             

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