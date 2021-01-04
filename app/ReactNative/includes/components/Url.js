import React from 'react';
import { WebView } from 'react-native-webview';
import {Text, View, StyleSheet} from 'react-native';
import {useNetInfo} from '@react-native-community/netinfo';
import Logo from '../../assets/not-connected.svg';

export const Url = () => {
    const netInfo = useNetInfo();

    return (
        <>
            { netInfo.type === 'wifi' ?
                <WebView source={{ uri: 'https://omnivision.quanticalsolutions.com' }} />
            :
                <View style={styles.view}>
                    <Logo style={styles.logo} />
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
    logo: {
        width: 80,
        height: 80
    }
});