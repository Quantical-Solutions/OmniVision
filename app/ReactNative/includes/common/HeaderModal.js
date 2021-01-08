import React, {Component} from 'react';
import { Modal, Text, TouchableHighlight, View, StyleSheet } from 'react-native';
import DotsIcon from "../../assets/svgs-collection/dots.svg";

let headerHeight = 0;

export default class ModalComponent extends Component {

    constructor(props) {

        super(props);
        this.isPress = false;
        this.state = {
            modalVisible: false
        };
        this.paramsTouch = {
            activeOpacity: 1,
            underlayColor: '#F1F1F1',
            style: this.isPress ? styles.paramsPress : styles.paramsNormal,
            onHideUnderlay: () => this.isPress = false,
            onShowUnderlay: () => this.isPress = true,
            onPress: () => {
                if (this.state.modalVisible === false) {
                    this.state.modalVisible = true;
                } else {
                    this.state.modalVisible = false;
                }
                this.setModalVisible(this.state.modalVisible)
            },
        };
        headerHeight = props.height - 20;
    }

    setModalVisible(visible) {
        this.setState({modalVisible: visible});
    }

    render() {

        return (
            <View>
                <Modal
                    animationType="fade"
                    transparent={true}
                    visible={this.state.modalVisible}>
                    <View style={styles.modalView}>
                        <View style={styles.modalDivision}>
                            <Text style={styles.settings}>Settings</Text>
                            <TouchableHighlight {...this.paramsTouch}>
                                <DotsIcon
                                    style={styles.dotsIcon}
                                />
                            </TouchableHighlight>
                        </View>
                        <View style={styles.modalSubDivision}>

                        </View>
                    </View>
                </Modal>

                <TouchableHighlight {...this.paramsTouch}>
                    <DotsIcon
                        style={styles.dotsIcon}
                    />
                </TouchableHighlight>
            </View>
        );
    }
};

const styles = StyleSheet.create({
    dotsIcon: {
        width: 30,
        height: 30,
    },
    paramsNormal: {
        borderRadius: 1000,
        height: 30,
        width: 30,
        padding: 5,
        marginTop: 5,
        backgroundColor: 'white',
    },
    paramsPress: {
        borderRadius: 1000,
        height: 30,
        width: 30,
        padding: 5,
        marginTop: 5,
        backgroundColor: 'white',
    },
    modalView: {
        minHeight: headerHeight,
        marginTop: 10,
        backgroundColor: '#3C3C3C',
        width: '96%',
        marginLeft: '2%',
        marginRight: '2%',
        paddingTop: 10,
        paddingLeft: 10,
        paddingBottom: 10,
        paddingRight: 13,
        borderRadius: 5,
        shadowColor: '#000',
        shadowOffset: { width: 0, height: 3 },
        shadowOpacity: 0.5,
        shadowRadius: 5,
        elevation: 5,
    },
    modalContainer: {
        flex: 1,
        backgroundColor: 'transparent',
        flexDirection: 'column',
        justifyContent: 'flex-start',
        alignItems: 'center'
    },
    settings: {
        fontSize: 18,
        fontWeight: 'bold',
        color: '#FFF',
    },
    modalDivision: {
        justifyContent: 'space-between',
        alignItems: 'center',
        flexDirection: 'row'
    },
    modalSubDivision: {

    }
});