import React, { Component, useState } from 'react';
import { StatusBar } from 'react-native';
import Url from './includes/components/Url';

export default class App extends Component {

    render() {
        return (
            <>
                <StatusBar hidden={false} backgroundColor={'#FFF'} barStyle={'dark-content'} />
                <Url />
            </>
        );
    }
}