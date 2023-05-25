import { Sequelize } from 'sequelize';

const db = new Sequelize('rzkcollection', 'root', '', {
    host: 'localhost',
    dialect:'mysql'
})

export default db;