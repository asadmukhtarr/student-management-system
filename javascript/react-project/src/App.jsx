import { Routes,Route } from "react-router-dom";
import Header from "./components/includes/header";
import Home from "./components/Home";
import About from "./components/About";
import Products from "./components/Products";
import Contact from "./components/Contact";
import Edit from "./components/edit";
function App(){
    var title = "Webeducatorz";
    return (
        <div>
            <Header title={title} />
            <div className="container-fluid mt-5">
                <Routes>
                    <Route path="/" element={<Home />} />
                    <Route path="/about" element={<About />} />
                    <Route path="/products" element={<Products />} />
                    <Route path="/contact" element={<Contact />} />
                    <Route path="/product/edit/:id" element={<Edit />}/>
                </Routes>
            </div>
        </div>
    );
}
export default App;