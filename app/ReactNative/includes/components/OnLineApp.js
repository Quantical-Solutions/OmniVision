import React from 'react';
import { WebView } from 'react-native-webview';
import {StatusBar, Text, View, StyleSheet} from 'react-native';
import {useNetInfo} from '@react-native-community/netinfo';
import Warning from '../../assets/svgs-collection/not-connected.svg';

export default function OnLineApp() {

    const netInfo = useNetInfo();

    return (
        <>
            <StatusBar hidden={false} backgroundColor={'#FFF'} barStyle={'dark-content'} />
            { netInfo.type === 'wifi' ?
                <WebView source={{ uri: 'https://omnivision.quanticalsolutions.com' }} />
            :
                <View style={styles.view}>
                    <Warning style={styles.warning} />
                    <Text style={styles.text}>Connexion lost...</Text>
                    <Text style={styles.small}>
                        Internet is required to continue browsing</Text>
                </View>
            }
        </>
    )
}

const styles = StyleSheet.create({
    view: {
        flex: 1,
        backgroundColor: '#000',
        justifyContent: 'center',
        alignItems: 'center'
    },
    text: {
        color: 'white',
        fontWeight: 'bold',
        fontSize: 30,
    },
    small: {
        color: 'gray',
        fontSize: 14,
    },
    warning: {
        width: 80,
        height: 80
    }
});