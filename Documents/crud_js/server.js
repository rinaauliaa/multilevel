const express = require("express");
const cors = require("cors");
const bodyParser = require("body-parser");
const path = require("path");
const multer = require("multer");
const fs = require("fs");
const db = require("./koneksi"); // koneksi database MySQL

const app = express();
app.use(cors());
app.use(bodyParser.json());
app.use(express.static(path.join(__dirname, "public")));

// Setup multer untuk upload file dengan validasi tipe gambar
const storage = multer.diskStorage({
  destination: function (req, file, cb) {
    cb(null, path.join(__dirname, "public/uploads"));
  },
  filename: function (req, file, cb) {
    const uniqueName = Date.now() + "-" + file.originalname;
    cb(null, uniqueName);
  },
});

const upload = multer({
  storage: storage,
  fileFilter: (req, file, cb) => {
    const allowedTypes = /jpeg|jpg|png/;
    const extname = allowedTypes.test(path.extname(file.originalname).toLowerCase());
    const mimetype = allowedTypes.test(file.mimetype);
    if (extname && mimetype) {
      cb(null, true);
    } else {
      cb(new Error("Hanya file gambar (jpeg, jpg, png) yang diizinkan"));
    }
  },
});

// Fungsi hapus file foto lama
function hapusFileFoto(filename) {
  const filePath = path.join(__dirname, "public/uploads", filename);
  fs.unlink(filePath, (err) => {
    if (err) console.log("Gagal hapus file foto:", err);
  });
}

// GET semua user
app.get("/users", (req, res) => {
  db.query("SELECT * FROM users", (err, result) => {
    if (err) return res.status(500).send(err);
    res.json(result);
  });
});

// POST tambah user dengan foto
app.post("/users", upload.single("foto"), (req, res) => {
  const { nama } = req.body;
  const foto = req.file ? req.file.filename : null;

  db.query(
    "INSERT INTO users (nama, foto) VALUES (?, ?)",
    [nama, foto],
    (err, result) => {
      if (err) return res.status(500).send(err);
      res.json({ id: result.insertId, nama, foto });
    }
  );
});

// PUT update user, bisa update nama dan foto
app.put("/users/:id", upload.single("foto"), (req, res) => {
  const { id } = req.params;
  const { nama } = req.body;
  const foto = req.file ? req.file.filename : null;

  // Ambil dulu data lama untuk hapus foto lama jika ada
  db.query("SELECT foto FROM users WHERE id = ?", [id], (err, results) => {
    if (err) return res.status(500).send(err);
    if (results.length === 0) return res.status(404).json({ message: "User tidak ditemukan" });

    const fotoLama = results[0].foto;

    let query, params;
    if (foto) {
      query = "UPDATE users SET nama = ?, foto = ? WHERE id = ?";
      params = [nama, foto, id];
    } else {
      query = "UPDATE users SET nama = ? WHERE id = ?";
      params = [nama, id];
    }

    db.query(query, params, (err) => {
      if (err) return res.status(500).send(err);

      // Jika update foto, hapus foto lama
      if (foto && fotoLama) {
        hapusFileFoto(fotoLama);
      }

      res.json({ id, nama, ...(foto && { foto }) });
    });
  });
});

// DELETE user dan hapus file foto jika ada
app.delete("/users/:id", (req, res) => {
  const { id } = req.params;

  db.query("SELECT foto FROM users WHERE id = ?", [id], (err, results) => {
    if (err) return res.status(500).send(err);
    if (results.length === 0) return res.status(404).json({ message: "User tidak ditemukan" });

    const fotoLama = results[0].foto;

    db.query("DELETE FROM users WHERE id = ?", [id], (err) => {
      if (err) return res.status(500).send(err);

      if (fotoLama) hapusFileFoto(fotoLama);

      res.json({ message: "User dihapus" });
    });
  });
});

// Error handling khusus multer, agar respons JSON saat gagal upload file
app.use((err, req, res, next) => {
  if (
    err instanceof multer.MulterError ||
    (err.message && err.message.includes("Hanya file gambar"))
  ) {
    return res.status(400).json({ error: err.message });
  }
  next(err);
});

app.listen(3000, () => {
  console.log("🚀 Server berjalan di http://localhost:3000");
});
