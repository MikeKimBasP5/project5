import { NavigationContainer } from '@react-navigation/native';
import { StyleSheet, Text, View, Button, Linking } from 'react-native';

const App = () => {
  return (
    <View style={styles.container}>
      <Text style={styles.header}>Settings</Text>
        <Text style={styles.btn} onPress={() => { navigation.navigate("web") }}>Login</Text>
      <Text></Text>
      <Text style={styles.btn}>Nederlands</Text>
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
      flex: 1,
      backgroundColor: '#e9f7f7',
      alignItems: 'center',
  },
  header:{
      marginTop: 50,
      fontSize: 40,
      color: 'black',
  },  
  text:{
      top: '5%',
      textAlign: 'center',
      color: 'black',
      fontSize: 30,
  },  
  btn: {
    top: '30%',
    textAlign: 'center',
    color: 'black',
    backgroundColor: '#BBC7CE',
    borderRadius: 30,
    padding: 5,
    width: 250,
    fontSize: 30,
  }
});

export default App;