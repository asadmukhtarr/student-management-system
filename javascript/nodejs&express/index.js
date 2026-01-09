const express = require('express');
const  app = express();
const multer = require('multer'); // file handling ..
const path = require('path'); // Folder ..
const {  MongoClient } = require('mongodb');

app.set("view engine","ejs");
app.use(express.urlencoded({ extended: true }));
app.use(express.json());

const url = "mongodb://localhost:27017";
const client = new MongoClient(url);
const dbName = "asadmukhtar";
let db;
async function connectDB(){
    try {
        await client.connect();
        console.log('MongoDB Connected');
        db = client.db(dbName);
    } catch(err) {
        console.log("Error is",err);
    }
}
connectDB();
app.use('/uploads',express.static('uploads'));

const storage = multer.diskStorage({
    destination: function (req,file,cb){
        cb(null,'uploads/')
    },
    filename: function(req,file,cb){
        const uniqueName = Date.now()+"webeducatorz"+path.extname(file.originalname);
        cb(null,uniqueName);
    }
});
const upload = multer({storage:storage});

// landing page ..
app.get('/', (req,res) => {
    res.render("index");
});
// about page ...
app.get('/about',(req,res) => {
    res.render("about");
});
// contact page ..
app.get('/contact',(req,res) => {
    res.render("contact");
});
// products ..
app.get('/products',(req,res)=> {
    res.render("products");
})
// save product ...
app.post('/save/product', upload.single('picture'),async (req, res) => {
    const product = {
        title:req.body.title,
        description:req.body.description,
        price:req.body.price,
        quantity:req.body.quantity,
        image:'uploads/'+req.file.originalname
    }
    const collection = db.collection('products');
    const result = await collection.insertOne(product);
    console.log("Product Inserted with ID:", result.insertedId);
    res.send('OK');
});
// delete product ...
app.get('/delete/product/:id',(req,res) => {

});
// edit product ..
app.get('/edit/product',(req,res) => {

});
// update product ..
app.post('/update',(req,res) => {

});
app.listen(3030,()=>{
    console.log('App is runing on 3030');
});