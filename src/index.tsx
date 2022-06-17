import { render } from "@wordpress/element";
import React, { StrictMode } from 'react';
import { ThemeProvider } from "react-bootstrap";
import App from './classes/App';

const root = document.getElementById(`react-root`);
render((
    <ThemeProvider breakpoints={['xxxl', 'xxl', 'xl', 'lg', 'md', 'sm', 'xs', 'xxs']}>
        <StrictMode><App/></StrictMode>
    </ThemeProvider>
    ), root
);