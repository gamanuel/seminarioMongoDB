# seminarioMongoDB

## Ejercicio Clase 1:

### Create collection:
```
db.createCollection("players")
```
### Insert player:
```
db.players.insert({name: "Manuel", lastName:"Garcia Amaro",position: "9", dateBirth: Date('Jun 8, 1999')})
db.players.insert({name: "Agustin", lastName:"Garcia Amaro",position: "5", dateBirth: Date('Jun 8, 2000')})
db.players.insert({name: "Manuel", lastName:"Rivas",position: "3", dateBirth: Date('Jun 8, 1999')})
db.players.insert({name: "Roberto", lastName:"Garcia",position: "4", dateBirth: Date('Jun 8, 1985')})
db.players.insert({name: "Lionel", lastName:"Messi",position: "10", dateBirth: Date('Jun 8, 1985')})
```
### Find players
```
db.players.find()
```

### Create collection:

```
db.createCollection("teams")
```
### Insert team:
```
db.teams.insert({name: "Barcelona", city:"Barcelona", awards: 20, sponsor: "Adidas"})
db.teams.insert({name: "Boca", city:"Buenos Aires", awards: 10})
db.teams.insert({name: "Real Madrid", city:"Madrid", awards: 27, sponsor: "Nike"})
```
### Find teams
```
db.teams.find()
```

### Create collection:
```
db.createCollection("games")
```
### Insert games:
```
db.games.insert({team1: "Barcelona", team2:"Real Madrid", date: Date('Jun 8, 2020')})
db.games.insert({team1: "Boca", team2:"Real Madrid", date: Date('Jun 20, 2020')})
db.games.insert({team1: "Barcelona", team2:"Boca", date: Date('Jul 8, 2021')})
```
### Find games
```
db.games.find()
```

## Ejercicio Clase 2:

### Create collection:
```
db.createCollection("movie")
```
### Insert Movie:
```
 db.movie.insert({
     title:"Titanic", 
     year: 1998, 
     rating: 1.0, 
     genre:"Drama",
     description:"Titanic​ fue un transatlántico británico, el mayor barco de pasajeros del mundo al finalizar su construcción",
     actors: ["Leonardo","Ricardo","Sofia"],
     country: "EEUU",
     income: 1000000,
     duration: 178
})

```

### Insert (One) Movie:
```
 db.movie.insertOne({
     title:"Harry Potter", 
     year: 1999, 
     rating: 5.0, 
     genre:"Ciencia Ficcion",
     description:"Harry Potter es una serie de novelas fantásticas escrita por la autora británica J. K. Rowling",
     actors: ["Daniel","Emma","Rupert"],
     country: "Reino Unido",
     income: 5000000,
     duration: 178
})

```

### Insert (Many) Movie:
```
 db.movie.insertMany([{
     title:"Star Wars 1", 
     year: 1999, 
     rating: 4.2, 
     genre:"Ciencia Ficcion",
     description:"Obi-Wan Kenobi es un joven aprendiz caballero Jedi bajo la tutela de Qui-Gon Jinn",
     actors: ["Hayden","Ewan","Natalie"],
     country: "Reino Unido",
     income: 5000000,
     duration: 178
},
{
     title:"Star Wars 3", 
     year: 1999, 
     rating: 5.0, 
     genre:"Ciencia Ficcion",
     description:"Seducido por el lado oscuro, Anakin Skywalker se rebela contra su mentor, Obi-Wan Kenobi, y se convierte en Darth Vader.",
     actors: ["Hayden","Ewan","Natalie"],
     country: "Reino Unido",
     income: 5000000,
     duration: 178
}
])

```

### Actualizar películas agregando el field highlighted=true a aquellas con rating > 4.5:
```
 db.movie.updateMany(
    { rating: {$gt: 4.5} },
    { 
    $set: {
        highlighted: true
    }
})

```

### Actualizar películas cambiando el genre “drama” por “bored”:
```
db.movie.updateMany(
    { genre: "Drama" },
    { 
    $set: {
        genre: "Bored"
    }
})
```

### Borrar todas las películas que tengan más de 30 años:
```
db.movie.deleteMany({year: {$lt: 2020 - 30 }})
```

### Buscar todas las películas argentinas:
```
db.movie.find({country: "Argentina"})
```

### Buscar todas las películas de acción con un buen rating (ej. > 4.0) que hayan salido los últimos 2 años:
```
db.movie.find({genre: "Accion",rating: {$gt: 4.0},year:{$gte: 2020 - 2}})
```





