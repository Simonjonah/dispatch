@include('dashboard.admin.header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('dashboard.admin.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Title</th>
                      <th>Slug </th>
                      <th>Images</th>
                      <th>Messsages</th>
                      <th>View</th>
                      <th>Status</th>
                      <th>Edit</th>
                      <th>Approved</th>
                      <th>Suspend</th>
                      <th>Delete</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if (Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                    @endif
  
                    @if (Session::get('fail'))
                    <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                    </div>
                @endif
                    @foreach ($view_events as $view_event)
                    <tr>
                        <td>{{ $view_event->title }}</td>
                        <td>{{ $view_event->slug }}</td>
                       
                        <td><img style="width: 100%; height: 100px;" class="profile-user-img img-fluid"
                          src="{{ URL::asset("/public/../$view_event->images")}}"
                          alt="User profile picture"></td>
                          {{-- <td>{!!  {{ Illuminate\Support\Str::limit($article->title, 20) }}!!}</td> --}}
                          <td>{{ Illuminate\Support\Str::limit($view_event->message, 20) }}</td>

                        
                          <td><a href="{{ url('admin/eventview/'.$view_event->ref_no) }}"
                            class='btn btn-default'>
                             <i class="far fa-eye"></i>
                         </a></td>
                        
                        
                        <td>@if ($view_event->status == null)
                          <span class="badge badge-secondary"> In progress</span>
                         @elseif($view_event->status == 'suspend')
                         <span class="badge badge-warning"> Suspended</span>
                         @else
                         <span class="badge badge-success">Approved</span>
                         @endif</td>

                         <td><a href="{{ url('admin/eventedit/'.$view_event->ref_no) }}"
                          class='btn btn-info'>
                           <i class="far fa-edit"></i>
                       </a></td>
                       
                        <th> <a href="{{ url('admin/eventeapproved/'.$view_event->ref_no) }}" class="btn btn-sm btn-primary">
                          <i class="fas fa-user"></i> 
                        </a></th>

                        <th><a href="{{ url('admin/eventesuspend/'.$view_event->ref_no) }}" class="btn btn-sm bg-teal">
                          <i class="fas fa-comments"></i>
                        </a></th>
                        
                      
                         
                       <td><a href="{{ url('admin/eventedelete/'.$view_event->ref_no) }}"
                        class='btn btn-danger'>
                         <i class="far fa-trash-alt"></i>
                     </a></td>
                     <td>{{ $view_event->created_at->format('D d, M Y, H:i')}}</td>
                     {{-- <td><a href="{{ url('admin/downloadcourse/'.$view_event->id) }}" class="btn btn-success"><i class="fas fa-print"></i></a></td> --}}

                      </tr>
                    @endforeach
                 
                 
                   
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>Title</th>
                        <th>Slug </th>
                        <th>Images</th>
                        <th>Messsages</th>
                        <th>View</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Approved</th>
                        <th>Suspend</th>
                        <th>Delete</th>
                        <th>Date</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 <!-- /.content-wrapper -->
 <footer class="main-footer">
 <strong>Copyright &copy; 2024 <a href="">GOGIS</a></strong>

  <!-- <strong>Copyright &copy; 2023 <a href="https://brixtonnschools.com.ng">BRIXTONN SCHOOLS</a></strong> -->
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b>1.1.1
  </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>

<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

<script src="{{ asset('assets/dist/js/adminlte.min.js?v=3.2.0') }}"></script>

<script src="{{ asset('assets/dist/js/demo.js') }}"></script>
{{-- @include('dashboard.admin.header') --}}
<script>
$(function () {
  $("#example1").DataTable({
    "responsive": true, "lengthChange": false, "autoWidth": false,
    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
  }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  $('#example2').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": false,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
  });
});
</script>
</body>
</html>
