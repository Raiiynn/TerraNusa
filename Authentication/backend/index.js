import express from "express";
import cors from "cors";
import dotenv from "dotenv";
import db from "./config/Database.js";
import router from "./routes/UserRoute.js";
import session from "express-session";
import { Sequelize } from "sequelize";
import UserRoute from './routes/UserRoute.js'

dotenv.config();
const app = express();

try {
    await db.authenticate();
    console.log('Database Connected...');
} catch (error) {
    console.error(error);
}

app.use(cors());
app.use(express.json());
app.use(router);

app.listen(8080, ()=> console.log('Server running at port 8080'));