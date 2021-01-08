import React from 'react';
import {View, StyleSheet, Text, Button} from 'react-native';
import Header from '../common/Header';

export default function DetailsScreen({ route, navigation } ) {

    if (route.params) {
        const {itemId, otherParam} = route.params;
    }

    return (
        <>
            <Header title='Details' />
            <View style={{ flex: 1, alignItems: 'center', justifyContent: 'center' }}>
                <Text>Details Screen</Text>
                <Text>itemId: {(typeof(itemId) !== 'undefined') ? JSON.stringify(itemId) : ''}</Text>
                <Text>otherParam: {(typeof(otherParam) !== 'undefined') ? JSON.stringify(otherParam) : ''}</Text>
                <Button
                    title="Go to Home"
                    onPress={() => navigation.navigate('Home')}
                />
                <Button title="Go back" onPress={() => navigation.goBack()} />
            </View>
        </>
    );
}