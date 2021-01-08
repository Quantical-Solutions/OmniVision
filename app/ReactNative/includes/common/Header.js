import React from 'react';
import {TouchableHighlight, View, StyleSheet, Text } from 'react-native';
import MenuIcon from "../../assets/svgs-collection/menu.svg";
import { useNavigation } from '@react-navigation/native';
import GoBack from '../../assets/svgs-collection/go-back.svg';
import ModalComponent from './HeaderModal';

export default function Header(props) {

    const navigation = useNavigation();
    const [ isPress, setIsPress ] = React.useState(false);

    const burgerTouch = {
        activeOpacity: 1,
        underlayColor: '#F1F1F1',
        style: isPress ? styles.burgerPress : styles.burgerNormal,
        onHideUnderlay: () => setIsPress(false),
        onShowUnderlay: () => setIsPress(true),
        onPress: () => navigation.openDrawer(),
    };

    const goBackTouch = {
        activeOpacity: 1,
        underlayColor: '#F1F1F1',
        style: isPress ? styles.goBackPress : styles.goBackNormal,
        onHideUnderlay: () => setIsPress(false),
        onShowUnderlay: () => setIsPress(true),
        onPress: () => navigation.goBack(),
    };

    return (

        <>
            <View style={styles.header}>
                <View style={styles.leftSide}>
                    <TouchableHighlight {...burgerTouch}>
                        <MenuIcon
                            style={styles.menuIcon}
                        />
                    </TouchableHighlight>
                    {props.title !== 'Home' &&
                        <TouchableHighlight {...goBackTouch}>
                            <GoBack
                                style={styles.goBack}
                            />
                        </TouchableHighlight>
                    }
                    <Text style={styles.title}>{props.title}</Text>
                </View>
                <ModalComponent height={75} />
            </View>
        </>
    );
};

const styles = StyleSheet.create({
    header: {
        backgroundColor: '#FFF',
        justifyContent: 'space-between',
        alignItems: 'center',
        shadowColor: '#000',
        shadowOffset: { width: 0, height: 3 },
        shadowOpacity: 0.5,
        shadowRadius: 5,
        elevation: 5,
        padding: 20,
        flexDirection: 'row',
        maxHeight: 75,
        height: 75,
        minHeight: 75
    },
    icons: {
        width: 20,
        height: 20
    },
    title: {
        color: '#000',
        fontSize: 22,
        fontWeight: 'bold',
        marginTop: 3,
        marginLeft: 10
    },
    menuIcon: {
        width: 30,
        height: 30,
    },
    burgerNormal: {
        borderRadius: 1000,
        height: 34,
        width: 34,
        padding: 5,
        marginTop: 4
    },
    burgerPress: {
        borderRadius: 1000,
        height: 34,
        width: 34,
        padding: 5,
        marginTop: 4
    },
    leftSide: {
        flexDirection: 'row',
        justifyContent: 'flex-start',
        alignItems: 'center'
    },
    goBack: {
        width: 30,
        height: 30,
        padding: 5,
    },
    goBackNormal: {
        borderRadius: 1000,
        height: 30,
        width: 30,
        padding: 5,
        marginLeft: 10,
        marginTop: 5
    },
    goBackPress: {
        borderRadius: 1000,
        height: 30,
        width: 30,
        padding: 5,
        marginLeft: 10,
        marginTop: 5
    }
});