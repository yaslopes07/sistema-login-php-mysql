# Sistema de Autenticação com PHP e MySQL 

Este repositório contém um sistema de login dinâmico e funcional que realiza a integração direta entre uma interface Front-end (HTML5), lógica Back-end (PHP) e persistência de dados (Banco de Dados MySQL).

## Funcionalidades & Arquitetura
- **Interface de Usuário:** Formulário estruturado em HTML5 (`login.html`) para captura de credenciais através do método `POST`.
- **Comunicação com a Base de Dados:** Implementação de conexão ativa utilizando a extensão `mysqli` do PHP, configurada para ambientes locais de desenvolvimento (como XAMPP).
- **Validação de Credenciais:** Verificação lógica em tempo real. O sistema consulta a tabela de usuários e valida se as credenciais coincidem com os registros armazenados.

## Estrutura do Projeto
- `login.html`: Interface estruturada com o formulário de acesso.
- `conexao.php`: Script focado no teste de conectividade e listagem de teste da tabela local.
- `verificar_login.php`: Core do backend, responsável por receber os inputs, executar a query de seleção (`SELECT`) e ditar o fluxo de sucesso ou falha na autenticação.

## 🛠️ Notas de Desenvolvimento (Foco Acadêmico)
>  **Nota sobre Segurança:** Este projeto foi desenvolvido para fins puramente didáticos e de consolidação de conceitos de conectividade. A query SQL foi estruturada via concatenação direta de variáveis.
