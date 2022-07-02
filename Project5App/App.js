import { StyleSheet, Text, View, Button } from 'react-native';
import { NavigationContainer,NavigationActions, StackActions, DefaultTheme } from '@react-navigation/native';
import AppEN from './compontent/AppEN';
import AppNL from './compontent/AppNL';
import { createNativeStackNavigator } from '@react-navigation/native-stack';


const Stack = createNativeStackNavigator();
function HomeScreen({ navigation }) {
  return (
    <View style={styles.container}>
      <Text style={styles.header}>Home</Text>
      <Text style={styles.text}>Kies taal</Text>
      <Text style={styles.text}>Select language</Text>
<Text onPress={() => {navigation.navigate('NL');}} style={styles.btn}>Nederlands</Text>
<Text></Text>
           <Text onPress={() => {navigation.navigate('EN');}} style={styles.btn}>English</Text>

    </View>
  );
}

const App = (navigation) => {
  return (


  <NavigationContainer >
        <Stack.Navigator
        initialRouteName="Home">
          <Stack.Screen name="Home" component={HomeScreen} />
          <Stack.Screen name="EN" component={AppEN} />
          <Stack.Screen name="NL" component={AppNL} />
        </Stack.Navigator>
      </NavigationContainer>
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
const MyTheme = {
  ...DefaultTheme,
  colors: {
    ...DefaultTheme.colors,
    primary: '#bfedef',
  },
};
export default App;