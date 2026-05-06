class TabelaInterativa{
    #config;
    #tabela;
    #corpoTabela;
    #campoFiltro;

    constructor(config){
        this.#config = config;
    }

    iniciar(){
        this.#tabela = document.getElementById(this.#config.tabelaId);
        this.#campoFiltro = document.getElementById(this.#config.filtroId);
        this.#corpoTabela = this.#tabela.querySelector('tbody');

        this.#campoFiltro.addEventListener('input',()=>{
            this.#filtrar();
        });
    }

    #filtrar(){
        const termo = this.#campoFiltro.value.toLowerCase();
        const linhas = this.#corpoTabela.querySelectorAll('tr');

        linhas.forEach((linha)=>{
            let texto;
        });


    }
}