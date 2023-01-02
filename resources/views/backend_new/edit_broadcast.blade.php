@extends('new_layouts.be_master')

@section('content')
<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-box"></i>
                        UPDATE BROADCAST
                    </h4>
                </div>
            </div>
            <div class="row">
                <ul class="nav responsive-tab nav-material nav-material-white" id="v-pills-tab">
                    <li>
                        <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1">
                            <i class="icon icon-home2"></i>Today</a>
                    </li>
                </ul>
                <a class="btn-fab absolute fab-right-bottom btn-primary" data-toggle="control-sidebar">
                    <i class="icon icon-menu"></i>
                </a>
            </div>
        </div>
    </header>
    <div class="container-fluid relative animatedParent animateOnce" style="margin-top: 20px">
        <div class="tab-content pb-3" id="v-pills-tabContent">
            <!--Today Tab Start-->
            <div class="tab-pane animated fadeInUpShort show active" id="v-pills-1">
                <div class="row">
                    <!--Grafik Berita Artikel-->
                    <div class="col-12">
                        <form id="formadd" method="POST"> @csrf
                            <div class="col-md-12">
                                <div class="white" style="padding: 20px">
                                    <div class="card-title text-uppercase">
                                        <h5> {{$data->judul_broadcast}} </h5>
                                    </div>
                                    <div class="row my-3">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label form="admin_broadcast">Pilih Nomor Admin</label>
                                                <select name="admin_broadcast" class="form-control" id="admin_broadcast" required>
                                                        <option value="">:: PILIH NOMOR PENGIRIM BROADCAST ::</option>
                                                        <option value="6289523444715" @if($data->admin_broadcast == '6289523444715') selected @endif>Admin Tilawati (MB LULUK)</option>
                                                        <option value="6287787280791" @if($data->admin_broadcast == '6287787280791') selected @endif>Admin Tilawati (SEMUA BIDANG)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label for="judul_broadcast"><b>Judul Broadcast</b></label>
                                                <input type="text" placeholder="JUDUL BERITA / ARTIKEL" name="judul_broadcast" value="{{$data->judul_broadcast}}" id="judul_broadcast" class="form-control" required>
                                                <input type="hidden" name="id" value="{{$data->id}}" id="id" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label for="desc_broadcast"><b>Deskripsi Broadcast</b></label>
                                                <textarea name="desc_broadcast" class="form-control" id="desc_broadcast" cols="30" rows="10">{{$data->desc_broadcast}}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="jenis_broadcast">Jenis Broadcast</label>
                                                <select name="jenis_broadcast" id="jenis_broadcast" class="form-control" required>
                                                    <option value="text" @if ($data->jenis_broadcast == 'text') selected @endif >Text</option>
                                                    <option value="image" @if ($data->jenis_broadcast == 'image') selected @endif>Image</option>
                                                    <option value="dokumen" @if ($data->jenis_broadcast == 'dokumen') selected @endif>Dokumen</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            {{-- <div class="form-group">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Upload Image</span>
                                                    </div>
                                                    <div class="custom-file">
                                                        <input type="file" name="img_broadcast" class="custom-file-input" id="inputGroupFile01"
                                                            accept="image/*" onchange="showPreview(event);" >
                                                        <p class="custom-file-label" id="img_broadcast" for="inputGroupFile01">Chose Image</p>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <div class="form-group">
                                                <span>URL IMAGE</span>
                                                @if ($data->url_img !== null)
                                                <input type="text" class="form-control" name="url_img" value="{{$data->url_img}}">
                                                @else
                                                <input type="text" class="form-control" name="url_img">
                                                @endif
                                                
                                            </div>
                                            @if ($data->jenis_broadcast == 'image')
                                            <div class="form-group">
                                                <div class="preview" style="max-width: 300px">
                                                    {{-- <img style="max-width: 300px" id="inputGroupFile01-preview" src="{{$data->img_broadcast}}"> --}}
                                                    <img style="max-width: 300px" id="inputGroupFile01-preview" src="{{$data->url_img}}">
                                                </div>
                                            </div>
                                            @endif
                                            
                                            <div class="form-group">
                                                <input type="submit" id="btnadd" class="form-control btn btn-primary" value="UPDATE!">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
            <!--Today Tab End-->
        </div>
    </div>
</div>
@endsection

@section('script')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

<script src="https://cdn.tiny.cloud/1/ugxr3g858dujcaxkbpc955v096pyy3twc4qp21awzic10swl/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    $(document).ready(function () {
        
    })
   

 
        function showPreview(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("inputGroupFile01-preview");

                preview.src = src;
                preview.style.display = "block";
                $('#label_img').html(src.substr(0, 30));
            }
        }

        $('#formadd').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: "{{ route('store.broadcast.be') }}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('#btnadd').attr('disabled', 'disabled');
                    $('#btnadd').val('Process...');
                },
                success: function(response) {
                    if (response.status == 200) {
                        $("#formadd")[0].reset();
                        $('#btnadd').val('SUBMIT!');
                        $('#btnadd').attr('disabled', false);
                        toastr.success(response.message);
                        swal({
                            title: "SUCCESS!",
                            text: "BROADCAST DIPERBARUI!",
                            type: "success"
                        }).then(okay => {
                            if (okay) {
                                window.location.href = "/broadcast-page";
                            }
                        });
                    } else {
                        $("#formadd")[0].reset();
                        $('#btnadd').val('SUBMIT!');
                        $('#btnadd').attr('disabled', false);
                        toastr.error(response.message);
                        $('#errList').html("");
                        $('#errList').addClass('alert alert-danger');
                        $.each(response.errors, function(key, err_values) {
                            $('#errList').append('<div>' + err_values + '</div>');
                        });
                    }
                },
                error: function(data) {
                    console.log(data);
                }
            });
        });
  </script>
@endsection