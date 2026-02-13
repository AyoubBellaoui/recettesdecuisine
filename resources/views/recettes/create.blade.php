@extends('layouts.app')
@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-header bg-dark text-white text-center rounded-top">
                    <h5 class="mb-0">Créer une recette</h5>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('recettes.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        {{-- Titre --}}
                        <div class="mb-3">
                            <label class="form-label">
                                Titre <span class="text-danger">*</span>
                            </label>
                            <input
                                type="text"
                                name="titre"
                                class="form-control @error('titre') is-invalid @enderror"
                                value="{{ old('titre') }}"
                            >
                            @error('titre')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Temps de préparation --}}
                        <div class="mb-3">
                            <label class="form-label">
                                Temps de préparation (minutes) <span class="text-danger">*</span>
                            </label>
                            <input
                                type="number"
                                name="temps_preparation"
                                class="form-control @error('temps_preparation') is-invalid @enderror"
                                value="{{ old('temps_preparation') }}"
                            >
                            @error('temps_preparation')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Description --}}
                        <div class="mb-3">
                            <label class="form-label">
                                Description <span class="text-danger">*</span>
                            </label>
                            <textarea
                                name="description"
                                rows="4"
                                class="form-control @error('description') is-invalid @enderror"
                            >{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Image --}}
                        <div class="mb-3">
                            <label class="form-label">
                                Image de la recette <span class="text-danger">*</span>
                            </label>
                            <input
                                type="file"
                                name="image"
                                class="form-control @error('image') is-invalid @enderror"
                                accept="image/*"
                            >
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Submit --}}
                        <div class="d-grid">
                            <button type="submit" class="btn btn-dark">
                                Sauvegarder
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
