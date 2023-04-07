const { response } = require('express')
const express = require('express')
const path = require('path')
const app = express()

app.use(express.static(__dirname + '\\..\\public'))

app.get('/', (request, response)=>{
    const filepath = path.join(__dirname + '\\..\\index.html');
    response.sendFile(filepath)})

app.get('/login', (request, response)=>{
    response.send('<h1>book</h1>')
})

app.get('/users', (request, response)=>{
    response.json(people)
})

const PORT = 3001
app.listen(PORT,() =>{
    console.log( `Server running on port ${PORT}`)
})

let people = [
    {
        name: "Hannah Rickard",
        number: "06-50-99-56-83",
        id: 1
    },
    {
        name: "Hyun Namkoong",
        number: "10110726",
        id: 2
    }
]

