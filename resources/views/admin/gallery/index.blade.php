 @extends('admin.adminmain')
 @section('title',"image")
 @section('stylesheets')

 	  <link href="{{asset('admin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

 @endsection

 @section('content')

      <div id="content">

        <!-- Topbar -->

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">image</h1>
          <p class="mb-4"> 
          	<!-- <a target="_blank" href="https://datatables.net">official DataTables documentation</a>. -->
          </p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Listing of Gallery Images</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Image</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Status</th>
                      <th>Added On</th>
                      <!-- <th>Salary</th> -->
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Image</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Status</th>
                      <th>Added On</th>
                      <!-- <th>Salary</th> -->
                    </tr>
                  </tfoot>
                  <tbody>
                  	@foreach($gallery as $image)
                  	 <tr>
                      <td><img src="{{asset('/images/gallery/'.$image->image)}}" alt="Park" style="width:20%">
                      <!-- <i class="fas fa-pen"></i> -->
                      <a href="{{route('gallery.edit',$image->id)}}"  class="btn"><i class="fas fa-pen"></i></a>
                      <a href="{{route('gallery.show',$image->id)}}" data-toggle="tooltip" title="banner Details" class="btn">
                      <i class="fas fa-eye"></i>
                      </a>
                      <!-- &nbsp &nbsp &nbsp<i class="fas fa-trash"></i> -->
                      <button class="formConfirm" data-form="#frmDelete-{{$image->id}}" data-title="Delete banner" data-message="Are you sure, you want to delete this Image?" >
                          <i title="Delete" style="margin-right: 0;" class="fas fa-trash" aria-hidden="true"></i>

                      </button>
                      {!! Form::open(array(
                              'url' => route('admin.gallery.delete', array($image->id)),
                              'method' => 'get',
                              'style' => 'display:none',
                              'id' => 'frmDelete-'.$image->id
                          ))
                      !!}
                      {!! Form::submit('Submit') !!}
                      {!! Form::close() !!}





                    </td>
                      <td>{{$image->title}}</td>
                      <td>{{strlen($image->description)>50?substr($image->description,0,50).'...':$image->description}}</td>
                      <td>{{$image->status=='A'?'Active':'Inactive'}}</td>
                      <td>{{$image->created_at}}</td>
                    </tr>
                  	@endforeach
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>

                      
<div class="modal fade" id="formConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="frm_title">Delete</h4>
      </div>
      <div class="modal-body" id="frm_body">Are you sure, you want to delete this Topic ?</div>
      <div class="modal-footer">
        <button style='margin-left:10px;' type="button" class="btn btn-danger col-sm-2 pull-right" id="frm_submit">Confirm</button>
        <button type="button" class="btn btn-primary col-sm-2 pull-right" data-dismiss="modal" id="frm_cancel">Cancel</button>
      </div>
    </div>
  </div>
</div>              
                     



 @endsection

 @section('scripts')

   <!-- Page level plugins -->
  <script src="{{asset('admin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('admin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('admin/js/demo/datatables-demo.js')}}"></script>

<script type="text/javascript">
  $(document).ready(function(){

     
  $('.formConfirm').on('click', function(e) {
    //alert();
        e.preventDefault();
        var el = $(this);
        //alert(el);
        var title = el.attr('data-title');
        var msg = el.attr('data-message');
        var dataForm = el.attr('data-form');
        
        $('#formConfirm')
        .find('#frm_body').html(msg)
        .end().find('#frm_title').html(title)
        .end().modal('show');
        
        $('#formConfirm').find('#frm_submit').attr('data-form', dataForm);
  });
  $('#formConfirm').on('click', '#frm_submit', function(e) {
        var id = $(this).attr('data-form');
        //alert(id);
        $(id).submit();
  });
});

</script>
 @endsection
 