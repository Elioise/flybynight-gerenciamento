# Referência de comandos SQL para Modelagem física

## Projeto: Fly By Night - Gerenciamento de Estoque

```sql
Create DATABASE flybynight_elioise CHARACTER SET utf8mb4;
```


```sql
CREATE TABLE fornecedores(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR (100) NOT NULL
);
```