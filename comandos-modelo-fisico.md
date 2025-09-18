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
    -- que faz REFERÊNCIA á CHAVE PRÍMARIA (id) de outra -- tabela
    -- (fornecedores)
    FOREIGN KEY (fornecedor_id) REFERENCES fornecedores(id)
);
```

```sql
-- Criação da tabela de Lojas
CREATE TABLE lojas(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR (100) NOT NULL
);
```



```sql

CREATE TABLE lojas_produtos(
    loja_id INT NOT NULL,
    produto_id INT NOT NULL,
    estoque     INT NOT NULL,
   

   -- Criando uma CHAVE PRÍMARIA COMPOSTA, ou seja,
   -- baseada em mais de uma coluna/campo
   PRIMARY KEY(loja_id, produto_id),
    -- Se na tabela de lojas uma loja for excluida,
    -- aqui na tabela lojas_produtos TODOS OS REGISTROS -- de estoque desta loja excluída TAMBEM SERÃO  
    -- EXCLUÍDOS.
   FOREIGN KEY (loja_id) REFERENCES lojas(id) ON DELETE CASCADE,

   -- Ao tentar excluir um produto, se este produto está -- sendo usando em algum registro de estoque, NÃO 
   -- PODEMOS PERMITIR a exclusão! [isso já é o padrão]
      FOREIGN KEY (produto_id) REFERENCES produtos(id)

);
```