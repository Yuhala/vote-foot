 <!DOCTYPE html>
 <!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
 <html lang="en">

 @section('htmlheader')
 @include('adminlte::layouts.partials.htmlheader')
 @show


 <head>
     <style>
         img {
             float: left;
             width: 200px;
             height: 200px;
             object-fit: cover;
             ;
         }

         .center {
             display: block;
             margin-left: auto;
             margin-right: auto;
             width: 50%;
         }

         #wc_img img {
             width: 400;
         }
     </style>
 </head>

 <body class="skin-blue sidebar-collapse ">




     <div id="app" v-cloak>
         <div class="wrapper">

             @include('adminlte::layouts.partials.mainheader')

             @include('adminlte::layouts.partials.sidebar')

             <!-- Content Wrapper. Contains page content -->
             <div class="content-wrapper">


                 <!-- Main content -->
                 <section class="content">
                     <!-- Your Page Content Here -->

                     @yield('page-title')
                 </section><!-- /.content -->
             </div><!-- /.content-wrapper -->




             <!-- Content Wrapper. Contains page content -->
             <div class="content-wrapper">


                 <!-- Main content -->
                 <section class="content">

                     <!-- Default box -->
                     <div class="card">

                         <div class="card-body p-0">
                             <table class="table table-striped projects">
                                 <thead>
                                     <tr>
                                         <th style="width: 1%">
                                             #
                                         </th>
                                         <th style="width: 20%">
                                             Joeur
                                         </th>
                                         <th style="width: 30%">
                                             Avatar
                                         </th>
                                         <th>
                                             Pourcentage de Votes
                                         </th>
                                         <th style="width: 8%" class="text-center">
                                             Prediction
                                         </th>
                                         <th style="width: 20%">
                                         </th>
                                     </tr>
                                 </thead>

                                 @yield('voting-results')
                             </table>
                         </div>
                         <!-- /.card-body -->
                     </div>
                     <!-- /.card -->

                 </section>
                 <!-- /.content -->
             </div>
             <!-- /.content-wrapper -->

         </div>
     </div>







     @section('scripts')
     @include('adminlte::layouts.partials.scripts')
     @show

 </body>

 </html>