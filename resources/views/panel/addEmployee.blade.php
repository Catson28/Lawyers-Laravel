@extends('panel.layout')

@section('content')
    <main class="section_main">
        <div class="container">
            <div class="new_process">
                <div class="top_nprocess"><i class="logo_newprocess"></i><h2 class="title_headerprocess">Adicionar Funcionario</h2></div>

                <form onsubmit="return false;" class="newlawyer" name="newlawyer">
                    @csrf
                    
                    <div class="newlawyer_content">
                        <div class="field_tipes">

                            <div class="row">
                                <div class="col_6 padd_r_l-10">
                                    <input class="mrg_b-5 inform" type="text" name="name" placeholder="Nome">
                                </div>
                                <div class="col_3 padd_r_l-10">
                                    <input class="mrg_b-5 inform" type="text" name="bi" placeholder="BI">
                                </div>
                                <div class="col_3 padd_r_l-10">
                                    <input class="mrg_b-5 inform" type="text" name="addresss" placeholder="Morada">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col_1 padd_r_l-10">
                                    <input class="mrg_b-5 inform" type="text" name="telefone" placeholder="Telefone">
                                </div>
                                <div class="col_3 padd_r_l-10">
                                    <input class="mrg_b-5 inform" type="text" name="funcao" placeholder="Funcao">
                                </div> 
                                <div class="col_3 padd_r_l-10">
                                    <input class="mrg_b-5 inform" type="text" name="nif" placeholder="NIF">
                                </div>
                                <div class="col_3 padd_r_l-10">
                                    <input class="mrg_b-5 inform" type="text" name="cedula" placeholder="N Cedula">
                                </div>
                                <div class="col_2 padd_r_l-10">
                                    <input class="mrg_b-5 inform" type="text" name="genero" placeholder="Genero">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col_3 padd_r_l-10">
                                    <input class="mrg_b-5 inform" type="text" onfocus="(this.type='date')" name="datanasc" placeholder="Data de Nascimento">
                                </div>
                            </div>
                        </div>
                        <div class="save_new">
                            <button type="submit" onclick="onsubmitLawyer()" class="btn">Salvar</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </main>
@endsection