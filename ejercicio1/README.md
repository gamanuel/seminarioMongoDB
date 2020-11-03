
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
