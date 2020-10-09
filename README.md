# seminarioMongoDB

## Ejercicio Clase 1:

### Create collection:
__db.createCollection("players")__
### Insert player:
db.players.insert({name: "Manuel", lastName:"Garcia Amaro",position: "9", dateBirth: Date('Jun 8, 1999')})\
db.players.insert({name: "Agustin", lastName:"Garcia Amaro",position: "5", dateBirth: Date('Jun 8, 2000')})\
db.players.insert({name: "Manuel", lastName:"Rivas",position: "3", dateBirth: Date('Jun 8, 1999')})\
db.players.insert({name: "Roberto", lastName:"Garcia",position: "4", dateBirth: Date('Jun 8, 1985')})\
db.players.insert({name: "Lionel", lastName:"Messi",position: "10", dateBirth: Date('Jun 8, 1985')})\
### Find players
__db.players.find()__\

### Create collection:
__db.createCollection("teams")__
### Insert team:
__db.teams.insert({name: "Barcelona", city:"Barcelona", awards: 20, sponsor: "Adidas"})__\
__db.teams.insert({name: "Boca", city:"Buenos Aires", awards: 10})__\
__db.teams.insert({name: "Real Madrid", city:"Madrid", awards: 27, sponsor: "Nike"})__\
### Find players
__db.teams.find()__

### Create collection:
__db.createCollection("games")__
### Insert games:
__db.games.insert({team1: "Barcelona", team2:"Real Madrid", date: Date('Jun 8, 2020')})__\
__db.games.insert({team1: "Boca", team2:"Real Madrid", date: Date('Jun 20, 2020')})__\
__db.games.insert({team1: "Barcelona", team2:"Boca", date: Date('Jul 8, 2021')})__\
### Find games
__db.games.find()__

