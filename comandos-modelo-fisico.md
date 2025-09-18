# Referência de comandos SQL para Modelagem física

## Projeto: Fly By Night - Gerenciamento de Estoque

```sql
--Isso é comentario
-- Criação do banco de dados UTF8
Create DATABASE flybynight_elioise CHARACTER SET utf8mb4;
```


```sql
-- Criação da tabela de Fornecedores
CREATE TABLE fornecedores(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR (100) NOT NULL
);
```

```sql
CREATE TABLE produtos(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT,
    preco DECIMAL(10,2) NOT NULL,
    fornecedor_id INT NOT NULL,


    -- E aqui, transformas fornecedor_id em uma CHAVE ESTRANGEIRA
    --que faz REFERÊNCIA á CHAVE PRÍMARIA (id) de outra tabela
    --(fornecedores)
    FOREIGN KEY (fornecedor_id) REFERENCES fornecedores(id)
);
```