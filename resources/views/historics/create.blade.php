@extends('layouts.template')
@section('title', 'cadastro doador')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="mt-5 title-form-donors">
                    Registro de doação
                </h1>
                <div class="background-page">
                    <form action="{{ route('historics.createNewHistoric') }}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Doador</label>
                                    <select name="user_id" class="form-select" required autofocus>
                                        <option value="">Selecione</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user['id'] }}"
                                                {{ old('user_id') == $user['id'] ? 'selected' : '' }}>
                                                {{ $user['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="blood_type">Tipo sanguineo</label>
                                <select name="scheduling_id" class="form-select" required>
                                    <option value="">Selecione</option>
                                    @foreach ($schedulings as $scheduling)
                                        <option value="{{ $scheduling['id'] }}"
                                            {{ old('scheduling_id') == $scheduling['id'] ? 'selected' : '' }}>
                                            {{ $scheduling['blood_type'] }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="quantity_blood">Quantidade de sangue</label>
                                <input type="number" class="form-control" id="quantity_blood" name="quantity_blood" min="1"
                                    placeholder="Quantidade de sangue">
                            </div>
                        </div>

                        <div class="row ">
                            <div class="col-md-6 ">
                                <label for="name">Hemocentro</label>
                                <select name="blood_center_id" class="form-select" required>
                                    <option value="">Selecione</option>
                                    @foreach ($bloodCenters as $bloodCenter)
                                        <option value="{{ $bloodCenter['id'] }}"
                                            {{ old('blood_center_id') == $bloodCenter['id'] ? 'selected' : '' }}>
                                            {{ $bloodCenter['name'] }}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="donation_date">Data da doação</label>
                                    <input type="date" class="form-control" id="donation_date" name="donation_date" placeholder="">
                                </div>
                            </div>
                        </div>


                        <div class="row mb-3 mt-5">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-secondary mx-2 btn-form-donor">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="red"
                                        class="bi bi-floppy" viewBox="0 0 16 16">
                                        <path d="M11 2H9v3h2z" />
                                        <path
                                            d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z" />
                                    </svg> Salvar
                                </button>

                                <button type="button" class="btn btn-secondary mx-2 btn-form-donor"
                                    onclick="window.history.back()">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="red"
                                        class="bi bi-x-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                        <path
                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                                    </svg> Cancelar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
