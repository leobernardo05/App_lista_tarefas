# 📋 App Lista de Tarefas - Front-end

Interface web da aplicação **App Lista de Tarefas**, desenvolvida em PHP com HTML, CSS, Bootstrap e JavaScript.

Este repositório contém apenas a camada de apresentação (Views) da aplicação. Toda a lógica de negócio, controle e acesso ao banco de dados está disponível em um repositório separado.

## 🔗 Repositório do Back-end

**Backend:** https://github.com/leobernardo05/App_lista_tarefas_back-end

---

# 📸 Funcionalidades

A aplicação permite:

* ✅ Cadastrar tarefas
* ✏️ Editar tarefas
* 🗑️ Excluir tarefas
* ✔️ Marcar tarefas como realizadas
* 📋 Listar todas as tarefas
* ⏳ Visualizar apenas tarefas pendentes
* 🎨 Interface responsiva utilizando Bootstrap

---

# 🚀 Tecnologias Utilizadas

* PHP 8
* HTML5
* CSS3
* Bootstrap 4
* JavaScript
* Git
* GitHub

---

# 📂 Estrutura do Projeto

```
app_lista_tarefas_public
│
├── css/
├── img/
├── index.php
├── nova_tarefa.php
├── todas_tarefas.php
└── README.md
```

---

# 🖥️ Telas da Aplicação

## Página Inicial

* Exibição das tarefas pendentes.

## Nova Tarefa

* Cadastro de uma nova tarefa.

## Todas as Tarefas

* Listagem completa das tarefas.
* Edição.
* Exclusão.
* Marcação como realizada.

---

# 🎯 Funcionalidades da Interface

### Cadastro

Permite inserir novas tarefas.

### Edição

Atualização dinâmica da tarefa sem sair da página.

### Exclusão

Remove permanentemente uma tarefa.

### Conclusão

Altera o status da tarefa para **Realizada**.

### Filtro

A tela inicial apresenta apenas tarefas pendentes.

---

# 🏗️ Arquitetura

Este projeto representa a camada de apresentação da aplicação.

As páginas comunicam-se com o backend através do controlador da aplicação.

---

# 📁 Arquivos Principais

| Arquivo           | Descrição                            |
| ----------------- | ------------------------------------ |
| index.php         | Página inicial com tarefas pendentes |
| nova_tarefa.php   | Cadastro de tarefas                  |
| todas_tarefas.php | Gerenciamento completo das tarefas   |

---

# 🔗 Integração com o Back-end

Para que a aplicação funcione corretamente, é necessário utilizar o backend disponível em:

**App Lista de Tarefas - Back-end**

https://github.com/leobernardo05/App_lista_tarefas_back-end

O backend é responsável por:

* conexão com o banco de dados;
* regras de negócio;
* operações CRUD;
* gerenciamento dos status das tarefas.

---

# ▶️ Como Executar

1. Clone este repositório:

```bash
git clone https://github.com/leobernardo05/App_lista_tarefas.git
```

2. Clone também o backend:

```bash
git clone https://github.com/leobernardo05/App_lista_tarefas_back-end.git
```

3. Configure o XAMPP.

4. Configure a conexão com o banco de dados no backend.

5. Importe o banco de dados MySQL.

6. Execute o projeto pelo navegador.

---

# 📈 Melhorias Implementadas

* Interface responsiva
* CRUD completo
* Manipulação dinâmica do DOM com JavaScript
* Separação entre Front-end e Back-end
* Organização seguindo arquitetura MVC
* Navegação simples e intuitiva

---

# 👨‍💻 Autor

**Leonardo Bernardo**

GitHub:

https://github.com/leobernardo05

LinkedIn:

https://www.linkedin.com/in/leonardo0503/

---

# 📄 Licença

Este projeto foi desenvolvido para fins de estudo durante o curso **Desenvolvimento Web Completo** e aprimorado com funcionalidades adicionais para prática de PHP, JavaScript, MySQL e arquitetura MVC.
