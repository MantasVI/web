const express = require('express');
const session = require('express-session');
const bcrypt = require('bcrypt');
const { Client } = require('pg');
const cors = require('cors');

const app = express();

app.use(cors({ origin:  ['http://localhost:5500', 'http://127.0.0.1:5500'], credentials: true }));
app.use(express.json());
app.use(session({
    secret: 'bbn_secret_key',
    resave: false,
    saveUninitialized: false,
    cookie: { secure: false }
}));

const client = new Client({
    host: process.env.DB_HOST || 'localhost',
    port: process.env.DB_PORT || 5432,
    database: process.env.DB_NAME || 'bbnfilmai',
    user: process.env.DB_USER || 'postgres',
    password: process.env.DB_PASSWORD || 'mantas'
});

client.connect(function() {
    console.log('✅ Connected to PostgreSQL!');
});

// SIGNUP
app.post('/signup', function(req, res) {
    var email = req.body.email;
    var password = req.body.password;
    var username = req.body.username;
    client.query('SELECT email FROM users WHERE email = $1', [email], function(err, result) {
        if (err) {
            return res.json({ success: false, message: 'Database error' });
        }
        if (result.rows.length > 0) {
            return res.json({ success: false, message: 'Email already exists' });
        }

        bcrypt.hash(password, 10, function(err, hash) {
            if (err) {
                return res.json({ success: false, message: 'Error hashing password' });
            }

            client.query(
                'INSERT INTO users (email, password,username) VALUES ($1, $2,$3)',
                [email, hash , username],
                function(err) {
                    if (err) {
                        return res.json({ success: false, message: 'Error creating user' });
                    }
                    res.json({ success: true });
                }
            );
        });
    });
});

// LOGIN
app.post('/login', function(req, res) {
    var email = req.body.email;
    var password = req.body.password;
   
    client.query('SELECT * FROM users WHERE email = $1', [email], function(err, result) {
        if (err) {
            return res.json({ success: false, message: 'Database error' });
        }
        if (result.rows.length === 0) {
            return res.json({ success: false, message: 'User not found' });
        }

        var user = result.rows[0];

        bcrypt.compare(password, user.password, function(err, match) {
            if (match) {
                req.session.user = { id: user.id, email: user.email,username: user.username };
                res.json({ success: true, username: user.username});
            } else {
                res.json({ success: false, message: 'Wrong password' });
            }
        });
    });
});

app.listen(3000, function() {
    console.log('🚀 Server running on http://localhost:5000');
});