import React, { Component } from 'react';
import {
	View,
	Text,
	Image,
	Alert,
	Button,
	Platform,
	StatusBar,
	StyleSheet
} from 'react-native';

class App extends Component {

	PressButton() {
		Alert.alert('You pressed the Button!')
	}

	render() {
		return (
			<View style={{flex: 1, backgroundColor: '#fff', paddingTop: StatusBar.currentHeight || 0}}>
				<StatusBar barStyle="light-content" />

				{/* HEADER */}
				<View style={styles.header}>
					<View>
						<Text style={styles.title}>HEADer</Text>					
					</View>
					<View>
						<Text style={styles.title}></Text>					
					</View>
					<View>
						<Button
							title= "Contact Us"
							onPress={this.PressButton}
						/>
					</View>
				</View>

				{/* CONTENT */}
				<View style={{flex: 1}}>
					<View style={styles.content}>
						<Image
						  style={{width: '80%', height: '80%', marginBottom: 20, alignSelf: 'center'}}
						  source={{uri: 'http://bit.ly/38XwYIP'}}
						/>
					</View>
				</View>

				{/* FOOTER */}
				<View style={styles.footer}>
					<Text style={styles.footerText}>This is Footer</Text>
				</View>
			</View>
		)
	}
}
export default App;

const styles = StyleSheet.create({
	header: {
		height: 60,
		flexDirection: 'row',
		backgroundColor: 'skyblue',
		paddingHorizontal: 20,
		justifyContent: 'space-between',
		borderBottomWidth: 2,
		borderBottomColor: '#eee',
		alignItems: 'center',
	},
	title: {
		fontSize: 20,
		fontWeight: 'bold',
		color: 'white',
		alignSelf: 'center',
	},
	content: {
		backgroundColor: 'white',
	},
	footer: {
		bottom: 0,
		height: 50,
		borderTopWidth: 2,
		borderTopColor: '#eee',
		alignItems: 'center',
		justifyContent: 'center',
		flexDirection: 'row',
		backgroundColor: 'skyblue',
	},
	footerText: {
		color: 'white',
	},
});