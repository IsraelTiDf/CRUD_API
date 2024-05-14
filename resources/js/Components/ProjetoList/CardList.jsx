import React from 'react';
import {
  Card,
  CardContent,
  Typography,
  Grid,
  Container,
  Button,
  CardActions,
  IconButton,
} from '@mui/material';
import FavoriteIcon from '@mui/icons-material/Favorite';
import AddShoppingCartIcon from '@mui/icons-material/AddShoppingCart';

export default function CardList({ searchResults, addToCart }) {
  return (
    <Grid container direction="column" alignItems="center" style={{ minHeight: '100vh' }}>
      <Container>
        <Typography variant="h5" component="h2" gutterBottom>
          Simbi
        </Typography>
        <Grid container spacing={3}>
          {searchResults.map((product) => (
            <Grid item key={product.id} xs={12} sm={6} md={4} lg={3}>
              <Card className="elevation" style={{ display: 'flex', flexDirection: 'column', height: '100%' }}>
                <CardContent style={{ flex: 1 }}>
                  {/* Exibindo as informações na ordem: segmento, nome, municipio/uf, ficha, aprovado, captado */}
                  <Typography variant="body2" color="textPrimary" gutterBottom>
                    {product.segmento}
                  </Typography>
                  <Typography variant="h6" component="div" gutterBottom>
                    {product.nome}
                  </Typography>
                  <Typography variant="body1" color="textPrimary" gutterBottom>
                    {product.municipio}, {product.uf}
                  </Typography>
                  <Typography variant="body2" color="textSecondary" gutterBottom>
                    Ficha Técnica: {product.ficha_tecnica}
                  </Typography>
                  <Typography variant="body2" color="textPrimary" gutterBottom>
                    Valor Aprovado: {product.valor_aprovado}
                  </Typography>
                  <Typography variant="body2" color="textPrimary" gutterBottom>
                    Valor Captado: {product.valor_captado}
                  </Typography>
                </CardContent>
                {/* Botões para adicionar ao carrinho e favoritar */}
                <CardActions disableSpacing>
                  <IconButton onClick={() => addToCart(product)} aria-label="Adicionar ao carrinho">
                    <AddShoppingCartIcon />
                  </IconButton>
                  <IconButton aria-label="Favoritar">
                    <FavoriteIcon />
                  </IconButton>
                </CardActions>
              </Card>
            </Grid>
          ))}
        </Grid>
      </Container>
    </Grid>
  );
}
