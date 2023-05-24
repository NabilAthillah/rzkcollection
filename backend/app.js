const express = require('express');
const bodyParser = require('body-parser');
const path = require('path')
const app = express();

app.use(bodyParser.json())

const productRouter = require('./routes/product')
app.use('/product', productRouter)

module.express = app;