@extends('admin.layout.index')

@section('title')
Institution Overview
@endsection

@section('content')

<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Update Institution Overview</h5>
    </div>
    <div class="col-lg-12">
        <form action="{{route('admin.Overview.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <input name="id" type="hidden" value="{{ (isset($overview->id))?$overview->id:-1 }}">
                <div class="col-lg-6 mb-3">
                    <label for="notice_type" class="form-label">Faculties<span style="color: red">*</span></label>
                    <input type="number" class="form-control" name="faculties" value="{{isset($overview->faculties)?$overview->faculties:''}}" required>
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="notice_type" class="form-label">Departments<span style="color: red">*</span></label>
                    <input type="number" class="form-control" name="departments" value="{{isset($overview->departments)?$overview->departments:''}}"
                        required>
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="notice_type" class="form-label">Centres<span style="color: red">*</span></label>
                    <input type="number" class="form-control" name="centres" required value="{{isset($overview->centres)?$overview->centres:''}}">
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="notice_type" class="form-label">Programmes<span style="color: red">*</span></label>
                    <input type="number" class="form-control" name="programmes" value="{{isset($overview->programmes)?$overview->programmes:''}}"
                        required>
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="notice_type" class="form-label">e-Resources<span style="color: red">*</span></label>
                    <input type="number" class="form-control" name="e_resources" value="{{isset($overview->e_resources)?$overview->e_resources:''}}">
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="notice_type" class="form-label">MOU<span style="color: red">*</span></label>
                    <input type="number" class="form-control" name="mou" value="{{isset($overview->mou)?$overview->mou:''}}">
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="notice_type" class="form-label">Students<span style="color: red">*</span></label>
                    <input type="number" class="form-control" name="students" value="{{isset($overview->students)?$overview->students:''}}">
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="notice_type" class="form-label">Scholars<span style="color: red">*</span></label>
                    <input type="number" class="form-control" name="scholars" value="{{isset($overview->scholars)?$overview->scholars:''}}">
                </div>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Update</button>
            </div>
        </form>
    </div>
</div>
@endsection

