import { Sequelize } from "sequelize";

const db =  new  Sequelize('terranusa', 'root', '', {
    host:'localhost',
    dialect:'mysql'
});

export default db;