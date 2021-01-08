import React from 'react';
import {View, Text, Button} from 'react-native';
import Header from '../common/Header';

export default function HomeScreen({ navigation, route }) {

    React.useEffect(() => {
        if (route.params?.post) {
            // Post updated, do something with `route.params.post`
            // For example, send the post to the server
        }
    }, [route.params?.post]);

    return (
        <>
            <Header title='Home' />
            <View style={{ flex: 1, alignItems: 'center', justifyContent: 'center' }}>
                <Text>Home Screen</Text>
                <Button
                    title='Go to Details'
                    onPress={() => navigation.navigate('Details', {
                        itemId: 86,
                        otherParam: 'anything you want here',
                    })}
                />
                <Button
                    title="Create post"
                    onPress={() => navigation.navigate('CreatePost')}
                />
                <Text style={{ margin: 10 }}>Post: {route.params?.post}</Text>
            </View>
        </>
    );
}