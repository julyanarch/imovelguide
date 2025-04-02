function validarFormulario() {
    let cpf = document.getElementById("cpf").value.trim();
    let creci = document.getElementById("creci").value.trim();
    let nome = document.getElementById("nome").value.trim();
    let errorMessage = document.getElementById("error-message");

    if (cpf.length !== 11) {
        errorMessage.textContent = "O CPF deve conter 11 caracteres.";
        return;
    }
    if (creci.length < 2) {
        errorMessage.textContent = "O Creci deve conter pelo menos 2 caracteres.";
        return;
    }
    if (nome.length < 2) {
        errorMessage.textContent = "O Nome deve conter pelo menos 2 caracteres.";
        return;
    }

    errorMessage.textContent = "";
    alert("Cadastro realizado com sucesso!");
}
