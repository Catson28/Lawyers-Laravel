@extends('panel.layout')

@section('content')
    <main id="main">
        <div class="container">
            <div class="new_process">
                <div class="top_nprocess"><i class="logo_newprocess"></i><h2 class="title_headerprocess">Lista de Processos</h2></div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Num</th>
                            <th>Tipo de Processo</th>
                            <th>Nome do cliente</th>
                            <th>Nome do Advogado</th>
                            <th>Requerente</th>
                            <th>Accao</th>
                        </tr>
                    </thead>
                    <?php
                        $n=0+1
                    ?>

                    <tbody>
                        @foreach($processes as $process)
                            <tr>
                                <th>{{ $n++ }}</th>
                                <td>{{ $process->type->name }}</td>
                                <td>{{ $process->owner->name }}</td>
                                <td>{{ $process->employees['0']->person->full_name }}</td>
                                <td>{{ $process->owner->prsn_prtcp->person->full_name }}</td>
                                <td>
                                    <a href="/posts/edit_new/" class="btn btn-success btn-xs">Visualiar</a>

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