function calcularIMC() {
    
    nome = document.getElementById('nome').value;
    dataNascimento = document.getElementById('data-nascimento').value;
    peso = parseFloat(document.getElementById('peso').value);
    altura = parseFloat(document.getElementById('altura').value);
    
    if (nome && dataNascimento && !isNaN(peso) && !isNaN(altura)) {
        IMC = peso / (altura * altura);
        
        // idade
        const dataAtual = new Date();
        const nascimento = new Date(dataNascimento);

        let idade = dataAtual.getFullYear() - nascimento.getFullYear();
        const mesAtual = dataAtual.getMonth();
        const mesNascimento = nascimento.getMonth();

        // Ajustar a idade caso ainda não tenha feito aniversário no ano atual
        if (mesAtual < mesNascimento || (mesAtual === mesNascimento && dataAtual.getDate() < nascimento.getDate())) {
            idade--;
        }

        //fim idade

        //classificação
        classificao = 'Nada';
        switch (true) {
            case (IMC < 18.5):
                classificao = "Abaixo do peso"
                break;
            case (IMC < 24.9):
                classificao = "Peso normal"
                break;
            case (IMC < 29.9):
                classificao = "Acima do peso (sobrepeso)"
                break;
            case (IMC < 34.9):
                classificao = "Obsidade I"
                break;
            case (IMC < 39.9):
                classificao = "Obsidade II"
                break;
            default:
                classificao = "Obsidade III"
        }

        //escreve na tela
        document.getElementById('resultado').innerHTML =
        `${nome} você tem ${idade} anos, sua altura é ${altura}, seu peso é ${peso} e seu IMC é: ${IMC}. Pelo cálculo do IMC você está classificado como ${classificao}`


    }
    
    
}