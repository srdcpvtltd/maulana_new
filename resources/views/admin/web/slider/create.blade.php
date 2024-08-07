@extends('admin.layout.index')
@section('title', $title)
@section('content')

<!-- Start Content-->
<div class="main-body">
    <div class="page-wrapper">
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ Card ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>{{ __('modal_add') }} {{ $title }}</h5>
                    </div>
                    <div class="card-block pdng">
                        <a href="{{ route($route.'.index') }}" class="btn btn-primary"><i class="fas fa-arrow-left"></i> {{ __('btn_back') }}</a>

                        <a href="{{ route($route.'.create') }}" class="btn btn-info"><i class="fas fa-sync-alt"></i> {{ __('btn_refresh') }}</a>
                    </div>

                    <form class="needs-validation" novalidate action="{{ route($route.'.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-block pdng">
                      <div class="row">
                        <!-- Form Start -->
                        <div class="form-group col-md-12">
                            <label for="title">{{ __('field_title') }} <span>*</span></label>
                            <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}" required>

                            <div class="invalid-feedback">
                              {{ __('required_field') }} {{ __('field_title') }}
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="sub_title">{{ __('field_sub_title') }}</label>
                            <textarea class="form-control" name="sub_title" id="sub_title" rows="4">{{ old('sub_title') }}</textarea>

                            <div class="invalid-feedback">
                              {{ __('required_field') }} {{ __('field_sub_title') }}
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="button_text">{{ __('field_button_text') }}</label>
                            <input type="text" class="form-control" name="button_text" id="button_text" value="{{ old('button_text') }}">

                            <div class="invalid-feedback">
                              {{ __('required_field') }} {{ __('field_button_text') }}
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="button_link">{{ __('field_button_link') }}</label>
                            <input type="url" class="form-control" name="button_link" id="button_link" value="{{ old('button_link') }}">

                            <div class="invalid-feedback">
                              {{ __('required_field') }} {{ __('field_button_link') }}
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="attach">{{ __('field_thumbnail') }}: <span>{{ __('image_size', ['height' => 850, 'width' => 1920]) }}</span> <span>*</span></label>
                            <input type="file" class="form-control" name="attach" id="attach" value="{{ old('attach') }}" required>

                            <div class="invalid-feedback">
                              {{ __('required_field') }} {{ __('field_thumbnail') }}
                            </div>
                        </div>
                        <!-- Form End -->
                      </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> {{ __('btn_save') }}</button>
                    </div>
                    </form>
                </div>
            </div>
            <!-- [ Card ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- End Content-->

@endsection
