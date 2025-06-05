const express = require('express');
const app = express();
const PORT = process.env.PORT || 3000;

const products = [
  { id: 1, name: 'Sản phẩm A', price: 100000 },
  { id: 2, name: 'Sản phẩm B', price: 200000 },
  { id: 3, name: 'Sản phẩm C', price: 300000 }
];

app.use(express.urlencoded({ extended: true }));
app.use(express.json());

app.get('/', (req, res) => {
  let html = '<h1>Danh sách sản phẩm</h1><ul>';
  products.forEach(p => {
    html += `<li><a href="/product/${p.id}">${p.name}</a> - ${p.price} VND</li>`;
  });
  html += '</ul>';
  res.send(html);
});

app.get('/product/:id', (req, res) => {
  const product = products.find(p => p.id === parseInt(req.params.id));
  if (!product) {
    return res.status(404).send('Không tìm thấy sản phẩm');
  }
  res.send(`<h1>${product.name}</h1><p>Giá: ${product.price} VND</p><a href="/">Quay lại</a>`);
});

app.listen(PORT, () => {
  console.log(`Server đang chạy tại http://localhost:${PORT}`);
});
