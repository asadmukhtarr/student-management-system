const express = require('express');
const app = express();
const multer = require('multer'); // file handling ..
const cors = require('cors');
const path = require('path'); // Folder ..
const { MongoClient, ObjectId } = require('mongodb');
app.use(cors());
app.set("view engine", "ejs");
app.use(express.urlencoded({ extended: true }));
app.use(express.json());

const url = "mongodb://localhost:27017";
const client = new MongoClient(url);
const dbName = "asadmukhtar";
let db;
async function connectDB() {
    try {
        await client.connect();
        console.log('MongoDB Connected');
        db = client.db(dbName);
    } catch (err) {
        console.log("Error is", err);
    }
}
connectDB();
app.use('/uploads', express.static('uploads'));

const storage = multer.diskStorage({
    destination: function (req, file, cb) {
        cb(null, 'uploads/')
    },
    filename: function (req, file, cb) {
        const uniqueName = Date.now() + path.extname(file.originalname);
        cb(null, uniqueName);
    }
});
const upload = multer({ storage: storage });

// landing page ..
app.get('/', (req, res) => {
    res.render("index");
});
// about page ...
app.get('/about', (req, res) => {
    res.render("about");
});
// contact page ..
app.get('/contact', (req, res) => {
    res.render("contact");
});
// products ..
app.get('/products', async (req, res) => {
    const collection = db.collection('products');
    const result = await collection.find({}).toArray();
    //   res.json(result);
    //res.send(result);
    //console.log(result);
    res.render("products", { products: result });
});
app.get('/api/products', async (req, res) => {
    const collection = db.collection('products');
    const result = await collection.find({}).toArray();
    res.json(result);
});
app.delete('/api/delete/product/:id', (req, res) => {
    const id = req.params.id;
    const collection = db.collection('products');
    const result = collection.deleteOne({ _id: new ObjectId(id) });
    console.log("Product Deleted with ID:", id);
    res.json({ message: "Product Deleted with ID:" + id });
});
// save product ...
app.post('/save/product', upload.single('picture'), async (req, res) => {
    const product = {
        title: req.body.title,
        description: req.body.description,
        price: req.body.price,
        quantity: req.body.quantity,
        image: 'uploads/' + req.file.filename
    }
    const collection = db.collection('products');
    const result = await collection.insertOne(product);
    console.log("Product Inserted with ID:", result.insertedId);
    res.redirect('/products');
});
// delete product ...
app.get('/delete/product/:id', (req, res) => {
    const id = req.params.id;
    const collection = db.collection('products');
    const result = collection.deleteOne({ _id: new ObjectId(id) });
    console.log("Product Deleted with ID:", id);
    res.redirect('/products');
});
// edit product ..
app.get('/edit/product/:id', async (req, res) => {
    const id = req.params.id;
    const collection = await db.collection('products');
    const result = await collection.findOne({ _id: new ObjectId(id) });
    console.log("Product Found with ID:", result);
    res.render("edit", { product: result });
});
// update product ..
app.post('/update/product/:id', upload.single('picture'), async (req, res) => {
    const id = req.params.id;
    const collection = await db.collection('products');
    const updatedData = {
        title: req.body.title,
        description: req.body.description,
        price: req.body.price,
        quantity: req.body.quantity,
    }
    if (req.file) {
        updatedData.image = 'uploads/' + req.file.filename;
    }
    const result = await collection.updateOne({ _id: new ObjectId(id) }, { $set: updatedData });
    console.log("Product Updated with ID:", id);
    res.redirect('/products');
});
app.listen(3030, () => {
    console.log('App is runing on 3030');
});