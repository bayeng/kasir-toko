@extends('layouts.main')

@section('title')
Kategori
@endsection

@section('breadcrumb')
@parent
<li class="active">Kategori</li>
@endsection

@section('container')
<!-- Main content -->
<section class="content">
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <button class="btn btn-primary btn-xs btn-flat"><i class="fa fa-plus-circle">Tambah</i></button>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                  <table class="table table-stiped table-bordered">
                        <thead>
                              <th width="5%">No</th>
                              <th>Kategori</th>
                              <th width="15%"><i class="fa fa-cog"></i></th>
                        </thead>
                  </table>

                </div>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row (main row) -->

</section>
<!-- /.content -->
@endsection