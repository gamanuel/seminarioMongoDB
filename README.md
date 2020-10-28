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

## Ejercicio Clase 3:

### Utilizar la misma base de datos de películas e insertar varias películas con distinto contenido:
```
 db.movie.insertMany([{
     title:"Rapidos y Furiosos 1", 
     year: new Date("2001-01-01"), 
     rating: 4.2, 
     genre:"Accion",
     description:"El exconvicto Dominic Toretto se une a su viejo adversario, Brian O'Conner",
     actors: ["Paul Walker","Vin Diesel","Gal Gadot"],
     country: "EEUU",
     income: 8000000,
     duration: 178
},
{
     title:"Rapidos y Furiosos 2", 
     year:  new Date("2002-02-02"), 
     rating: 5.0, 
     genre:"Accion",
     description:"El exconvicto Dominic Toretto se une a su viejo adversario, Brian O'Conner",
     actors: ["Paul Walker","Vin Diesel","Gal Gadot"],
     country: "EEUU",
     income: 8000000,
     duration: 178
},
{
     title:"Rapidos y Furiosos 3", 
     year:  new Date("2003-03-03"), 
     rating: 5.0, 
     genre:"Accion",
     description:"El exconvicto Dominic Toretto se une a su viejo adversario, Brian O'Conner",
     actors: ["Paul Walker","Vin Diesel","Gal Gadot"],
     country: "EEUU",
     income: 8000000,
     duration: 178
},
{
     title:"Rapidos y Furiosos 4", 
     year:  new Date("2004-04-04"), 
     rating: 5.0, 
     genre:"Accion",
     description:"El exconvicto Dominic Toretto se une a su viejo adversario, Brian O'Conner",
     actors: ["Paul Walker","Vin Diesel","Gal Gadot"],
     country: "EEUU",
     income: 8000000,
     duration: 178
},
{
     title:"Rapidos y Furiosos 5", 
     year:  new Date("2005-05-05"), 
     rating: 5.0, 
     genre:"Accion",
     description:"El exconvicto Dominic Toretto se une a su viejo adversario, Brian O'Conner",
     actors: ["Paul Walker","Vin Diesel","Gal Gadot"],
     country: "EEUU",
     income: 8000000,
     duration: 178
},
{
     title:"Rapidos y Furiosos 6", 
     year:  new Date("2006-06-06"), 
     rating: 5.0, 
     genre:"Accion",
     description:"El exconvicto Dominic Toretto se une a su viejo adversario, Brian O'Conner",
     actors: ["Paul Walker","Vin Diesel","Gal Gadot"],
     country: "EEUU",
     income: 8000000,
     duration: 178
},
{
     title:"Rapidos y Furiosos 7", 
     year:  new Date("2008-07-07"), 
     rating: 5.0, 
     genre:"Accion",
     description:"El exconvicto Dominic Toretto se une a su viejo adversario, Brian O'Conner",
     actors: ["Paul Walker","Vin Diesel","Gal Gadot"],
     country: "EEUU",
     income: 8000000,
     duration: 178
},
{
     title:"Hancock", 
     year:  new Date("2008-08-08"), 
     rating: 5.0, 
     genre:"Accion",
     description:"Un superhéroe bastante impopular protege a los ciudadanos de Los Ángeles, pero provoca grandes daños colaterales después de cada acto heroico que realiza.",
     actors: ["Will Smith"],
     country: "EEUU",
     income: 8000000,
     duration: 178
}
])

```

### Listar todas las películas del año 2018:
```

```


### Listar las 10 primeras películas de Hollywood:
```
db.movie.find({country: "EEUU"}).sort({ year: 1}).limit(10)

```

### Listar las 5 películas más taquilleras:
```
db.movie.find().sort({ income: -1}).limit(5)

```

### Listar el 2do conjunto de 5 películas más taquilleras:
```
db.movie.find().sort({ income: -1}).skip(5).limit(5)

```
### Repetir query 3 y 4 pero retornando sólo el título y genre:
```
db.movie.find({country: "EEUU"}, {title:1,genre:1}).sort({ year: 1}).limit(10)

db.movie.find({}, {title:1,genre:1}).sort({ income: -1}).limit(5)

```

### Mostrar los distintos países que existen en la base de datos:
```
db.movie.distinct("country")

```





