import { Link } from "react-router-dom";
import { useState } from 'react';

const Header = (props) => {
  const [dropdownOpen, setDropdownOpen] = useState(false);
  const user = JSON.parse(localStorage.getItem("user"));
  const token = localStorage.getItem("token");
  return (
    <nav className="navbar navbar-expand-lg bg-primary navbar-dark">
      <div className="container">
        <a href="/" className="navbar-brand">{props.title}</a>

        <button
          className="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#mainNavbar"
        >
          <span className="navbar-toggler-icon"></span>
        </button>

        <div className="collapse navbar-collapse" id="mainNavbar">
          <ul className="navbar-nav ms-auto">
            <li className="nav-item">
              <Link to="/" className="nav-link">Home</Link>
            </li>
            <li className="nav-item">
              <Link to="/about" className="nav-link">About</Link>
            </li>
            <li className="nav-item">
              <Link to="/products" className="nav-link">Products</Link>
            </li>
            <li className="nav-item">
              <Link to="/contact" className="nav-link">Contact</Link>
            </li>
            {!token ? (
            <li className="nav-item dropdown" 
                onMouseEnter={() => setDropdownOpen(true)}
                onMouseLeave={() => setDropdownOpen(false)}>
              <a className="nav-link dropdown-toggle" 
                 href="/" 
                 id="accountDropdown" 
                 role="button" 
                 data-bs-toggle="dropdown" 
                 aria-expanded={dropdownOpen}>
                Account
              </a>
              <ul className={`dropdown-menu ${dropdownOpen ? 'show' : ''}`} 
                  aria-labelledby="accountDropdown">
                <li>
                  <Link className="dropdown-item" to="/login">
                    Login
                  </Link>
                </li>
                <li>
                  <Link className="dropdown-item" to="/register">
                    Register
                  </Link>
                </li>
              </ul>
            </li>
            ): (
               <li className="nav-item dropdown" 
                onMouseEnter={() => setDropdownOpen(true)}
                onMouseLeave={() => setDropdownOpen(false)}>
              <a className="nav-link dropdown-toggle" 
                 href="/" 
                 id="accountDropdown" 
                 role="button" 
                 data-bs-toggle="dropdown" 
                 aria-expanded={dropdownOpen}>
                {user.name}
              </a>
              <ul className={`dropdown-menu ${dropdownOpen ? 'show' : ''}`} 
                  aria-labelledby="accountDropdown">
                <li>
                  <Link className="dropdown-item" to="/register">
                    logout
                  </Link>
                </li>
              </ul>
            </li>
            )}
          </ul>
        </div>
      </div>
    </nav>
  );
};

export default Header;