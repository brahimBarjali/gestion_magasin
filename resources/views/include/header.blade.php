    <!-- Content Header (Page header) -->
    <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-left">
                    <li class="breadcrumb-item{{ Request::segment(1) == '' ? ' active' : '' }}">{{ Request::segment(1) != '' ? Request::segment(1) : __('text.accueil.lbl') }}</li>
                    <li class="breadcrumb-item active">{{ Request::segment(2) }}</li>
                  </ol>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>
          <!-- /.content-header -->