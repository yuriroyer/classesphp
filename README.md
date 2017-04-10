# Crude PHP
Essas duas classes foram criadas para facilitar o CRUD em PHP

para utilizar as classes import as classes no arquivo PHP:

```
require_once 'ConnDB.class.php';
require_once 'ClasseGenerica.class.php';

$classeGenerica = new ClasseGenerica();
```

Com o objeto $classeGenerica criado acesse os métodos, ex:

```
$select = $classeGenerica->insertClasseGenerica('*', 'CLAUSULA_WHERE', arra(ARRAY COM ARGS));
```