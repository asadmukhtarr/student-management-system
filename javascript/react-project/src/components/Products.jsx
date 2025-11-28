import { useState,useEffect } from "react";
const Products = () => {
    const [title,setTitle] = useState("Iphone 16 Pro Max");
    const [price,setPrice] = useState("");
    const [qunatity,setQauntity] = useState("");
    const [description,setDescription] = useState("");
    const products  = [
        {
            id:1,
            title:'Iphone X',
            quantity:100,
            price:100000,
            description:'If you already have PHP and Composer installed, you may install the Laravel installer via Composer'
        },
        {
            id:2,
            title:'Iphone 12',
            quantity:100,
            price:120000,
            description:'If you already have PHP and Composer installed, you may install the Laravel installer via Composer'
        },
        {
            id:3,
            title:'Iphone 13',
            quantity:100,
            price:200000,
            description:'If you already have PHP and Composer installed, you may install the Laravel installer via Composer'
        },
        {
            id:4,
            title:'Iphone 14',
            quantity:100,
            price:2500000,
            description:'If you already have PHP and Composer installed, you may install the Laravel installer via Composer'
        },
        {
            id:5,
            title:'Iphone 15 Pro Max',
            quantity:100,
            price:300000,
            description:'If you already have PHP and Composer installed, you may install the Laravel installer via Composer'
        }
    ];
    const dataHandle = (e) => {
        e.preventDefault()
        let product = {
            title:title,
            price:price,
            quantity:qunatity,
            description:description
        }
        console.log(product);
    }
    useEffect(function(){
        console.log('Here are products',products);
    });
    return (
        <div>
           <div className="row">
                <div className="col-lg-4 col-sm-4 col-md-4">
                    <form onSubmit={dataHandle}>
                        <div className="card">
                            <div className="card-header">Create Product</div>
                            <div className="card-body">
                                <div className="form-group">
                                    <label>Title</label>
                                    <input className="form-control" onKeyUp={e => setTitle(e.target.value)} />
                                </div>
                                <div className="form-group">
                                    <label>Price</label>
                                    <input type="number" className="form-control" onKeyUp={e => setPrice(e.target.value)} />
                                </div>
                                <div className="form-group">
                                    <label>Qunatity</label>
                                    <input type="number" className="form-control" onKeyUp={e => setQauntity(e.target.value)} />
                                </div>
                                <div className="form-group">
                                    <label>Description</label>
                                    <textarea className="form-control" rows={4} onKeyUp={e => setDescription(e.target.value)} ></textarea>
                                </div>
                            </div>
                            <div className="card-footer">
                                <button type="submit" className="btn btn-danger float-end">Save Product</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div className="col-lg-8 col-md-8 col-sm-8">
                    <div className="card">
                        <div className="card-header">
                            All Products
                        </div>
                    </div>
                </div>
            </div>
        </div>
    )
}
export default Products;