@extends("layouts.app")

@section("wrapper")
<script src="https://www.dukelearntoprogram.com/course1/common/js/image/SimpleImage.js">
</script>
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
                        <li class="breadcrumb-item active" aria-current="page">Product Add</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-6">
                <a href="{{ URL::previous() }}">
                    <button type="button" class="btn btn-primary" style="float: right;margin-bottom: 16px;" id="add_product">Back</button>
                </a>
            </div>


        </div>


        <form action="{{url('/product-store')}}" method="post" id="newModalForm" enctype="multipart/form-data">
            @csrf
            <div class="row row-cols-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm">
                                <label for="formFile" class="form-label">Image</label>
                                <input class="form-control" accept="image/*" type="file" name="image" id="picture" onchange="upload()">
                            </div>
                            <div class="col-sm">
                                <canvas id="canv1" class="size"></canvas>
                            </div>
                            <p id="error1" style="display:none; color:#FF0000;">
                                Invalid Image Format! Image Format Must Be JPG, JPEG, PNG or GIF.
                            </p>
                            <p id="error2" style="display:none; color:#FF0000;">
                                Maximum File Size Limit is 1MB.
                            </p>

                        </div>
                        <div class="row align-items-center g-3 mt-10">
                            <div class="col-lg-6">
                                <div>
                                    <label for="" class="form-label">Title</label>

                                    <input class="form-control" type="text" id="" name="Product_title">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <label for="" class="form-label">Price</label>

                                    <input class="form-control" type="Number" id="" name="Product_price">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-10">
                            <button type="submit" class="btn btn-primary" style="float: right;margin-bottom: 16px;" onclick="add_product()" id="add_product">Add Products</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>


    </div>
</div>
@endsection

@section("script")

<script>
    function upload() {
        var imgcanvas = document.getElementById("canv1");
        var fileinput = document.getElementById("finput");
        var image = new SimpleImage(fileinput);
        image.drawTo(imgcanvas);
    }

    $(function() {

        $("#newModalForm").validate({
            rules: {
                Product_title: {
                    required: true,
                },
                Product_price: {
                    required: true,
                },
                action: "required"
            },
            messages: {
                Product_title: {
                    required: "Please add Title",
                },
                Product_price: {
                    required: "Please add price",
                },
                action: "Please provide some data"
            }
        });
    });


    $('input[type="submit"]').prop("disabled", true);
    var a = 0;
    //binds to onchange event of your input field
    $('#picture').bind('change', function() {
        if ($('input:submit').attr('disabled', false)) {
            $('input:submit').attr('disabled', true);
        }
        var ext = $('#picture').val().split('.').pop().toLowerCase();
        if ($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
            $('#error1').slideDown("slow");
            $('#error2').slideUp("slow");
            a = 0;
        } else {
            var picsize = (this.files[0].size);
            if (picsize > 1000000) {
                $('#error2').slideDown("slow");
                a = 0;
            } else {
                a = 1;
                $('#error2').slideUp("slow");
            }
            $('#error1').slideUp("slow");
            if (a == 1) {
                $('input:submit').attr('disabled', false);
            }
        }
    });
</script>
<!-- Here this script use for sweet alert  -->
<!-- Start -->
<script type="text/javascript">
    $("#alert-primary").fadeTo(2000, 500).slideUp(500, function() {
        $("#alert-primary").slideUp(500);
    });
</script>
<!-- End -->
<script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
<script src="assets/js/index3.js"></script>

<script>
    $("html").attr("class", "color-sidebar sidebarcolor3 color-header headercolor1");
</script>
@endsection