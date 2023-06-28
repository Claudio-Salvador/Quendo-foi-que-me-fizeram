<?php


if (isset($_POST['date_input']) && !empty($_POST['date_input'])) {
    $dataNascimento = date("d/m/Y", strtotime($_POST['date_input']));
    $mesesGestacao = $_POST['month_input'];

    $dataFormatada = DateTime::createFromFormat("d/m/Y", $dataNascimento);
    date_sub($dataFormatada, new DateInterval("P{$mesesGestacao}M"));
    $dataConcepcao = $dataFormatada;

    $diaConcepcao = $dataConcepcao->format("m");
    $mesConcepcao = $dataConcepcao->format("d");
    $anoConcepcao = $dataConcepcao->format("Y");

    $resposta = array(
        'mensagem' => 'Requisição recebida com sucesso!',
        'dia' => $diaConcepcao,
        'mes' => $mesConcepcao,
        'ano' => $anoConcepcao
    );

    echo json_encode ($resposta);
    exit; 

}   else {

    echo json_encode(array('mensagem' => 'Data de nascimento não fornecida.'));
    exit;

}
