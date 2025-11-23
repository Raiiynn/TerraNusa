import { Sequelize } from "sequelize";
import db from "../config/Database.js";

const {DataTypes} = Sequelize;

const User = db.define('users', {
    name: {
        type: DataTypes.STRING,
        allowNull: false
    },
    email: {
        type: DataTypes.STRING,
        allowNull: false
    },
    password: {       
        type: DataTypes.STRING,
        allowNull: false
    }
}, {
    freezeTableName: true
});



(async()=>{
    await db.sync({alter: true}); 
})();

export default User;

(async()=>{
    await db.sync();
})();