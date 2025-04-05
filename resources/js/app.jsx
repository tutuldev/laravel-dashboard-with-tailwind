import React from 'react';
import ReactDOM from 'react-dom/client';
import { BrowserRouter as Router, Route, Routes, Link } from 'react-router-dom';

const Home = () => (
  <section className="text-center py-20 bg-blue-500 text-white">
    <h2 className="text-4xl font-bold mb-4">Welcome to Our Website</h2>
    <p className="text-lg mb-6">We offer amazing services to boost your business.</p>
    <Link to="/services" className="bg-white text-blue-500 px-6 py-2 rounded-full font-bold hover:bg-gray-200">
      Get Started
    </Link>
  </section>
);

const About = () => (
  <section className="text-center py-20 bg-green-500 text-white">
    <h2 className="text-4xl font-bold mb-4">About Us</h2>
    <p className="text-lg mb-6">We are a company focused on providing top-notch services.</p>
  </section>
);

const Services = () => (
  <section className="text-center py-20 bg-yellow-500 text-white">
    <h2 className="text-4xl font-bold mb-4">Our Services</h2>
    <p className="text-lg mb-6">We offer a variety of services to help you grow your business.</p>
  </section>
);

const App = () => (
  <Router>
    <header className="bg-white shadow-md py-4">
      <div className="container mx-auto flex justify-between items-center px-6">
        <h1 className="text-xl font-bold text-blue-600">BrandName</h1>
        <nav>
          <ul className="flex space-x-6">
            <li><Link to="/" className="text-gray-700 hover:text-blue-500">Home</Link></li>
            <li><Link to="/about" className="text-gray-700 hover:text-blue-500">About</Link></li>
            <li><Link to="/services" className="text-gray-700 hover:text-blue-500">Services</Link></li>
            <li><Link to="/contact" className="text-gray-700 hover:text-blue-500">Contact</Link></li>
          </ul>
        </nav>
      </div>
    </header>

    <Routes>
      <Route path="/" element={<Home />} />
      <Route path="/about" element={<About />} />
      <Route path="/services" element={<Services />} />
    </Routes>
  </Router>
);

// React রেন্ডার করা
const root = ReactDOM.createRoot(document.getElementById('react-root'));
root.render(<App />);
