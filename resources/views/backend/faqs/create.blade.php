@extends ('layouts.master')


@section ('title', trans('labels.backend.faqs.management') . ' | ' . trans('labels.backend.faqs.create'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.faqs.management') }}
        <small>{{ trans('labels.backend.faqs.create') }}</small>
    </h1>
@endsection

@section('content')
    {{ Form::open(['route' => 'admin.faqs.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-faq']) }}

        <div class="card box box-info">
            <div class="box-header with-border ml-3">
                <h3 class="box-title">{{ trans('labels.backend.faqs.create') }}</h3>

                <div class="box-tools pull-right">
                    @include('backend.faqs.partials.faqs-header-buttons')
                </div><!--box-tools pull-right-->
            </div><!-- /.box-header -->

            {{-- Including Form blade file --}}
            <div class="box-body">
                <div class="form-group">
                    @include("backend.faqs.form")
                    <div class="edit-form-btn mb-2" align="center">
                    {{ link_to_route('admin.faqs.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md']) }}
                    {{ Form::submit(trans('buttons.general.crud.create'), ['class' => 'btn btn-primary btn-md']) }}
                    <div class="clearfix"></div>
                </div>
            </div>
        </div><!--box-->
    </div>
    {{ Form::close() }}
@endsection
