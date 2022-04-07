@extends('layouts.master_backend')

@section('header')
<link rel="stylesheet" href="{{ asset('assets/vendor/summernote/dist/summernote.min.css') }}" />
@endsection

@section('content')
<div class="page">

    <div class="container-fluid">
        <div id="errList" class="text-uppercase">
            {{-- ERROR MESSAGE VALIDATION --}}
        </div>
        <div class="row clearfix">
            <div class="col-xl-8">
                <form id="formaddkategori" method="POST"> @csrf
                    <div class="card">
                        <div class="body">
                            <p>Judul Profile</p>
                            <input type="text" name="name" class="form-control" placeholder=""
                                required>
                        </div>
                        <div class="body">
                            <p>Deskripsi Profile</p>
                            <textarea name="deskripsi" id="summernote" class="summernote" cols="30" rows="10"
                                    required></textarea>
                        </div>
                        

                        <div class="body">
                            <input type="submit" id="btnadd" class="form-control btn btn-primary" value="Tambahkan Cabang Baru!">
                        </div>
                    </div>
                </form>
            </div>
           
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('assets/vendor/summernote/dist/summernote.js') }}"></script>
@endsection