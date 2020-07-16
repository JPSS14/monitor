$('#regiao').change(function(e) {
    var regiao = $(this).val();
    console.log(regiao);
    $.ajax({
        type: "GET",
        data: "regiao=" + regiao,
        url: "http://localhost/Monitor/Assets/Functions/RetornarExercicios.php",
        async: false
    }).done(function(data) {
        var exercicio = "";
        exercicio += '<option value="" disabled selected>Selecione...</option>';
        $.each($.parseJSON(data), function(chave, valor) {
            exercicio += '<option value="' + valor.id_exercicio + '">' + valor.nome + '</option>';
        });
        $('#exercicio').html(exercicio);
    })
});