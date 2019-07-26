 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <h1>
             Categorias
             <small>Listado</small>
         </h1>
         <ol class="breadcrumb">
             <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
             <li><a href="#">Examples</a></li>
             <li class="active">Blank page</li>
         </ol>
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
                 <div class="row">
                     <div class="col-md-12">
                         <a href="#" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span>Agregar Categoria</a>
                     </div>
                 </div>
                 <hr>
                 <div class="row">
                     <div class="col-md-12">
                         <table id="example1"class="table table-bordered btn-hover">
                             <thead>
                                 <tr>
                                     <th>#</th>
                                     <th>Nombres</th>
                                     <th>Descripcion</th>
                                     <th>Opciones</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php if(!empty($categorias)): ?>
                                 <?php foreach($categorias as $categoria):?>
                                
                                 <tr>
                                     <td><?php echo $categoria->id_categorias;?></td>
                                     <td><?php echo $categoria->nombre;?></td>
                                     <td><?php echo $categoria->descripcion;?></td>
                                     <td>
                                         <div class="btn-group">
                                             <a href="#" class="btn btn-info"><span class="fa fa-eye"></span></a>
                                             <a href="#" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                             <a href="#" class="btn btn-danger"><span class="fa fa-remove"></span></a>
                                         </div>
                                     </td>
                                 </tr>
                                <?php endforeach;?>
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