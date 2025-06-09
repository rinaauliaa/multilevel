
const mysql = require("mysql");

const db = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "crud_js"
});

db.connect((err) => {
  if (err) throw err;
  console.log("✅ Terhubung ke MySQL");
});

module.exports = db;
