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
                        <li class="breadcrumb-item active" aria-current="page">Contact Details</li>
                    </ol>
                </nav>
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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Number</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($contact as $key=>$item)
                                <tr>
                                    <td>{{ $key++ }}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->phone}}</td>
                                    <td>{{$item->queries}}</td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
      
       
    </div>
</div>
@endsection

@section("script")


<!-- End -->
<script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
<script src="assets/js/index3.js"></script>

<script>
    $("html").attr("class", "color-sidebar sidebarcolor3 color-header headercolor1");
</script>
@endsection