// Espera a página carregar
document.addEventListener("DOMContentLoaded", () => {

    // Seleciona o formulário
    const form = document.querySelector("form");

    // Verifica se existe formulário na tela
    if(form){

        form.addEventListener("submit", (event) => {

            // Pega os campos
            const nome = document.querySelector("input[name='nome']").value;
            const email = document.querySelector("input[name='email']").value;

            // Validação simples
            if(nome.trim() === "" || email.trim() === ""){
                event.preventDefault();

                alert("Preencha todos os campos!");
            }

        });

    }

});
