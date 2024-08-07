@extends('admin.layout.index')

@section('title')
    FACULTY-SUBCATEGORY
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Add Faculty Subcategory</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.faculty.subcategory.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="name" class="form-label">Faculty Category Name<span
                                style="color: red">*</span></label>
                        <select class="form-control" name="faculty_id">
                            <option value="">Select Name</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"> {{ $category->name }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="name" class="form-label">Name<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="icon" class="form-label">Icon<span style="color: red">*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control icon" autocomplete="off" name="icon"
                                    placeholder="Icon" required>
                                <span class="input-group-text  input-group-addon" data-icon="las la-home"
                                    role="iconpicker"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="phone" class="form-label">Phone<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="email" class="form-label">Email<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="email" placeholder="Enter Email" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="description" class="form-label">Description<span style="color: red">*</span></label>
                        <textarea name="description" class="form-control" cols="30" rows="3" required></textarea>
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset('web/js/fontawesome-iconpicker.js') }}"></script>
    <script>
        (function($) {
            "use strict";

            $('.iconPicker').iconpicker().on('iconpickerSelected', function(e) {
                $(this).closest('.form-group').find('.iconpicker-input').val(
                    `<i class="${e.iconpickerValue}"></i>`);
            });
        })(jQuery);
    </script>
@endsection
