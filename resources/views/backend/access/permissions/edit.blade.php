@extends ('layouts.master')

@section ('title', trans('labels.backend.access.permissions.management') . ' | ' . trans('labels.backend.access.permissions.edit'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.access.permissions.management') }}
        <small>{{ trans('labels.backend.access.permissions.edit') }}</small>
    </h1>
@endsection

@section('content')
    {{ Form::model($permission, ['route' => ['admin.access.permission.update', $permission], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-role']) }}

        <div class="card box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">{{ trans('labels.backend.access.permissions.edit') }}</h3>

                <div class="box-tools pull-right">
                    @include('backend.access.includes.partials.permission-header-buttons')
                </div><!--box-tools pull-right-->
            </div><!-- /.box-header -->

            <div class="box-body">

                {{-- Including Form --}}
                @include("backend.access.permissions.form")

                <div class="edit-form-btn mb-2" align="center">
                    {{ link_to_route('admin.access.permission.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md']) }}
                    {{ Form::submit(trans('buttons.general.crud.update'), ['class' => 'btn btn-primary btn-md']) }}
                    <div class="clearfix"></div>
                </div>
            </div><!-- /.box-body -->
        </div><!--box-->
    {{ Form::close() }}
@endsection