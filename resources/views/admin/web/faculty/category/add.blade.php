@extends('admin.layout.index')

@section('title')
    FACULTY-CATEGORY
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Add Faculty Category</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.faculty.category.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="name" class="form-label">Name<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="icon" class="form-label">Icon<span style="color: red">*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control iconPicker icon" autocomplete="off" name="icon" placeholder="Icon" required>
                                <span class="input-group-text  input-group-addon" data-icon="las la-home" role="iconpicker"></span>
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
