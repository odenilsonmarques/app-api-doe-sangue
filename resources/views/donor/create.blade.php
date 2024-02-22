@extends('layouts.template')
@section('title', 'cadastro doador')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="mt-5 title-form-donors">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person"
                    viewBox="0 0 16 16">
                    <path
                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                </svg>

                Cadastro de doadores

            </h1>
            <div class="col-lg-12">
                <div id="background-form">
                    <form action="{{ route('donors.storeNewDonor') }}" method="POST">
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
                                    <label for="cpf"></label>
                                    <input type="text" class="form-control" id="cpf" name="cpf"
                                        placeholder="CPF">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="age"></label>
                                    <input type="number" class="form-control" id="age" name="age"
                                        placeholder="Idade">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date_birth"></label>
                                    <input type="date" class="form-control" id="date_birth" name="date_birth"
                                        placeholder="Data de nascimento">
                                    <small id="dateOfBirthHelp" class="form-text text-muted">Por favor, insira sua data de
                                        nascimento</small>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="blood_type"></label>
                                    <select class="form-select" id="blood_type" name="blood_type">
                                        <option selected>Tipo sanguíneo</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="sex"></label>
                                    <select class="form-select" id="sex" name="sex">
                                        <option selected>Sexo</option>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Feminino">Feminino</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="profession"></label>
                                    <input type="text" class="form-control" id="profession" name="profession"
                                        placeholder="Profissão">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"></label>
                                    <input type="text" class="form-control" id="email" name="email"
                                        placeholder="email">
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="address"></label>
                                    <input type="text" class="form-control" id="address" name="address"
                                        placeholder="Endereço">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="complement"></label>
                                    <input type="text" class="form-control" id="complement" name="complement"
                                        placeholder="Complemento">
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="cep"></label>
                                    <input type="text" class="form-control" id="cep" name="cep" placeholder="cep">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="neighborhood"></label>
                                    <input type="text" class="form-control" id="neighborhood" name="neighborhood" placeholder="Bairro">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="phone_one"></label>
                                    <input type="text" class="form-control" id="phone_one" name="phone_one" placeholder="Telefone 1">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="phone_two"></label>
                                    <input type="text" class="form-control" id="phone_two" name="phone_two" placeholder="Telefone 2">
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
