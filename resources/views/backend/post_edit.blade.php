@extends('layouts.master_backend')

@section('header')
    <link rel="stylesheet" href="{{ asset('assets/vendor/summernote/dist/summernote.min.css') }}" />
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: "Rubik", sans-serif;
        }

        .box {
            background-color: #ffffff;
            width: 60%;
            min-width: 450px;
            position: relative;
            margin: 50px auto;
            padding: 50px 20px;
            border-radius: 7px;
            box-shadow: 0 20px 35px rgba(0, 0, 0, 0.05);
        }

        .imageposting {
            display: none;
        }

        label {
            display: block;
            position: relative;
            background-color: #e94d4d;
            color: #ffffff;
            font-size: 18px;
            text-align: center;
            width: 300px;
            padding: 18px 0;
            margin: auto;
            border-radius: 5px;
            cursor: pointer;
        }

        .box p {
            text-align: center;
            margin: 20px 0 30px 0;
        }

        #images {
            width: 90%;
            position: relative;
            margin: auto;
            display: flex;
            justify-content: space-evenly;
            gap: 1px;
            flex-wrap: wrap;
        }

        figure {
            width: 45%;
        }

        img {
            width: 100%;
        }

        figcaption {
            text-align: center;
            font-size: 12px;
            /* margin-top: 0.5vmin; */
        }

    </style>
@endsection

@section('content')
    <div class="page">

        <div class="container-fluid">
            <form id="formadd" method="POST"> @csrf
            {{-- <form action="/cek" method="POST"> @csrf --}}
                <div class="row clearfix">
                    <div class="col-xl-12">
                        <div id="errList" class="text-uppercase">
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card">
                            <div class="body">
                                <p>- JUDUL</p>
                                <input type="hidden" value="{{$data->id}}" name="id">
                                <input type="text" placeholder="JUDUL BERITA / ARTIKEL" name="judul" value="{{$data->judul}}" class="form-control"
                                    required>
                            </div>
                            <div class="body">
                                <p>- PENULIS ARTIKEL / BERITA</p>
                                <select name="penulisposting_id" class="form-control" id="" required>
                                    <option value="">- PILIH PENULIS -</option>
                                    @foreach ($penulis as $item)
                                        <option value="{{$item->id}}" {{ $data->penulisposting_id == $item->id ? 'selected' : '' }} >{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="body">
                                <p>- SUMBER ARTIKEL / BERITA</p>
                                <select name="sumberposting_id" class="form-control" id="" required>
                                    <option value="">- PILIH ASAL SUMBER -</option>
                                    @foreach ($sumber as $item)
                                    <option value="{{$item->id}}" {{ $data->sumberposting_id == $item->id ? 'selected' : '' }} >{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="body">
                                <p>- JENIS POSTINGAN</p>
                                <select name="jenisposting_id" class="form-control" id="" required>
                                    <option value="">- PILIH JENIS POSTINGAN -</option>
                                    @foreach ($jenis as $item)
                                    <option value="{{$item->id}}" {{ $data->jenisposting_id == $item->id ? 'selected' : '' }} >{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="body">
                                <p>- KATEGORI</p>
                                <select name="kategoriposting_id" class="form-control show-tick ms select2" 
                                    data-placeholder="- PILIH KATEGORI -" required>
                                    @foreach ($kategori as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="body">
                                <p>- THUMBNAIL</p>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="thumbnail" class="custom-file-input" id="inputGroupFile01"
                                            accept="image/*" onchange="showPreview(event);">
                                        <p class="custom-file-label" id="label_img" for="inputGroupFile01">Chose Image</p>
                                    </div>
                                </div>
                            </div>
                            <div class="body">
                                <div class="preview">
                                    <img style="max-width: 100%" id="inputGroupFile01-preview" src="{{asset('img_thumbnail/'.$data->thumbnail)}}">
                                </div>
                            </div>
                            <div class="body">
                                <input type="submit" id="btnadd" class="form-control btn btn-primary" value="POSTING!">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="card">
                            <div class="header">
                                <h2>DESKRIPSI</h2>
                            </div>
                            <div class="body" style="min-height: 577px">
                                <textarea name="deskripsi" id="summernote" class="summernote" cols="30" rows="10"
                                    required>{!! $data->deskripsi !!}</textarea>
                            </div>
                        </div>

                        <div class="card">
                            <div class="header">
                                <h2>IMAGE</h2><input type="hidden" id="total_img" value="1">
                            </div>

                            <div class="body">
                                <h2>RECENT IMAGE</h2>
                                <div class="row">
                                    @foreach ($data->imageposting as $item)
                                    <div class="col-md-6" style="margin-bottom: 10px">
                                        {{$item->name}}
                                        <img src="{{asset('img_posting/'.$item->img)}}" alt="">
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="body text-center" id="dynamicAddRemove">
                                <input type="file" id="file-input" name="imageposting[]" class="imageposting" accept="image/png, image/jpeg" onchange="preview()"
                                    multiple>
                                <label for="file-input">
                                     GANTIKAN FOTO DIATAS
                                </label>
                                <p id="num-of-files">No Files Chosen</p>
                                <div id="images"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/vendor/summernote/dist/summernote.js') }}"></script>
    <script type="text/javascript">
        var i = 1;
        $("#dynamic-ar").click(function() {
            ++i;
            $("#dynamicAddRemove").append(
                '<a><div><td><button type="button" style="margin-bottom:10px" class="btn-sm btn btn-outline-danger remove-input-field">Hapus Img</button></td><td>' +
                '<div class="input-group mb-3">' +
                '<div class="input-group-prepend">' +
                '<span class="input-group-text">Upload</span>' +
                '</div>' +
                '<div class="custom-file">' +
                '<input type="file" name="imageposting_id[]" class="custom-file-input" id="imageposting1"required>' +
                '<label class="custom-file-label" for="imageposting1">Pilih Image</label>' +
                '</div>' +
                '</div>' +
                '</td></div></a>'
            );
            console.log(i);
            $('#total_img').val(i);
        });
        $(document).on('click', '.remove-input-field', function() {
            $(this).parents('a').remove();
            var result = --i;
            $('#total_img').val(result);
        });

        function showPreview(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("inputGroupFile01-preview");

                preview.src = src;
                preview.style.display = "block";
                $('#label_img').html(src.substr(0, 30));
            }
        }

        let fileInput = document.getElementById("file-input");
        let imageContainer = document.getElementById("images");
        let numOfFiles = document.getElementById("num-of-files");

        function preview() {
            imageContainer.innerHTML = "";
            numOfFiles.textContent = `${fileInput.files.length} Files Selected`;

            for (i of fileInput.files) {
                let reader = new FileReader();
                let figure = document.createElement("figure");
                let figCap = document.createElement("figcaption");
                figCap.innerText = i.name;
                figure.appendChild(figCap);
                reader.onload = () => {
                    let img = document.createElement("img");
                    img.style.maxWidth = "400px";
                    img.setAttribute("src", reader.result);
                    figure.insertBefore(img, figCap);
                }
                imageContainer.appendChild(figure);
                reader.readAsDataURL(i);
            }
        }

        $('#formadd').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: "{{ route('add.posting.backend') }}",
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
                            text: "TULISAN TELAH DIPUBLIKASI!",
                            type: "success"
                        }).then(okay => {
                            if (okay) {
                                window.location.href = "/admin/list-posting";
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
