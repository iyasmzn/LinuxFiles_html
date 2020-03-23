import React, { Component } from 'react';
import {
	View,
	Text,
	StyleSheet
} from 'react-native';

class	App extends Component {
	render() {
		return (
				<View style={gaya.container}>
					{/*<Text style={gaya.text1}>He Mamankk!</Text>
					<Text style={{color: 'yellow', fontSize: 20}}></Text>*/}
					<View style={{flex: 1, backgroundColor: 'aqua'}}></View>
					<View style={{flex: 2}}></View>
					<View style={{flex: 3, backgroundColor: 'yellow'}}></View>
				</View>
			)
	}
}

export default App;

const gaya = StyleSheet.create({
	container: {
		flex: 1,
		backgroundColor: 'tomato',
	},
	text1: {
		textAlign: 'center',
		color: 'white',
		fontSize: 60,
		textTransform: 'uppercase',
		fontWeight: 'bold',
	}
});