import ReactDom from "react-dom/client";
import { BrowserRouter } from "react-router-dom";
import App from "./App";
const root = ReactDom.createRoot(document.getElementById("asad"));
root.render(
    <BrowserRouter>
        <App />
    </BrowserRouter>
);