import React, { useState, useEffect } from 'react';
import { Link, Head } from '@inertiajs/react';
import {
  Card,
  CardContent,
  CardMedia,
  Typography,
  Grid,
  Container,
  TextField,
  Button,
  Paper,
  Box,
  Slider,
  Slide,
  AppBar,
  Tabs,
  Tab,
  Toolbar
} from '@mui/material';

import CardList from '../Components/ProjetoList/CardList.jsx';
// import apiClient from '../services/apiClient';


export default function Welcome({ auth, produtos }) {
  const [tabValue, setTabValue] = React.useState(0);
  const [cart, setCart] = useState([]);

  const [searchInput, setSearchInput] = useState('');
  const [searchResults, setSearchResults] = useState([]);

  const handleChangeTab = (event, newValue) => {
    setTabValue(newValue);
  };

  const addToCart = (product) => {
    const updatedCart = [...cart];
    const existingProduct = updatedCart.find((item) => item.id === product.id);

    if (existingProduct) {
      existingProduct.quantity++;
    } else {
      updatedCart.push({ ...product, quantity: 1 });
    }

    setCart(updatedCart);
  };

  const removeFromCart = (productId) => {
    const updatedCart = cart.filter((item) => item.id !== productId);
    setCart(updatedCart);
  };



  useEffect(() => {
    const filteredProducts = produtos.filter((product) => {

      return (
        product.nome.toLowerCase().includes(searchInput.toLowerCase())

      );
    });
    setSearchResults(filteredProducts);
  }, [searchInput, produtos]);


  return (
    <>
      <Head title="Teste" />
      <div className="bg-gray-100 dark:bg-gray-900 min-h-screen">
        {/* Cabeçalho */}
        <AppBar position="static" color="primary">
          <Container>
            <Toolbar>
              <Typography variant="h6" component="h1" className="flex-grow-1">
                Bem-vindo
              </Typography>

            </Toolbar>
          </Container>
        </AppBar>


        <CardList
          searchResults={searchResults}
          addToCart={addToCart}
          cart={cart}
          removeFromCart={removeFromCart}
        />

      </div>

    </>
  );
}
