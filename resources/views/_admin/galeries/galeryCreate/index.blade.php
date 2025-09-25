@extends('layouts._admin.main')
@section('title', 'Criar Imagem na Galeria')
@section('content')

<div class="nxl-content">
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Galeria</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Criar</li>
            </ul>
        </div>
        <div class="page-header-right ms-auto">
            <div class="page-header-right-items">
                <div class="d-flex d-md-none">
                    <a href="javascript:void(0)" class="page-header-right-close-toggle">
                        <i class="feather-arrow-left me-2"></i>
                        <span>Back</span>
                    </a>
                </div>
                <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                    <a href="{{ route('admin.galery.index') }}" class="btn btn-danger">
                        <i class="feather-chevron-left me-2"></i>
                        <span>Visualizar</span>
                    </a>
                </div>
            </div>
            <div class="d-md-none d-flex align-items-center">
                <a href="javascript:void(0)" class="page-header-right-open-toggle">
                    <i class="feather-align-right fs-20"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="main-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card stretch stretch-full">
                    <div class="card-body lead-status">
                        <div class="mb-5 d-flex align-items-center justify-content-between">
                            <h5 class="fw-bold mb-0 me-4">
                                <span class="d-block mb-2">Criando Imagem:</span>
                                <span class="fs-12 fw-normal text-muted text-truncate-1-line">
                                    Insira as informações da nova imagem aqui.
                                </span>
                            </h5>
                            <a href="{{ route('admin.galery.index') }}" class="btn btn-sm btn-light-brand">Listar Imagens</a>
                        </div>
                        <form action="{{ route('admin.galery.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4 mb-4">
                                    <label class="form-label">Título</label>
                                    <input type="text" name="title" class="form-control" value="{{ old('title') }}"
                                        placeholder="Ex: Evento Cultural">
                                    @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-lg-4 mb-4">
                                    <label class="form-label">Imagem</label>
                                    <input type="file" name="image" class="form-control">
                                    <small class="text-muted">Formatos suportados: jpg, jpeg, png, gif, webp (máx. 2MB)</small>
                                    @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-12 mb-4">
                                    <label class="form-label">Descrição</label>
                                    <textarea name="description" class="form-control" rows="4" placeholder="Escreva a descrição...">{{ old('description') }}</textarea>
                                    @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-danger">
                                        Salvar
                                        <i class="feather-save ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection