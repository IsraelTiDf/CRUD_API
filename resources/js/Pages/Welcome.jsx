import React, { useState, useEffect } from 'react';
import { Link, Head } from '@inertiajs/react';
import {
  Typography,
  Container,
  AppBar,
  Toolbar
} from '@mui/material';

import CardList from '../Components/CardList.jsx';
// import apiClient from '../services/apiClient';


export default function Welcome({ projetos }) {

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
          projetos={projetos}

        />

      </div>

    </>
  );
}
