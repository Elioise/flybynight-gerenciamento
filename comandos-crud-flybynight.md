# Comandos CRUD para o projeto Fly By Night
 C -> CREATE -> INSERT (INSERIR/CADASTRAR)

```sql
INSERT INTO fornecedores (nome)  VALUES ('Electrônicos Tabajara');

INSERT INTO fornecedores (nome) VALUES 
('Games ABCD'), ('Supermercado tem de tudo'), ('Livraria Demais da contra');
```


## Inserindo produtos

```sql

INSERT INTO  produtos (nome, descricao, preco, quantidade, fornecedor_id) VALUES (
    'Smartphone Galaxy S23', 'Equipamento com sistema Android e câmera Full HD', 1599.50,  20, 1
);


INSERT INTO  produtos (nome, descricao, preco, quantidade, fornecedor_id) VALUES (
    'TV Led', 'Tela de 50 polegadas, resolução 4k, 4 entradas HDMI e etc e tal', 3420,  12, 1
);


INSERT INTO  produtos (nome, descricao, preco, quantidade, fornecedor_id) VALUES (
    'Senhor dos Anéis: As Duas Torres', 'Volume 2 da série de livros criados pelo autor J.R.R. Tolkien', 80.99,  100, 4
);
```

 ## Inserido Lojas

 ```sql
 INSERT INTO lojas  (nome) VALUES
 ('Casa Bahia'), ('Shopping Zona Leste'), ('Bazar das Coisas'), ('Americanas')
```

## Inserido Estoque de produtos pra cada loja

```sql
INSERT INTO lojas_produtos (loja_id, produto_id, estoque) VALUES (4,2,3),
(4, 3, 30), (1, 2,10), (4, 1, 5);

```