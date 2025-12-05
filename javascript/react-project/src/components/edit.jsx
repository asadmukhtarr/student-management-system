import React, { useEffect, useState } from "react";
import { useParams, useNavigate } from "react-router-dom";

export default function Edit() {
  const { id } = useParams();
  const navigate = useNavigate();

  const [title, setTitle] = useState("");
  const [price, setPrice] = useState("");
  const [quantity, setQuantity] = useState("");

  const [loading, setLoading] = useState(false);
  const [saving, setSaving] = useState(false);
  const [error, setError] = useState(null);

  const API_BASE = "https://692b046a7615a15ff24e757f.mockapi.io/products";

  useEffect(() => {
    // fetch product once when component mounts or id changes
    const fetchProduct = async () => {
      setLoading(true);
      setError(null);
      try {
        const res = await fetch(`${API_BASE}/${id}`);
        if (!res.ok) throw new Error(`Failed to load product (status ${res.status})`);
        const data = await res.json();

        // guard for missing fields
        setTitle(data.title ?? "");
        setPrice(data.price ?? "");
        setQuantity(data.quantity ?? "");
      } catch (err) {
        console.error(err);
        setError("Could not load product. Try again.");
      } finally {
        setLoading(false);
      }
    };

    if (id) fetchProduct();
  }, [id]);

  const handleUpdate = async (e) => {
    e.preventDefault();
    setSaving(true);
    setError(null);

    const updatedProduct = {
      title,
      price,
      quantity,
    };

    try {
      const res = await fetch(`${API_BASE}/${id}`, {
        method: "PUT",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(updatedProduct),
      });
      if (!res.ok) throw new Error(`Update failed (status ${res.status})`);
      const data = await res.json();
      console.log("Product updated:", data);

      // navigate back to products list (adjust path if different)
      navigate("/products");
    } catch (err) {
      console.error(err);
      setError("Failed to update product. Try again.");
    } finally {
      setSaving(false);
    }
  };

  if (loading) return <div className="p-3">Loading product...</div>;

  return (
    <div className="container py-3">
      <div className="card">
        <div className="card-header">Edit Product</div>
        <div className="card-body">
          {error && <div className="alert alert-danger">{error}</div>}

          <form onSubmit={handleUpdate}>
            <div className="mb-3">
              <label className="form-label">Title</label>
              <input
                type="text"
                className="form-control"
                value={title}
                onChange={(e) => setTitle(e.target.value)}
                required
              />
            </div>

            <div className="mb-3">
              <label className="form-label">Price</label>
              <input
                type="number"
                className="form-control"
                value={price}
                onChange={(e) => setPrice(e.target.value)}
                required
              />
            </div>

            <div className="mb-3">
              <label className="form-label">Quantity</label>
              <input
                type="number"
                className="form-control"
                value={quantity}
                onChange={(e) => setQuantity(e.target.value)}
                required
              />
            </div>

            <div className="d-flex gap-2">
              <button type="submit" className="btn btn-primary" disabled={saving}>
                {saving ? "Saving..." : "Update Product"}
              </button>

              <button
                type="button"
                className="btn btn-secondary"
                onClick={() => navigate("/products")}
                disabled={saving}
              >
                Cancel
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  );
}
