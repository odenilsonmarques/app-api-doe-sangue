@extends('layouts.template')
@section('title', 'cadastro doador')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="mt-5 title-form-donors">
                    Cadastro de hemocentro
                </h1>
                <div class="background-page">
                    <form action="{{ route('bloodcenters.storeNewBloodCenter') }}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name"></label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Nome" autofocus>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="localização"></label>
                                    <input type="text" class="form-control" id="location" name="location"
                                        placeholder="localização">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="opening_hours"></label>
                                    <input type="text" class="form-control" id="opening_hours" name="opening_hours"
                                        placeholder="Horário de funcionameto">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"></label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="email">
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone"></label>
                                    <input type="text" class="form-control" id="phone" name="phone"
                                        placeholder="Telefone">
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="blood_supply"></label>
                                    <input type="text" class="form-control" id="blood_supply" name="blood_supply"
                                        placeholder="Fornecimento">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="city"></label>
                                    <input type="text" class="form-control" id="city" name="city"
                                        placeholder="cidade">
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
