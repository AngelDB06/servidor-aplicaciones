const express = require('express');
const cors = require('cors');

const app = express();
const PORT = process.env.PORT || 3000;

app.use(cors());
app.use(express.json());

// Health check endpoint
app.get('/health', (req, res) => {
    res.json({ status: 'ok', message: 'Backend is running' });
});

// Proxy or wrapper for DummyJSON (optional, for now just a simple greeting)
app.get('/api/info', (req, res) => {
    res.json({
        name: 'TIENDA-DummyJSON API',
        version: '1.0.0',
        proxy_to: 'https://dummyjson.com'
    });
});

app.listen(PORT, () => {
    console.log(`Server is running on port ${PORT}`);
});
