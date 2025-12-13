import { useState,useEffect } from "react";
import { Link } from "react-router-dom";
const Products = () => {
    const [title,setTitle] = useState("Iphone 16 Pro Max");
    const [price,setPrice] = useState("");
    const [qunatity,setQauntity] = useState("");
    const [products,setProducts] = useState([]);

    const dataHandle = async (e) => {
        e.preventDefault()
        let product = {
            title:title,
            price:price,
            quantity:qunatity
        }
        const response = await fetch(`https://692b046a7615a15ff24e757f.mockapi.io/products`,{
            method:"POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(product)
        });
        const data = await response.json();
        console.log("Product Inserted Succesfully",data);
    }
    const fetchProducts = async () => {
        const response = await fetch("https://692b046a7615a15ff24e757f.mockapi.io/products");
        const data = await response.json();
        setProducts(data.reverse());
    }
    const deleteProduct = async (id) => {
        const response = await fetch(`https://692b046a7615a15ff24e757f.mockapi.io/products/${id}`,{
            method:'DELETE'
        });
        const data = await response.json();
        console.log('Deleted Data',data);
        fetchProducts();
    }
    useEffect(function(){
        const token = localStorage.getItem("token");
        if(!token){
            window.location = "/register";   
        }
        fetchProducts();
    });
    return (
        <div className="container mt-3">
           <div className="row mt-2">
                <div className="col-lg-4 col-sm-4 col-md-4">
                    <form onSubmit={dataHandle}>
                        <div className="card">
                            <div className="card-header">Create Product </div>
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
                                            <button className="btn btn-sm btn-danger m-2" onClick={() => deleteProduct(product.id)}>Delete</button>
                                            <Link to={`/product/edit/${product.id}`}>
                                                <button className="btn btn-sm btn-success">Edit</button>
                                            </Link>
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