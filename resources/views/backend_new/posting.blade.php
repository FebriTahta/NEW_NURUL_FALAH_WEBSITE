@extends('new_layouts.be_master')

@section('content')
<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-box"></i>
                        POST
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
                    <div class="col-md-12">
                        <div class="white" style="padding: 20px">
                            <div class="card-title">
                                <h5> POSTINGAN BARU</h5>
                            </div>
                            <div class="row my-3">
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="judul"><b>Judul Postingan</b></label>
                                        <input type="text" placeholder="JUDUL BERITA / ARTIKEL" name="judul" id="judul" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-6">
                                    <div class="form-group">
                                        <label for="penulis"><b>Redaksi</b></label>
                                        <select name="penulisposting_id" class="form-control" id="penulis" required>
                                            <option value="">- PILIH REDAKSI -</option>
                                            @foreach ($penulis as $item)
                                                <option value="{{ $item->id }}">{{ $item->penulis_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-6">
                                    <div class="form-group">
                                        <label for="narasumber"><b>Narasumber</b></label>
                                        <select name="sumberposting_id" class="form-control" id="narasumber" required>
                                            <option value="">- PILIH NARASUMBER -</option>
                                            @foreach ($sumber as $item)
                                                <option value="{{ $item->id }}">{{ $item->sumber_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-6">
                                    <div class="form-group">
                                        <label for="jenis"><b>Jenis Postingan</b></label>
                                        <select name="jenisposting_id" class="form-control" id="jenis" required>
                                            <option value="">- PILIH JENIS POSTINGAN -</option>
                                            @foreach ($jenis as $item)
                                                <option value="{{ $item->id }}">{{ $item->jenis_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-6">
                                    <label for="kategori"><b>Kategori Postingan</b></label>
                                    <select name="kategoriposting_id" class="form-control show-tick ms select2" id="kategori"
                                        data-placeholder="- PILIH KATEGORI -" required>
                                        @foreach ($kategori as $item)
                                            <option value="{{ $item->id }}">{{ $item->kategori_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="desc"><b>Deskripsi</b></label>
                                        <textarea name="deskripsi" id="desc" class="my-editor form-control" cols="30" rows="30"
                                        required></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Today Tab End-->
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://cdn.tiny.cloud/1/ugxr3g858dujcaxkbpc955v096pyy3twc4qp21awzic10swl/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
//     tinymce.init({
//       selector: 'textarea.my-editor',
//       plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
//       toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
//       toolbar_mode: 'floating',
//       tinycomments_mode: 'embedded',
//       tinycomments_author: 'Author name',
//    });

   
   tinymce.init({
            selector: 'textarea.my-editor',
            plugins: 'image code',
            toolbar: 'undo redo | bold italic underline | link image | code',
            image_title: true,
            automatic_uploads: true,
            file_picker_types: 'image',
            file_picker_callback: function(cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');
                input.onchange = function() {
                    var file = this.files[0];

                    var reader = new FileReader();
                    reader.onload = function() {
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);

                        cb(blobInfo.blobUri(), {
                            title: file.name
                        });
                    };
                    reader.readAsDataURL(file);
                };

                input.click();
            }
        });
    
  </script>
@endsection