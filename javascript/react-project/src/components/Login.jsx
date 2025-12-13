import React, { useState } from "react";

export default function Login() {
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");

  const handleSubmit = async (e) => {
    e.preventDefault();
     //console.log("Form Submitted:", formData);
    const formData = {
      email:email,
      password:password
    }
    try {
       const response = await fetch("http://localhost:8000/api/login",{
        method:"POST",
          headers: {
              "Content-Type": "application/json"
          },
          body: JSON.stringify(formData)
        });
        const data = await response.json();
        localStorage.setItem("token",data.token);
        localStorage.setItem("user",JSON.stringify(data.user));
       // console.log(localStorage.getItem("user"));
        window.location = "/products";
    } catch (error) {
      // Handle network errors
      console.error('Login error:', error);
    }
  };

  return (
    <div className="d-flex justify-content-center align-items-center" style={{ minHeight: "100vh" }}>
      <div className="card p-4 shadow" style={{ width: "350px" }}>
        <h3 className="text-center mb-3">Login</h3>

        <form onSubmit={handleSubmit}>
          
          <div className="mb-3">
            <label className="form-label">Email</label>
            <input
              type="email"
              className="form-control"
              placeholder="Enter Email"
              value={email}
              onChange={(e) => setEmail(e.target.value)}
            />
          </div>

          <div className="mb-3">
            <label className="form-label">Password</label>
            <input
              type="password"
              className="form-control"
              placeholder="Enter Password"
              value={password}
              onChange={(e) => setPassword(e.target.value)}
            />
          </div>

          <button type="submit" className="btn btn-primary w-100">
            Login
          </button>

        </form>
      </div>
    </div>
  );
}
