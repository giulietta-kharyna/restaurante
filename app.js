/* eslint-disable */

function validaPrimNome(primNome) {
    if (!primNome || primNome.length < 2) {
        return false;
    }
    if (  !(primNome[0].toUpperCase() >= "A" && primNome[0].toUpperCase() <= "Z")  ) {
        return false;
    }
    return true;
}   

// print(validaPrimNome("Alberto"));
// print(validaPrimNome("alberto"));
// print(validaPrimNome("8lberto"));
// print(validaPrimNome("A"));
// print(validaPrimNome(""));
// print(validaPrimNome(null));
// print(validaPrimNome(undefined));
// print(validaPrimNome());

function validaEmail(email) {
    let i = email.indexOf("@");
    if ( !(i > 0 && i < email.length - 1)) {
        return false;
    }
    if (email.indexOf("@", i + 1) !== -1) {
        return false;
    }  
    return true;
}

// print("armando".indexOf("a"));
// print("armando".indexOf("a", 1));
// var email = "abc@xpto.com";
// var partes = email.split("@");
// var str = partes.join("//");

// var nomeCompleto = "Alberto Antunes Almeida";
// var nomes = nomeCompleto.split(" ");
// var novoNomeCompleto = nomes.join(",");

// var novoNomeCompleto = nomeCompleto.split(" ").join(",");

function validarCampo(idCampo) {
    // alert('Funçao validar campo chamada com id' + idCampo);
    let campo = document.getElementById(idCampo); // Representa o Input
    // vamos assumir que o objeto existe
    // alert(`Valor do campo ${idCampo} -> ${campo.value}`);
    if (!validaPrimNome(campo.value)) {
        alert(`Nome inválido -> ${campo.value}`);
        return false;
    }
    return true;
}

function validarCampo(idCampo) {
    // alert('Funçao validar campo chamada com id' + idCampo);
    let campo = document.getElementById(idCampo); // Representa o Input
    // vamos assumir que o objeto existe
    // alert(`Valor do campo ${idCampo} -> ${campo.value}`);
    if (!validaPrimNome(campo.value)) {
        campo.className += " fielderror";
        return false;
    }
    return true;
}