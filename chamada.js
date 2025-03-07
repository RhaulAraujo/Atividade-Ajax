document.getElementById("btnExibir").addEventListener("click", function() {
    fetch('dados.php')
        .then(response => response.json())
        .then(usuarios => {
            const userInfoDiv = document.getElementById("userInfo");
            userInfoDiv.innerHTML = "";

            usuarios.forEach(usuario => {
                userInfoDiv.innerHTML += `
                    <p>
                        <strong>${usuario.saudacao}</strong><br>
                        <strong>Nome:</strong> ${usuario.nome}<br>
                        <strong>CPF:</strong> ${usuario.cpf}<br>
                        <strong>Telefone:</strong> ${usuario.telefone}<br>
                        <strong>Sexo:</strong> ${usuario.sexo}
                    </p>
                    <hr>
                `;
            });
        })
        .catch(error => {
            console.error('Erro ao buscar usuários:', error);
            document.getElementById("userInfo").innerHTML = "Erro ao carregar usuários.";
        });
});
