const express = require('express')
const app = express()
const port = 80

app.get('/', (req, res) => {
  res.send('Hello World!')
  res.send('Voilà cheh ça a changé')
})

app.listen(port, () => {
  console.log(`Example app listening at http://localhost:${port}`)
})
