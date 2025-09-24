# Comandos usados para o projeto Microblog

## Modelagem conceitual

### Criar o banco de dados

### Criar a tabela usuarios

### Criar a tabela noticias


```sql
CREATE DATABASE microblog_elioise CHARACTER SET utf8mb4;
```

```sql
    CREATE TABLE usuario(
        id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        nome VARCHAR (100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        senha VARCHAR(225) NOT NULL,
        tipo ENUM('admin','editor') NOT NULL

    );
```

```sql
CREATE TABLE noticias(
    id  INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    titulo VARCHAR(100) NOT NULL,
    resumo TEXT NOT NULL,
    texto TEXT NOT NULL,
    imagem VARCHAR(50)NOT NULL,
    data DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    usuario_id INT NOT NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuario(id)
);
```