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
db.movie.find({year: 1999})
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
