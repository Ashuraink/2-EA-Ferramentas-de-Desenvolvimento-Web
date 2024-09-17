// Validação do formulário
document.getElementById('cadastroForm').addEventListener('submit', function(event) {
  let valid = true;

  // Validação do campo Nome
  const nome = document.getElementById('nome');
  if (nome.value.trim() === "") {
      document.getElementById('errorNome').innerText = "Por favor, preencha o campo Nome.";
      valid = false;
  } else {
      document.getElementById('errorNome').innerText = "";
  }

  // Validação do campo E-mail
  const email = document.getElementById('email');
  if (email.value.trim() === "") {
      document.getElementById('errorEmail').innerText = "Por favor, preencha o campo E-mail.";
      valid = false;
  } else {
      document.getElementById('errorEmail').innerText = "";
  }

  // Validação da Data de Nascimento
  const dataNascimento = document.getElementById('dataNascimento');
  if (dataNascimento.value.trim() === "") {
      document.getElementById('errorDataNascimento').innerText = "Por favor, preencha a Data de Nascimento.";
      valid = false;
  } else {
      document.getElementById('errorDataNascimento').innerText = "";
  }

  // Validação do campo Residência
  const residencia = document.getElementById('residencia');
  if (residencia.value.trim() === "") {
      document.getElementById('errorResidencia').innerText = "Por favor, preencha o campo Residência.";
      valid = false;
  } else {
      document.getElementById('errorResidencia').innerText = "";
  }

  // Validação das Preferências de Alimentação
  const preferencias = document.getElementById('preferencias');
  if (preferencias.value === "") {
      document.getElementById('errorPreferencias').innerText = "Por favor, selecione uma preferência de alimentação.";
      valid = false;
  } else {
      document.getElementById('errorPreferencias').innerText = "";
  }

  // Se houver algum erro, evitar o envio do formulário
  if (!valid) {
      event.preventDefault();
  }
});
