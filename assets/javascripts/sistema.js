function mostrarDatos(valor){
    $ajax({
        url:"<?=base_url()/Home/mostrar?>",
        type:POST,
        data:{buscar:valor},
    })
}