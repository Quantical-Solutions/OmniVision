import React from 'react';
import { TouchableOpacity, Text, Linking } from 'react-native';

export default function ExternalLink (props) {

    const { url, children, style = {}  } = props;

    const openLink = () => Linking.canOpenURL(url).then(() => {
        Linking.openURL(url);
    });

    return (
        <TouchableOpacity onPress={openLink}>
            <Text style={style}>{children}</Text>
        </TouchableOpacity>
    );
};