import React from 'react';
import {
  Card,
  CardContent,
  Typography,
  Container,
  Button,
  CardActions,
  IconButton,
} from '@mui/material';
import FavoriteIcon from '@mui/icons-material/Favorite';
import { Swiper, SwiperSlide } from 'swiper/react';
import { FreeMode, Pagination,Navigation } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/navigation';

const cardContentStyle = {
    height: '100%',
    display: 'flex',
    flexDirection: 'column',
  };

export default function CardList({ projetos }) {
  return (
    <Container>

      <Swiper
        slidesPerView={3}
        spaceBetween={30}
        freeMode={true}
        pagination={{
          clickable: true,
          el: '.swiper-pagination'
        }}
        navigation={true}
        modules={[FreeMode, Pagination,Navigation]}
        className="mySwiper"
        style={{ padding : '65px' }}
      >
        {projetos.map((projeto) => (
          <SwiperSlide key={projeto.id_projeto}>
            <Card className="elevation" style={{ height: '300px',display: 'flex',flexDirection: 'column', }}>
              <CardContent  style={cardContentStyle}>

                <Typography variant="body2" color="textPrimary" gutterBottom>
                  {projeto.segmento}
                </Typography>
                <Typography variant="h6" component="div" gutterBottom>
                  {projeto.nome}
                </Typography>
                <Typography variant="body1" color="textPrimary" gutterBottom>
                  {projeto.municipio}, {projeto.uf}
                </Typography>
                <Typography variant="body2" color="textSecondary" gutterBottom>
                  Ficha Técnica: {projeto.ficha_tecnica}
                </Typography>
                <Typography variant="body2" color="textPrimary" display="block" gutterBottom>
                  Valor Aprovado: {projeto.valor_aprovado}
                </Typography>
                <Typography variant="body2" color="textPrimary" display="block" gutterBottom>
                  Valor Captado: {projeto.valor_captado}
                </Typography>
              </CardContent>

              <CardActions disableSpacing>
                <Button  variant="contained" color="primary" sx={{ height: '35px'}} fullWidth>
                  Adicionar
                </Button>
                <IconButton aria-label="Favoritar">
                  <FavoriteIcon />
                </IconButton>
              </CardActions>
            </Card>
          </SwiperSlide>
        ))}
      </Swiper>
      <div className="swiper-pagination"></div>
    </Container>
  );
}
