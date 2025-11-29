import { useState,useEffect } from "react";
const Products = () => {
    const [title,setTitle] = useState("Iphone 16 Pro Max");
    const [price,setPrice] = useState("");
    const [qunatity,setQauntity] = useState("");
    const [description,setDescription] = useState("");
    const [products,setProducts] = useState([]);
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
    const fetchProducts = async () => {
        const response = await fetch("https://692b046a7615a15ff24e757f.mockapi.io/products");
        const data = await response.json();
        setProducts(data);
    }
    useEffect(function(){
        console.log('Here are products',products);
        fetchProducts();
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
                        <table className="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Qunatity</th>
                                    <th>Price</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {
                                    products && products.length > 0 ? (
                                        products.map((product) => (
                                        <tr key={product.id}>
                                            <td>{product.id}</td>
                                            <td>{product.title}</td>
                                            <td>{product.quantity}</td>
                                            <td>{product.price} Pkr</td>
                                            <td>
                                            <button className="btn btn-sm btn-danger m-2">Delete</button>
                                            <button className="btn btn-sm btn-success">Edit</button>
                                            </td>
                                        </tr>
                                        ))
                                    ) : (
                                        <tr>
                                            <td className="text-center" colSpan={5}>Can't Find Products</td>
                                        </tr>
                                    )
                                    }

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    )
}
export default Products;