# WORKSI - CLINIC HISTORY

Repositorio del proyecto

## Reglas

### Indentacion de codigo

Ejemplo de una funcion indentada (no tener en cuenta los -)

```
function nombre() {
--$algo
--if(algo) {
---$algo
--}
}

```

### Documentacion

Comentar o realizar un breve resumen de lo que se realizo en el codigo

```
// Ejemplo de comentario

function nombre() {
  $algo
  if(algo) {
    $algo
  }
}
```

### Nombre de funciones 

Las funciones que solo se comuniquen entre si, el nombre debe ser igual por ejemplo:

```
// Controller

function getNombre() {
  $algo
  if(algo) {
    $algo
  }
}

// View

function getNombre() {
  $algo
  if(algo) {
    $algo
  }
}
```

Si se realiza un select el nombre de la funcion debe empezar con get, si se realiza un insert o update debe empezar con set

```
// Ejemplo de comentario

function getNombre() {
  $algo
  if(algo) {
    $algo
  }
}

function setNombre() {
  $algo
  if(algo) {
    $algo
  }
}
```

