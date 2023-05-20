@extends("layouts.app")

@section("wrapper")

<div class="page-wrapper">
    <div class="page-content">
      
        @if (session('msg'))
        <div class="alert alert-primary border-0 bg-primary alert-dismissible fade show">
            <div class="text-white">{{ session('msg') }}</div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif


        <div class="row">
            <div class="col-md-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Product List</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-6">
                <a href="{{url('product-add')}}">
                <button type="button" class="btn btn-primary" style="float: right;margin-bottom: 16px;"  id="add_product">Add Products</button>
                </a>
            </div>


        </div>



        <div class="row row-cols-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-striped table-bordered tbl">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Product Image</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $key=>$item)
                                <tr>
                                    <td>{{ $key++ }}</td>
                                    <td><img src="{{asset('images/'.$item->image)}}" class="user-img" alt="user avatar"></td>
                                    <td>{{$item->product_title}}</td>
                                    <td>{{$item->price}}</td>

                                    <td>
                                        <!-- <a href="#" class="bg-warning text-white pd_db_r1 show_confirm" onclick="edit_banner()" data-toggle="tooltip" title='update'><i class="bx bx-edit"></i></a> -->
                                        <a href="#" class="bg-warning text-white pd_db_r1 show_confirm_delete" id='show_confirm_delete' onclick="show_confirm_delete({{$item->id}})"data-toggle="tooltip" title='update'><i class="bx bx-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
      
        <div class="modal fade" id="edit_banner" tabindex="-1" aria-labelledby="exampleModalgridLabel">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalgridLabel">Grid Modals</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/banner-update')}}" method="post">
                            @csrf
                            <div class="row g-3">
                                <input type="hidden" id="banner-id" name="banner_id" value="">

                                <div class="col-lg-12">

                                    <div class="card-body">

                                        <div class="avatar-xl mx-auto">
                                            <input type="file" class="filepond filepond-input-circle" name="image" accept="image/png, image/jpeg, image/gif" />
                                        </div>

                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-12">
                                    <div class="hstack gap-2 justify-content-end">
                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section("script")

<script>
    function edit_banner(id) {
        $('#banner-id').val(id);
        $('#edit_banner').modal('show');

    }

    function add_product(id) {
        $('#picture').empty();
        $('#banner-id').val(id);
        $('#add_product_modal').modal('show');

    }
    function show_confirm_delete(id) {
    
        alert("Want To Delete Product.");
        $.ajax({
                    url: "{{ url('/product-delete') }}",
                    type: "POST",
                    data: {
                       
                        id: id,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        console.log(result);
                        if(result == 'success'){
                            location.reload();
                        }else{
                            alert('Somthing Wrong');
                        }

                    }
                });
    }

   
</script>
<!-- Here this script use for sweet alert  -->
<!-- Start -->
<script type="text/javascript">
    $("#alert").fadeTo(2000, 500).slideUp(500, function() {
        $("#alert").slideUp(500);
    });
</script>
<!-- End -->
<script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
<script src="assets/js/index3.js"></script>

<script>
    $("html").attr("class", "color-sidebar sidebarcolor3 color-header headercolor1");
</script>
@endsection