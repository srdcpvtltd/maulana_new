@extends('admin.layout.index')

@section('title')
    TEAM
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Add Admin Users</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.Team.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">Faculty Category<span style="color: red">*</span></label>
                        <select name="faculty_cat_id" class="form-control" id="category">
                            <option value="">Select Faculty Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"> {{ $category->name }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">Faculty Subcategory<span
                                style="color: red">*</span></label>
                        <select name="faculty_subcat_id" class="form-control" id="subcategory">
                            <option value="">Select Faculty Subcategory</option>
                        </select>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">Name<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">Designation<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="designation" placeholder="Enter Designation"
                            required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">Photo<span style="color: red">*</span></label>
                        <input type="file" class="form-control" name="photo" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">Facebook ID<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="facebook" placeholder="Enter Facebook ID URL"
                            required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">Instagram ID<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="instagram" placeholder="Enter Instagram ID URL">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">X ID<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="x" placeholder="Enter X ID URL">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="notice_type" class="form-label">Short description<span
                                style="color: red">*</span></label>
                        <input type="text" class="form-control" name="s_description"
                            placeholder="Enter Short description" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="notice_type" class="form-label">Details<span style="color: red">*</span></label>
                    {{-- <input type="text" class="form-control" name="title" placeholder="Enter Title" required> --}}
                    <textarea class="form-control texteditor" name="details"cols="30" rows="4" placeholder="Enter Details" required></textarea>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $(document).on('change', '#category', function() {

                var faculty_id = $(this).val();
                $.ajax({
                    type: "POST",
                    url: '{{ route('admin.faculty.getsubcategory') }}',
                    data: {
                        'faculty_id': faculty_id,
                        _token: "{{ csrf_token() }}"
                    },
                    dataType: 'json',
                    success: function(response) {
                        $('#subcategory').empty();
                        $('#subcategory').html('<option value="">Select</option>');
                        $.each(response, function(key, value) {
                            $('#subcategory').append('<option value="' + value.id +
                                '">' + value.name + '</option>');
                        });
                    },
                });
            });
        });
    </script>
@endsection
