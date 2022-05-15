// import { Router } from 'express';
import express from 'express';

const router = express.Router();

router.get('/', (req, res) => {
    const healthcheck = {
        uptime: process.uptime(),
        message: "OK",
        timestamp: Date.now(),
    };
    console.log(req)
    res.send(Object.values(req.context.models.items));
});

export default router;