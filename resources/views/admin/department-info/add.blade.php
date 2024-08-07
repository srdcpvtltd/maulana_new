@extends('admin.layout.index')

@section('title')
    Department Info
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Add Department Info</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.Info.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">Faculty Subcategory<span
                                style="color: red">*</span></label>
                        <select name="faculty_subcat_id" class="form-control" required>
                            <option value="">Select Faculty Subcategory</option>
                            @foreach ($subcategories as $subcategory)
                                <option value="{{ $subcategory->id }}"> {{ $subcategory->name }} </option>
                            @endforeach
                        </select>
                        @if ($errors->has('faculty_subcat_id'))
                            <div class="text-danger">
                                {{ $errors->first('faculty_subcat_id') }}
                            </div>
                        @endif
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">Head<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="head" placeholder="Enter Department Head Name"
                            required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">Address<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="address" placeholder="Enter Address" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">Phone<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="phone" placeholder="Enter Phone" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">Email<span style="color: red">*</span></label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">Website<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="website" placeholder="Enter Website">
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection