import React from 'react';
import {View, TextInput, Button} from 'react-native';
import Header from '../common/Header';

export default function CreatePostScreen({ navigation, route }) {
    const [postText, setPostText] = React.useState('');

    return (
        <>
            <Header title='Create Post' />
            <View style={{ flex: 1, alignItems: 'center', justifyContent: 'center' }}>
                <TextInput
                    multiline
                    placeholder="What's on your mind?"
                    style={{ height: 200, padding: 10, backgroundColor: 'white' }}
                    value={postText}
                    onChangeText={setPostText}
                />
                <Button
                    title="Done"
                    onPress={() => {
                        // Pass params back to home screen
                        navigation.navigate('Home', { post: postText });
                    }}
                />
            </View>
        </>
    );
}