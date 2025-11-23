import { Routes,Route } from "react-router-dom";
import Header from "./components/includes/header";
import Home from "./components/Home";
import About from "./components/About";
import Products from "./components/Products";
import Contact from "./components/Contact";
function App(){
    var title = "Webeducatorz";
    return (
        <div>
            <Header title={title} />
            <h2>Main Component | Hello World</h2>
            <p>Loem Asadjhaskjb asdkjahdshsadkjhakjdsh</p>
            <Routes>
                <Route path="/" element={<Home />} />
                <Route path="/about" element={<About />} />
                <Route path="/products" element={<Products />} />
                <Route path="/contact" element={<Contact />} />
            </Routes>
        </div>
    );
}
export default App;