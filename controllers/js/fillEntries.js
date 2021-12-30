//Selecionando os inputs para popular com os intens da api e com a funcao 
//de calculo de idade.
const data = document.querySelector("#data");
const cep = document.querySelector("#cep");
//funcao para buscar os dados pelo fetch e popular os campos dinamicamente com
//o ID sendo o mesmo que o nome da Key do JSON(GET)-RECEBIDO
const CamposCep = (campos) => {
    for (const campo in campos) {
        if (document.querySelector("#" + campo)) {
            document.querySelector("#" + campo).value = campos[campo];
        }

    }

}
//Adcionando o evento de blur logo assim que a pessoa clicar em outro campo 
// O evento ira adcionar o valor do campo do input recebido pela Req-FETCH(GET)
cep.addEventListener('blur', (e) => {
    let cepClean = cep.value.replace("-", "");


    const Options = {
        method: 'GET',
        mode: 'cors',
    }
    //conexao realizada com a api esperando uma resposta pelo .then( ) com os dados solicitados.
    fetch(`https://viacep.com.br/ws/${cepClean}/json/`, Options)
        .then(resp => {
            resp.json().then(DadosCep => CamposCep(DadosCep))
        })
        .catch(cepClean = 01001000);

})
//Funcao de evento adcionando a idade em seu campo de input por meio de uma operacao basica 
//de calculo do ano selecionado menos a data atual do navegador.
data.addEventListener('blur', (e) => {
    const agora = new Date(Date.now()).getFullYear();
    const dataClean = new Date(data.value).getFullYear();
    document.querySelector("#idade").value = agora - dataClean;

})