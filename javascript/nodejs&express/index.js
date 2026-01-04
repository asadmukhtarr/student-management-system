const express = require('express');
const  app = express();
const multer = require('multer'); // file handling ..
const path = require('path'); // Folder ..
app.set("view engine","ejs");
app.use(express.urlencoded({ extended: true }));
app.use(express.json());

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
app.post('/save/product', upload.single('picture'),(req, res) => {
    console.log("Save Product Route Working");
    console.log("Form Data:", req.body);
      console.log("Uploaded File:", req.file); // ✅ IMAGE INFO
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