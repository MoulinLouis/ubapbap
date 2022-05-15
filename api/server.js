import express from 'express';
import cors from 'cors';

import routes from './routes/index.js';
import models from './models/index.js';

// Constants
const PORT = 8080;
const HOST = '0.0.0.0';

// App
const app = express();

app.use(cors());

app.get('/', (req, res) => {
  res.send('Hello woqzdrld');
});

app.use((req, res, next) => {
  req.context = {
    models,
    me: models.users[1],
  };
  next();
});

app.use('/health', routes.health);

app.listen(PORT, HOST);
console.log(`Running on http://${HOST}:${PORT}`);
