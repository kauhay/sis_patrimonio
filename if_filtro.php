<?php 

if ($data1loc != NULL && $data2loc != NULL && $filialloc != NULL && $localizacaoloc != NULL && $tipoloc != NULL && $ativoloc != NULL) {
    $sql = "SELECT * FROM bens where data_cadastro >= '$data1loc' and data_cadastro <= '$data2loc' and filial_atual = '$filialloc'
    and localizacao = '$localizacaoloc' and tipo = '$tipoloc' and ativo = '$ativoloc'";
    $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
}

if ($data1loc != NULL && $data2loc != NULL && $filialloc != NULL && $localizacaoloc != NULL && $tipoloc != NULL && $ativoloc == NULL) {
    $sql = "SELECT * FROM bens where data_cadastro >= '$data1loc' and data_cadastro <= '$data2loc' and filial_atual = '$filialloc'
    and localizacao = '$localizacaoloc' and tipo = '$tipoloc'";
    $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
}

if ($data1loc != NULL && $data2loc != NULL && $filialloc != NULL && $localizacaoloc != NULL && $tipoloc == NULL && $ativoloc == NULL) {
    $sql = "SELECT * FROM bens where data_cadastro >= '$data1loc' and data_cadastro <= '$data2loc' and filial_atual = '$filialloc'
    and localizacao = '$localizacaoloc'";
    $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
}

if ($data1loc != NULL && $data2loc != NULL && $filialloc != NULL && $localizacaoloc == NULL && $tipoloc == NULL && $ativoloc == NULL) {
    $sql = "SELECT * FROM bens where data_cadastro >= '$data1loc' and data_cadastro <= '$data2loc' and filial_atual = '$filialloc'";
    $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
}

if ($data1loc != NULL && $data2loc != NULL && $filialloc == NULL && $localizacaoloc == NULL && $tipoloc == NULL && $ativoloc == NULL) {
    $sql = "SELECT * FROM bens where data_cadastro >= '$data1loc' and data_cadastro <= '$data2loc'";
    $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
}

if ($data1loc != NULL && $data2loc == NULL && $filialloc == NULL && $localizacaoloc == NULL && $tipoloc == NULL && $ativoloc == NULL) {
    $sql = "SELECT * FROM bens where data_cadastro >= '$data1loc'";
    $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
}

if ($data1loc == NULL && $data2loc == NULL && $filialloc == NULL && $localizacaoloc == NULL && $tipoloc == NULL && $ativoloc == NULL) {
    $sql = "SELECT * FROM bens ";
    $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
}

?>