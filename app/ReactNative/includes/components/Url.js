import React, { Component } from 'react';
import { WebView } from 'react-native-webview';

export default class Url extends Component {
    render() {
        return (
            <>
                <WebView source={{ uri: 'https://omnivision.quanticalsolutions.com' }} />
            </>
        )
    }
}