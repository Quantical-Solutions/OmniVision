import React, { Component } from 'react';
import { StatusBar, View, StyleSheet, SafeAreaView } from 'react-native';
// Navigation libraries
import { NavigationContainer } from '@react-navigation/native';
import { createDrawerNavigator, DrawerItemList } from '@react-navigation/drawer';
// Svgs
import Logo from '../../assets/svgs-collection/brand.svg';
import HomeIcon from '../../assets/svgs-collection/store.svg';
import DetailsIcon from '../../assets/svgs-collection/pen.svg';
import CreatePostIcon from '../../assets/svgs-collection/paragraph.svg';
// Pages imports
import HomeScreen from '../pages/Home';
import DetailsScreen from '../pages/Details';
import CreatePostScreen from '../pages/CreatePost';
import ExternalLink from '../components/ExternalLink';

const Drawer = createDrawerNavigator();

function CustomDrawerContent(props) {
    return (
        <SafeAreaView>
            <View style={styles.headerSupContainer}>
                <View style={styles.brandContainer}>
                    <Logo style={styles.brand} />
                </View>
                <ExternalLink
                    style={{
                        marginTop: 20,
                        color: 'white'
                    }}
                    url='https://google.com'>
                    OmniVision Mobile App
                </ExternalLink>
            </View>
            <DrawerItemList {...props} />
        </SafeAreaView>
    );
}

export default class OfflineApp extends Component {

    render(navigation) {
        return (
            <View style={styles.container}>
                <StatusBar hidden={false} backgroundColor={'#FFF'} barStyle={'dark-content'} />
                <NavigationContainer style={styles.navigation}>
                    <Drawer.Navigator initialRouteName="Home" drawerContent={props => <CustomDrawerContent {...props} />}>
                        <Drawer.Screen
                            name='Home'
                            component={HomeScreen}
                            options={{
                                title: 'Home',
                                drawerIcon: ({ focused, size }) => (
                                    <HomeIcon
                                        style={[focused ? styles.drawerActive : styles.drawerInActive, { height: size, width: size }]}
                                    />
                                )
                            }}
                        />
                        <Drawer.Screen
                            name="Details"
                            component={DetailsScreen}
                            options={{
                                title: 'Details',
                                drawerIcon: ({ focused, size }) => (
                                    <DetailsIcon
                                        style={[focused ? styles.drawerActive : styles.drawerInActive, { height: size, width: size }]}
                                    />
                                )
                            }}
                        />
                        <Drawer.Screen
                            name="CreatePost"
                            component={CreatePostScreen}
                            options={{
                                title: 'Create Post',
                                drawerIcon: ({ focused, size }) => (
                                    <CreatePostIcon
                                        style={[focused ? styles.drawerActive : styles.drawerInActive, { height: size, width: size }]}
                                    />
                                )
                            }}
                        />
                    </Drawer.Navigator>
                </NavigationContainer>
            </View>
        );
    }
};

const styles = StyleSheet.create({
    container: {
        flex: 1
    },
    brand: {
        width: 100,
        height: 100
    },
    headerSupContainer: {
        backgroundColor: '#3C3C3C'
    },
    brandContainer: {
        height: 200,
        justifyContent: 'center',
        alignItems: 'center',
    },
    navigation: {
        shadowColor: '#000',
        shadowOffset: { width: 3, height: 0 },
        shadowOpacity: 1,
        shadowRadius: 5,
        elevation: 10,
    },
    drawerActive: {

    },
    drawerInActive: {

    }
});