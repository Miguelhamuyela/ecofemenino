@extends('layouts._admin.main')
@section('title', 'Criar Vídeo/Podcast')
@section('content')

<div class="nxl-content">
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Vídeo/Podcast</h5>
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
                    <a href="{{ route('admin.video.index') }}" class="btn btn-danger">
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
                                <span class="d-block mb-2">Criando Vídeo/Podcast:</span>
                                <span class="fs-12 fw-normal text-muted text-truncate-1-line">
                                    Insira as informações do seu novo vídeo ou podcast aqui.
                                </span>
                            </h5>
                        </div>
                        <form action="{{ route('admin.video.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <label class="form-label">Título</label>
                                    <input type="text" class="form-control" name="title" value="{{ old('title') }}"
                                        placeholder="Insira o título...">
                                    @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-lg-4 mb-4">
                                    <label class="form-label">Tipo</label>
                                    <select class="form-control" name="type">
                                        <option value="" disabled {{ old('type') ? '' : 'selected' }}>-- Selecione o tipo --</option>
                                        <option value="video" {{ old('type') == 'video' ? 'selected' : '' }}>Vídeo</option>
                                        <option value="podcast" {{ old('type') == 'podcast' ? 'selected' : '' }}>Podcast</option>
                                    </select>
                                    @error('type') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-lg-4 mb-4">
                                    <label class="form-label">Destaque</label>
                                    <select class="form-control" name="detach">
                                        <option value="" disabled {{ old('detach') ? '' : 'selected' }}>-- Selecione o destaque --</option>
                                        <option value="normal" {{ old('detach') == 'normal' ? 'selected' : '' }}>Normal</option>
                                        <option value="destaque" {{ old('detach') == 'destaque' ? 'selected' : '' }}>Destaque</option>
                                        <option value="urgente" {{ old('detach') == 'urgente' ? 'selected' : '' }}>Urgente</option>
                                    </select>
                                    @error('detach') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <label class="form-label">URL</label>
                                    <input type="text" class="form-control" name="url" value="{{ old('url') }}"
                                        placeholder="Inserir a URL (ex.: link do YouTube ou arquivo de áudio).">
                                    @error('url') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-lg-12 mb-4">
                                    <label class="form-label">Descrição</label>
                                    <textarea class="form-control" name="description" placeholder="Inserir a descrição.">{{ old('description') }}</textarea>
                                    @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-lg-4 mb-4">
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