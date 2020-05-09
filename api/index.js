const express = require('express')
const app = express()

app.get('*',(req,res) =>{
    console.log('HOLA MUNDO MI PRIMERA APLICACION SERVERLESS');
    res.send({message:'CHANCHITO FELIZ'})
})



module.exports = app