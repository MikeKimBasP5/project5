import { StyleSheet, Text, View } from 'react-native';

const App = () => {
  return (
    <View style={styles.container}>
      <Text style={styles.header}>Oefeningen</Text>
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
      flex: 1,
      backgroundColor: 'white',
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
});

export default App;