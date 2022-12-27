@extends('panel.layout')

@section('content')
    <main id="main">
        <div class="container">
            <div class="new_process">
                <div class="top_nprocess"><i class="logo_newprocess"></i><h2 class="title_headerprocess">Lista de Funcionarios</h2></div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Num</th>
                            <th>Nome do Advogado</th>
                            <th>B.I.</th>
                            <th>NIF</th>
                            <th>Sexo</th>
                            <th>Data de Nascimento</th>
                            <th>Accao</th>
                        </tr>
                    </thead>
                    <?php
                        $n=0+1
                    ?>

                    <tbody>
                        @foreach($employees as $employ)
                            <tr>
                                <th>{{ $n++ }}</th>
                                <td>{{ $employ->person->full_name }}</td>
                                <td>{{ $employ->person->bi }}</td>
                                <td>{{ $employ->nif }}</td>
                                <td>{{ $employ->person->sex }}</td>
                                <td>{{ $employ->person->birth_date }}</td>
                                <td>
                                    <a href="/posts/edit_new/" class="btn btn-success btn-xs">ADIAR</a>
                                    <a href="/posts/delete_new/" onclick="return confirm('Deseja Cancelar esta Consulta?')" class="btn btn-danger btn-xs">CANCELAR</a>
                                </td>
                            </tr>
                        @endforeach    
                    </tbody>
                </table>

            </div>
        </div>
    </main>
@endsection