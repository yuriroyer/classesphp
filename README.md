# Crude PHP
Essas duas classes foram criadas para facilitar o CRUD em PHP

para utilizar as classes importe  no arquivo PHP:

```php
require_once 'ConnDB.class.php';
require_once 'ClasseGenerica.class.php';

$classeGenerica = new ClasseGenerica();
```

Com o objeto $classeGenerica criado acesse os métodos, ex:

Selecionar

```php
$select = $classeGenerica->selectClasseGenerica('*', 'CLAUSULA_WHERE', arra(ARRAY COM ARGS));
```

Inserir

```php
$insert = $classeGenerica->insertClasseGenerica('atributo1 = ?, atributo2 = ?, atributo3 = ?', array($atributo1, $atributo2, $atributo3));
```

atualizar

```php
$update = $classeGenerica->updateClasseGenerica('atributo1 = ?, atributo2 = ?, atributo3 = ? WHERE id = ?', array($atributo1, $atributo2, $atributo3, $id));
```

