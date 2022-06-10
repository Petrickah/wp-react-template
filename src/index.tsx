import { render } from "@wordpress/element";
import React from 'react';
import App from './App';

const root = document.getElementById(`react-root`);
render((
    <React.StrictMode>
        <App />
    </React.StrictMode>
    ), root
);