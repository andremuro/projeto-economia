Formulário de Transação com Upload de Arquivo em Docker
Este projeto cria um ambiente Docker para um sistema de cadastro de transações financeiras com upload de arquivo (nota fiscal), desenvolvido em PHP com Apache. O sistema recebe informações como entrada, saída, data de criação, descrição e permite o upload de um arquivo de anexo.

Estrutura do Projeto
A estrutura do projeto é a seguinte:

/meu-projeto
├── docker-compose.yml
├── Dockerfile
├── public/
│   ├── index.php
│   ├── processa_transacao.php
│   └── uploads/ (diretório para os uploads)


Explicação:
docker-compose.yml: Define os serviços para subir o ambiente com PHP e Apache.
Dockerfile: Configura o contêiner com PHP e Apache, além de habilitar as extensões necessárias.
public/index.php: O formulário HTML onde os dados são inseridos.
public/processa_transacao.php: O script que processa os dados do formulário e faz o upload do arquivo.
uploads/: Diretório onde os arquivos de nota fiscal são salvos.


Passos para Instalação
Pré-requisitos:
Docker e Docker Compose instalados na máquina.

1. Clonar o Repositório
    Clone o projeto do GitHub (ou baixe o código) e navegue até o diretório do projeto.

2. Estruturação do Projeto
    Crie a estrutura de arquivos e diretórios conforme o layout acima, onde:
        O arquivo docker-compose.yml define a configuração de serviços como o mapeamento de portas e volumes entre o host e o contêiner.
        O Dockerfile configura o ambiente, instalando extensões necessárias do PHP e configurando permissões para o diretório de uploads.
        O diretório public/ conterá os arquivos PHP que servem o formulário HTML e o script de processamento do upload.
        O diretório uploads/ armazenará os arquivos de notas fiscais anexadas no formulário.

3. Build e Execução do Ambiente Docker
    Depois de definir os arquivos e a estrutura de diretórios:
        Build do contêiner: Execute o comando para construir a imagem Docker do projeto.

            docker-compose build

        Iniciar o ambiente: Depois de construir a imagem, inicie o contêiner com o comando adequado para subir o ambiente Docker.

            docker-compose up


4. Acessar o Formulário
    Após o ambiente estar em execução, o formulário de cadastro poderá ser acessado no navegador, no endereço http://localhost:8080. Esse formulário permitirá o cadastro de transações financeiras com upload de arquivos de nota fiscal.

5. Detalhes Adicionais
    Uploads: Os arquivos enviados através do formulário serão armazenados no diretório uploads/.
    Diretório de Uploads: Certifique-se de que o diretório uploads tenha as permissões adequadas, tanto no contêiner quanto no sistema de arquivos do host.

6. Finalizar o Contêiner
    Quando quiser parar o contêiner em execução, utilize o comando apropriado para encerrar o serviço e liberar os recursos do Docker.

Observações
    O projeto foi testado com PHP 8.1 e Apache. Caso utilize outra versão do PHP, você pode ajustar o arquivo Dockerfile conforme necessário.
    O diretório uploads deve ter as permissões corretas no ambiente de produção para permitir o upload e armazenamento dos arquivos.