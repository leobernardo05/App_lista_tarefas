# 📋 App Lista de Tarefas

Sistema Web desenvolvido em PHP utilizando o padrão MVC para gerenciamento de tarefas.

Projeto desenvolvido durante o curso **Desenvolvimento Web Completo** (Udemy), com diversas melhorias implementadas.

---

## 📸 Demonstração

O sistema permite:

- ✅ Cadastrar tarefas
- ✏️ Editar tarefas
- 🗑️ Excluir tarefas
- ✔️ Marcar tarefas como realizadas
- 📋 Visualizar todas as tarefas
- ⏳ Visualizar somente tarefas pendentes

---

## 🚀 Tecnologias utilizadas

- PHP 8
- HTML5
- CSS3
- Bootstrap 4
- JavaScript
- MySQL
- PDO
- Git
- GitHub

---

## 📂 Estrutura do projeto

```
App_lista_tarefas
│
├── app_lista_tarefas
│   ├── css
│   ├── img
│   ├── index.php
│   ├── nova_tarefa.php
│   ├── todas_tarefas.php
│   └── tarefa_controller.php
│
├── app_lista_tarefas_protegido
│   ├── conexao.php
│   ├── tarefa.model.php
│   ├── tarefa.service.php
│   └── tarefa_controller.php
│
└── README.md
```

---

## Funcionalidades

### Cadastro de tarefas

Permite inserir novas tarefas no banco de dados.

---

### Atualização

Permite editar uma tarefa existente diretamente na página.

---

### Exclusão

Permite excluir uma tarefa definitivamente do banco de dados.

---

### Conclusão

Permite alterar o status da tarefa para **Realizada**.

---

### Filtro de tarefas

Exibe apenas tarefas pendentes na tela inicial.

---

## Banco de Dados

Tabela principal:

```
tb_tarefas
```

Campos:

| Campo | Tipo |
|-------|------|
| id | INT |
| tarefa | VARCHAR |
| id_status | INT |

Tabela de status:

```
tb_status
```

| id | status |
|----|---------|
|1|Pendente|
|2|Realizada|

---

## Arquitetura

O projeto utiliza uma arquitetura semelhante ao padrão MVC.

### Model

```
tarefa.model.php
```

Responsável pelos atributos da tarefa.

---

### Service

```
tarefa.service.php
```

Responsável pelas operações de banco de dados:

- Inserir
- Atualizar
- Remover
- Recuperar
- Recuperar pendentes
- Marcar como realizada

---

### Controller

```
tarefa_controller.php
```

Responsável por receber as requisições e executar as ações.

---

### View

- index.php
- nova_tarefa.php
- todas_tarefas.php

---

## Como executar

Clone o projeto

```bash
git clone https://github.com/leobernardo05/App_lista_tarefas.git
```

Entre na pasta

```bash
cd App_lista_tarefas
```

Configure o banco de dados MySQL.

Altere os dados de conexão em:

```
app_lista_tarefas_protegido/conexao.php
```

Importe o banco de dados.

Execute utilizando XAMPP, WAMP ou Laragon.

---

## Melhorias implementadas

- CRUD completo
- Organização em camadas
- Utilização de PDO
- Consultas preparadas
- Separação do backend protegido
- Interface responsiva com Bootstrap
- Manipulação dinâmica do DOM com JavaScript

---

## Autor

**Leonardo Bernardo**

GitHub:

https://github.com/leobernardo05

LinkedIn:
https://www.linkedin.com/in/leonardo0503/

---

## Licença

Projeto desenvolvido para fins de estudo.